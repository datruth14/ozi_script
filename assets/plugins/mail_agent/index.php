<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

                            //Load Composer's autoloader
                             require 'vendor/autoload.php';

                           //configuring the default message and receiver
                           //$title = "Ozi Script";
                           //$email = "14eter@gmail.com";
                           //$shortDes = "Testing mailing agent";
                           //$sms = "Congratulations, you have joined the number one business network. <br> Click below to confirm your email address. <a href='https://ops.com.ng'> Confirm </a>";
                           
                           
                           //enabling email notification
                           
                           //creating a mailing agent
                           function 
                           sendMailTo($title='Ozi Scripting',$recievers= ['14eter@gmail.com','opiwsystem@gmail.com'],$subject='Testing mailing agent',$message='Change this text to your message and the email above to your tageted user',$responseSms='<script>alert("Email has been sent")</script>'){
                          
                           //Create an instance; passing `true` enables exceptions
                           $mail = new PHPMailer(true);
                               
                               try {
                                //Server settings
                                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                $mail->isSMTP();                                            //Send using SMTP
                                $mail->Host       = 'mail.ops.com.ng';                 //Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                $mail->Username   = 'support@ops.com.ng';                  //SMTP username
                                $mail->Password   = '.Adgjmptw14';                              //SMTP password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                                $mail->Port       = 26;                                      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                            
                                
                                //Recipients
                                $mail->setFrom('support@ops.com.ng', $title);
                                //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient

                               
                                //exploding the mail
                                $addr = explode(',',$recievers);
                                //assigning emails
                                foreach ($addr as $ad) {
                                    $mail->addAddress(trim($ad)); 
                                }

                                
                                $mail->addReplyTo('support@ops.com.ng');
                                //$mail->addCC('cc@example.com');
                                //$mail->addBCC('bcc@example.com');
                            
                                //Attachments
                                //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                            
                                //Content
                                $mail->isHTML(true);                                  //Set email format to HTML
                                $mail->Subject = $subject;
                                $mail->Body    = $message;
                                
                        
                                $mail->AltBody = $message;
                            
                                $mail->send();
                                
                                //response alert will be here
                                echo $responseSms;
                            
                                } catch (Exception $e) {
                                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                }
                                
                           }
                           
                           
                           
//echo phpinfo();