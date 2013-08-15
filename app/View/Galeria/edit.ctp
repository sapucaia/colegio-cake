<div class="galeria form">
<?php echo $this->Form->create('Galerium'); ?>
	<fieldset>
		<legend><?php echo __('Edit Galerium'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nomegaleria');
		echo $this->Form->input('datagaleria');
		echo $this->Form->input('capa');
		echo $this->Form->input('capa_foto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Galerium.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Galerium.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Galeria'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fotos'), array('controller' => 'fotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foto'), array('controller' => 'fotos', 'action' => 'add')); ?> </li>
	</ul>
</div>
