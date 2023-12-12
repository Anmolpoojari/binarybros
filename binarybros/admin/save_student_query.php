<?php
    require_once 'connect.php';
    
    if (isset($_POST['save'])) {
        $student_no = $_POST['student_no'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $course = $_POST['course'];
        $section = $_POST['section'];
        $email = $_POST['email'];
        $status = $_POST['status']; // Retrieve the email value
        
        // Corrected SQL query with values properly formatted
        $query = "INSERT INTO `student` VALUES ('', '$student_no', '$firstname', '$middlename', '$lastname', '$course', '$section', '$email','$status')";
        
        // Execute the query
        $result = $conn->query($query) or die(mysqli_error($conn));
        
        if ($result) {
            echo '
                <script type="text/javascript">
                    alert("Saved Record");
                    window.location = "student.php";
                </script>
            ';
        } else {
            echo "Error: " . $conn->error; // Display error message if query fails
        }
    }
?>
