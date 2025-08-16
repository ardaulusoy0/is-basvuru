<footer class="bg-blue-950 p-5">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center">
        <div class="flex justify-center md:justify-start"> <img src="assets/img/ardaulusoy_beyaz.png" width="100" alt=""> </div>
        <div class="footer-links text-white hidden md:block gap-2 text-right">
            <a href="#" class="openLogin">Giriş Yap</a>
            <a href="#" class="openRegister">Kayıt Ol</a>
            <a href="#nedenbiz">Neden Biz?</a>
            <a href="#urunler">Ürünler</a>
            <a href="#" id="openUserPanel">Kullanıcı Paneli</a>
        </div>
    </div>
</footer>

<script>
    const userPanelLink = document.getElementById("openUserPanel");
    const userPanelModal = document.getElementById("userPanelModal");
    const closeUserPanel = document.getElementById("closeUserPanel");

    userPanelLink.addEventListener("click", (e) => {
        e.preventDefault();
        userPanelModal.classList.remove("hidden");
    });

    // Modal kapat
    closeUserPanel.addEventListener("click", () => {
        userPanelModal.classList.add("hidden");
    });

    // Arka plana tıklayınca kapansın
    userPanelModal.addEventListener("click", (e) => {
        if (e.target === userPanelModal) {
            userPanelModal.classList.add("hidden");
        }
    });

    document.addEventListener("DOMContentLoaded", () => {
        const authSidebar = document.getElementById("authSidebar");
        const closeAuth = document.getElementById("closeAuth");
        const loginTab = document.getElementById("loginTab");
        const registerTab = document.getElementById("registerTab");
        const loginForm = document.getElementById("loginForm");
        const registerForm = document.getElementById("registerForm");

        document.querySelectorAll(".openLogin").forEach(btn => {
            btn.addEventListener("click", () => {
                authSidebar.classList.remove("translate-x-full");
                loginTab.classList.add("bg-gray-200", "dark:bg-gray-800");
                registerTab.classList.remove("bg-gray-200", "dark:bg-gray-800");
                loginForm.classList.remove("hidden");
                registerForm.classList.add("hidden");
            });
        });

        document.querySelectorAll(".openRegister").forEach(btn => {
            btn.addEventListener("click", () => {
                authSidebar.classList.remove("translate-x-full");
                registerTab.classList.add("bg-gray-200", "dark:bg-gray-800");
                loginTab.classList.remove("bg-gray-200", "dark:bg-gray-800");
                registerForm.classList.remove("hidden");
                loginForm.classList.add("hidden");
            });
        });

        // Kapat
        closeAuth.addEventListener("click", () => {
            authSidebar.classList.add("translate-x-full");
        });

        // Tab geçişleri
        loginTab.addEventListener("click", () => {
            loginForm.classList.remove("hidden");
            registerForm.classList.add("hidden");
            loginTab.classList.add("bg-gray-200", "dark:bg-gray-800");
            registerTab.classList.remove("bg-gray-200", "dark:bg-gray-800");
        });

        registerTab.addEventListener("click", () => {
            registerForm.classList.remove("hidden");
            loginForm.classList.add("hidden");
            registerTab.classList.add("bg-gray-200", "dark:bg-gray-800");
            loginTab.classList.remove("bg-gray-200", "dark:bg-gray-800");
        });
    });



    tailwind.config = {
        darkMode: 'class',
    }

    
    const darkToggle = document.getElementById("darkToggle");

    darkToggle.addEventListener("click", () => {
        const html = document.documentElement;
        html.classList.toggle("dark");

        const icon = darkToggle.querySelector("i");
        if (html.classList.contains("dark")) {
            icon.classList.remove("bi-moon-fill");
            icon.classList.add("bi-sun-fill");
        } else {
            icon.classList.remove("bi-sun-fill");
            icon.classList.add("bi-moon-fill");
        }
    });

    const stickyNavbar = document.querySelector('#sticky-navbar');
    const navbar = document.querySelector('#navContainer');
    const navLinks = document.querySelectorAll('#navMenu a.nav-link');
    const headerHeight = document.querySelector('header').offsetHeight;
    const logo = document.querySelector('#logo');
    const menuIcon = document.querySelector('#menuToggle');
    const cartButton = document.querySelector("#cartButton");

    window.addEventListener('scroll', () => {
        if (window.scrollY > headerHeight) {
            logo.setAttribute('src', 'assets/img/ardaulusoy_beyaz.png');
            stickyNavbar.classList.add('fixed', 'top-5');
            navbar.classList.remove('p-4');
            navbar.classList.add('bg-blue-950', 'p-2', 'px-5', 'rounded-lg');
            menuIcon.classList.add('text-white');
            cartButton.classList.add('text-white');

            navLinks.forEach(link => {
                link.style.color = 'white';
                link.style.borderColor = 'white';

            });
        } else {
            logo.setAttribute('src', 'assets/img/ardaulusoy_siyah.png');
            stickyNavbar.classList.remove('fixed', 'top-0', 'bg-blue-500', 'shadow-lg', 'rounded-b-lg');
            navbar.classList.remove('bg-blue-950');
            menuIcon.classList.remove('text-white');
            cartButton.classList.remove('text-white');


            navLinks.forEach(link => {
                link.style.color = '';
                link.style.borderColor = '';
            });
        }
    });

    const menuToggles = document.getElementById("menuToggle");
    const closeMenu = document.getElementById("closeMenu");
    const sideMenu = document.getElementById("sideMenu");
    const overlay = document.getElementById("overlay");

    function openMenu() {
        sideMenu.classList.remove("translate-x-full");
        sideMenu.classList.add("translate-x-0");
        overlay.classList.remove("hidden");
    }

    function closeMenuFunc() {
        sideMenu.classList.remove("translate-x-0");
        sideMenu.classList.add("translate-x-full");
        overlay.classList.add("hidden");
    }

    menuToggles.addEventListener("click", openMenu);
    closeMenu.addEventListener("click", closeMenuFunc);
    overlay.addEventListener("click", closeMenuFunc);

    const urunListesi = <?php echo json_encode($urunler, JSON_UNESCAPED_UNICODE); ?>;
    let sepet = JSON.parse(localStorage.getItem("sepet")) || [];

    const cartButtonDesktop = document.getElementById("cartButton");
    const cartButtonMobile = document.getElementById("cartButtonMobile");
    const cartSidebar = document.getElementById("cartSidebar");
    const mobileMenu = document.getElementById("mobileMenu");
    const menuToggle = document.getElementById("menuToggle");

    function updateCartButton() {
        if (sepet.length > 0) {
            cartButtonDesktop.classList.remove("hidden");
            cartButtonMobile.classList.remove("hidden");
        } else {
            cartButtonDesktop.classList.add("hidden");
            cartButtonMobile.classList.add("hidden");
            if (!cartSidebar.classList.contains("translate-x-full")) toggleSepet(true);
        }
    }
    updateCartButton();

    function showToast(message) {
        const toast = document.createElement("div");
        toast.className = "fixed bottom-4 right-4 bg-white border text-blue-500 px-4 py-2 rounded shadow-lg z-50";
        toast.textContent = message;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 2000);
    }

    function urunSec(id) {
        if (!sepet.includes(id)) {
            sepet.push(id);
            kaydetVeGuncelle();
            showToast("Ürün sepete eklendi!");
        } else {
            showToast("Bu ürün zaten sepette.");
        }
    }

    function urunCikar(index) {
        sepet.splice(index, 1);
        kaydetVeGuncelle();
        showToast("Ürün sepetten çıkarıldı.");
    }

    function kaydetVeGuncelle() {
        localStorage.setItem("sepet", JSON.stringify(sepet));
        guncelleSepet();
    }

    function guncelleSepet() {
        const cartItemsDiv = document.getElementById("cartItems");
        cartItemsDiv.innerHTML = "";
        if (sepet.length === 0) {
            cartItemsDiv.textContent = "Sepetiniz boş.";
            updateCartButton();
            document.getElementById("totalPrice").textContent = "0 TL";
            return;
        }
        let toplam = 0;
        sepet.forEach((id, index) => {
            const urun = urunListesi.find(u => u.id == id);
            if (!urun) return;
            toplam += urun.fiyat;
            const urunDiv = document.createElement("div");
            urunDiv.className = "flex justify-between items-center dark:bg-gray-700 bg-gray-100  mb-2 rounded p-1";
            urunDiv.innerHTML = `
                    <div class="flex items-center gap-2">
                        <img src="${urun.resim}" class=" w-10 h-10 object-cover rounded" alt="${urun.ad}">
                        <span class='text-sm'>${urun.ad}</span>
                    </div>
                    <div>
                        <span class="mr-2 text-sm text-blue-600">${urun.fiyat} ₺</span>
                        <button onclick="urunCikar(${index})" class="bg-red-500 text-white rounded p-1 hover:underline"><i class="bi bi-trash"></i></button>
                    </div>
                `;
            cartItemsDiv.appendChild(urunDiv);
        });
        document.getElementById("totalPrice").textContent = toplam + " TL";
        updateCartButton();
    }

    function toggleSepet(forceClose = false) {
        if (forceClose) cartSidebar.classList.add("translate-x-full");
        else cartSidebar.classList.toggle("translate-x-full");
    }

    cartButtonDesktop.addEventListener("click", () => toggleSepet());
    cartButtonMobile.addEventListener("click", () => toggleSepet());

    menuToggle.addEventListener("click", () => mobileMenu.classList.toggle("hidden"));

    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();

            const target = document.querySelector(link.getAttribute('href'));
            if (!target) return;

            const start = window.scrollY;
            const end = target.offsetTop - document.querySelector('#sticky-navbar').offsetHeight;
            const distance = end - start;
            const duration = 800;
            let startTime;

            requestAnimationFrame(function step(time) {
                startTime ??= time;
                const progress = Math.min((time - startTime) / duration, 1);
                const eased = progress < 0.5 ? 2 * progress * progress : -1 + (4 - 2 * progress) * progress;
                window.scrollTo(0, start + distance * eased);
                if (progress < 1) requestAnimationFrame(step);
            });
        });
    });


    document.addEventListener("DOMContentLoaded", guncelleSepet);
</script>
</body>

</html>