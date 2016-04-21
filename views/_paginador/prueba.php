
<div class="text-center">
<ul class="pagination">
<?php if(isset($this->_paginacion)): ?>

	<?php if($this->_paginacion['primero']): ?>
		
		<li><a href="<?php echo $link . $this->_paginacion['primero']; ?>">First</a></li>
		
	<?php else: ?>
		
		<li class="previous disabled"><a href="#"></a></li>

	<?php endif; ?>

&nbsp;

	<?php if($this->_paginacion['anterior']): ?>
		
		<li><a href="<?php echo $link . $this->_paginacion['anterior']; ?>">Previous</a></li>
		
	<?php else: ?>
		
		<li class="previous disabled"><a href="#">Previous</a></li>

	<?php endif; ?>

&nbsp;

	<?php for($i = 0; $i < count($this->_paginacion['rango']); $i++): ?>
		
		<?php if($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]): ?>
		
			<!--<li><a href="<?php //echo $this->_paginacion['rango'][$i]; ?>"></li>-->
		
		<?php else: ?>
			
			<li><a href="<?php echo $link . $this->_paginacion['rango'][$i]; ?>">
				<?php echo $this->_paginacion['rango'][$i]; ?>
			</a></li>&nbsp;
		
		<?php endif; ?>
		
	<?php endfor; ?>


&nbsp;

	<?php if($this->_paginacion['siguiente']): ?>
		
		<li><a href="<?php echo $link . $this->_paginacion['siguiente']; ?>">Next</a></li>
		
	<?php else: ?>
		
		<li class="previous disabled"><a href="#">Next</a></li>

	<?php endif; ?>

&nbsp;

	<?php if($this->_paginacion['ultimo']): ?>
	
		<li><a href="<?php echo $link . $this->_paginacion['ultimo']; ?>">End</a></li>
	
	<?php else: ?>
		
		<li class="previous disabled"><a href="#">End</a></li>

	<?php endif; ?>
	
<?php endif; ?>
</ul>
</div>