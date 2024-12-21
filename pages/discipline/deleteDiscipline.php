<?php
// Database connection and functions are already defined

// Function to delete a discipline
function deleteDiscipline($conn, $id) {
    $sql = "DELETE FROM disciplines WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Example usage:
$id = 1; // ID of the discipline to delete

if (deleteDiscipline($conn, $id)) {
    echo "Discipline deleted successfully.";
    header('Location: newDiscipline.php');
} else {
    echo "Error deleting discipline: " . $conn->error;
}

// Close database connection
$conn->close();
?>
