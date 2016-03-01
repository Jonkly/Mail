<?php

  /*
  Docs;
    Author: Jonkly
      Function: Upload Via Mail;
    
    
    end Docs;
  
  */

  $Source=$_POST['Source'];
  $Receiver=$_POST['To'];
  $Subject=$_POST['Subject'];
  
  $t=mail($Receiver, $Subject, $Source);
  echo($t);

?>
