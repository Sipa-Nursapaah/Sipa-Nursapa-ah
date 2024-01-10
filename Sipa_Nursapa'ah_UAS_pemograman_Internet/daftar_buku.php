<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

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
            width: 80%;
            margin-top: 20px;
        }

        .edit-button {
            background-color: #ffffff; 
            color: #000000; 
            border: 1px solid #000000; 
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px;
        }

        .edit-button:hover {
            background-color: #f2f2f2; 
            border: 1px solid #000000;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    th, td {
        padding: 15px;
        border-bottom: 1px solid #ddd;
        text-align: left;
        transition: background 0.3s;
    }

    th {
        background-color: #3498db;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

        .detail-button {
            background-color: #4caf50;
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

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        td.title-column {
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #ff0000;
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

        .delete-button:hover {
            background-color: #cc0000;
        }

        .back-button {
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
            margin-top: 10px;
        }

        .back-button:hover {
            background-color: #2980b9;
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
        <h2>Daftar Buku</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $koneksi = mysqli_connect('localhost', 'root', '', 'nama_database');

                $query = "SELECT * FROM books";
                $result = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td class='title-column'>{$row['title']}</td>";
                    echo "<td>{$row['author']}</td>";
                    echo "<td>{$row['published_year']}</td>";
                    echo "<td>{$row['isbn']}</td>";
                    echo "<td>
                            <button class='detail-button' onclick='showPopup({$row['id']})'>Detail</button>
                            <a href='edit_buku.php?id={$row['id']}'><button class='edit-button'>Edit</button></a>
                            <button class='delete-button' onclick='confirmDelete({$row['id']})'>Hapus</button>
                          </td>";
                    echo "</tr>";
                }

                mysqli_close($koneksi);
                ?>
            </tbody>
        </table>

        <a href="tambah_buku_form.php">
            <button class="back-button">Kembali ke Tambah Buku</button>
        </a>
    
    </div>

    

    <div id="popup" class="popup">
        <span class="close-btn" onclick="closePopup()">X</span>
        <h2>Detail Buku</h2>
        <div id="popup-content"></div>
    </div>

    <script>
        function showPopup(bookId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("popup-content").innerHTML = xhr.responseText;
                    document.getElementById("popup").style.display = "block";
                }
            };
            xhr.open("GET", "detail_buku.php?id=" + bookId, true);
            xhr.send();
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        function confirmDelete(bookId) {
            var r = confirm("Apakah Anda yakin ingin menghapus buku ini?");
            if (r == true) {
                window.location.href = "controller_delete_buku.php?id=" + bookId;
            }
        }
    </script>
    <footer>
        <p>© 2024 Manajemen Buku Sipa Nursapa'ah. All rights reserved.</p>
    </footer>
</body>
</html>