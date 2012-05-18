<?php
    /* Written by: Sean Feanny
         ID: 052-980-067
    */
?>
<?php
    session_start();
    if($_SESSION[valid_login] == true){
        include_once('safeanny_a3_library.php');
        // if $_GET is not empty we display update item for page title
        // and display the form with info for the item selected else we use add for page title
        if (!empty($_GET)){
            if(!empty($_GET[id])){
                $title = "Update Item";
                myheader($title);
                PageHeader($title);
            }
            else if(empty($_GET[id])){
                $title = "Add";
                myheader($title);
                PageHeader($title);
            }
            formHeader('form required');
            MyForm();
            myfooter();
        }
        //this code is in place for when add page is loaded first (first page viewed)
        // $_GET is empty in this case (if view page was loaded first code would not be needed)
        elseif (empty($_POST)){
            $title = "Add";
            myheader($title);
            PageHeader($title);
            formHeader('form required');
            MyForm();
            myfooter();
        }
        //if the form is not empty we will proceed with the validation
        else{
            Validation();
        }
    }
    else{
        header('Location: safeanny_a3_login.php');
    }
?>