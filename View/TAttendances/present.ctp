<?php if($tAttendances){?>
<div class="tAttendances index">
  <h2><?php echo __('List of Present students on selected date '); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('t_student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php //echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	//var_dump($tAttendances);
	foreach ($tAttendances as $tAttendance): ?>
	<tr>
		<td><?php echo h($tAttendance['TAttendance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tAttendance['TStudent']['name'], array('controller' => 't_students', 'action' => 'view', $tAttendance['TStudent']['id'])); ?>
		</td>
		<td><?php echo h($tAttendance['TStudent']['email']); ?>&nbsp;</td>
		
		<td><?php echo h($tAttendance['TAttendance']['date']); ?>&nbsp;</td>
		<td><?php// echo h($tAttendance['TAttendance']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tAttendance['TAttendance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tAttendance['TAttendance']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New T Attendance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List T Students'), array('controller' => 't_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T Student'), array('controller' => 't_students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php } else echo '<h2>Sorry No data available.</h2>'?>
