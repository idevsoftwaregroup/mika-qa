<?php

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Function to establish database connection
function connectToDatabase($host, $username, $password, $database) {
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Function to insert a new record into the database
function createRecord($conn, $table, $data) {
    $fields = implode(',', array_keys($data));
    $values = "'" . implode("','", array_values($data)) . "'";
    $sql = "INSERT INTO $table ($fields) VALUES ($values)";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to read records from the database
function readRecords($conn, $table, $conditions = array()) {
    $sql = "SELECT * FROM $table";
    if (!empty($conditions)) {
        $sql .= " WHERE ";
        foreach ($conditions as $key => $value) {
            $sql .= "$key='$value' AND ";
        }
        $sql = rtrim($sql, "AND ");
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    } else {
        return false;
    }
}

// Function to update a record in the database
function updateRecord($conn, $table, $data, $conditions) {
    $set = '';
    foreach ($data as $key => $value) {
        $set .= "$key='$value',";
    }
    $set = rtrim($set, ',');
    $where = '';
    foreach ($conditions as $key => $value) {
        $where .= "$key='$value' AND ";
    }
    $where = rtrim($where, "AND ");
    $sql = "UPDATE $table SET $set WHERE $where";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to delete a record from the database
function deleteRecord($conn, $table, $conditions) {
    $where = '';
    foreach ($conditions as $key => $value) {
        $where .= "$key='$value' AND ";
    }
    $where = rtrim($where, "AND ");
    $sql = "DELETE FROM $table WHERE $where";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Establish database connection
$conn = connectToDatabase($host, $username, $password, $database);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example usage:

// Create a new record
$new_data = array(
    "name" => "John",
    "email" => "john@example.com",
    "age" => 30
);
createRecord($conn, "users", $new_data);

// Read records
$users = readRecords($conn, "users");
print_r($users);

// Update a record
$update_data = array(
    "age" => 35
);
$update_conditions = array(
    "name" => "John"
);
updateRecord($conn, "users", $update_data, $update_conditions);

// Delete a record
$delete_conditions = array(
    "name" => "John"
);
deleteRecord($conn, "users", $delete_conditions);

// Close database connection
$conn->close();

?>
