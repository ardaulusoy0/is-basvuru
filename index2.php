<?php
$urunler = [
    ["id" => 1, "ad" => "Kablosuz Mouse", "fiyat" => 150, "resim" => "https://picsum.photos/id/101/200"],
    ["id" => 2, "ad" => "Mekanik Klavye", "fiyat" => 450, "resim" => "https://picsum.photos/id/102/200"],
    ["id" => 3, "ad" => "Bluetooth Kulaklık", "fiyat" => 300, "resim" => "https://picsum.photos/id/103/200"],
    ["id" => 4, "ad" => "USB-C Şarj Kablosu", "fiyat" => 50, "resim" => "https://picsum.photos/id/104/200"],
    ["id" => 5, "ad" => "Web Kamera", "fiyat" => 600, "resim" => "https://picsum.photos/id/105/200"],
    ["id" => 6, "ad" => "Laptop Standı", "fiyat" => 250, "resim" => "https://picsum.photos/id/106/200"],
    ["id" => 7, "ad" => "Harici Disk 1TB", "fiyat" => 900, "resim" => "https://picsum.photos/id/107/200"],
    ["id" => 8, "ad" => "Gaming Mouse Pad", "fiyat" => 80, "resim" => "https://picsum.photos/id/108/200"]
];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Arda Ulusoy – İşe Alım Projesi</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
  #mobileMenu {
    transform: translateX(100%);
  }
  * {
      font-family: "Poppins", sans-serif;

  }
</style>
</head>
<body class="bg-gray-100">

<header class="bg-white shadow p-4 flex justify-between items-center sticky top-0 z-40">
  <div class="flex items-center gap-3">
    <img src="https://picsum.photos/id/100/40" alt="Logo" class="w-10 h-10 rounded-full" />
    <div>
      <h1 class="text-xl font-bold select-none">Arda Ulusoy</h1>
      <p class="text-xs text-gray-500 select-none">Web Developer & Freelancer</p>
    </div>
  </div>
  <nav>
    <!-- Masaüstü Menü -->
    <ul class="hidden md:flex items-center gap-4 font-medium">
      <li><button class="hover:text-blue-600 px-3 py-1">Giriş</button></li>
      <li><button class="hover:text-green-600 px-3 py-1">Üye Ol</button></li>
      <li><button class="hover:text-purple-600 px-3 py-1">Kullanıcı Paneli</button></li>
      <li>
        <button id="cartButton" onclick="toggleSepet()" class="relative hidden">
          🛒
          <span id="cartCount" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-1 rounded-full">0</span>
        </button>
      </li>
    </ul>

    <!-- Mobil Menü Butonu -->
    <button id="hamburgerBtn" class="md:hidden text-3xl select-none" aria-label="Menüyü Aç/Kapat">☰</button>
  </nav>
</header>

<!-- Mobil açılır menü -->
<div id="mobileMenu" class="fixed top-16 right-0 w-48 bg-white shadow-lg rounded-l-md p-4 space-y-4 transform translate-x-full transition-transform duration-300 md:hidden z-50">
  <button class="w-full text-left hover:text-blue-600 px-2 py-1 rounded">Giriş</button>
  <button class="w-full text-left hover:text-green-600 px-2 py-1 rounded">Üye Ol</button>
  <button class="w-full text-left hover:text-purple-600 px-2 py-1 rounded">Kullanıcı Paneli</button>
  <button id="cartButtonMobile" onclick="toggleSepet()" class="relative w-full text-left px-2 py-1 rounded hidden">
    🛒 Sepet
    <span id="cartCountMobile" class="absolute top-0 right-0 bg-red-500 text-white text-xs px-1 rounded-full">0</span>
  </button>
</div>

<!-- Slogan -->
<section class="text-center py-6 px-4 max-w-7xl mx-auto">
  <h2 class="text-2xl font-bold">Kaliteli ürünler, uygun fiyatlar!</h2>
  <p class="text-gray-600">Sepetinizi hazırlayın ve alışveriş keyfini yaşayın.</p>
</section>

<!-- Ürün Listesi -->
<main class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4 max-w-7xl mx-auto">
  <?php foreach ($urunler as $urun): ?>
  <div class="bg-white shadow rounded p-4 flex flex-col items-center">
    <img src="<?= $urun['resim'] ?>" alt="<?= $urun['ad'] ?>" class="w-32 h-32 object-cover mb-3 rounded" />
    <h3 class="font-semibold"><?= $urun['ad'] ?></h3>
    <p class="text-gray-500"><?= $urun['fiyat'] ?> TL</p>
    <button onclick="urunSec(<?= $urun['id'] ?>)" class="mt-3 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
      Sepete Ekle
    </button>
  </div>
  <?php endforeach; ?>
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white text-center py-4 mt-8">
  © <?= date("Y") ?> Arda Ulusoy – Tüm hakları saklıdır.
