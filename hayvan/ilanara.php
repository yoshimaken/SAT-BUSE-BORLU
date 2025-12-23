<?php 
include 'bağlan.php'; 
include 'üstmenü.php'; 

// URL'den gelen türü kontrol et (Varsayılan olarak 'hepsi')
$secilen_tur = isset($_GET['tur']) ? $_GET['tur'] : 'hepsi';

// SQL Sorgusunu seçilen türe göre ayarla
if ($secilen_tur == 'kedi') {
    $sql = "SELECT * FROM ilanlar WHERE tur = 'Kedi' ORDER BY id DESC";
} elseif ($secilen_tur == 'kopek') {
    $sql = "SELECT * FROM ilanlar WHERE tur = 'Köpek' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM ilanlar ORDER BY id DESC";
}

$sorgu = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yuva Arayanlar | Patili Evler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; }
        .filter-btn {
            border-radius: 25px;
            padding: 10px 25px;
            font-weight: 600;
            transition: 0.3s;
            border: 2px solid #6f42c1;
            color: #6f42c1;
            background: white;
            text-decoration: none;
            display: inline-block;
            margin: 5px;
        }
        .filter-btn:hover, .filter-btn.active {
            background: #6f42c1;
            color: white;
        }
        .pet-card { border-radius: 20px; border: none; transition: 0.3s; overflow: hidden; height: 100%; }
        .pet-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(111, 66, 193, 0.2); }
        .pet-img-header { height: 250px; object-fit: cover; width: 100%; }
        .modal-pet-img { width: 100%; height: 100%; min-height: 500px; object-fit: cover; }
    </style>
</head>
<body>

<div class="container mt-5 pt-4">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Yuva Arayan <span style="color: #6f42c1;">Dostlarımız</span></h2>
        
        <div class="mt-4">
            <a href="ilanara.php?tur=hepsi" class="filter-btn <?php echo ($secilen_tur == 'hepsi') ? 'active' : ''; ?>">Tüm Canlar</a>
            <a href="ilanara.php?tur=kedi" class="filter-btn <?php echo ($secilen_tur == 'kedi') ? 'active' : ''; ?>">Sadece Kediler 🐱</a>
            <a href="ilanara.php?tur=kopek" class="filter-btn <?php echo ($secilen_tur == 'kopek') ? 'active' : ''; ?>">Sadece Köpekler 🐶</a>
        </div>
    </div>

    <div class="row">
        <?php
        if($sorgu->num_rows > 0) {
            while($ilan = $sorgu->fetch_assoc()) {
                $modalID = "patiModal" . $ilan['id'];
        ?>
        
        <div class="col-md-4 mb-4">
            <div class="card pet-card shadow-sm">
                <img src="images/<?php echo $ilan['resim']; ?>" class="pet-img-header">
                <div class="card-body text-center">
                    <span class="badge bg-primary mb-2" style="background-color: #6f42c1 !important;"><?php echo strtoupper($ilan['tur']); ?></span>
                    <h5 class="fw-bold"><?php echo $ilan['baslik']; ?></h5>
                    <p class="text-muted small"><i class="fas fa-map-marker-alt"></i> <?php echo $ilan['sehir']; ?></p>
                    <button type="button" class="btn text-white w-100 rounded-pill" style="background: #6f42c1;" data-bs-toggle="modal" data-bs-target="#<?php echo $modalID; ?>">İncele</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="<?php echo $modalID; ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content shadow-lg">
                    <div class="modal-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <img src="images/<?php echo $ilan['resim']; ?>" class="modal-pet-img">
                            </div>
                            <div class="col-lg-6 p-5 position-relative">
                                <button type="button" class="btn-close position-absolute top-0 end-0 m-4" data-bs-dismiss="modal"></button>
                                <h6 style="color: #6f42c1; font-weight: bold;"><?php echo $ilan['tur']; ?> - <?php echo $ilan['sehir']; ?></h6>
                                <h2 class="fw-bold mb-3"><?php echo $ilan['baslik']; ?></h2>
                                <hr>
                                <p><?php echo nl2br($ilan['aciklama']); ?></p>
                                <div class="mt-4">
                                    <a href="mailto:iletisim@patilievler.com" class="btn text-white rounded-pill px-4" style="background:#6f42c1;">İletişime Geç</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            }
        } else {
            echo "<div class='text-center w-100'><p class='alert alert-warning'>Şu an bu kategoride ilan bulunmuyor.</p></div>";
        }
        ?>
    </div>
</div>

<?php include 'altbilgi.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>