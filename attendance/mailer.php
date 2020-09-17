<?php
    require("library/connect.php");

    date_default_timezone_set("Asia/Kolkata");
    $newdate = date("d/m/Y");
    $day = date("l");
    $hr = idate("H");
    $minute = idate("i");
    $timeinmin = $hr * 60 + $minute;
    // $flag = 0;
    // echo "$hr ";
    // echo "$minute ";
    // echo "$day ";
    // echo "$timeinmin ";
    if($day=="Saturday" and ($timeinmin>750 and $timeinmin<765))
    {

        $q = "SELECT Roll FROM attendance_beta WHERE Date='$newdate'";
        $res = mysqli_query($con, $q) or die(mysqli_error($con));
    
        while($col = mysqli_fetch_array($res))
        {
            $rolls[] = $col['Roll'];
        }
        
        $dataofroll = implode(", ", $rolls);
        
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "attendancehrm@ecea.com";
        $to = "kuntalpauloriginal@gmail.com";
        $subject = "Attendance Record for ECE-A";
        $message = "The Attendance for today's class is: " . print_r($dataofroll, true);
        $headers = "From:" . $from .  "\r\n" . "Bcc: debadrita070300@gmail.com";
        //  .  "\r\n" . 'Bcc: kuntalzatchhindi@gmail.com'
        mail($to,$subject,$message, $headers);
        echo "The email message was sent.";
        
        mysqli_free_result($res);
    }
    else
    {
        echo "Mail not sent!";
    }
    // foreach($rolls as $rollno) 
    // {
    //     echo "$rollno";
    // }
    
    // print_r($rolls);
    
    
    
    // echo "$message";

?>