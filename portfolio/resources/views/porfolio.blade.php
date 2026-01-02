<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Link al CDN di Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Personalizzazione stile -->
    <style>
        body {
            background-color: #111111;
            color: #fff;
        }

        .navbar {
            background-color: #222222;
        }

        .navbar a {
            color: #ffffff !important;
        }

        .main-section {
            padding: 50px 0;
            text-align: center;
        }

        .footer {
            background-color: #222222;
            padding: 20px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Barra di navigazione -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Il Tuo Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sezione principale -->
    <div class="main-section">
        <h1>Benvenuto nel mio portfolio!</h1>
        <p>Qui puoi vedere i miei progetti e lavori.</p>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2026 Cristian Buonocore | Portfolio</p>
    </div>

    <!-- Script di Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
