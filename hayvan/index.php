<?php include 'üstmenü.php'; ?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patili Evler | Onların Kahramanı Sen Ol!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        /* --- GENEL STİLLER --- */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; overflow-x: hidden; margin: 0; padding: 0; }

        /* --- 1. HERO ALANI --- */
        .hero-container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 10%;
            gap: 50px;
            flex-wrap: wrap;
            background-color: #fff;
        }
        .hero-content { flex: 1; min-width: 300px; }
        .hero-content h1 { font-size: 3.5rem; font-weight: 800; color: #333; line-height: 1.2; }
        .hero-content h1 span { color: #6f42c1; }
        .hero-content p { color: #666; font-size: 1.2rem; margin: 25px 0; }
        
        .hero-buttons { display: flex; gap: 15px; }
        .btn-ana-mor { background: #6f42c1; color: white !important; padding: 14px 35px; border-radius: 30px; text-decoration: none; font-weight: 600; transition: 0.3s; display: inline-block; border: none; }
        .btn-ana-mor:hover { background: #5a32a3; transform: translateY(-3px); box-shadow: 0 10px 20px rgba(111, 66, 193, 0.2); }
        .btn-ana-outline { border: 2px solid #ddd; color: #666 !important; padding: 14px 35px; border-radius: 30px; text-decoration: none; font-weight: 600; transition: 0.3s; display: inline-block; }
        .btn-ana-outline:hover { border-color: #6f42c1; color: #6f42c1 !important; }

        .hero-img img { max-width: 670px; border-radius: 50px; box-shadow: 0 30px 60px rgba(0,0,0,0.1); }

        /* --- 2. SÜSLÜ MOR İSTATİSTİK ALANI --- */
        .full-width-mor { background-color: #6f42c1; width: 100%; padding: 100px 0; margin: 40px 0; position: relative; }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .stat-box { animation: float 4s ease-in-out infinite; }
        .stat-box:nth-child(2) { animation-delay: 0.5s; }
        .stat-box:nth-child(3) { animation-delay: 1s; }
        .stat-box h2 { color: white; font-size: 4rem; font-weight: 800; margin-bottom: 5px; text-shadow: 2px 4px 10px rgba(0,0,0,0.2); }
        .stat-box p { color: rgba(255,255,255,0.9); font-size: 1.2rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }

        /* --- 3. BİLGİ ALANI (SOL RESİM SAĞ YAZI) --- */
        .info-section { display: flex; align-items: center; justify-content: center; padding: 100px 10%; gap: 60px; flex-wrap: wrap; }
        .info-img { flex: 1; min-width: 300px; }
        .info-img img { width: 100%; border-radius: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .info-text { flex: 1; min-width: 300px; }
        .info-text h2 { font-size: 2.8rem; font-weight: 800; color: #333; margin-bottom: 20px; }
        .info-text h2 span { color: #6f42c1; }
        .info-text p { color: #555; font-size: 1.15rem; line-height: 1.8; margin-bottom: 30px; }
    </style>
</head>
<body>

    <section class="hero-container">
        <div class="hero-content">
            <h1>Onların Kahramanı <br><span>Sen Ol!</span></h1>
            <p>Patili Evler aracılığıyla yüzlerce dostumuz yeni ailesini bekliyor. Bir canı kurtarmak, o canın dünyasını sonsuza dek değiştirir.</p>
            <div class="hero-buttons">
                <a href="ilanara.php" class="btn-ana-mor">Dostlarımızı Gör</a>
                <a href="hakkımızda.php" class="btn-ana-outline">Biz Kimiz?</a>
            </div>
        </div>
        <div class="hero-img">
            <img src="anasayfa.png" alt="Patili Evler">
        </div>
    </section>

    <section class="full-width-mor">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 stat-box">
                    <h2 class="counter" data-target="35"></h2>
                    <p>Mutlu Yuva</p>
                </div>
                <div class="col-md-4 stat-box">
                    <h2 class="counter" data-target="154"></h2>
                    <p>Aktif İlan</p>
                </div>
                <div class="col-md-4 stat-box">
                    <h2 class="counter" data-target="21"></h2>
                    <p>Gönüllü Destek</p>
                </div>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="info-img"><img src="anasayfa2.png" alt="Neden Biz"></div>
        <div class="info-text">
            <h2>Neden <span>Patili Evler?</span></h2>
            <p>Biz sadece bir ilan platformu değiliz. Amacımız, sahipsiz hayvanlar ile onları ömür boyu sevecek aileleri buluşturmak.</p>
            <a href="hakkımızda.php" class="btn-ana-mor">Hikayemizi Oku</a>
        </div>
    </section>

    <?php include 'altbilgi.php'; ?>

    <script>
        function startCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                counter.innerText = '0';
                const target = +counter.getAttribute('data-target');
                const updateCount = () => {
                    const curr = +counter.innerText;
                    const inc = target / 50; 
                    if (curr < target) {
                        counter.innerText = Math.ceil(curr + inc);
                        setTimeout(updateCount, 30);
                    } else {
                        counter.innerText = target + (target === 24 ? "/7" : "+");
                    }
                };
                updateCount();
            });
        }
        startCounters();
        setInterval(startCounters, 5000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>