<div class="fotos index">
	<h2><?php echo __('Fotos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('datafoto'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail'); ?></th>
			<th><?php echo $this->Paginator->sort('galeria_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fotos as $foto): ?>
	<tr>
		<td><?php echo h($foto['Foto']['id']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['nome']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['url']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['datafoto']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($foto['Foto']['thumbnail']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($foto['Galeria']['nomegaleria'], array('controller' => 'galeria', 'action' => 'view', $foto['Galeria']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $foto['Foto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $foto['Foto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $foto['Foto']['id']), null, __('Are you sure you want to delete # %s?', $foto['Foto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Foto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Galeria'), array('controller' => 'galeria', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galeria'), array('controller' => 'galeria', 'action' => 'add')); ?> </li>
	</ul>
</div>
