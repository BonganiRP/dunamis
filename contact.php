<?php
        if(isset($_POST['submit'])){
            $firstname = $_POST['firstName'];
            $secondname = $_POST['SecondName'];
            $email_from = $_POST['email'];
            $clientPhone = $_POST["phone"];
            $email_subject = $_POST['subject'];
            $services_needed = $_POST['services'];
            $message = $_POST['query'];
            
            $to = "contact@dunamistech.com";
            $headers = "From:"." ".$email_From;
            
            $txt = "You Have receiveced an e-mail with the following details:\n\n\nEmail from:". "  ".$firstname. ".\n\nEmail address:"."  ".$mail_From. ".\n\nTelphone number:"."  ".$clientPhone. ".\n\nSubject message:"."  ".$email_subject .   ".\n\nService Required:"."  ".$services_needed. ".\n\n\n"."\n".$message;
            
            mail($to,$headers,$txt);
            header("Location: home.html?mailsent");
            
            $dbServername="localhost:3306";
            $dbUsername="dunarubq_eomuser";
            $dbpassword="eom123eom";
            $DbName="dunarubq_eomdata";
        
            
        }
    ?>