<div class="tStudents form">
<?php echo $this->Form->create('TStudent'); ?>
  <fieldset>
		<legend><?php echo __('Add T Student'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List T Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List T Attendances'), array('controller' => 't_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T Attendance'), array('controller' => 't_attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
