<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tag title untuk memberikan nama pada tab di browser -->
    <title>Pelanggan</title>

    <!-- Tag rel icon untuk mengganti logo pada tab browser sesuai dengan url pada href -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2949/2949874.png">

    <!-- Tag style untuk mengatur tampilan/style pada HTML dengan menggunakan code CSS -->
    <style>
    body {
        background-image: url('https://wallpaperaccess.com/full/1264434.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        ;
    }

    .daftar-game {
        display: flex;
        flex-wrap: wrap;
        grid-template-columns: auto auto auto;
        justify-content: center;
        ;
    }

    .game {
        font-weight: bold;
        text-align: center;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 250px;
        margin-bottom: 20px;
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        box-shadow: 0px 0px 20px rgba(255, 255, 255, 1);

    }

    h1 {
        color: white;
    }

    .gambar-bulat {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-bottom: 10px;
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
    <!-- Tag a href tombol kembali yang tujuannya kembali ke halaman utama atau index.php -->
    <a href="index.php" class="tombol-kembali">&#8592;</a>

    <!-- Tag h1 yang berfungsi sebagai header dengan style atribut  -->
    <h1 style="text-align: center; font-family: Helvetica;">Daftar Game</h1>

    <?php
        // Awalan tag untuk membuat script php
class Permainan { // Pendefinisian nama class Permainan yang didalamnya terdapat property dan method
    public $namaGame; // Property untuk menyimpan nama game.
    public $genres; // Property untuk menyimpan genre game.
    public $harga; // Property untuk menyimpan harga game.
    public $image; // Property untuk menyimpan url gambar gamer.

    public function __construct($namaGame, $genres, $harga, $image){
        // Constructor (__construct) digunakan untuk membuat objek Permainan baru.
        // Menerima empat parameter: namaGame, genre, harga, dan image
        
        $this->namaGame = $namaGame; // Menginisialisasi property $namaGame dengan nilai dari parameter.
        $this->genres = $genres; // Menginisialisasi property $genres dengan nilai dari parameter.
        $this->harga = $harga; // Menginisialisasi property $harga dengan nilai dari parameter.
        $this->image = $image; // Menginisialisasi property $image dengan nilai dari parameter.
    }

}

?>

    <div class="daftar-game">
        <?php // Awalan tag untuk membuat script php
        
        // Buat objek-objek Permainan dan simpan dalam array $daftarGame
        $daftarGame = [
            
        //Membuat objek baru dari kelas Permainan dengan nama variabel $game
        $game1 = new Permainan("Red Dead Redemption 2", "Open-World", 39.99, "https://image.api.playstation.com/gs2-sec/appkgo/prod/CUSA08519_00/12/i_3da1cf7c41dc7652f9b639e1680d96436773658668c7dc3930c441291095713b/i/icon0.png"),
        
        $game2 = new Permainan("Grand Theft Auto V", "Open-World", 40.99, "https://upload.wikimedia.org/wikipedia/id/a/a5/Grand_Theft_Auto_V.png"),

        $game3 = new Permainan("Battlefield I", "FPS, Action", 30.99, "https://image.api.playstation.com/vulcan/img/rnd/202010/0612/B4pRK104PVoGPCh1zkb0gRTa.jpg"),

        $game4 = new Permainan("WWE 2K23", "Wrestling", 32.99, "https://upload.wikimedia.org/wikipedia/en/thumb/5/53/WWE_2K23_cover.jpg/220px-WWE_2K23_cover.jpg"),

        $game5 = new Permainan("Mortal Kombat I", "Fighting", 31.99, "https://upload.wikimedia.org/wikipedia/en/5/5b/Mortal_Kombat_1_key_art.jpeg"),
        
        $game6 = new Permainan("TEKKEN 8", "Fighting", 30.99, "https://upload.wikimedia.org/wikipedia/en/b/b4/Tekken_8_cover_art.jpg"),

        $game7 = new Permainan("Dark Souls 3", "Action role-playing
        ", 39.99, "https://image.api.playstation.com/cdn/HP0700/CUSA03434_00/8h7cWRisC1eoKS3dNjsSt7bMM59QDsJhh2VpJ5v0j18T57tUOabxc3QaG8A5HAJw.png"),
        
        $game8 = new Permainan("God of War Ragnarok", "Action-Adventure", 34.99, "https://image.api.playstation.com/vulcan/ap/rnd/202207/1210/4xJ8XB3bi888QTLZYdl7Oi0s.png")
            
        ];

        // Tampilkan daftar game menggunakan foreach untuk Looping melalui setiap objek Permainan dalam array $daftarGame
        foreach ($daftarGame as $game) {
            echo '<div class="game">';
            echo '<img src="' . $game->image . '" alt="Gambar Game" class="gambar-bulat">'; // Menampilkan gambar game
            echo '<p> ' . $game->namaGame . '</p>'; // Menampilkan nama game
            echo '<p> ' . $game->genres . '</p>'; // Menampilkan genre game
            echo '<p> $' . $game->harga . '</p>'; // Menampilkan harga game
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>