<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa</title>
    <style>
        body {
            background-color: #f5f5f5; /* Background color for the entire page */
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .profile-container {
            background-color: #ffffff; /* White background for the profile container */
            padding: 40px;
            border-radius: 20px;
            border: 2px solid #800080; /* Purple border color */
            max-width: 600px;
            margin: 100px auto; /* Center the div horizontally */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for a 3D effect */
        }
        h1 {
            font-size: 32px;
            color: #333333;
            margin-bottom: 20px;
        }
        p {
            font-size: 24px;
            color: #0000ff;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <?php
        // Define variables with personal information
        $nama = "Fariz Islamy Hakim"; // Name of the student
        $umur = 17; // Age of the student
        $tinggi = 158; // Height of the student in cm
        $sekolah = "SMKN 2 Bandung"; // Name of the school
        $cita_cita = "Pengusaha"; // Career aspiration

        // Output the profile information inside a styled div
        echo "<h1>Profil Siswa</h1>";

        // Display the student's name in blue
        echo "<p>Nama: <strong>$nama</strong></p>";

        // Display the student's age in blue
        echo "<p>Umur: <strong>$umur tahun</strong></p>";

        // Display the student's height in blue
        echo "<p>Tinggi: <strong>$tinggi cm</strong></p>";

        // Display the student's school in blue
        echo "<p>Sekolah: <strong>$sekolah</strong></p>";

        // Display the student's career aspiration in blue
        echo "<p>Cita-cita: <strong>$cita_cita</strong></p>";
        ?>
    </div>
</body>
</html>