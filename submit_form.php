<?php
// ... (Your existing code above)

if ($conn->query($sql) === TRUE) {
    // Form submitted successfully
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// ... (Your existing code below)
?>