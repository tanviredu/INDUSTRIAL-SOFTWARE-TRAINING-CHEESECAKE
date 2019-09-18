<?php

//loading every vendor program

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
define('GUSER', 'tanviredu2018@gmail.com'); // GMail username
define('GPWD', 'password'); // GMail password
require 'vendor/autoload.php';
require_once('Mysqldump.php');

class backupandmail{

    function __construct($server,$database,$user,$password,$filename){
        $this->server = $server;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
        $this->filename = $filename;
        $dump = new Ifsnop\Mysqldump\Mysqldump("mysql:host={$this->server};dbname={$this->database}", "{$this->user}", "{$this->password}");
        // checking is it working
        //print_r($dump);
        $dump->start($this->filename);
        echo "finished";
    
        // connecting to database


    }

    public function smtpmailer($to, $from, $from_name, $subject, $body,$uploadfile) { 
            global $error;
            $mail = new PHPMailer();  // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true;  // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465; 
            $mail->Username = GUSER;  
            $mail->Password = GPWD;           
            $mail->SetFrom($from, $from_name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAttachment($uploadfile);
            $mail->AddAddress($to);
            //print_r($mail);
            if(!$mail->Send()) {
                $error = 'Mail error: '.$mail->ErrorInfo; 
            return false;
            } else {
            $error = 'Message sent!';
            return true;
            }
        
        }


}

$obj = new backupandmail('localhost','project1','root','','dmp.sql');

$obj->smtpmailer('ornobtanvir.git@mail.com', 'tanviredu2018@mail.com', 'yourName', 'test mail message', 'Hello World!','dmp.sql');



















































?>












<?php


//
   	
//smtpmailer('ornobtanvir.git@mail.com', 'tanviredu2018@mail.com', 'yourName', 'test mail message', 'Hello World!');

?>