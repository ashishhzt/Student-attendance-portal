<div class="tAttendances view">
<h2><?php  echo __('T Attendance'); ?></h2>
  <dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tAttendance['TAttendance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('T Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tAttendance['TStudent']['name'], array('controller' => 't_students', 'action' => 'view', $tAttendance['TStudent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($tAttendance['TAttendance']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($tAttendance['TAttendance']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit T Attendance'), array('action' => 'edit', $tAttendance['TAttendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete T Attendance'), array('action' => 'delete', $tAttendance['TAttendance']['id']), null, __('Are you sure you want to delete # %s?', $tAttendance['TAttendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List T Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T Attendance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T Students'), array('controller' => 't_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T Student'), array('controller' => 't_students', 'action' => 'add')); ?> </li>
	</ul>
</div>
