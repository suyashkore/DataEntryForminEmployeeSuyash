<?php
require_once 'conn.php';

// Fetch data from the 'employees' table with department names
$sql = "SELECT employees.EmployeeID, employees.Name, departments.Department, employees.Age, employees.Salary 
        FROM employees 
        INNER JOIN departments ON employees.DepartmentID = departments.DepartmentID";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional: Custom CSS to style the table further */
        table {
            width: 100%;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Employee Data</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>EmployeeID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Age</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['EmployeeID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Department']; ?></td>
                            <td><?php echo $row['Age']; ?></td>
                            <td><?php echo $row['Salary']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<div class="container mt-4">
    <a href="data_entry.php" class="btn btn-primary">Go Back to Data Entry Form</a>
</div>
    <!-- Bootstrap JS (Optional) - Only required if you need certain Bootstrap features -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
