<div class="emails form">
<?php echo $this->Form->create('Email'); ?>
	<fieldset>
		<legend><?php echo __('Edit Email'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $this->Form->value('Email.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Email.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Emails'), array('action' => 'index')); ?></li>
	</ul>
</div>
