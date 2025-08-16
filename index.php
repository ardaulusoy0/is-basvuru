<?php
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
<html lang="en" class="transition-colors duration-300">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Arda Ulusoy – İşe Alım Projesi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body class="bg-gray-200 text-gray-800 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300">
    <?php include 'includes/header.php' ?>

    <!-- Dark Mode Toggle -->
    <button id="darkToggle" class="fixed bottom-4 right-4 bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-gray-200 p-3 rounded-full shadow-lg z-50">
        <i class="bi bi-moon-fill"></i>
    </button>

    <section class="max-w-6xl mx-auto py-32 md:py-52 flex p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <div class="pt-5">
                <h2 class="text-6xl font-bold">
                    <span class="text-blue-950 dark:text-gray-500 block">Kaliteli Ürünler,</span>
                    Uygun Fiyatlar!
                </h2>
                <p class="text-gray-500 dark:text-gray-300 mt-5 text-sm">
                    Alışverişin keyfini çıkarın.
                </p>
                <a href="#urunler" class=" border-none">
                    <button class="mt-4 button-sm rounded-0 px-6 py-2 bg-blue-800 text-white hover:bg-blue-600 transition">
                        Hemen Başla
                    </button>
                </a>
            </div>

            <div class="flex justify-end border-t my-5 py-5 border-gray-300 dark:border-gray-700 md:border-none">
                <p class="text-gray-600 dark:text-gray-300 text-center">
                    Sepetinizi hazırlayın ve alışveriş keyfini yaşayın.
                    En kaliteli ürünleri, en uygun fiyatlarla kapınıza kadar getirelim.
                    Hızlı kargo, güvenli ödeme ve iade garantisi ile alışverişin tadını çıkarın.
                    Müşteri memnuniyeti bizim için her şeyden önemlidir.
                </p>
            </div>
        </div>
    </section>

    <section id="nedenbiz" class="bg-gray-100 dark:bg-gray-800 mx-auto p-32 flex flex-col items-center transition-colors duration-300">
        <h2 class="text-4xl font-bold mb-4 dark:text-gray-100 text-blue-950">Neden Biz?</h2>
        <p class="text-gray-600 dark:text-gray-300 max-w-2xl text-center mb-12">Alışverişinizde size sunduğumuz ayrıcalıklar.</p>

        <div class="flex flex-col md:flex-row gap-6">
            <div class="card bg-white dark:bg-gray-700 border-1 p-6 text-center shadow-sm hover:shadow-md transition w-80">
                <div class="text-4xl text-sky-500 mb-3">
                    <i class="bi bi-cart-fill"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Kolay Alışveriş</h3>
                <p class="leading-relaxed px-4">Sepetinizi hazırlayın ve alışveriş keyfini yaşayın.</p>
            </div>
            <div class="card bg-white dark:bg-gray-700 border-1 p-6 text-center shadow-sm hover:shadow-md transition w-80">
                <div class="text-4xl text-green-500 mb-3">
                    <i class="bi bi-truck"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Hızlı Teslimat</h3>
                <p class="leading-relaxed px-4">Hızlı ve güvenilir kargo ile siparişleriniz en kısa sürede kapınıza ulaşır.</p>
            </div>
            <div class="card bg-white dark:bg-gray-700 border-1 p-6 text-center shadow-sm hover:shadow-md transition w-80">
                <div class="text-4xl text-yellow-500 mb-3">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Güvenli Ödeme</h3>
                <p class="leading-relaxed px-4">Güvenli ödeme ve iade garantisi ile alışverişin tadını çıkarın.</p>
            </div>
        </div>
    </section>

    <section id="urunler" class="bg-gray-50 dark:bg-gray-900 py-32 flex flex-col px-32 md:px-48 transition-colors duration-300">
        <div class="mb-12">
            <h2 class="text-4xl font-bold mb-4 text-blue-950 dark:text-gray-100">Ürünlerimiz</h2>
            <p class="text-gray-600 dark:text-gray-300">En beğenilen ürünlerimizi inceleyin.</p>
        </div>

        <div class="grid products grid-cols-1 gap-3 md:grid-cols-3">
            <?php foreach ($urunler as $urun) { ?>
                <div class="grid grid-cols-3  items-center border p-3 dark:border-gray-800 hover:border-blue-950 duration-300">
                    <img src="<?php echo $urun['resim'] ?>" alt="<?php echo $urun['ad'] ?>" class="col-span-2 object-cover">
                    <div class="col-span-1 flex flex-col justify-between">
                        <div class="mb-4">
                            <h3 class="text-md font-semibold"><?php echo $urun['ad'] ?></h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm font-bold">₺<?php echo $urun['fiyat'] ?></p>
                        </div>
                        <button class="bg-blue-950 w-30 text-white text-sm p-1 select-product" onclick="urunSec(<?php echo $urun['id'] ?>)">Ürünü Seç</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <div id="cartSidebar" class="fixed top-0 right-0 w-80 max-w-full h-full bg-white dark:bg-gray-800 shadow-lg transform translate-x-full transition-transform duration-300 z-50 flex flex-col">
        <div class="flex justify-between items-center p-4 border-b border-gray-300 dark:border-gray-700">
            <h2 class="text-lg font-semibold">Sepetiniz</h2>
            <button onclick="toggleSepet()" class="text-gray-600 dark:text-gray-200 hover:text-gray-900 text-2xl">&times;</button>
        </div>
        <div id="cartItems" class="flex-1 overflow-y-auto p-4 text-gray-700 dark:text-gray-200">Sepetiniz boş.</div>
        <div class="p-4 border-t border-gray-300 dark:border-gray-700">
            <div class="flex justify-between font-bold mb-4">
                <span>Toplam:</span>
                <span id="totalPrice">0 TL</span>
            </div>
            <button class="w-full bg-blue-900 text-white py-2 hover:bg-blue-600 transition">Satın Al</button>
        </div>
    </div>
    <!-- Login/Register Sidebar -->
    <div id="authSidebar" class="fixed top-0 right-0 w-full md:w-1/4 h-full bg-white dark:bg-gray-900 shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
        <div class="flex justify-between items-center p-4 border-b dark:border-gray-700">
            <h2 class="text-lg font-bold text-gray-800 dark:text-gray-200">Giriş Yap / Kayıt Ol</h2>
            <button id="closeAuth" class="text-2xl">&times;</button>
        </div>

        <!-- Tab Bar -->
        <div class="flex dark:border-gray-700 m-6 border-b pb-3">
            <button id="loginTab" class="w-1/2 p-3 text-center border-1 border-blue-500 font-semibold bg-gray-200 dark:bg-gray-800 ">Giriş Yap</button>
            <button id="registerTab" class="w-1/2 p-3 text-center border-1 border-gray-500 font-semibold">Kayıt Ol</button>
        </div>

        <!-- İçerikler -->
        <div class="p-6 pt-0">
            <!-- Giriş Formu -->
            <form id="loginForm" class="space-y-4">
                <p class="mb-4 text-gray-500">Hesabınıza giriş yaparak sepetinizi görüntüleyin, siparişlerinizi takip edin ve size özel fırsatlardan yararlanın.</p>
                <input type="email" placeholder="E-posta" class="w-full border p-2 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                <input type="password" placeholder="Şifre" class="w-full border p-2 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                <button type="submit" class="w-full bg-blue-900 text-white p-2">Giriş Yap</button>
            </form>
            <form id="registerForm" class="space-y-4 hidden">
                <p class="mb-4 text-gray-500">
                    Hemen ücretsiz kayıt olun! Yeni kampanyalardan haberdar olun, siparişlerinizi kolayca yönetin ve hızlı alışverişin tadını çıkarın.
                </p>
                <input type="text" placeholder="Ad Soyad" class="w-full border dark:border-gray-700 p-2  dark:bg-gray-800 dark:text-white">
                <input type="email" placeholder="E-posta" class="w-full border p-2 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                <input type="password" placeholder="Şifre" class="w-full border p-2 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                <button type="submit" class="w-full bg-blue-900 text-white p-2">Kayıt Ol</button>
            </form>
        </div>
    </div>
    <!-- Kullanıcı Paneli Modal -->
    <div id="userPanelModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 max-w-sm w-full text-center">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-3">Kullanıcı Paneli</h2>
            <p class="text-gray-600 dark:text-gray-300">Çok yakında aktif olacak 🚀</p>
            <button id="closeUserPanel" class="mt-5 px-4 py-2 bg-blue-600 text-white hover:bg-blue-700">
                Kapat
            </button>
        </div>
    </div>



    <?php include 'includes/footer.php' ?>
</body>

</html>