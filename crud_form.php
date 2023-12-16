<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiling</title>
    <style>
        body
        {
            background-color: gray;
        }
        text
        {
            color: black;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
        }

    </style>
    <!-- Include Bootstrap CSS here -->
</head>
<body>
    <div class="container mt-5">
        <!-- Create Form -->
        <form method="POST" action="record.php">
            <h2>Create Record</h2>
            <label>Last Name:</label>
            <input type="text" name="last_name" required>
            <br>
            <label>First Name:</label>
            <input type="text" name="first_name" required>
            <br>
            <label>Middle Name:</label>
            <input type="text" name="middle_name">
            <br>
            <label>Extension Name:</label>
            <input type="text" name="extension_name">
            <br>
            <label>Age:</label>
            <input type="number" name="age" required>
            <br>
            <label>Address:</label>
            <input type="text" name="address">
            <br>
            <label>Birthday:</label>
            <input type="date" name="birthday">
            <br>
            <label>Status:</label>
            <select name="status">
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="relict">Widow/Widower</option>
                <option value="singleparent">Single Parent</option>
                <option value="livein">Live-In</option>
            </select>
            <label>Beneficiary:</label>
            <select name="benefits">
                <option value="none">None</option>
                <option value="pantawid">4P's</option>
                <option value="sc">Senior Citizen</option>
                <option value="pwd">PWD</option>
            </select>
            <br>
            <button type="submit" name="create">Create</button>
        </form>

        
    </div>
    <!-- Include Bootstrap JS and other scripts here -->
</body>
</html>
