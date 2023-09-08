<!DOCTYPE html>
<html>
<head>
    <title>Advanced Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Advanced Form</h2>
        <form action="process_form.php" method="post" enctype="multipart/form-data">
            <!-- Basic Fields -->
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <!-- Dropdown -->
            <label for="city">City:</label>
            <select name="city" required>
                <option value="New York">New York</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Chicago">Chicago</option>
                <!-- Add more cities here -->
            </select><br>

            <!-- Checkboxes -->
            <label>Hobbies:</label><br>
            <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
            <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling<br>
            <input type="checkbox" name="hobbies[]" value="Painting"> Painting<br>

            <!-- File Uploads -->
            <label for="image">Upload Image:</label>
            <input type="file" name="image" accept="image/*"><br>

            <label for="excel">Upload Excel:</label>
            <input type="file" name="excel" accept=".xlsx, .xls"><br>

            <!-- Advanced Fields -->
            <!-- Add more fields here as needed -->

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
