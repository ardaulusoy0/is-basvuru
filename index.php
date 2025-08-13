<?php
// Ürün verilerini bir dizi olarak belirttim.
$urunler = [
    ["id" => 1, "ad" => "Kablosuz Mouse", "fiyat" => 150, "resim" => "assets/img/products/kablosuz-mouse.jpg"],
    ["id" => 2, "ad" => "Mekanik Klavye", "fiyat" => 450, "resim" => "assets/img/products/mekanik-klavye.jpg"],
    ["id" => 3, "ad" => "Bluetooth Kulaklık", "fiyat" => 300, "resim" => "assets/img/products/bluetooth-kulaklik.jpg"],
    ["id" => 4, "ad" => "Laptop Standı", "fiyat" => 250, "resim" => "assets/img/products/laptop-standi.jpg"],
    ["id" => 5, "ad" => "Harici Disk 1TB", "fiyat" => 900, "resim" => "assets/img/products/tasinabilir-disk.jpg"],
    ["id" => 6, "ad" => "Gaming Mouse Pad", "fiyat" => 80, "resim" => "assets/img/products/gaming-mousepad.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Arda Ulusoy – İşe Alım Projesi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <?php include 'includes/header.php' ?>

    <section class="max-w-6xl mx-auto py-32 md:py-52 flex p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <div class="pt-5">
                <h2 class="text-6xl font-bold">
                    <span class="text-blue-500 block">Kaliteli Ürünler,</span>
                    Uygun Fiyatlar!
                </h2>
                <p class="text-gray-500 mt-5 text-sm">
                    Alışverişin keyfini çıkarın.
                </p>
                <a href="#urunler" class=" border-none">
                    <button class="mt-4 button-sm rounded-0 px-6 py-2 bg-blue-500 text-white hover:bg-blue-600 transition">
                        Hemen Başla
                    </button>
                </a>
            </div>

            <div class="flex justify-end border-t my-5 py-5 border-gray-300 md:border-none">
                <p class="text-gray-600 text-center">
                    Sepetinizi hazırlayın ve alışveriş keyfini yaşayın.
                    En kaliteli ürünleri, en uygun fiyatlarla kapınıza kadar getirelim.
                    Hızlı kargo, güvenli ödeme ve iade garantisi ile alışverişin tadını çıkarın.
                    Müşteri memnuniyeti bizim için her şeyden önemlidir.
                </p>
            </div>
        </div>
    </section>

    <section id="nedenbiz" class="bg-gray-100 whous mx-auto p-32 flex flex-col items-center">
        <h2 class="text-4xl font-bold mb-4 text-blue-500">Neden Biz?</h2>
        <p class="text-gray-600 max-w-2xl text-center mb-12">Alışverişinizde size sunduğumuz ayrıcalıklar.</p>

        <div class="flex flex-col md:flex-row gap-6">
            <div class="card bg-white rounded-xl border-1 p-6 text-center shadow-sm hover:shadow-md transition w-80">
                <div class="text-4xl text-sky-500 mb-3">
                    <i class="bi bi-cart-fill"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Kolay Alışveriş</h3>
                <p class="leading-relaxed px-4">Sepetinizi hazırlayın ve alışveriş keyfini yaşayın.</p>
            </div>
            <div class="card bg-white rounded-xl border-1 p-6 text-center shadow-sm hover:shadow-md transition w-80">
                <div class="text-4xl text-green-500 mb-3">
                    <i class="bi bi-truck"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Hızlı Teslimat</h3>
                <p class="leading-relaxed px-4">Hızlı ve güvenilir kargo ile siparişleriniz en kısa sürede kapınıza ulaşır.</p>
            </div>
            <div class="card bg-white rounded-xl border-1 p-6 text-center shadow-sm hover:shadow-md transition w-80">
                <div class="text-4xl text-yellow-500 mb-3">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Güvenli Ödeme</h3>
                <p class="leading-relaxed px-4">Güvenli ödeme ve iade garantisi ile alışverişin tadını çıkarın.</p>
            </div>
        </div>
    </section>

    <section id="urunler" class="bg-gray-50 py-32 flex flex-col px-32 md:px-48">
        <div class="mb-12">
            <h2 class="text-4xl font-bold mb-4 text-blue-500">Ürünlerimiz</h2>
            <p class="text-gray-600">En beğenilen ürünlerimizi inceleyin.</p>
        </div>

        <div class="grid products grid-cols-1 gap-6 w-100 md:grid-cols-3">
            <?php foreach ($urunler as $urun) { ?>
                <div class="grid grid-cols-3 gap-1 items-center border-b pb-6 hover:border-blue-500 duration-300">
                    <img src="<?php echo $urun['resim'] ?>" alt="<?php echo $urun['ad'] ?>" class="col-span-2 rounded-lg object-cover">
                    <div class="col-span-1 flex flex-col justify-between">
                        <div class="mb-4">
                            <h3 class="text-md font-semibold"><?php echo $urun['ad'] ?></h3>
                            <p class="text-gray-600 text-sm font-bold">₺<?php echo $urun['fiyat'] ?></p>
                        </div>
                        <button class="bg-blue-500 w-30 text-white text-sm p-1 select-product" onclick="urunSec(<?php echo $urun['id'] ?>)">Ürünü Seç</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <div id="cartSidebar" class="fixed top-0 right-0 w-80 max-w-full h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50 flex flex-col">
        <div class="flex justify-between items-center p-4 border-b">
            <h2 class="text-lg font-semibold">Sepetiniz</h2>
            <button onclick="toggleSepet()" class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
        </div>
        <div id="cartItems" class="flex-1 overflow-y-auto p-4 text-gray-700">Sepetiniz boş.</div>
        <div class="p-4 border-t">
            <div class="flex justify-between font-bold mb-4">
                <span>Toplam:</span>
                <span id="totalPrice">0 TL</span>
            </div>
            <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">Satın Al</button>
        </div>
    </div>
<?php include 'includes/footer.php' ?>