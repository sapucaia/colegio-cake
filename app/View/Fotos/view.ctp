<div class="fotos view">
<h2><?php echo __('Foto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafoto'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['datafoto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['thumbnail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Galeria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foto['Galeria']['nomegaleria'], array('controller' => 'galeria', 'action' => 'view', $foto['Galeria']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Foto'), array('action' => 'edit', $foto['Foto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Foto'), array('action' => 'delete', $foto['Foto']['id']), null, __('Are you sure you want to delete # %s?', $foto['Foto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Foto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Galeria'), array('controller' => 'galeria', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Galeria'), array('controller' => 'galeria', 'action' => 'add')); ?> </li>
	</ul>
</div>
