<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tag title untuk memberikan nama pada tab di browser -->
    <title>Daftar Voucher Game</title>

    <!-- Tag rel icon untuk mengganti logo pada tab browser sesuai dengan url pada href -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2949/2949874.png">

    <!-- Tag style untuk mengatur tampilan/style pada HTML dengan menggunakan code CSS -->
    <style>
    body {
        background-image: url('https://wallpaperset.com/w/full/e/7/6/511435.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    h1 {
        color: black;
    }

    .daftar-voucher {
        display: flex;
        flex-wrap: wrap;
        grid-template-columns: auto auto auto;
        justify-content: center;
        ;
    }

    .voucher {
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


    .gambar-bulat {

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
    <h1 style="text-align: center; font-family: Helvetica;">Daftar Voucher Game</h1>
    <?php
class Voucher { // Pendefinisian nama class Voucher yang didalamnya terdapat property dan method
    public $namaVoucher; // Property untuk menyimpan nama voucher.
    public $harga; // Property untuk menyimpan harga voucher
    public $image; // Property untuk menyimpan url gambar voucher.

    public function __construct($namaVoucher, $harga, $image){
        // Constructor (__construct) digunakan untuk membuat objek Voucher baru.
        // Menerima tiga parameter: namaVoucher, harga, dan image.
        $this->namaVoucher = $namaVoucher; // Menginisialisasi property $namaVoucher dengan nilai dari parameter.
        $this->harga = $harga; // Menginisialisasi property $harga dengan nilai dari parameter
        $this->image = $image; // Menginisialisasi property $image dengan nilai dari parameter.
    }

}

?>

    <div class="daftar-voucher">
        <?php
        
        // Buat objek-objek Voucher dan disimpan di dalam variabel $daftarVoucher
        $daftarVoucher = [
            
        //Membuat objek baru dari kelas Voucher dengan nama variabel $voucher
        $voucher1 = new Voucher("Steam Wallet 30$", 49.99, "https://dota2tradevn.com/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/s/3/s30.png"),
        
        $voucher2 = new Voucher("Steam Wallet 60.000 IDR", 6.99, "https://id-live-01.slatic.net/p/a1454b48891dda4551eb45bbec7b584b.jpg"),
        
        $voucher3 = new Voucher("Steam Wallet 12.000 IDR", 1.29, "https://lzd-img-global.slatic.net/live/id/p/196620a291ee080d1cc0385b85921262.jpg_720x720q80.jpg"),
        
        $voucher4 = new Voucher("Steam Wallet 120.000 IDR", 7.99, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_jqDFkEU6nNgqiTXMrRx6-zQYLLMNF70FenmXLWm9Fl-OJ4URh-l8ZaxaKrNaw5jKvYM&usqp=CAU"),
        
        $voucher5 = new Voucher("PUBGM UC 3000+", 49.99, "https://dailyspin.id/wp-content/uploads/2020/12/pubg-uc-image-resized.jpg"),

        $voucher6 = new Voucher("PUBGM UC 6000+", 99.99, "https://dailyspin.id/wp-content/uploads/2020/12/pubg-uc-image-resized.jpg"),
        
        $voucher7 = new Voucher("Mobile Legends 774 + 101 Diamonds", 31.99, "https://crm.vcgamers.com/uploads/product/20220401122453produk00.jpg"),
        
        $voucher8 = new Voucher("Mobile Legends 1708 + 302 Diamonds", 36.99, "https://crm.vcgamers.com/uploads/product/20220401122453produk00.jpg")
            
        ];

        // Tampilkan daftar voucher menggunakan foreach untuk Looping melalui setiap objek Voucher dalam array $daftarVoucher
        foreach ($daftarVoucher as $voucher) {
            echo '<div class="voucher">';
            echo '<img src="' . $voucher->image . '" alt="Gambar Game" class="gambar-bulat">'; // Menampilkan gambar voucher
            echo '<p> ' . $voucher->namaVoucher . '</p>'; // Menampilkan nama voucher
            echo '<p> $' . $voucher->harga . '</p>'; // Menampilkan harga voucer
            echo '</div>';
        }
        
        ?>
    </div>
</body>

</html>