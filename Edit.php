<?php
$user_id = $_REQUEST["id"];


$user_id;

include('connections.php');

$get_record = mysqli_query($connections,"SELECT * FROM mytbl WHERE id='$user_id'");


while($row_edit = mysqli_fetch_assoc($get_record)){

    $db_name = $row_edit["Name"];
    $db_address = $row_edit["Address"];
    $db_email = $row_edit["Email"];
    $db_section = $row_edit["Section"];
    $db_contact = $row_edit["Contact"];

}
?>

<form method="POST" action="Update_Record.php">

        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <br>
        Name: <input type="text" name="new_name" value="<?php echo $db_name;?>"><br>
        
        Address: <input type="text" name="new_address" value="<?php echo $db_address;?>"><br>
       
        Email: <input type="text" name="new_email" value="<?php echo $db_email;?>"><br>
       
        Section: <input type="text" name="new_section" value="<?php echo $db_section;?>"><br>
       
        Number: <input type="text" name="new_contact" value="<?php echo $db_contact;?>"><br>
      
        <input type="submit" name="Update" value="Update"><br>


</form>