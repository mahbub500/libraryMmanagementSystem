<?php
$msg = "";
if(isset($_POST['upload'])){
    
        $target = "images/".basename($_FILES['image']['name']);
    // if ($_FILES['image']['name']) {
    // }else{

    // $target =$_POST['image']; 
    // }

    print_r($target);
}
// connection to db

    $mysqli = @new mysqli("localhost", "root", "", "studentlibery");
// education conversiton array to string

     $education=$_POST["education"];
        $allEducation=  implode(",", $education);

$image = $_FILES['image']['name'];
// build query
	// `image` = '".$image."',
$query = "UPDATE `student` SET
    `FullName` = '".$_POST['FullName']."', 
    `FatherName` = '".$_POST['FatherName']."', 
    `MotherName` = '".$_POST['MotherName']."', 
    `Gender` = '".$_POST['gender']."', 
    `email` = '".$_POST['emails']."', 
    `BithDate` = '".$_POST['BirthDate']."', 
    `Education` = '$allEducation', 
    `BloodGroup` = '".$_POST['blood']."', 
    `Mobile` = '".$_POST['mobile']."', 
    `Adress` = '".$_POST['address']."' WHERE `student`.`id` = ".$_POST['id'];
echo $query;


    // "INSERT INTO `student` (`id`, `Reg_id`, `FullName`, `FatherName`, `MotherName`, `Gender`, `Nid`, `email`, `BithDate`, `Education`, `image`, `BloodGroup`, `Mobile`, `Adress`) VALUES (NULL, '$Reg_id', '$FullName', '$FatherName', '$MotherName', '$gender', '$nid', '$emails', '$BirthDate', '$allEducation', '$image', '$blood', '$mobile', '$address ') ";

    // UPDATE `student` SET `MotherName` = 'Nur Hasna n' WHERE `student`.`id` = 2;

if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
$msg = "Image uploaded Successfully";	
}
else{
	$msg = "There is a problem";
}
//echo $query;die();
//execute the query using php
//$result = $db->exec($query);
$result = $mysqli->query($query);

var_dump($result);

if($result){
    echo "Data has been updated successfully.";
// header("location:teachers_view.php");
}else{
    echo "There is an error. Please try again later.";
}
?>
