<div class="avisos view">
<h2><?php echo __('Aviso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aviso['Aviso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($aviso['Aviso']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aviso'); ?></dt>
		<dd>
			<?php echo h($aviso['Aviso']['aviso']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aviso'), array('action' => 'edit', $aviso['Aviso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aviso'), array('action' => 'delete', $aviso['Aviso']['id']), null, __('Are you sure you want to delete # %s?', $aviso['Aviso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Avisos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Aviso'), array('action' => 'add')); ?> </li>
	</ul>
</div>
