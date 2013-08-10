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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aviso'), array('action' => 'edit', $aviso['Aviso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aviso'), array('action' => 'delete', $aviso['Aviso']['id']), null, __('Are you sure you want to delete # %s?', $aviso['Aviso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Avisos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aviso'), array('action' => 'add')); ?> </li>
	</ul>
</div>
