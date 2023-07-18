<!DOCTYPE html>
<html>
<head>
    <title>Data Entry Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional: Custom CSS to style the form further */
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container mt-4">
            <h1>Data Entry Form</h1>
            <form method="post" action="insert_data.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department:</label>
                    <select name="department" id="department" class="form-control" required>
                        <option value="" selected disabled>Select Department</option>
                        <option value="1">IT</option>
                        <option value="2">HR</option>
                        <option value="3">Marketing</option>
                        <option value="4">Finance</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age:</label>
                    <input type="number" name="age" id="age" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary:</label>
                    <input type="number" name="salary" id="salary" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
       
                                      <a href="data_display.php" class="btn btn-primary">All Data Show</a> <!-- Link to data_display.php -->
     </form>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) - Only required if you need certain Bootstrap features -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
