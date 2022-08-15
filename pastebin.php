<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "pastebin", "t4dxkBRhHwKZyWpJ", "pastebin");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get text from form
$text = $_POST["text"];
$text = mysqli_real_escape_string($conn, $text);
// Insert text into MySQL
$sql = "INSERT INTO pastes (content) VALUES ('$text')";
// Get last row ID
$last_id = mysqli_insert_id($conn);
// Return the URL of the newly created row
echo "https://paste.frank-ruan.com/t.php?id=" . $last_id;
// Close connection
mysqli_close($conn);
?>
