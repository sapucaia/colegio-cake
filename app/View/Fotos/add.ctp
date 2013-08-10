<div class="fotos form">
<?php echo $this->Form->create('Foto'); ?>
	<fieldset>
		<legend><?php echo __('Add Foto'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('url');
		echo $this->Form->input('datafoto');
		echo $this->Form->input('descricao');
		echo $this->Form->input('thumbnail');
		echo $this->Form->input('galeria_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fotos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Galeria'), array('controller' => 'galeria', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galeria'), array('controller' => 'galeria', 'action' => 'add')); ?> </li>
	</ul>
</div>
