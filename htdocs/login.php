<?php

   $msg = '';
    $user = $_POST['user'];
    $senha = $_POST['password'];

    echo($user);
    echo($senha);

echo ("começo");

   if (!empty($_POST['user']) && !empty($_POST['password'])) {
       
      if ($_POST['user'] == 'admin' && $_POST['password'] == 'A3lqo100') {
        
         header("Location: painel.html");

        }else {
       
         header("Location: notloged.html");
         
         

      }
   }

?>