<?php
   $yansh = true;
   $breast = true;

   if($yansh == true && $breast == true){
    echo "You are prefect";
   }elseif($yansh == true && $breast == false){
    echo "You get yansh, but why you no get breast, eh fine girl?";
   }elseif($yansh == false && $breast == true){
    echo "You get breast, but why you no get yansh? you ugly o";
   }else{
    echo "GET OUT FROM HERE!!!!";
   }


$username = readline("Enter username : ");
$password = readline("Enter password: ");

if (empty($username) || empty($password)) {
    echo ("Error: Inputs cannot be empty");
}else{
    echo "Your username is: $username and passoword is : $password";
}