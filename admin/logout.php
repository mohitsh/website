<?php

      # start the session
      session_start();
      #delete the username to logout
      unset($_SESSION['username']);
      
      // session_destroy(); #this will delete all of the sesison keys
      
      header('Location: login.php');


?>