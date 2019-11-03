<?php

    namespace  app\src; 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class Mail{

        public function send(){

            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 2;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = '6401db3561a16b';                     // SMTP username
                $mail->Password   = 'c2939937410258';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 465;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('from@example.com', 'Mailer');
                $mail->addAddress('joe@example.net', 'Joe User');
        

                // Attachments
                       // Add attachments
                   // Optional name

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        }
    }