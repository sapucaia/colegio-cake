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
			<th class="actions"><?php echo __('Ações'); ?></th>
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
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $foto['Foto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $foto['Foto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $foto['Foto']['id']), null, __('Are you sure you want to delete # %s?', $foto['Foto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nova Foto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Galerias'), array('controller' => 'galeria', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Galeria'), array('controller' => 'galeria', 'action' => 'add')); ?> </li>
	</ul>
</div>
