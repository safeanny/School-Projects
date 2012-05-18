<?php
    /* Written by: Sean Feanny
         ID: 052-980-067
    */
?>
<?php
    function cssStyle(){
?>
    <style type="text/css">
        body{
            background-color : #808080;
        }
        #container{
            position         : relative;
            width            : 1100px;
            background-color : #FFFFFF;
            margin           : auto;
        }
        #header_style{
            width            : 100%;
            text-align       : right;
            background-color : #FFFFCC;
            height:auto;
        }
        #footer_style{
            width            : 100%;
            height           : 35px;
            background-color : #009933;
            text-align       : center;   
        }
        /*  *********** Login page style ********************   */
        #login_container{
            width            : 720px;
            height           : auto;
            position         : relative;
            margin           : auto;
            background-color : #FFFFFF;
        }
        #login_header{
            background-color : #FFFFCC;
            width            : 100%;
            text-align       : right;
            border-bottom    : solid;
            border-width     : 5px;
            border-color     : green;
        }
        #login_form{
            position         : relative;
            margin           : auto;
            background-color : transparent;
            height           : auto;
            width            : 360px;
            border-left      : solid;
            border-right     : solid;
            border-bottom    : solid;
            border-color     : green;
        }
        #login_form div{
            width            : 100%;
            display          : block;
            background-color : green;
            color            : white;
            text-align       : center;
            font-size        : 1.2em;
            font-weight      : bold;
        }
        #login_form label{
            display          : block;
            float            : left;
            width            : 100px;
            text-align       : right;
            padding-right    : 5px;
        }
        #login_form .p{
            position         : relative;
            left             : 105px;
        }
        /*  *********** Form and form error style ***********   */
        #form_header{
            width            : 95%;
            position         : relative;
            top              : 5px;
            margin           : auto;
            background-color : #009933;
            text-align       : center;
            color            : #FFFFFF;
            font-weight      : bold;
            font-family      : "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #div_form{
            width            : 550px;
            position         : relative;
            left             : 5%;
            top              : 8px;
            font-family      : "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #form_errors{
            width            : 550px;
            position         : relative;
            left             : 5%;
            top              : 5px;
            font-family      : "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size        : .9em;
        }
        #form_errors fieldset{
            width            : 540px;
        }
        #form_errors legend{
            color            : #ff0000;
            font-weight      : bold;
            font-size        : 1.3em;
        }
        #dbViewAll{
            width            : 100%;
        }
        /*  *********** Menu/Navigation Strip ***********   */
        #menu_strip{
            width            : 100%;
            background-color : #FFFFCC;
            font-family      : "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #menu_strip a{
            display          : block;
            width            : 120px;
            font-weight      : bold;
            color            : #FFFFFF;
            background-color : #0066FF;
            text-align       : center;
            padding          : 4px;
            text-decoration  : none;
            text-transform   : uppercase;  
            border           : solid;
            border-width     : 5px;
            border-color     : #FFFFCC;
        }       
        #menu_strip a:hover{
            background-color : #0099FF;
        }
        #menu_strip ul{
            list-style-type  : none;
            margin           : 0;
            padding          : 0;
            overflow         : hidden;
        }
        #menu_strip li{
            float            : left;
        }
        #user_info_container{
            position         : relative;
            float            : right;
            top              : 5px;
            right            : 5px;
            width            : auto;
        }
        #user_info_container div{
            position         : relative;
            float            : left;
            padding          : 5px;
            color            : #009933;
            font-weight      : bold;
        }
        #user_info_container span{
            font-style       : italic;
        }
        /*  *********** View all/deleted/active table style ***********   */
        #dbtable{ 
            position         : relative;
            margin           : auto;
            top              : 5px;
            border-collapse  : collapse;
            font-family      : "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #dbtable th{
            width            : 70px;
            text-align       : left;
            background-color : #009933;
            border-width     : 1px;
            border-style     : solid;
            border-color     : #009933;
            padding          : 3px;
            vertical-align   : top;
            color            : #FFFFFF; 
        }       
        #dbtable td{
            border-width     : 1px;
            border-style     : solid;
            border-color     : #009933;
            padding          : 3px;
            font-size        : .9em;
        }
        #dbtable a:link{
            text-decoration  : none;
            color            : #0066FF;
        }
        #dbtable a:visited{
            text-decoration  : none;
            color            : #0066FF;
        }
        #dbtable th.alt1{
            width            : 45px;
        }
        #dbtable th.alt2{
            width            : 80px;
        }
        #dbtable th.alt3{
            width            : 200px;
        }
        /*  *********** Add/update form - table layout style ***********   */
        td.td_style{
            text-align       : right;
            vertical-align   : top;
        }
        .th_style{
            height           : 50px;
            text-align       : right;
        }  
    </style>
