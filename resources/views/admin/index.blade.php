<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Penginapan</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f4f4; /* Latar belakang abu-abu muda */
            margin: 0;
            padding: 20px;
        }

        /* Ini adalah container utama yang Anda minta ditaruh di tengah */
        .container {
            max-width: 600px; /* Lebar maksimum */
            margin: 50px auto; /* Otomatis di tengah secara horizontal, 50px dari atas */
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px; /* Sudut membulat */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); /* Bayangan halus */
        }

        h3 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
            color: #333;
        }
        
        h4 {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
            color: #444;
        }

        /* Grup untuk form pencarian */
        .search-form {
            display: flex; /* Membuat input dan tombol sejajar */
            gap: 10px; /* Jarak antara input dan tombol */
            margin-top: 20px;
        }

        /* Input pencarian */
        input[type="text"] {
            flex-grow: 1; /* Input mengambil sisa ruang */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        #fx{
            display: flex;
            justify-content: space-between;
        }

        /* Tombol-tombol */
        .btn {
            display: inline-block;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            font-weight: 500;
            cursor: pointer;
            border: 1px solid transparent;
            transition: background-color 0.2s;
        }

        /* Tombol "Cari" (Biru) */
        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Tombol "Detail" (Putih dengan border) */
        .btn-secondary {
            background-color: #ffffff;
            color: #333;
            border: 1px solid #ccc;
        }
        .btn-secondary:hover {
            background-color: #f8f8f8;
        }

        /* Tabel Daftar Penginapan */
        .penginapan-list table {
            width: 100%;
            border-collapse: collapse;
        }
        .penginapan-list td {
            padding: 12px 5px;
            vertical-align: middle;
            border-bottom: 1px solid #f0f0f0; /* Garis pemisah tipis */
        }
        .penginapan-list tr:last-child td {
            border-bottom: none; /* Hilangkan garis di baris terakhir */
        }
        .penginapan-list td:first-child {
            font-weight: 500;
            color: #555;
        }

        /* Kotak Status Pemesanan */
        .status-box {
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            color: #777;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <h3>Sistem Informasi Pemesanan Penginapan</h3>

        <div>
            <form action="" method="GET" class="search-form">
                <input type="text" id="cari" name="cari" placeholder="Cari penginapan...">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>

        <div class="penginapan-list" style="margin-top: 30px;">
            <h4>Daftar Penginapan</h4>
            <table>
                <tr>
                    <td>Penginapan Sentosa</td>
                    <td style="text-align: right;">
                        <a href="detail" class="btn btn-secondary">Detail</a>
                    </td>
                </tr>
            </table>
        </div>
        
        <div style="margin-top: 30px;">
            <h4>Status Pemesanan</h4>
            <table>
                <tr>
                    <td>Penginapan Sentosa</td>
                    <td style="text-align: right;">
                        <a href="ulasan" id="fx" class="btn btn-secondary">Ulasan</a>
                    </td>
                </tr>
            </table>
            {{-- <div class="status-box">
                Belum ada pesanan
            </div> --}}
        </div>
    </div>

</body>
</html>