<div class="tAttendances form">
<?php echo $this->Form->create('TAttendance'); ?>
  <fieldset>
		<legend><?php echo __('Edit T Attendance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('t_student_id');
		echo $this->Form->input('date');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TAttendance.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TAttendance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List T Attendances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List T Students'), array('controller' => 't_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T Student'), array('controller' => 't_students', 'action' => 'add')); ?> </li>
	</ul>
</div>
