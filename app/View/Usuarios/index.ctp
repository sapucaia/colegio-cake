<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nomecompleto'); ?></th>
			<th><?php echo $this->Paginator->sort('login'); ?></th>
			<th><?php echo $this->Paginator->sort('senha'); ?></th>
			<th><?php echo $this->Paginator->sort('datacad'); ?></th>
			<th><?php echo $this->Paginator->sort('tipousuario'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimoacesso'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['nomecompleto']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['login']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['senha']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['datacad']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['tipousuario']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['ultimoacesso']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Remover'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Usuario'), array('action' => 'add')); ?></li>
	</ul>
</div>
