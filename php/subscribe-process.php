<?php
    //mysql connection parameters
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "dcsite";

    $connection = mysqli_connect($hostname, $user, $pass, $dbname);
    // mysqli_select_db($connection, $dbname);

    // mysqli_connect($hostname, $user, $pass);
    
    //check to see if connection is established
    // if($connection){
    //     //continue running code
    //     $email = $_POST["subscribe-email"];
    //     mysqli_query($connection, "insert into subscribers values('', '" . $email . "');");
        
    // }else {
    //     //die and exit or show a 404 page
    //     die(header("Location: 404.php"));
    // }

    // if(isset($_POST['subscribe-email-btn'])){
    //     $email = mysqli_real_escape_string($connection, $_POST["subscribe-email"]);

    //     if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            
    //         $query = "insert into subscribers values('', '" . $email . "')";

    //         // mysqli_query($connection, $query);

    //         if (mysqli_query($connection, $query)) {
    //           echo '<div class="toast text-center" style="" data-autohide="true">
    //                   <div class="toast-body bg-success text-white">
    //                       <h6><strong><i class="fa fa-check"></i></strong> Subscribe successfully.</h6>
    //                   </div>
    //                 </div>';
    //           }else{
    //             echo '
    //             <div class="toast text-center" style="" data-autohide="true">
    //                   <div class="toast-body bg-danger text-white">
    //                       <h6><strong><i class="fa fa-check"></i></strong> Error subscribing.</h6>
    //                   </div>
    //                 </div>
    //             ';
    //         }
    //         // header("Location: ../index.php");
    //     }
    //     // else{
    //     //     echo '<script>alert(<p style="color: #EA4335">Enter the E-mail id</p>);</script';
    //     // }
    // }
