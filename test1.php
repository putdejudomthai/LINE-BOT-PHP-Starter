<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

echo "$url\n";
echo "$server, $username, $password, $db\n";
print_r($conn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, msg, msg_date FROM linebot";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " : " . $row["msg"]. " " . $row["msg_date"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
