<div class="galeria index">
	<h2><?php echo __('Galeria'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nomegaleria'); ?></th>
			<th><?php echo $this->Paginator->sort('datagaleria'); ?></th>
			<th><?php echo $this->Paginator->sort('capa'); ?></th>
			<th><?php echo $this->Paginator->sort('capa_foto_id'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($galeria as $galerium): ?>
	<tr>
		<td><?php echo h($galerium['Galerium']['id']); ?>&nbsp;</td>
		<td><?php echo h($galerium['Galerium']['nomegaleria']); ?>&nbsp;</td>
		<td><?php echo h($galerium['Galerium']['datagaleria']); ?>&nbsp;</td>
		<td><?php echo h($galerium['Galerium']['capa']); ?>&nbsp;</td>
		<td><?php echo h($galerium['Galerium']['capa_foto_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $galerium['Galerium']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $galerium['Galerium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $galerium['Galerium']['id']), null, __('Are you sure you want to delete # %s?', $galerium['Galerium']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nova Galeria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Fotos'), array('controller' => 'fotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Foto'), array('controller' => 'fotos', 'action' => 'add')); ?> </li>
	</ul>
</div>
