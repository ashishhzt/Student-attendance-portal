<div class="tStudents index">
  <h2><?php echo __('T Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($tStudents as $tStudent): ?>
	<tr>
		<td><?php echo h($tStudent['TStudent']['id']); ?>&nbsp;</td>
		<td><?php echo h($tStudent['TStudent']['name']); ?>&nbsp;</td>
		<td><?php echo h($tStudent['TStudent']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tStudent['TStudent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tStudent['TStudent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tStudent['TStudent']['id']), null, __('Are you sure you want to delete # %s?', $tStudent['TStudent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New T Student'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List T Attendances'), array('controller' => 't_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T Attendance'), array('controller' => 't_attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
