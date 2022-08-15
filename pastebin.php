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
if (mysqli_query($conn, $sql)) {
    // Get last row ID
    $last_id = mysqli_insert_id($conn);
    // Return the URL of the newly created row
    echo "https://paste.frank-ruan.com/t.php?id=" . $last_id;
} else {
    echo "{'ok': false, 'error': '" . mysqli_error($conn) . "'}";
    header("HTTP/2 403 Forbidden");
}
// Close connection
mysqli_close($conn);
?>
