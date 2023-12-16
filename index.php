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
            <table>
                <th>
                        <h2><img src="contact1.jpg" alt=""></h2>
                        <h2><img src="contact2.jpg" alt=""></h2>
                </th>
                <th>
                         <p>
                        GOODNEWS! 🔥 TO THE ENTREPRENEURS! 🎉
                        <br>As a businessman, our permits cost me a lot, so before  <br>
                        January arrives during the "renewal of permits"  <br>
                        I called our Councillors to amend their prices and  <br>
                        I'm very grateful that everyone agreed that Take it easy. <br>
                        <br> Special Thanks To Our Councilors❤️ <br>
                        <br>Hon. Stephen Jumamoy
                        <br>Hon. Daniel Miano
                        <br>Hon. Graham Sanchez
                        <br>Hon. Flora Degamo
                        <br>Hon. Demeper Bentulan
                        <br> Hon. Erwin Baguio
                        <br>Hon. Renato Potot
                        <br>Hon. John Flex Singculan (SK Chairman)
                        <br>Tan awa ninyo sa ubos ang atong mga bag ong presyo sa atong mga permits.
                            <br>
                            <img src="permits.jpg" alt="">
                        </p>
                </th>
                <th>
                        <h2><img src="contact1.jpg" alt=""></h2>
                        <h2><img src="contact2.jpg" alt=""></h2>
                </th>
            </table>
        

        <footer>
            <p>&copy; <?php echo date('Y'); ?> Your Company Name. All rights reserved.</p>
        </footer>

    </body>
    </html>
