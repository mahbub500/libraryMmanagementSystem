<?php
// connection to db
    $mysqli = @new mysqli("localhost", "root", "", "studentlibery");
//build query
    $sql = "DELETE FROM `book` WHERE `book`.`id` = ".$_GET['id'];
//execute
$result = $mysqli->query($sql);
    if ($mysqli->affected_rows) {
    echo "Data has been deleted successfully.";
    header("location:book_view.php");
    }else{
    echo "There is an error. Please try again later.";

}
?>

