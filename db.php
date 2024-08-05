<?php
$host = 'localhost';
$db = 'emergency_waitlist';
$user = "postgres";
$pass = 'GVHPhw6w';
$charset = 'utf8mb4';
$db_connection = pg_connect("host=localhost dbname=$db user=$user password=$pass");
$result = pg_query($db_connection, "INSERT INTO patients (name, severity) VALUES ('Karthikan Suntharesan','3')");
$dsn = "pgsql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
/*
<?php
// Database connection credentials
$host = 'localhost';
$db = 'emergency_waitlist';
$user = 'postgres';
$pass = 'GVHPhw6w';

// Create a connection
$conn = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

// Check connection
if (!$conn) {
    //die("Connection failed: " . pg_last_error());
    die("Connection failed: ");
}

// Get the form data
$name = $_POST['name'];
$severity = $_POST['severity'];

// Prepare and execute the SQL statement
$sql = "INSERT INTO patients (name, severity) VALUES (:name, :severity)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':severity', $severity);

if ($stmt->execute()) {
    echo "New patient added successfully.";
} else {
    echo "Error: " . $stmt->errorInfo()[2];
}

// Close the connection
$conn = null;
 */

 /*
 <?php
// Database connection credentials
$host = 'localhost';
$db = 'emergency_waitlist';
$user = 'postgres';
$pass = 'GVHPhw6w';

try {
    // Create a connection
    $conn = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Hardcoded data to insert
    $name = 'John Doe';
    $severity = 3;

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO patients (name, severity) VALUES (:name, :severity)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':severity', $severity);

    if ($stmt->execute()) {
        echo "New patient added successfully.";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close the connection
$conn = null;
*/

