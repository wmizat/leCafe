<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: /managerlogin'); 
}




$cheks = implode("','", $_POST['checkbox']);
$sql = "UPDATE FOOD SET `options` = 'DISABLE' WHERE F_ID in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('refresh:0.1 /delete_food_items');
$conn->close();


?>