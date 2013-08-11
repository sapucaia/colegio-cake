<div class="videos form">
<?php echo $this->Form->create('Video'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Video'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Videos'), array('action' => 'index')); ?></li>
	</ul>
</div>
