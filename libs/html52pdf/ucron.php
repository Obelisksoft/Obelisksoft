<?php 
$dir = __DIR__ . DIRECTORY_SEPARATOR . 'csv';
$fileCount = 0;
$daemonTimer = 10000;
//read the config file
$config = parse_ini_file( 'config.ini', true);
$os = strtoupper($config['soffice']['os']);
$path = $config['soffice']['path'];
$pathArray = explode(DIRECTORY_SEPARATOR, $path);
$dirs = count($pathArray);


$invisible = ' --headless';
$invisible .= ' --nolockcheck';
$invisible .= ' --nodefault';
$invisible .= ' --nologo';
$invisible .= ' --norestore';
$invisible .= ' --nofirststartwizard';

if ($os == "WINDOWS") {
    //build the command
    $base = 'cd \\ && ';
    for ($j = 1; $j < $dirs - 1; $j++) {
        $base .= 'cd "' . $pathArray[$j] . '" ';
        $base .= '&& ';
    }
    //if we do not use the start parameter we may crash libreoffice
    //due to a known bug
    $cli = $base . 'start ' . $pathArray[$dirs-1] . $invisible;
} else {
    //build the command
    $cli = 'cd ';
    for ($j = 1; $j < $dirs - 1; $j++) {
        $cli .= DIRECTORY_SEPARATOR . $pathArray[$j];
    }
    $cli .= ' & ' . $pathArray[$dirs-1]. $invisible;
    echo $cli."<br>";
    $tales=exec($cli . ' > /dev/null &' . $invisible, $start);
    echo $tales;
}

while(true) {
    usleep($daemonTimer);
    $files = glob($dir . '/*.csv');
    $newCount = count($files);
    if ($newCount > 0 && $newCount >= $fileCount) {
        $rendered = renderDoc($files[0], $cli, $os);
        $unlink = unlink($files[0]);
        if ($unlink === false) {
            //There is a problem unlinking files so we should try again
            //and leave because otherwise the script may crash the server
            usleep(100000);
            if (unlink($files[0]) === false) {
                exit();
            }
        }
        $fileCount = $newCount -1;
    }
}

function renderDoc($file, $cli, $os) {
    //let it breath to avoid conflicts
    usleep(1000);
    echo "psa por estos lados";
    //open file and read command
    $tmp = fopen($file, 'r');
    $data = fread($tmp, 1000);
    $info = explode('|', $data);
    $path = $info[0];
    $ext = $info[1];
    if (!empty($data)) {
        $cmd = $cli . ' "macro:///Html52pdf.Html52pdf.Render(' . $data . ')"';
        exec($cmd, $res);
    }
    //rename the generated files
    $newPath = preg_replace('/(_h5p_[a-z0-9]*)$/', '', $path);
    if ($ext == 'ODT' || $ext == 'DOC') {
        unlink($path . '.' . strtolower($ext));
        rename($path . '_new.' . strtolower($ext),  $newPath . '.' . strtolower($ext));
    } else {
        unlink($path . '.odt');
        rename($path . '.' . strtolower($ext),  $newPath . '.' . strtolower($ext));
    }
    //back to the infinite loop
}
