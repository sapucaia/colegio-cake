<div class="avisos form">
<?php echo $this->Form->create('Aviso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Aviso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('data');
		echo $this->Form->input('aviso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aviso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aviso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Avisos'), array('action' => 'index')); ?></li>
	</ul>
</div>
