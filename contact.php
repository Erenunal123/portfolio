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

    <?php $activePage = 'contact'; include 'navbar.php'; ?>

    <div class="container flex-grow-1 d-flex align-items-center justify-content-center py-5">
        <div class="col-12 col-md-8 col-lg-6 text-center">

            <h2 class="fw-bold">İletişim</h2>
            <hr>

            <p class="mt-3">
                📧 <strong>uerentoprak@gmail.com</strong>
            </p>
            <p style="color: gray;">
                Bana aşağıdaki kanallardan ulaşabilirsiniz
            </p>

            <div class="d-grid gap-2 mt-4">
                <a href="mailto:uerentoprak@gmail.com" class="btn btn-primary">
                    📩 E-posta Gönder
                </a>
                <a href="https://www.linkedin.com/in/eren-toprak-%C3%BCnal-586175398/" target="_blank" class="btn btn-dark">
                    💼 LinkedIn Profili
                </a>
            </div>

        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