</footer>

<!-- Sepet Sidebar -->
<div id="cartSidebar" class="fixed top-0 right-0 w-80 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 p-4 z-50 flex flex-col">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-bold">Sepetiniz</h2>
    <button onclick="toggleSepet()" class="text-red-500 font-bold text-2xl leading-none">×</button>
  </div>
  <div id="cartItems" class="flex-1 overflow-y-auto mb-4 text-sm text-gray-700"></div>
  <div class="border-t pt-4 font-bold text-lg flex justify-between">
    <span>Toplam:</span>
    <span id="totalPrice">0 TL</span>
  </div>
</div>

<script>
  const urunListesi = <?php echo json_encode($urunler, JSON_UNESCAPED_UNICODE); ?>;
  let sepet = JSON.parse(localStorage.getItem("sepet")) || [];

  const cartButtonDesktop = document.getElementById("cartButton");
  const cartCountDesktop = document.getElementById("cartCount");
  const cartButtonMobile = document.getElementById("cartButtonMobile");
  const cartCountMobile = document.getElementById("cartCountMobile");
  const cartSidebar = document.getElementById("cartSidebar");
  const mobileMenu = document.getElementById("mobileMenu");
  const hamburgerBtn = document.getElementById("hamburgerBtn");

  // Ürün seçimi
  function urunSec(id) {
    sepet.push(id);
    kaydetVeGuncelle();
  }

  // Ürün çıkarma
  function urunCikar(index) {
    sepet.splice(index, 1);
    kaydetVeGuncelle();
  }

  // Sepeti güncelle ve localStorage kaydet
  function kaydetVeGuncelle() {
    localStorage.setItem("sepet", JSON.stringify(sepet));
    guncelleSepet();
  }

  // Sepeti güncelle
  function guncelleSepet() {
    const cartItemsDiv = document.getElementById("cartItems");
    cartItemsDiv.innerHTML = "";

    if (sepet.length === 0) {
      cartItemsDiv.textContent = "Sepetiniz boş.";
      gizleSepetButonlari();
      toplamFiyatGuncelle(0);
      return;
    }

    gosterSepetButonlari();

    let toplam = 0;
    sepet.forEach((id, index) => {
      const urun = urunListesi.find(u => u.id === id);
      if (!urun) return;

      toplam += urun.fiyat;

      const urunDiv = document.createElement("div");
      urunDiv.classList.add("flex", "justify-between", "items-center", "mb-2", "border-b", "pb-1");
      urunDiv.innerHTML = `
        <div class="flex items-center gap-2">
          <img src="${urun.resim}" class="w-10 h-10 rounded" alt="${urun.ad}">
          <span>${urun.ad}</span>
        </div>
        <div>
          <span class="mr-2">${urun.fiyat} TL</span>
          <button onclick="urunCikar(${index})" class="text-red-500 hover:underline">Çıkar</button>
        </div>
      `;
      cartItemsDiv.appendChild(urunDiv);
    });

    toplamFiyatGuncelle(toplam);
    guncelleSepetSayaci(sepet.length);
  }

  // Sepet sayacı güncelle
  function guncelleSepetSayaci(adet) {
    if (adet === 0) {
      gizleSepetButonlari();
    } else {
      cartCountDesktop.textContent = adet;
      cartCountMobile.textContent = adet;
      gosterSepetButonlari();
    }
  }

  function gizleSepetButonlari() {
    cartButtonDesktop.classList.add("hidden");
    cartButtonMobile.classList.add("hidden");
    if (!cartSidebar.classList.contains("translate-x-full")) {
      toggleSepet(true);
    }
  }

  function gosterSepetButonlari() {
    cartButtonDesktop.classList.remove("hidden");
    cartButtonMobile.classList.remove("hidden");
  }

  // Toplam fiyatı güncelle
  function toplamFiyatGuncelle(tutar) {
    document.getElementById("totalPrice").textContent = tutar + " TL";
  }

  // Sepet sidebar toggle
  function toggleSepet(forceClose = false) {
    if (forceClose) {
      cartSidebar.classList.add("translate-x-full");
    } else {
      cartSidebar.classList.toggle("translate-x-full");
    }
  }

  // Mobil menü toggle
  hamburgerBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("translate-x-full");
  });

  // Sayfa yüklendiğinde sepeti güncelle
  window.onload = () => {
    guncelleSepet();
  };
</script>

</body>
</html>
