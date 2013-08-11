<div class="recados view">
<h2><?php echo __('Recado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recado['Recado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remetente'); ?></dt>
		<dd>
			<?php echo h($recado['Recado']['remetente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destinatario'); ?></dt>
		<dd>
			<?php echo h($recado['Recado']['destinatario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datahora'); ?></dt>
		<dd>
			<?php echo h($recado['Recado']['datahora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensagem'); ?></dt>
		<dd>
			<?php echo h($recado['Recado']['mensagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($recado['Recado']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recado'), array('action' => 'edit', $recado['Recado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recado'), array('action' => 'delete', $recado['Recado']['id']), null, __('Are you sure you want to delete # %s?', $recado['Recado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Recados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Recado'), array('action' => 'add')); ?> </li>
	</ul>
</div>
