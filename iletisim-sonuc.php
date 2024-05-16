<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Sonuçları</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="stil.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">ANASAYFA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Hakkında</a></li>
                <li class="nav-item"><a class="nav-link" href="cv.html">CV</a></li>
                <li class="nav-item"><a class="nav-link" href="sehirim.html">Şehrim</a></li>
                <li class="nav-item"><a class="nav-link" href="ilgialanlari.html">İlgi Alanlarım</a></li>
                <li class="nav-item"><a class="nav-link" href="giris.html">Giriş</a></li>
                <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                <li class="nav-item"><a id="username-display" class="nav-link"></a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>İletişim Sonuçları</h1>
        <div>
            <p><strong>Adınız:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
            <p><strong>Mesajınız:</strong> <?php echo nl2br(htmlspecialchars($_POST['message'])); ?></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
