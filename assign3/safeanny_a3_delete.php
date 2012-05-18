<?php
    /* Written by: Sean Feanny
         ID: 052-980-067
    */
?>
<?php
    session_start();
    if($_SESSION[valid_login] == true){
        include_once('safeanny_a3_library.php');
        $user = 'int322_121b07';
        $pwd = get_pwd();
        
        //connects to the database and uses the update selected above to update the record in the table
        $lk = connect_db($user,$pwd);
        //check to see if del value is 'y' or 'n' and choose the appropriate update of that record
        if ($_GET[deleted] == 'y'){
            $query = "update inventory set deleted='n' where id=$_GET[id]";
        }
        elseif ($_GET[deleted] == 'n'){
            $query = "update inventory set deleted='y' where id=$_GET[id]";
        }
        $res = query_db($query,$lk);
        
        //redirect back to the view.php page (all/active/deleted depending on which page user is currently on)
        header("Location: safeanny_a3_view.php?page=$_GET[page]");
    }
    else{
        header('Location: safeanny_a3_login.php');
    }
?>