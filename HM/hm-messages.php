<?php include('hm-header.php'); ?>
<div class="container contact-container">

    <h2 style="text-align: center;">Messages</h2>
    <br>
    <?php
    // Fetch user details from session
    $username = $_SESSION['username'];
    $hostel_man_id = $_SESSION['hm_id'];

    // Query to fetch messages for the logged-in hostel manager
    $query = "SELECT * FROM messages WHERE hm_id = '$hostel_man_id'";
    $result = mysqli_query($conn, $query);

    // Check if no messages exist
    if (mysqli_num_rows($result) == 0) {
        echo '<br><br><br><h4 style="text-align:center;">No Messages</h4>';
    }

    // Handle form submission for status toggle
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['message_id'])) {
        $message_id = $_POST['message_id'];
        $current_status = $_POST['current_status'];

        // Toggle the status
        $new_status = ($current_status === 'Solved') ? 'Unsolved' : 'Solved';

        // Update the status in the database
        $update_query = "UPDATE messages SET status = '$new_status' WHERE msg_id = '$message_id'";
        if (mysqli_query($conn, $update_query)) {
            // Reload the page after updating the status
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error updating status: " . mysqli_error($conn);
        }
    }

    // Loop through and display each message
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <b><?php echo htmlspecialchars($row['subject']); ?></b>
                </div>
                <div class="card-body">
                    <?php echo htmlspecialchars($row['message']); ?>
                </div>
                <div class="card-footer">
                    <b>Student ID:</b> <?php echo htmlspecialchars($row['student_id']); ?>
                    <span style="float: right;"><b>Time:</b> <?php echo htmlspecialchars($row['time_stamp']); ?></span>
                </div>

                <!-- Solved/Unsolved Button -->
                <div class="card-footer">
                    <form method="post" action="" style="display:inline;">
                        <input type="hidden" name="message_id" value="<?php echo $row['msg_id']; ?>">
                        <input type="hidden" name="current_status" value="<?php echo $row['status']; ?>">
                        <?php if ($row['status'] === 'Solved') { ?>
                            <button type="submit" class="btn btn-warning">Unsolved</button>
                        <?php } else { ?>
                            <button type="submit" class="btn btn-success">Solved</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
        <?php
    }
    ?>
</div>
<br><br><br><br><br><br>
<?php include('hm-footer.php'); ?>