<?php
    }
?>
<?php
    function myheader($title){
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">    
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
            <head>
                <title> <?php echo $title; ?> </title>
                <?php cssStyle(); ?>
            </head>  
            <body>
<?php
    }
?>
<?php
    function PageHeader($title){
?>
                <div id="container">
                    <div id="header_style">
                        <img src="logo.png" alt="http://cooltext.com/" width="716" height="130" />
                        <div id="menu_strip">
                            <div id="user_info_container">
                                <?php /* display logged in users name and role on the system */ ?>
                                <div> <span> User: </span> <?php echo $_SESSION[username]; ?> </div>
                                <div> <span> Role: </span> <?php echo $_SESSION[user_role]; ?> </div>
                            </div>
<?php
                            // sets appropriate page source for add page from current viewing page title
                            // (i.e. if user is viewing deleted page - add page will have 'delete' for pagesrc)
                            if((preg_match("/delete/i", $title)) || (preg_match("/delete/i", $_GET[page]))){
                                $pagesrc = 'delete';
                            }
                            elseif((preg_match("/active/i", $title)) || (preg_match("/active/i", $_GET[page]))){
                                $pagesrc = 'active';
                            }
                            else{
                                $pagesrc = 'all';
                            }
?>  
                            <ul>
                               <li> <a href='safeanny_a3_add.php<?php echo "?page=$pagesrc"; ?>' > Add </a> </li>
                               <li> <a href="safeanny_a3_view.php?page=all"> View All </a> </li>
                               <li> <a href="safeanny_a3_view.php?page=active"> View Active </a> </li>
                               <li> <a href="safeanny_a3_view.php?page=delete"> View Deleted </a> </li>
                               <li> <a href="safeanny_a3_logout.php"> Log out </a> </li>
                            </ul>
                        </div>
                    </div>
<?php
    }   
?>
<?php
    function loginfooter(){
?>
                    <br/>
                    <div id="footer_style">
                        <span>
                            <a href="http://validator.w3.org/check?uri=referer">
                            <img src="http://www.w3.org/Icons/valid-xhtml10"
                                alt="Valid XHTML 1.0 Strict" height="31" width="88" />
                            </a>
                            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                            <img style="border:0;width:88px;height:31px"
                                src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                                    alt="Valid CSS!" />
                            </a>
                        </span>
                    </div>
                </div>
            </body> 
        </html>
<?php
    }
?>
<?php
    function myfooter(){
?>
                    <br/>
                    <div id="footer_style"> </div>
                </div>
            </body> 
        </html>
<?php
    }
?>
<?php
    // display which view page the user is currently viewing or the form mandatory fields
    // if the user is viewing the add/update page 
    function formHeader($form_info){
?>
        <div id="form_header">
<?php
            if($form_info == 'form required'){
                echo "All fields mandatory except 'Sale item' and 'Discontinued item'";
            }
            elseif($form_info == 'all'){
                echo 'View All Items:';
            }
            elseif($form_info == 'active'){
                echo 'View Active Items:';
            }
            elseif($form_info == 'delete'){
                echo 'View Deleted Items:';
            }
?>
        </div>
        <br/>
<?php
    }
