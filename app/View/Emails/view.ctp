<div class="emails view">
<h2><?php echo __('Email'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($email['Email']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($email['Email']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assunto'); ?></dt>
		<dd>
			<?php echo h($email['Email']['assunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensagem'); ?></dt>
		<dd>
			<?php echo h($email['Email']['mensagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remetente'); ?></dt>
		<dd>
			<?php echo h($email['Email']['remetente']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Email'), array('action' => 'edit', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Email'), array('action' => 'delete', $email['Email']['id']), null, __('Are you sure you want to delete # %s?', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Emails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Email'), array('action' => 'add')); ?> </li>
	</ul>
</div>
