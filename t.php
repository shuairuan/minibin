<?php
// Get Web Query id
$id = $_GET["id"];
// Connect to MySQL
$conn = mysqli_connect("localhost", "pastebin", "t4dxkBRhHwKZyWpJ", "pastebin");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get text from MySQL via ID
$sql = "SELECT text FROM pastebin WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["text"];
    }
} else {
    echo "404 not found";
    // Raise HTTP 404 error
    header("HTTP/2 404 Not Found");
}

?>