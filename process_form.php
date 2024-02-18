<?php
require 'vendor/autoload.php'; // Include the Composer autoload file

// MongoDB connection configuration
$mongoClient = new MongoDB\Client("mongodb://127.0.0.1:27017");
$database = $mongoClient->selectDatabase('your_database_name'); // Replace 'your_database_name' with your actual database name
$collection = $database->selectCollection('users'); // Replace 'users' with your actual collection name

// Function to save user's name into MongoDB
function saveUserName($name) {
    global $collection;

    // Create a document to insert
    $document = [
        'name' => $name,
        'created_at' => new MongoDB\BSON\UTCDateTime()
    ];

    // Insert the document into the collection
    $collection->insertOne($document);

    echo "User name saved successfully.";
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user name from the form
    $userName = $_POST["username"];
    
    // Save user name into MongoDB
    saveUserName($userName);
}
?>
