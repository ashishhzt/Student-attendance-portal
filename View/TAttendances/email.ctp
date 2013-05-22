<?php
  				//send email
					$this->Email->to = $tAttendance['TStudent']['name'] . " <" . $tAttendance['TStudent']['email'] . ">";
					$this->Email->subject = 'Student absent today';
					$this->Email->replyTo = Configure::read('Email.DoNotReply.emailid');
					$this->Email->from = Configure::read('Email.DoNotReply.name') . " <" . Configure::read('Email.DoNotReply.emailid') . ">";
					$this->Email->template = 'absent_mail';
					$this->Email->sendAs = 'both'; // because we like to send pretty mail
				//	$this->Email->delivery = 'smtp';
					/* SMTP Options */
				/*	$this->Email->smtpOptions = array(
					        'port'=> Configure::read('Email.SMTP.port'), 
					        'timeout'=> Configure::read('Email.SMTP.timeout'), 
					        'host' => Configure::read('Email.SMTP.host'), 
					        'username'=> Configure::read('Email.SMTP.username'), 
					        'password'=> Configure::read('Email.SMTP.password'),  
					);
					//Do not pass any args to send()
				*/	$this->Email->send();
					$this->redirect(array('controller' => 'm_people', 'action'=>'index'));
				} else {
					$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
				}
?>
