<div class="recados form">
<?php echo $this->Form->create('Recado'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Recado'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('Listar Recados'), array('action' => 'index')); ?></li>
	</ul>
</div>
