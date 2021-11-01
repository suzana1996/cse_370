<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}




$cheks = implode("','", $_POST['checkbox']);
$query = "DELETE FROM food WHERE id in ($cheks)";
//  DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

header('Location: deletefooditem.php');
$conn->close();


?>