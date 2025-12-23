<?php include 'üstmenü.php'; ?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda | Patili Evler</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0; }

        .about-banner {
            background-image: url('anasayfa.png');
            background-attachment: fixed; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            padding: 180px 0; 
            text-align: center;
            position: relative;
        }

        .about-banner h1 { font-size: 4.5rem; font-weight: 900; text-shadow: 2px 2px 30px rgba(0,0,0,0.8); }
        .about-banner p { font-size: 1.5rem; text-shadow: 1px 1px 15px rgba(0,0,0,0.8); font-weight: 500; }

        .content-card {
            background: white;
            border-radius: 40px;
            padding: 60px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            margin-top: -50px;
            position: relative;
            z-index: 10;
            transition: all 0.5s ease;
        }
        .content-card:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 30px 60px rgba(111, 66, 193, 0.2); }
        .content-card h2 { color: #6f42c1; font-weight: 800; font-size: 2.5rem; margin-bottom: 25px; }
        .content-card p { line-height: 2; color: #444; font-size: 1.2rem; }

        /* Blokların Hover ve Bugulama Efekti */
        .value-box { text-align: center; padding: 40px; border-radius: 30px; transition: all 0.4s ease; height: 100%; }
        .value-box:hover { background: rgba(255, 255, 255, 0.5); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); transform: scale(1.05); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .value-box i {
            font-size: 3.5rem; color: #6f42c1; margin-bottom: 25px;
            background: rgba(111, 66, 193, 0.1);
            width: 100px; height: 100px; line-height: 100px; border-radius: 50%; display: inline-block; transition: 0.3s;
        }
        .value-box:hover i { background: #6f42c1; color: white; transform: rotate(10deg); }
    </style>
</head>
<body>

    <section class="about-banner">
        <div class="container">
            <h1 style="color: #6f42c1;">Biz Kimiz?</h1>
            <p><b>Onların hikayesini birlikte yazalım.</b></p>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="content-card">
                    <h2>Sevgiyle Kurulan Bir Köprü</h2>
                    <p>Patili Evler, 2025 yılında her canın sıcak bir yuvayı, düzenli bir yemeği ve en önemlisi sonsuz bir sevgiyi hak ettiği inancıyla yolculuğuna başladı. Bizler, sadece bir ilan listeleme sitesi değil; temeli güven, şefkat ve hayvan haklarına saygı üzerine atılmış büyük bir topluluğuz. Sokaktaki ve barınaktaki dostlarımızı en doğru ailelerle buluşturmak için her gün aynı heyecanla çalışıyoruz.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 text-center">
            <div class="col-md-4 mb-4">
                <div class="value-box">
                    <i class="fas fa-heart"></i>
                    <h4>Koşulsuz Sevgi</h4>
                    <p class="text-muted">Cins, yaş veya sağlık durumu gözetmeksizin tüm dostlarımızın sevgi dolu bir yuvaya kavuşması bizim ilk önceliğimizdir.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-box">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Güvenli Yuva</h4>
                    <p class="text-muted">Sahiplendirme sürecini titizlikle takip ediyor, dostlarımızın ömür boyu huzurla yaşayacağı aileleri özenle seçiyoruz.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-box">
                    <i class="fas fa-hands-helping"></i>
                    <h4>Gönüllü Desteği</h4>
                    <p class="text-muted">Türkiye'nin her yerinden hayvansever gönüllülerimizle, sahiplendirme sonrasında da ailelerimizin yanındayız.</p>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="value-box">
                    <i class="fas fa-paw"></i>
                    <h4>Ücretsiz İlan</h4>
                    <p class="text-muted">Dostlarımızın yuva bulma sürecinde hiçbir ücret talep etmiyoruz. İyilik paylaştıkça çoğalır ilkesiyle hareket ediyoruz.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-box">
                    <i class="fas fa-stethoscope"></i>
                    <h4>Bilinçli Toplum</h4>
                    <p class="text-muted">Evcil hayvan bakımı ve sağlığı konusunda toplumu bilgilendiriyor, daha bilinçli bir sahiplenme kültürü oluşturuyoruz.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-box">
                    <i class="fas fa-users"></i>
                    <h4>Büyük Topluluk</h4>
                    <p class="text-muted">Binlerce üyemizle birlikte kocaman bir aileyiz. Her yeni sahiplendirme ile bu aileyi daha da büyütüyoruz.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'altbilgi.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>