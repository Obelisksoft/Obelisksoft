<h2>Administracion de roles</h2>

{if isset($roles) && count($roles)}
    <table>
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th></th>
            <th></th>
        </tr>
        {foreach item=rl from=$roles}
            <tr>
                <td>{$rl.id_rol}</td>
                <td> {$rl.rol}</td>
                <td>
                    <a href="{$_layoutParams.root}acl/permisos_role/{$rl.id_rol}">Permisos</a>
                </td>
                <td>Editar</td>
            </tr>
        {/foreach}
    </table>
{/if}

<p><a href="{$_layoutParams.root}acl/newRol/">Agregar Role</a></p>