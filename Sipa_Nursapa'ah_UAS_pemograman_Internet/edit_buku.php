<?php



$koneksi = mysqli_connect('localhost', 'root', '', 'nama_database');


if (isset($_GET['id'])) {
    $bookId = $_GET['id'];

    
    $query = "SELECT * FROM books WHERE id = $bookId";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $book = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . mysqli_error($koneksi);
        exit;
    }
} else {
    echo "ID buku tidak ditemukan!";
    exit;
}

// Proses jika formulir edit telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi input (Anda dapat menambahkan validasi lebih lanjut)

    // Ambil data dari formulir
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $isbn = $_POST['isbn'];

    // Query untuk melakukan update informasi buku dalam database
    $updateQuery = "UPDATE books SET title='$title', author='$author', published_year='$published_year', isbn='$isbn' WHERE id = $bookId";
    $updateResult = mysqli_query($koneksi, $updateQuery);

    if ($updateResult) {
        // Redirect ke halaman daftar buku setelah berhasil mengedit
        header('Location: daftar_buku.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            margin-top: 20px;
            text-align: center; /* Teks diatur ke tengah */
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    
        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px; /* Diturunkan ke 10px */
        }

        a[href="tampilan_awal.php"] button,
        a[href="daftar_buku.php"] button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
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

    <form action="" method="post">
        <h2>Edit Buku</h2>

        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $book['title']; ?>" required>

        <label for="author">Author:</label>
        <input type="text" name="author" value="<?php echo $book['author']; ?>" required>

        <label for="published_year">Published Year:</label>
        <input type="number" name="published_year" value="<?php echo $book['published_year']; ?>" required>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" value="<?php echo $book['isbn']; ?>" required>

        <input type="submit" value="Simpan Perubahan">
    </form>

    <footer>
        <p>© 2024 Manajemen Buku Sipa Nursapa'ah. All rights reserved.</p>
    </footer>
</body>
</html>