?>
<?php
    function MyForm(){
        // if id is not empty we connect to our database to select all information with that id
        // and store it to be displayed in the form
        if(!empty($_GET[id])){
            $res = ServerConnectUpdate();
            $r = mysql_fetch_assoc($res);
            $_POST = $r;
        }
?>
        <div id="div_form">
        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            <table>
<?php
                // if id is not empty we display a text field displaying that id (i.e. we are in update mode - not add mode)
                if(!empty($_POST[id])){
?>
                    <tr>
                        <td class="td_style"> <label for="_id"> Id: </label> </td>
                        <td> <input type="text" name="id" value="<?php echo htmlentities($_POST[id]); ?>" id="_id" size="30" readonly="readonly" /> </td>
                    </tr>
<?php
                }
?>
                <tr>
                    <td class="td_style"> <label for="_name"> Item Name: </label> </td>
                    <td> <input type="text" name="name" value="<?php echo htmlentities($_POST[name]); ?>" id="_name" size="30" maxlength="40" /> </td>
                </tr>
                <tr>
                    <td class="td_style"> <label for="_manufac"> Manufacturer: </label> </td>
                    <td> <input type="text" name="manufac" value="<?php echo htmlentities($_POST[manufac]); ?>" id="_manufac" size="30" maxlength="40" /> </td>
                </tr>
                <tr>
                    <td class="td_style"> <label for="_model"> Model: </label> </td>
                    <td> <input type="text" name="model" value="<?php echo htmlentities($_POST[model]); ?>" id="_model" size="10" maxlength="10" /> </td>
                </tr>
                <tr>
                    <td class="td_style"> <label for="_descrip"> Description: </label> </td>
                    <td> <textarea name="descrip" id="_descrip" rows="3" cols="30"><?php echo htmlentities($_POST[descrip]); ?></textarea> </td>
                </tr>
                <tr>
                    <td class="td_style"> <label for="_onhand"> Number on Hand: </label> </td>
                    <td> <input type="text" name="onhand" value="<?php echo htmlentities($_POST[onhand]); ?>" id="_onhand" size="5" /> </td>
                </tr>
                <tr>
                    <td class="td_style"> <label for="_reorder"> Reorder Level: </label> </td>
                    <td> <input type="text" name="reorder" value="<?php echo htmlentities($_POST[reorder]); ?>" id="_reorder" size="5" /> </td>
                </tr>
                <tr>
                    <td class="td_style"> <label for="_cost"> Cost: </label> </td>
                    <td> <input type="text" name="cost" value="<?php echo htmlentities($_POST[cost]); ?>" id="_cost" size="10" /> </td>
                </tr>
                <tr>
                    <td class="td_style"> <label for="_price"> Selling Price: </label> </td>
                    <td> <input type="text" name="price" value="<?php echo htmlentities($_POST[price]); ?>" id="_price" size="10" /> </td>
                </tr>
                <tr>
                    <td class="td_style"> Sale Item: </td>
                    <td> <input type="checkbox" name="sale" value="y" <?php if(htmlentities($_POST[sale]) == 'y'){ echo 'checked="checked"'; } ?> /> </td>
                </tr>
                <tr>
                    <td class="td_style"> Discontinued Item: </td>
                    <td> <input type="checkbox" name="discont" value="y" <?php if(htmlentities($_POST[discont]) == 'y'){ echo 'checked="checked"'; } ?> /> </td>
                </tr>
                <tr>
                    <td> <input type="hidden" value="<?php if(!empty($_GET)){echo htmlentities($_GET[page]);}else{echo htmlentities($_POST[pagesrc]);} ?>" name="pagesrc" /> </td>
                    <td> <input type="submit" value="Submit" /> </td>
                </tr>
            </table>
        </form>        
        </div>
<?php
    }
