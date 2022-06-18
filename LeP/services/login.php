$dbpass = "";
$db = "lep";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);


// or die("Connect failed: %s\n". $conn -> error);


$isUser = false;
$query = "SELECT * FROM users WHERE email = \"" . $email  . "\" AND passwd=\"" . $password . "\"";
$resultQuery = mysqli_query($conn,$query);

echo json_encode($resultQuery);

// if($isUser == true )
// {
//     echo json_encode(array("isUser" => true ));
// }else{
//     echo json_encode(array("isUser" => false ));
// }


exit;
               
