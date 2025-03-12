<?php
session_start();
include('db_connection.php'); // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the message ID and current status from the form
    $message_id = mysqli_real_escape_string($conn, $_POST['message_id']);
    $current_status = mysqli_real_escape_string($conn, $_POST['current_status']);

    // Determine the new status
    $new_status = ($current_status === 'Solved') ? 'Unsolved' : 'Solved';

    // Update the status in the database
    $query = "UPDATE messages SET status='$new_status' WHERE msg_id='$message_id'";
    if (mysqli_query($conn, $query)) {
        // Redirect back to the messages page after successful update
        header('Location: messages.php');
        exit();
    } else {
        // Show error if the query fails
        echo "Error updating status: " . mysqli_error($conn);
    }
} else {
    // Redirect to the messages page if the request method is not POST
    header('Location: messages.php');
    exit();
}
?>

