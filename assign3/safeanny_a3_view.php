<?php
    /* Written by: Sean Feanny
         ID: 052-980-067
    */
?>
<?php
    session_start();
    if($_SESSION[valid_login] == true){
        include_once('safeanny_a3_library.php');
        // checks which page was selected to provide the appropriate page title
        if(!empty($_GET)){
            $page = $_GET[page];     
            if($page == 'delete'){
                $title = "View Deleted";
                myheader($title);
                PageHeader($title);
            }
            elseif($page == 'active'){
                $title = "View Active";
                myheader($title);
                PageHeader($title);
            }
            else{
                $page = 'all';
                $title = "View All";
                myheader($title);
                PageHeader($title);
            }
        }
        // if webpage is loaded for first time sets page status to view all
        else{
            $page = 'all';
            $title = "View All";
            myheader($title);
            PageHeader($title);
        }
        $res = ServerConnectView('inventory',$page);
        formheader($page);
?>
        <div id="dbViewAll">
            <table id="dbtable">
                <tr>
                    <th class="alt1"> ID </th>
                    <th class="alt2"> Item <br/> name </th>
                    <th> Manufacturer </th>
                    <th class="alt2"> Model </th>
                    <th class="alt3"> Description </th>
                    <th> Number <br/> on hand </th>
                    <th> Reorder <br/> level </th>
                    <th> Cost </th>
                    <th> Selling <br/> Price </th>
                    <th class="alt1"> On <br/> sale? </th>
                    <th> Discontinued? </th>
                    <th> Delete/ <br/> Restore </th>
                </tr>
<?php
                //display records for each row returned by the query
                while($r = mysql_fetch_assoc($res)){
                    //check if deleted record is 'n' or 'y' and return 'delete' or 'restore' to display in its place
                    $del = set_del_val($r[deleted]);
                    echo "<tr><td><a href='safeanny_a3_add.php?id=$r[id]&amp;page=$page'>$r[id]</a></td><td>$r[name]</td>
                        <td>$r[manufac]</td><td>$r[model]</td><td>$r[descrip]</td><td>$r[onhand]</td>
                        <td>$r[reorder]</td><td>$r[cost]</td><td>$r[price]</td><td>$r[sale]</td><td>$r[discont]</td>
                        <td> <a href='safeanny_a3_delete.php?id=$r[id]&amp;deleted=$r[deleted]&amp;page=$page'> $del </a> </td> </tr>";
                }
            echo "</table>";
        echo "</div>";
        myfooter();
    }
    else{
        header('Location: safeanny_a3_login.php');
    }
?>