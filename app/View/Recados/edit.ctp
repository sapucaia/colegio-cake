<div class="recados form">
<?php echo $this->Form->create('Recado'); ?>
	<fieldset>
		<legend><?php echo __('Edit Recado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('remetente');
		echo $this->Form->input('destinatario');
		echo $this->Form->input('datahora');
		echo $this->Form->input('mensagem');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $this->Form->value('Recado.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Recado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Recados'), array('action' => 'index')); ?></li>
	</ul>
</div>