?>
<?php
    //set value of record to 'y' or 'n' depending on if user did or did not check that option on form
    function set_val($var){
        if($var != 'y'){
            return 'n';
        }
        else{
            return 'y';
        }
    }
?>
<?php
    //return 'delete' or 'restore' to be displayed on result table rather than 'n' and 'y' from record
    function set_del_val($var){
        if($var == 'n'){
            return $var = 'delete';
        }
        elseif($var == 'y'){
            return $var = 'restore';
        }
    }
?>
<?php
    function get_pwd(){
        return 'ddEB3586';
    }
?>
<?php
    //function connects to server and selects the database provided
    function connect_db($user,$pwd){
        $lk = mysql_connect('db-mysql.zenit',$user,$pwd) or die ('Could not connect: ' . mysql_error());
        mysql_selectdb($user) or die('Could not select database: ' . mysql_error());
        return $lk;
    }
?>
<?php
    //function queries the server, saves a pointer to information returned and closes the database connection
    function query_db($query,$lk){
        $res = mysql_query($query,$lk) or die('Could not query: ' . mysql_error());
        mysql_close($lk);
        return $res;
    }
?>
<?php
    // connects to the database to add the new row (or edit a previous row) created from the form to the table 
    function ServerConnectAdd(){
        $user = 'int322_121b07';
        $pwd = get_pwd();
        $sale = set_val($_POST[sale]);
        $discont = set_val($_POST[discont]);
        
        $lk = connect_db($user,$pwd);  
        // if id is empty we create a new row with the data submitted by the user
        if(empty($_POST[id])){
            $query = sprintf("insert into inventory values ('','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','n')",
                        mysql_real_escape_string($_POST[name]), mysql_real_escape_string($_POST[manufac]), mysql_real_escape_string($_POST[model]),
                        mysql_real_escape_string($_POST[descrip]), mysql_real_escape_string($_POST[onhand]), mysql_real_escape_string($_POST[reorder]),
                        mysql_real_escape_string($_POST[cost]), mysql_real_escape_string($_POST[price]), mysql_real_escape_string($sale),
                        mysql_real_escape_string($discont));
        }
        // if id is not empty we update the information of that row associated with that id 
        else{
            $query = sprintf("update inventory set name='%s', manufac='%s', model='%s', descrip='%s', onhand='%s', reorder='%s', cost='%s', price='%s',
                        sale='%s', discont='%s' where id='%s'", mysql_real_escape_string($_POST[name]), mysql_real_escape_string($_POST[manufac]),
                        mysql_real_escape_string($_POST[model]), mysql_real_escape_string($_POST[descrip]), mysql_real_escape_string($_POST[onhand]),
                        mysql_real_escape_string($_POST[reorder]), mysql_real_escape_string($_POST[cost]), mysql_real_escape_string($_POST[price]),
                        mysql_real_escape_string($sale), mysql_real_escape_string($discont), mysql_real_escape_string($_POST[id]));
        }  
        $res = query_db($query,$lk);
    }
?>
<?php
    // connects to the database to view (all/deleted/active) rows in that table
    function ServerConnectView($_db, $pginfo){
        $user = 'int322_121b07';
        $pwd = get_pwd();
        
        $lk = connect_db($user,$pwd);
        // these are queries are checked for sql injection that could be made by the programmer ('accidental syntax errors - overkill but practice')
        if($pginfo == 'all'){
            $query = sprintf("select * from %s order by id", mysql_real_escape_string($_db));
        }
        elseif($pginfo == 'delete'){
            $query = sprintf("select * from %s where deleted = 'y' order by id", mysql_real_escape_string($_db));
        }
        elseif($pginfo == 'active'){
            $query = sprintf("select * from %s where deleted = 'n' order by id", mysql_real_escape_string($_db));
        }
        $res = query_db($query,$lk);
        return $res;
    }
