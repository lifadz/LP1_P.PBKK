<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tag title untuk memberikan nama pada tab di browser -->
    <title>Lifadz Game Store</title>

    <!-- Tag rel icon untuk mengganti logo pada tab browser sesuai dengan url pada href -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2949/2949874.png">

    <!-- Tag style untuk mengatur tampilan/style pada HTML dengan menggunakan code CSS -->
    <style>
    body {
        background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/798fc33f-5338-426c-95ef-0dce36f68da0/d758mbq-3e6c2f7d-9887-4049-b362-a37dc3f28c70.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzc5OGZjMzNmLTUzMzgtNDI2Yy05NWVmLTBkY2UzNmY2OGRhMFwvZDc1OG1icS0zZTZjMmY3ZC05ODg3LTQwNDktYjM2Mi1hMzdkYzNmMjhjNzAucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.J-2AV3qR5pGMAtZlOz6eChHaRGLslojhuYczoNAHi2w');
        background-repeat: no-repeat;
        background-size: cover;

    }

    ul {
        list-style: none;
        padding: 0;
        text-align: center;
        margin-top: 100px;
    }

    li {
        display: inline-block;
        margin: 10px;
    }

    a {
        display: block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    a:hover {
        background-color: #0056b3;
    }
    </style>

</head>

<body>
    <!-- Tag h1 yang berfungsi sebagai header dengan style atribut  -->
    <h1 style="text-align: center; font-family:Helvetica; font-weight:bold;">Selamat Datang di Lifadz Game Store</h1>
    <!-- Tag Br berfungsi untuk membuat new line  -->
    <br>
    <br>
    <!-- Tag h1 yang berfungsi sebagai header dengan style atribut  -->
    <h1 style="text-align: center; font-family:Verdana;">Halo Admin Tercinta ^^</h1>
    <?php
    // Awalan tag untuk membuat script php
    class Menu{ // Pendefinisian nama class Menu yang didalamnya terdapat property dan method
        public $link; // Membuat property $link untuk menyimpan URL file php pada menu
        
        public function __construct($link) { 
            $this->link = $link; // Menginisialisasi property $link dengan nilai yang diberikan saat objek Menu dibuat
        }

        public function render(){
            // Method render() digunakan untuk menampilkan menu sebagai tautan HTML
            // Tautan tersebut mengarah ke URL yang disimpan dalam property $link
            // Nama tautan (teks yang ditampilkan) diambil dari nama file PHP yang disimpan dalam $link, termasuk ekstensinya
            echo '<a href="' . $this->link . '.php">' . $this->link . '</a>';
        }
    }

    // Membuat sebuah array $namaMenu yang berisi objek-objek Menu.
    // Setiap objek Menu diinisialisasi dengan link ke halaman PHP terkait.
    // Ini digunakan untuk membuat menu tautan di halaman utama.
    $namaMenu = [
        new Menu('Voucher'), //Menu untuk ke halaman Voucher
        new Menu('Game'), //Menu untuk ke halaman Game
        new Menu('Transaksi') //Menu untuk ke halaman Transaksi
        
    ]

    ?>

    <!-- Membuat elemen unordered list untuk menampilkan menu -->
    <ul>
        <?php foreach ($namaMenu as $menuButton): ?>
        <!-- Looping melalui setiap objek Menu dalam array $namaMenu -->
        <li>
            <?php $menuButton->render(); ?>
            <!-- Memanggil metode 'render()' pada objek Menu untuk membuat tautan menu -->
        </li>
        </li>
        <?php endforeach; ?>
        <!-- Mengakhiri loop foreach -->
    </ul>
</body>

</html>