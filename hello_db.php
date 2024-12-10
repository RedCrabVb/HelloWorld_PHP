<?php
// Database connection details
// !!!code example from chat gpt !!!
$servername = "<IP/localhost>";
$username = "test_pg";
$password = "test_pg";
$dbname = "test_pg";

try {
    // Create connection
    $conn = new PDO("pgsql:host=$servername;port=5422;dbname=$dbname", $username, $password);

    // Set error mode of database connection
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to insert data into the database
    $sql = "INSERT INTO messages (message)
            VALUES (:message)";

    $stmt = $conn->prepare($sql);
    $stmt->execute(['message' => 'Hello World!']);

    // Display message from database
    $stmt = $conn->prepare("SELECT message FROM messages");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Message: " . $row["message"]. "<br>";
    }
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
} finally {
    // Close connection
    $conn = null;
}
?>
