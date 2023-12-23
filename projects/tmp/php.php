<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch messages from the database
$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

// Display messages in the chatroom
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<p>" . $row["message_content"] . "</p>";
  }
} else {
  echo "No messages yet!";
}

$conn->close();
?>
