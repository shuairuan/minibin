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
$sql = "SELECT content FROM pastes WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
// Output the result
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["content"];
    }
} else {
    echo "404 not found";
    header("HTTP/2 404 Not Found");
}
?>