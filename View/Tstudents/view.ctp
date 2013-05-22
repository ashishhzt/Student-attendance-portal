<div class="tStudents view">
<h2><?php  echo __('T Student'); ?></h2>
  <dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tStudent['TStudent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tStudent['TStudent']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($tStudent['TStudent']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit T Student'), array('action' => 'edit', $tStudent['TStudent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete T Student'), array('action' => 'delete', $tStudent['TStudent']['id']), null, __('Are you sure you want to delete # %s?', $tStudent['TStudent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List T Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T Attendances'), array('controller' => 't_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T Attendance'), array('controller' => 't_attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related T Attendances'); ?></h3>
	<?php if (!empty($tStudent['TAttendance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('T Student Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tStudent['TAttendance'] as $tAttendance): ?>
		<tr>
			<td><?php echo $tAttendance['id']; ?></td>
			<td><?php echo $tAttendance['t_student_id']; ?></td>
			<td><?php echo $tAttendance['date']; ?></td>
			<td><?php echo $tAttendance['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 't_attendances', 'action' => 'view', $tAttendance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 't_attendances', 'action' => 'edit', $tAttendance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 't_attendances', 'action' => 'delete', $tAttendance['id']), null, __('Are you sure you want to delete # %s?', $tAttendance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New T Attendance'), array('controller' => 't_attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
