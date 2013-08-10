<div class="noticia index">
	<h2><?php echo __('Noticia'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('datanoticia'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('noticia'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($noticia as $noticium): ?>
	<tr>
		<td><?php echo h($noticium['Noticium']['id']); ?>&nbsp;</td>
		<td><?php echo h($noticium['Noticium']['datanoticia']); ?>&nbsp;</td>
		<td><?php echo h($noticium['Noticium']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($noticium['Noticium']['noticia']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $noticium['Noticium']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $noticium['Noticium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $noticium['Noticium']['id']), null, __('Are you sure you want to delete # %s?', $noticium['Noticium']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Noticium'), array('action' => 'add')); ?></li>
	</ul>
</div>
