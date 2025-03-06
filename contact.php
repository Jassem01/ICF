<?php
if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];
    $mailto="icfgabes@icf.ind.tn";
    $headers="De :".$mailFrom;
    $txt="Vous avez reçu un message de ".$name;".\n\n".$message;
    mail($mailto, $subject, $txt, $headers);
    header("Location: index.html?mailsend");

}

?>