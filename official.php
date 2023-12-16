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
            background-color: #333;
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
            padding: 3px;
            text-align: left;
        }

        th {
            background-color: #555;
            color: #fff;
        }

        img {
            max-width: 100px;
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

    <table>
        <thead>
            <tr>
                <th><img src="bossnic.png" alt=""></th>
                <th>Hon. Nicolas "BossNic" Antipuesto</th>
                <th>Barangay Gabi Captain</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Stephen Jumamoy</th>
                <th>Barangay Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Daniel Maino</th>
                <th>Barangay Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Graham Sanchez</th>
                <th>Barangay Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Flora Degamo</th>
                <th>Barangay Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Demeper "Titi" Bentulan</th>
                <th>Barangay Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Erwin Baguio</th>
                <th>Barangay Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Renato Potot</th>
                <th>Barangay Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Grace Ramirez</th>
                <th>Barangay Secretary</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Hasel Pepito</th>
                <th>Barangay Treasurer</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. John Flex Singculan</th>
                <th>SK Chiarman-Gabi</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Sofia Mendheart Jumanoy</th>
                <th>SK Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Heinz Amores</th>
                <th>SK Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Karyl Tiro</th>
                <th>SK Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Alexa Patalinghug</th>
                <th>SK Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Maann Casilac</th>
                <th>SK Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Therese Tiro</th>
                <th>SK Councilor</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th><img src="" alt=""></th>
                <th>Hon. Jessa Inoc</th>
                <th>SK Councilor</th>
            </tr>
        </thead>
        

    </table>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Company Name. All rights reserved.</p>
    </footer>

</body>
</html>
