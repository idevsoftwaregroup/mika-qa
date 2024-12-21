<?php
// Database connection and functions are already defined

// Function to update a discipline
function updateDiscipline($conn, $id, $name, $group, $code) {
    $sql = "UPDATE disciplines SET name='$name', group='$group', code='$code' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Example usage:
$id = 1; // ID of the discipline to update
$name = $_POST['name'];
$group = $_POST['group'];
$code = $_POST['code'];

if (updateDiscipline($conn, $id, $name, $group, $code)) {
    echo "Discipline updated successfully.";
    header('Location: newDiscipline.php');
} else {
    echo "Error updating discipline: " . $conn->error;
}

// Close database connection
$conn->close();
?>
