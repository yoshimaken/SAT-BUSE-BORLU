<footer class="footer-section">
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h3 class="footer-logo">Patili <span>Evler</span></h3>
                <p class="footer-about">
                    Patili Evler, evcil hayvan sahiplenmek isteyenlerle yuva arayan dostlarımızı bir araya getiren gönüllü bir platformdur. Amacımız her canın sevgi dolu bir yuvaya kavuşmasıdır.
                </p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title">KURUMSAL</h5>
                <ul class="footer-links">
                    <li><a href="hakkımızda.php">Hakkımızda</a></li>
                    <li><p>Kullanıcı Sözleşmesi</p></li>
                    <li><p>KVKK Metni</p></li>
                    <li><p>İletişim</p></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title">KEDİ</h5>
                <ul class="footer-links">
                    <li><a href="ilanara.php">Kedi Sahiplenme</a></li>
                    <li><a href="ilanara.php">Kedi Eş Bul</a></li>
                    <li><a href="ilanara.php">Kedi Cinsleri</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title">KÖPEK</h5>
                <ul class="footer-links">
                    <li><a href="ilanara.php">Köpek Sahiplenme</a></li>
                    <li><a href="ilanara.php">Köpek Eş Bul</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title">UYGULAMALAR</h5>
                <div class="app-buttons">
                    <a href="#" class="mb-2 d-block"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store" width="120"></a>
                    <a href="#" class="d-block"><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" width="120"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom border-top border-white border-opacity-10 pt-4 mt-2 text-center text-md-start d-md-flex justify-content-between align-items-center">
            <p class="mb-0">&copy; 2025 Patili Evler. Tüm Hakları Saklıdır.</p>
            <div class="footer-developer" style="font-size: 0.8rem; opacity: 0.6;">
                Patili Evler gönüllü yazılımcılar tarafından geliştirilmiştir.
            </div>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* --- FOOTER ÖZEL STİLLERİ --- */
    .footer-section {
        background-color: #6f42c1; /* Temadaki mor renk */
        color: white;
        padding-top: 40px;
        margin-top: 0; /* Sayfayla birleşsin diye */
    }

    .footer-logo { font-weight: 800; font-size: 1.8rem; margin-bottom: 20px; }
    .footer-logo span { opacity: 0.7; }
    
    .footer-about { font-size: 0.9rem; opacity: 0.8; line-height: 1.6; margin-bottom: 25px; }

    .footer-social a {
        color: white;
        background: rgba(255,255,255,0.1);
        width: 35px;
        height: 35px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 10px;
        transition: 0.3s;
        text-decoration: none;
    }
    .footer-social a:hover { background: white; color: #6f42c1; transform: translateY(-3px); }

    .footer-title {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 25px;
        position: relative;
    }

    .footer-links { list-style: none; padding: 0; }
    .footer-links li { margin-bottom: 12px; }
    .footer-links li a {
        color: white;
        text-decoration: none;
        opacity: 0.8;
        font-size: 0.9rem;
        transition: 0.3s;
    }
    .footer-links li a:hover { opacity: 1; padding-left: 5px; }

    .footer-bottom p { font-size: 0.85rem; opacity: 0.6; padding-bottom: 20px; }
    
    .app-buttons img { transition: 0.3s; filter: brightness(1.2); }
    .app-buttons img:hover { transform: scale(1.05); }

    /* Mobil için ufak dokunuş */
    @media (max-width: 767px) {
        .footer-section { text-align: center; }
        .footer-title::after { left: 50%; transform: translateX(-50%); }
        .footer-social { justify-content: center; display: flex; margin-bottom: 30px; }
    }
</style>