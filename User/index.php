<?php
    session_start();

    if(isset($_SESSION['id'])){
        $user_id = $_SESSION['id'];
        include('../connections.php');

        $get_record = mysqli_query($connections,"SELECT * FROM mytbl WHERE id='$user_id'");


        while($row_edit = mysqli_fetch_assoc($get_record)){

            $db_name = $row_edit["Name"];
            $db_address = $row_edit["Address"];
            $db_email = $row_edit["Email"];
            $db_section = $row_edit["Section"];
            $db_contact = $row_edit["Contact"];
        }   

        echo "Welcome $db_name! <a href='logout.php'> Logout</a>";

    } else {
        echo "You must login first! <a href='../login.php'> Login now!</a>";
    }
?>
