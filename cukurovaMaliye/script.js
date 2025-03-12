document.addEventListener("DOMContentLoaded", function () {
    const splashScreen = document.getElementById("splash-screen");
    const mainContent = document.getElementById("main-content");
    const logo = document.getElementById("logo");

    if (window.innerWidth > 768) {
        // Bilgisayardaysa splash-screen'i gizle ve ana sayfayı göster
        splashScreen.style.display = "none";
        mainContent.style.display = "block";
        document.body.classList.add("loaded"); // Header'ı göster
    } else {
        // Mobildeyse animasyonu çalıştır
        setTimeout(() => {
            logo.classList.add("fly-away");
        }, 1000);

        setTimeout(() => {
            splashScreen.style.display = "none";
            mainContent.style.display = "block";
            document.body.classList.add("loaded"); // Header'ı göster
        }, 1907);
    }
});
