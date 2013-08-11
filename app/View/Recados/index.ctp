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
			<th class="actions"><?php echo __('Ações'); ?></th>
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
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $recado['Recado']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $recado['Recado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $recado['Recado']['id']), null, __('Are you sure you want to delete # %s?', $recado['Recado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Recado'), array('action' => 'add')); ?></li>
	</ul>
</div>
