<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tag title untuk memberikan nama pada tab di browser -->
    <title>Daftar Transaksi</title>

    <!-- Tag rel icon untuk mengganti logo pada tab browser sesuai dengan url pada href -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2949/2949874.png">

    <!-- Tag style untuk mengatur tampilan/style pada HTML dengan menggunakan code CSS -->
    <style>
    table {
        width: 80%;
        border-collapse: collapse;
        margin: 20px auto;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f0f0f0;
    }

    .gambar-produk {
        width: 150px;
        height: 150px;
    }

    .tombol-kembali {
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 30px;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <a href="index.php" class="tombol-kembali">&#8592;</a>
    <h1 style="text-align:center; font-family:Segoe UI">Daftar Transaksi</h1>

    <?php // Tag awalan scripting php
    class Transaksi { // Pendefinisian nama class Voucher yang didalamnya terdapat property dan method
        public $gambarProduk; // Property untuk menyimpan url gambar produk.
        public $namaProduk; // Property untuk menyimpan nama produk.
        public $tanggalBayar; // Property untuk menyimpan tanggal bayar produk.
        public $jumlahHarga; // Property untuk jumlah harga produk.
        public $metodePembayaran; // Property untuk menyimpan metode pembayaran produk.
        public $status; // Property untuk menyimpan status pembayaran produk.

        public function __construct($gambarProduk, $namaProduk, $tanggalBayar, $jumlahHarga, $metodePembayaran,$status) {
        // Constructor (__construct) digunakan untuk membuat objek Voucher baru.
        // Menerima 6 parameter: gambarProduk, namaProduk, tanggalBayar, jumlahHarga, metodePembayaran, status
        
            $this->gambarProduk = $gambarProduk; // Menginisialisasi property $gambarProduk dengan nilai dari parameter.
            $this->namaProduk = $namaProduk; // Menginisialisasi property $namaProduk dengan nilai dari parameter.
            $this->tanggalBayar = $tanggalBayar; // Menginisialisasi property $tanggalBayar dengan nilai dari parameter.
            $this->jumlahHarga = $jumlahHarga; // Menginisialisasi property $jumlahHarga dengan nilai dari parameter.
            $this->metodePembayaran = $metodePembayaran; // Menginisialisasi property $metodePembayaran dengan nilai dari parameter.
            $this->status = $status; // Menginisialisasi property $status dengan nilai dari parameter.
        }
    }

    // Buat objek-objek Transaksi dan simpan dalam array $daftarTransaksi
    $daftarTransaksi = [

        //Membuat objek baru dari kelas Permainan dengan nama variabel $daftarTransaksi
        new Transaksi(
            "https://image.api.playstation.com/gs2-sec/appkgo/prod/CUSA08519_00/12/i_3da1cf7c41dc7652f9b639e1680d96436773658668c7dc3930c441291095713b/i/icon0.png",
            "Red Dead Redemption 2",
            "2023-09-05",
            39.99,
            "DANA",
            "Sudah Membayar"
        ),
        new Transaksi(
            "https://id-live-01.slatic.net/p/a1454b48891dda4551eb45bbec7b584b.jpg",
            "Steam Wallet 60.000 IDR",
            "2023-09-06",
            6.99,
            "Shopee Pay",
            "Belum Membayar"
        ),
        new Transaksi(
            "https://upload.wikimedia.org/wikipedia/en/5/5b/Mortal_Kombat_1_key_art.jpeg",
            "Mortal Kombat 1",
            "2023-09-07",
            39.99,
            "Transfer Bank: BNI",
            "Sudah Membayar"
        )
    ];
    ?>

    <!-- Tag table untuk membuat table -->
    <table>
        <tr>
            <th>Gambar & Nama Produk</th> <!-- Kolom untuk menampilkan gambar dan nama produk -->
            <th>Tanggal Bayar</th> <!-- Kolom untuk menampilkan tanggal bayar -->
            <th>Jumlah Harga</th> <!-- Kolom untuk menampilkan jumlah harga -->
            <th>Metode Pembayaran</th> <!-- Kolom untuk menampilkan metode pembayaran -->
            <th>Status Pembayaran</th> <!-- Kolom untuk menampilkan status pembayaran -->
        </tr>
        <?php foreach ($daftarTransaksi as $transaksi): // Tampilkan daftar transaksi menggunakan foreach untuk Looping melalui setiap objek Transaksi dalam array $daftarTransaksi
        ?>
        <tr>
            <td>
                <img src="<?php echo $transaksi->gambarProduk; ?>" alt="Gambar Produk" class="gambar-produk">
                <br>

                <!-- Menampilkan gambar produk dan nama produk -->
                <?php echo $transaksi->namaProduk; ?>

            </td>
            <td><?php echo $transaksi->tanggalBayar; ?></td> <!-- Menampilkan tanggal bayar -->
            <td><?php echo '$' . $transaksi->jumlahHarga; ?></td> <!-- Menampilkan jumlah harga -->
            <td><?php echo $transaksi->metodePembayaran; ?></td> <!-- Menampilkan metode pembayaran -->
            <td><?php echo $transaksi->status; ?></td> <!-- Menampilkan status pembayaran -->
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>