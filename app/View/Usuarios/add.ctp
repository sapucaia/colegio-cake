<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nomecompleto');
		echo $this->Form->input('login');
		echo $this->Form->input('senha');
		echo $this->Form->input('datacad');
		echo $this->Form->input('tipousuario');
		echo $this->Form->input('ultimoacesso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
