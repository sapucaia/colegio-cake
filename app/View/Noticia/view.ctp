<div class="noticia view">
<h2><?php echo __('Noticium'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($noticium['Noticium']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datanoticia'); ?></dt>
		<dd>
			<?php echo h($noticium['Noticium']['datanoticia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($noticium['Noticium']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noticia'); ?></dt>
		<dd>
			<?php echo h($noticium['Noticium']['noticia']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Noticium'), array('action' => 'edit', $noticium['Noticium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Noticium'), array('action' => 'delete', $noticium['Noticium']['id']), null, __('Are you sure you want to delete # %s?', $noticium['Noticium']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Noticia'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Noticium'), array('action' => 'add')); ?> </li>
	</ul>
</div>
