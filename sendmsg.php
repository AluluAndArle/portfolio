<?php
    require 'vendor/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    

    if(isset($_POST["send"])){
        $mail = new PHPMailer(true);
    
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true ;
        $mail->Username = 'imperialys3@gmail.com'; //Votre adresse gmail
        $mail->Password = ''; //Votre app password(mot de passe)
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('imperialys3@gmail.com'); //Votre adresse gmail

        $mail->addAddress($_POST["email"]); //Adresse de l'expéditeur

        $mail->isHTML(true);

        $mail->Subject = $_POST["subject"]; //Sujet du message
        $mail->Body = $_POST["message"]; //Message

        $mail->send();

        echo
        "
        <script>
        alert('Votre a été envoyé avec succès!');
        document.location.href = 'index.php';
        </script>
        ";

    //     {
    //     echo "Votre a été envoyé avec succès!";
    //     } catch {exception $e} {

    //         echo "Une erreur est s'est produite lors de l'envoi de votre message : {$mail->ErrorInfo}";
    //     }  else {
    //     echo "Une erreur est survenue. Vérifiez que le formulaire a été rempli de manière correcte.";
    // }

    }
 ?>
