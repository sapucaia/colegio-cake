<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nomecompleto'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nomecompleto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datacad'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['datacad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipousuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['tipousuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimoacesso'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ultimoacesso']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Usuario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
