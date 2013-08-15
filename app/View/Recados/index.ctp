<div class="recados index">
	<h2><?php echo __('Recados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('remetente'); ?></th>
			<th><?php echo $this->Paginator->sort('destinatario'); ?></th>
			<th><?php echo $this->Paginator->sort('datahora'); ?></th>
			<th><?php echo $this->Paginator->sort('mensagem'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recados as $recado): ?>
	<tr>
		<td><?php echo h($recado['Recado']['id']); ?>&nbsp;</td>
		<td><?php echo h($recado['Recado']['remetente']); ?>&nbsp;</td>
		<td><?php echo h($recado['Recado']['destinatario']); ?>&nbsp;</td>
		<td><?php echo h($recado['Recado']['datahora']); ?>&nbsp;</td>
		<td><?php echo h($recado['Recado']['mensagem']); ?>&nbsp;</td>
		<td><?php echo h($recado['Recado']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recado['Recado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recado['Recado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recado['Recado']['id']), null, __('Are you sure you want to delete # %s?', $recado['Recado']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Recado'), array('action' => 'add')); ?></li>
	</ul>
</div>
