<?php
$servername = "localhost";
$username = "billgates";
$password = "123";
$db = "task11";
// Create connection
$conn = new mysqli($servername, 'root', '', $db);
$conn2 = new mysqli($servername, 'root', '', 'cars');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = 'SELECT * FROM `task11` WHERE username = "'.$username.'" and password = "'.$password.'"' ;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row['admin'] != 0){
    $admin = $row['admin'];
    setcookie('admin',$admin);
    $sql = 'SELECT * FROM `cars` ';
    $result=mysqli_query($conn2,$sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['maker']. " ". $row['model'] . " " . $row['price'] . "<a href='delete.php?id=".$row['id']."'>Delete</a>" ."<br>";
    }
}
mysqli_close($conn);
mysqli_close($conn2);

?>

<form action="taskC.php" method = "post">
    <label for="username">username :</label>
    <input type="text" name="username">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <input type="submit" value = "submit">
</form>