<?php
    include('config.php');
    require_once('init.php');
    $count = 0;

    $tbl = $_POST['tbl'];
    $col = $_POST['col'];
    $id = $_POST['id'];

    unset($_POST['tbl']);
    unset($_POST['col']);
    unset($_POST['id']);

    $num = count($_POST);

    $qstring = "UPDATE {$tbl} SET ";

    foreach($_POST as $key => $value)
    {
        $count++;
        if($count != $num)
        {
            $qstring .= $key."='".mysqli_real_escape_string($link, $value)."', "; 
        }
        else
        {
            $qstring .= $key."='".mysqli_real_escape_string($link, $value)."' "; 
        }
    }
    $qstring .= "WHERE {$col}={$id}";

    //echo $qstring;
    $updateQuery = mysqli_query($link, $qstring);
    if($updateQuery)
    {
        redirect_to("../index.php");
    }
    else
    {
        echo "Error updating entry!";
    }

    mysqli_close($link);
?>