<?php include 'üstmenü.php'; ?>
<div class="form-wrapper" style="background: url('anasayfa.png') fixed center; background-size: cover; min-height: 100vh; padding: 100px 20px; display: flex; justify-content: center;">
    <div class="form-card" style="background: rgba(255,255,255,0.9); backdrop-filter: blur(10px); padding: 40px; border-radius: 30px; width: 100%; max-width: 550px; box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
        <h2 class="text-center mb-4" style="color: #6f42c1; font-weight: 800;">Yeni İlan Oluştur</h2>
        
        <form action="ilan.kaydet.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label fw-bold">İlan Başlığı</label>
                <input type="text" class="form-control" name="baslik" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Tür</label>
                <select class="form-select" name="tur" required>
                    <option value="Kedi">Kedi 🐱</option>
                    <option value="Köpek">Köpek 🐶</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Şehir</label>
                <input type="text" class="form-control" name="sehir" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Fotoğraf</label>
                <input type="file" class="form-control" name="resim" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Açıklama</label>
                <textarea class="form-control" name="aciklama" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn w-100" style="background: #6f42c1; color: white; font-weight: 700; padding: 12px; border-radius: 15px;">İlanı Yayınla</button>
        </form>
    </div>
</div>
<?php include 'altbilgi.php'; ?>