<?php
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic validation
    if (empty($_POST['name']) || empty($_POST['department']) || empty($_POST['age']) || empty($_POST['salary'])) {
        echo "All fields are required.";
    } else {
        $name = $_POST['name'];
        $departmentId = $_POST['department'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        // Insert data into the 'employees' table
        $sql = "INSERT INTO employees (Name, DepartmentID, Age, Salary) VALUES ('$name', $departmentId, $age, $salary)";
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully!";
            // Redirect to data_display.php after successful data insertion
            header("Location: data_display.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
