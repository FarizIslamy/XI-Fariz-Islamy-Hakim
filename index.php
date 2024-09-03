<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }
        /* Reset default margin and padding */
        body, h1, h2, p, ul {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General body styling */
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            background: linear-gradient(to bottom right, #e0f7fa, #80deea);
            color: #333;
            min-height: 100vh; /* Ensure the body takes at least the full height of the viewport */
            display: flex;
            flex-direction: column;
        }

        /* Header styling */
        header {
            background-color: #004d40;
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        header h1 {
            font-size: 2.5em;
        }

        /* Container for sidebar and content */
        .container {
            display: flex;
            flex: 1;
            margin: 20px;
            gap: 20px;
        }

        /* Sidebar styling */
        .sidebar {
            background-color: #004d40;
            color: #fff;
            width: 250px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            color: #e0f2f1;
            margin-bottom: 15px;
            font-size: 1.5em;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            color: #e0f2f1;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .sidebar ul li a:hover {
            color: #80deea;
        }

        /* Main content styling */
        .content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .content h2 {
            color: #004d40;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        /* Footer styling */
        footer {
            background-color: #004d40;
            color: #fff;
            text-align: center;
            padding: 10px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            width: 100%;
            margin-top: auto; /* Push footer to the bottom */
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                margin-bottom: 20px;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Halaman Utama</h1>
    </header>
    <div class="container">
        <nav class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="profil_fariz.php">Profil</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </nav>
        <main class="content">
            <h2>Selamat Datang di Halaman Utama</h2>
            <p>Silahkan memilih menu yang tersedia</p>
        </main>
    </div>
    <footer>
        <p>Footer Content &copy; 2024</p>
    </footer>
</body>
</html>