<div class="noticia form">
<?php echo $this->Form->create('Noticium'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Noticium'); ?></legend>
	<?php
		echo $this->Form->input('datanoticia');
		echo $this->Form->input('titulo');
		echo $this->Form->input('noticia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Noticia'), array('action' => 'index')); ?></li>
	</ul>
</div>
