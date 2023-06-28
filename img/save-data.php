<?php
    // Retrieve the submitted form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Optional: Perform any necessary validation or data sanitization

    // Save the data to a file or a database
    $data = "Name: $name\nEmail: $email\n";
    file_put_contents('saved_data.txt', $data, FILE_APPEND);

    // Optional: Provide a response or redirect the user
    echo "Data saved successfully!";
?>