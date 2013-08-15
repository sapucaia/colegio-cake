<div class="avisos form">
<?php echo $this->Form->create('Aviso'); ?>
	<fieldset>
		<legend><?php echo __('Add Aviso'); ?></legend>
	<?php
		echo $this->Form->input('data');
		echo $this->Form->input('aviso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Avisos'), array('action' => 'index')); ?></li>
	</ul>
</div>
