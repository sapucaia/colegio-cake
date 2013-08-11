<div class="galeria view">
<h2><?php echo __('Galerium'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($galerium['Galerium']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nomegaleria'); ?></dt>
		<dd>
			<?php echo h($galerium['Galerium']['nomegaleria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datagaleria'); ?></dt>
		<dd>
			<?php echo h($galerium['Galerium']['datagaleria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capa'); ?></dt>
		<dd>
			<?php echo h($galerium['Galerium']['capa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capa Foto Id'); ?></dt>
		<dd>
			<?php echo h($galerium['Galerium']['capa_foto_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Galerium'), array('action' => 'edit', $galerium['Galerium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Galerium'), array('action' => 'delete', $galerium['Galerium']['id']), null, __('Are you sure you want to delete # %s?', $galerium['Galerium']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Galeria'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Galerium'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fotos'), array('controller' => 'fotos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Foto'), array('controller' => 'fotos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Fotos'); ?></h3>
	<?php if (!empty($galerium['Foto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Datafoto'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Thumbnail'); ?></th>
		<th><?php echo __('Galeria Id'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($galerium['Foto'] as $foto): ?>
		<tr>
			<td><?php echo $foto['id']; ?></td>
			<td><?php echo $foto['nome']; ?></td>
			<td><?php echo $foto['url']; ?></td>
			<td><?php echo $foto['datafoto']; ?></td>
			<td><?php echo $foto['descricao']; ?></td>
			<td><?php echo $foto['thumbnail']; ?></td>
			<td><?php echo $foto['galeria_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'fotos', 'action' => 'view', $foto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'fotos', 'action' => 'edit', $foto['id'])); ?>
				<?php echo $this->Form->postLink(__('Remover'), array('controller' => 'fotos', 'action' => 'delete', $foto['id']), null, __('Are you sure you want to delete # %s?', $foto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Foto'), array('controller' => 'fotos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
