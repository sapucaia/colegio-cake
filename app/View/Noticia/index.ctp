<div class="noticia index">
	<h2><?php echo __('Noticia'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('datanoticia'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('noticia'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($noticia as $noticium): ?>
	<tr>
		<td><?php echo h($noticium['Noticium']['id']); ?>&nbsp;</td>
		<td><?php echo h($noticium['Noticium']['datanoticia']); ?>&nbsp;</td>
		<td><?php echo h($noticium['Noticium']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($noticium['Noticium']['noticia']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $noticium['Noticium']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $noticium['Noticium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $noticium['Noticium']['id']), null, __('Are you sure you want to delete # %s?', $noticium['Noticium']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} resultado(s) num total de {:count}, começando no resultado {:start}, terminado em {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nova Noticia'), array('action' => 'add')); ?></li>
	</ul>
</div>
