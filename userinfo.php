<?PHP

$user_name = "root";
$password = "";
$database = "friends";
$server = "localhost";

$db_handle = mysqli_connect($server, $user_name, $password);
$db_found = mysqli_select_db($db_handle,$database);

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$SQL=" INSERT INTO  friendsinfo (user , email , mobile , comment)
VALUES ( '$user' , '$email' , '$mobile' , '$comment') ";

echo "$SQL";

$result=mysqli_query($db_handle,$SQL);

header('location:index.php');

if ($db_found) {
print"Data Base Found";
mysqli_close($db_handle);
}

else
{
print "Database Not Found ";
}    
?>