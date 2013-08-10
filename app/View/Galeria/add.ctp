<div class="galeria form">
<?php echo $this->Form->create('Galerium'); ?>
	<fieldset>
		<legend><?php echo __('Add Galerium'); ?></legend>
	<?php
		echo $this->Form->input('nomegaleria');
		echo $this->Form->input('datagaleria');
		echo $this->Form->input('capa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Galeria'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fotos'), array('controller' => 'fotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foto'), array('controller' => 'fotos', 'action' => 'add')); ?> </li>
	</ul>
</div>
