<!DOCTYPE html>
<html lang="tr">

<head>
    <?php include 'head.php'; ?>
    <title>Eren Toprak Ünal</title>
</head>

<div id="loader">
    <div class="spinner"></div>
</div>

<body class="d-flex flex-column min-vh-100">

    <?php $activePage = 'about'; include 'navbar.php'; ?>

    <div class="container hero-section py-5">
        <div class="row align-items-center text-center text-md-start">

            <!-- TEXT (SOL) -->
            <div class="col-12 col-md-7 mb-4 mb-md-0">
                <h2 class="fw-bold">Hakkımda</h2>
                <p class="mt-3">
                    Yazılım geliştirme alanında kendimi sürekli geliştirmeye odaklanan bir geliştiriciyim.
                    Backend sistemler, veritabanı yönetimi ve modern web teknolojileri üzerine çalışıyorum.
                </p>
                <p>
                    Amacım; performanslı, ölçeklenebilir ve kullanıcı dostu projeler üretmek.
                    Aynı zamanda yeni teknolojileri öğrenmekten ve bunları projelerime entegre etmekten keyif alıyorum.
                </p>
            </div>

            <!-- FOTO (SAĞ) -->
            <div class="col-12 col-md-5 d-flex justify-content-center justify-content-md-end">
                <div class="triangle-img">
                    <img src="https://i.ibb.co/N6mdyLsG/Eren-nal-Businnes-Man.jpg" alt="profile">
                </div>
            </div>

        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
