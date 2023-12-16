<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Home Page with Logo</title>
        <style>
            /* Add your CSS styles here */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
            }

            header {
                background-color: #777;
                color: #fff;
                padding: 10px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            nav {
                background-color: #555;
                overflow: hidden;
                display: flex;
                justify-content: flex-end;
            }

            nav a {
                color: #fff;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            nav a:hover {
                background-color: #ddd;
                color: #333;
            }

            section {
                padding: 20px;
            }

            footer {
                background-color: #333;
                color: #fff;
                padding: 10px;
                text-align: center;
            }
            
            th, td {
                border: 1px solid #ddd;
                padding: 1px;
                text-align: left;
            }

            th {
                background-color: #555;
                color: #fff;
            }

            img {
                max-width: 300px;
                height: auto;
            }
        </style>
    </head>
    <body>

        <header>
            <!-- Replace 'path/to/your/logo.png' with the actual path to your logo -->
            <img src="logo.jpg" alt="Logo" width="100" height="100">
            <h1>Welcome to Our Website</h1>
        </header>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="official.php">Barangay Official</a>
            <a href="record.php">Records</a>
            <a href="contact.php">Contact</a>
            <!-- Add more navigation links as needed -->
        </nav>

        <section>
            <h2>Welcome to our Barangay Gabi Websites</h2>
            <p>
                Welcome to our Barangay Gabi Websites

                Meet our Brgy. Official
                    
            </p>
            
        </section>
        <h2>Records</h2>
        <table border="1">
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Extension Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Birthday</th>
                <th>Status</th>
                <th>Benefits</th>
            </tr>
            
        </table>
        <footer>
            <p>&copy; <?php echo date('Y'); ?> Your Company Name. All rights reserved.</p>
        </footer>

    </body>
    </html>
