<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Gambar1.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-color: rgba(244, 244, 244, 0.8); 
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }


        header, footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            text-align: center;
            margin-top: 20px;
        }

        h2 {
            color: #333;
        }

        .button-container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .action-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
        }

        .action-button:hover {
            background-color: #45a049;
        }

        .profile-info {
            background-color: #f4f4f4;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            margin-top: 20px;
            text-align: left;
        }

        .profile-info p {
            margin: 8px 0;
            font-size: 16px;
            color: #333;
        }

        .profile-info p span {
            font-weight: bold;
            margin-right: 10px;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Manajemen Buku Sipa Nursapa'ah</h1>
    </header>
    <div class="container">
        <h2>Selamat Datang di Manajemen Buku</h2>
        <p>Temukan, kelola, dan tambahkan buku-buku favorit Anda dengan mudah!</p>
        <div class="button-container">
            <a href="tambah_buku_form.php" class="action-button">Tambah Buku</a>
        </div>

        <div class="button-container">
            <a href="daftar_buku.php" class="action-button">Daftar Buku</a>
        </div>
    </div>

    <footer>
        <p>© 2024 Manajemen Buku Sipa Nursapa'ah. All rights reserved.</p>
    </footer>
</body>
</html>
