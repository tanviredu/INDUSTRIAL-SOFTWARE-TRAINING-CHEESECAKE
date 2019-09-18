<?php



//loading every vendor program

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
define('GUSER', 'tanviredu2018@gmail.com'); // GMail username
define('GPWD', 'password'); // GMail password
require 'vendor/autoload.php';
require_once('Mysqldump.php');

class dump{

    function __construct(){
        $database = 'project1';
        $user = 'root';
        $pass = '';
        $host = 'localhost';
        $dir = dirname(__FILE__) . '/dump.sql';
        echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";
        exec("/opt/lampp/bin/mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$dir} 2>&1", $output);
        var_dump($output);

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

$obj = new dump();

$obj->smtpmailer('ornobtanvir.git@mail.com', 'tanviredu2018@mail.com', 'yourName', 'test mail message', 'Hello World!','dump.sql');






