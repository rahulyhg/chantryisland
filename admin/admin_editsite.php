<?php
  //ini_set('display_errors', 1);
  //error_reporting(E_ALL);
  require_once('phpscripts/init.php');
  confirm_logged_in();
?>

  <?php
  
      $tbl="tbl_site"; /*only have to change*/
      $col="page_id";
      $id=1;
      single_edit($tbl, $col, $id);

      //echo "<input type=\"submit\" value=\"Edit Content\">";

  ?>
