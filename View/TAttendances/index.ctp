<b><i>Please select date after of 2013 May 19.</i></b>
<table>
<tr><td>
<?php echo $this->Form->create('TAttendance', array('action' => 'present'));?>
<label for='user_date'>Select Date</label>
<?php
  echo $this->Form->year('cy', date('Y') - 10, date('Y'), array('empty' => "yyyy"));
	echo $this->Form->month('cm',array('empty' => 'mm'));
	echo $this->Form->day('cd',array('empty' => 'dd'));
	echo $this->Form->end('List of Presented Students');
 ?>
 
 </td><td>
 <?php echo $this->Form->create('TAttendance', array('action' => 'absent'));?>
<label for='user_date'>Select Date</label>
<?php
	echo $this->Form->year('cy',date('Y') - 10, date('Y'), array('empty' => "yyyy"));
	echo $this->Form->month('cm',array('empty' => 'mm'));
	echo $this->Form->day('cd',array('empty' => 'dd'));
	echo $this->Form->end('List of Absent Students');
 ?>
 </td></tr></table>
 
 
 <div>
 <h3>Instructions and Steps:</h3>
 <ul>
 <li>There are two tables in our database :- (!) t_students  has these colums => id, name, email. and 
	(!!) t_attendances which has these cols => id, t_student_id , date, status. status shows student is present or not. </li>
 <li>First enter the name, email-id of students in t_students table. 
	<?php echo $this->Html->link('ADD NEW STUDENT DATA ', array('controller' => 't_students', 'action' => 'add')); ?>

 </li>
 <li>Make attendance of student daily . 
	<?php echo $this->Html->link('ADD STUDENT DAILY ATTENDANCE ', array('controller' => 't_attendances', 'action' => 'add')); ?>
 </li>
 
 </ul>
 </div>
