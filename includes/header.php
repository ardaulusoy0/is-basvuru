<header class="bg-none w-full top-0 left-0 z-50" id="sticky-navbar">
        <div id="navContainer" class="max-w-6xl md:mx-auto flex justify-between items-center mx-3 p-4">
            <div class="logo">
                <img src="assets/img/ardaulusoy_siyah.png" id="logo" width="150" alt="">
            </div>
            <!-- Hamburger -->
            <button id="menuToggle" class="md:hidden text-2xl text-blue-600">☰</button>
            <!-- Menü -->
            <nav id="navMenu" class="hidden md:flex gap-4 items-center">
                <a href="#urunler" class="nav-link">Ürünler</a>
                <a href="#nedenbiz" class="nav-link">Neden Biz?</a>
                <a href="" class="nav-link">Giriş Yap</a>
                <a href="" class="nav-link">Kayıt Ol</a>
                <a href="" class="nav-link font-bold text-blue-500">Kullanıcı Paneli</a>
                <button id="cartButton" class="bg-blue-700 text-white px-3 py-1 rounded-lg hidden">
                    <i class="bi bi-basket"></i>
                </button>
            </nav>
        </div>
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40 md:hidden"></div>

        <div id="sideMenu" class="fixed top-0 right-0 w-1/2 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
            <div class="flex justify-between items-center p-4 border-b">
                <h2 class="text-lg font-bold">Menü</h2>
                <button id="closeMenu" class="text-2xl">&times;</button>
            </div>
            <nav class="flex flex-col p-4 gap-4">
                <a href="#urunler" class="nav-link">Ürünler</a>
                <a href="#nedenbiz" class="nav-link">Neden Biz?</a>
                <a href="">Giriş Yap</a>
                <a href="">Kayıt Ol</a>
                <a href="" class="font-bold text-blue-500">Kullanıcı Paneli</a>
                <button id="cartButtonMobile" class="bg-yellow-500 text-white px-3 py-1 rounded hidden">Sepet <span id="cartCountMobile">0</span></button>
            </nav>
        </div>
    </header>