?>
<?php
    // selects all information where id is equal to the id sent to this function
    // used to fill the form when an update has been selected rather than an add
    function ServerConnectUpdate(){
        $user = 'int322_121b07';
        $pwd = get_pwd();
        
        $lk = connect_db($user,$pwd);
        $query = "select * from inventory where id=$_GET[id]";
        $res = query_db($query,$lk);
        return $res;   
    }
?>
<?php
    function ServerConnectLogin($uname){
        $user = 'int322_121b07';
        $pwd = get_pwd();
        
        $lk = connect_db($user,$pwd);
        $query = sprintf("select * from users where username = '%s'", mysql_real_escape_string($uname));
        $res = query_db($query,$lk);
        return $res;
    }
?>
<?php                             
    function Validation(){
        $error_ctr = array();
        if(!preg_match("/^[a-z ]+$/i", $_POST[name])){
            array_push($error_ctr, "Only letters and spaces are allowed in the item name. <br/>");
        }
        if(!preg_match("/^[a-z -]+$/i", $_POST[manufac])){
            array_push($error_ctr, "Only letters, spaces, and dashes are allowed in the manufacturer's name. <br/>");
        }
        if(!preg_match("/^[a-z0-9 -]+$/i", $_POST[model])){
            array_push($error_ctr, "Only letters, numbers, dashes and spaces allowed in the model number. <br/>");
        }
        if(!preg_match("/^[a-z0-9 ,.]{1,}$/i", $_POST[descrip])){
            array_push($error_ctr, "Only letters, numbers, commas, periods, and spaces are allowed in the description. <br/>");
        }
        if(!preg_match("/^[0-9]+$/", $_POST[onhand])){
            array_push($error_ctr, "Only numbers allowed for the number on hand (example: 99). <br/>");
        }
        if(!preg_match("/^[0-9]+$/", $_POST[reorder])){
            array_push($error_ctr, "Only numbers allowed for the reorder level (example: 99). <br/>");
        }
        if(!preg_match("/^[0-9]{1,}[.][0-9]{2}$/", $_POST[cost])){
            array_push($error_ctr, "Cost must be in dollars and cents (19.99). <br/>");
        }
        if(!preg_match("/^[0-9]{1,}[.][0-9]{2}$/", $_POST[price])){
            array_push($error_ctr, "Price must be in dollars and cents (19.99). <br/>");
        }        
        if(empty($error_ctr)){
            //if no validation errors connect to database and insert new row with info user entered in the form
            ServerConnectAdd();
            //redirect to the view.php page to display all/deleted/active rows of data including the newly added/updated row
            header("Location: safeanny_a3_view.php?page=$_POST[pagesrc]");
        }
        else{
            if(!empty($_POST[id])){
                $title = "Update Item";
                myheader($title);
                PageHeader($title);
            }
            else{
                $title = "Add";
                myheader($title);
                PageHeader($title);
            }
            formHeader('form required');
?>
            <div id="form_errors">
                <fieldset>
                    <legend> Errors: </legend>
<?php        
                foreach($error_ctr as $e){
                    echo $e;
                }
?>
                </fieldset>
            </div>
<?php
            MyForm();
            myfooter();
        }
    }
?>
<?php
    function login_form(){
    // display login form with username and password fields to be filled in by the user
?>
    <div id="login_container">
        <div id="login_header">
            <img src="logo.png" alt="http://cooltext.com/" width="716" height="130" />
        </div>
        <br/>
        <div id="login_form"> 
            <div>User Login: </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <p> <label for="uname"> Name: </label> <input type="text" name="username" id="uname" size="10" /> </p>
                <p> <label for="pwd"> Password: </label> <input type="password" id="pwd" name="password" size="20" maxlength="30"/> </p>
                <p class="p"> <input type="submit" value="Sign In" /> </p>
            </form>
        </div>
<?php
    }
?>