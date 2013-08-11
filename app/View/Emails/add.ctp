<div class="emails form">
<?php echo $this->Form->create('Email'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Email'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('assunto');
		echo $this->Form->input('mensagem');
		echo $this->Form->input('remetente');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Emails'), array('action' => 'index')); ?></li>
	</ul>
</div>
