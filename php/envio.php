<?php

class Email{
    

    public function enviar(string $mensagem, string $email){
        
        require __DIR__."/../mail/PHPMailerAutoload.php";
        
        //Dados do servidor
         try{
            
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.hostinger.com.br';
        $mail->Port = 465;
        $mail->Username = 'contato@rodanteseguros.com.br';
        $mail->Password = 'rodante2020';
        $mail->setFrom('contato@rodanteseguros.com.br', 'Site Rodante Seguros');
        $mail->addAddress($email);

        //Quem está enviando e quem irá receber
       /* $mail->setFrom($emailrem);
        $mail->addAddress($email);*/

        //Titulo e corpo da mensagem
        $mail->Subject = "Email de relatórios do site";
        $mail->msgHTML($mensagem);
        $mail->CharSet = 'UTF-8';
       
       if ($mail->send()) {
            echo "<script>alert('Enviado com sucesso, logo responderemos!!!')
                window.location='http://rodanteseguros.com.br/index.html';
                </script>";
            exit();
        } else {
            echo "<script>alert('Houve algum erro, favor enviar mensagem novamente!!!')
                window.location='http://rodanteseguros.com.br/contato.html';
                </script>";
            exit();
        }
        die();
            
        }catch(Exception $e){
            echo "FAlha: {$mail->errorInfo}";
        }


    }

    /*public function home(string $name, string $email, string $phone, string $produtos, string $mensagem){
        $obj = email::enviar($mensagem);
    }

    public function contato(string $nome, string $email, string $assunto, string $mensagem){
        $obj = email::enviar($mensagem);
    }*/
}
?>