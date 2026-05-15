<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaAssets - <?= $this->e($title ?? 'home') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="logo-area">
                <div class="logo-circle"></div>
                <span class="logo-text">Aqua<span>Assets</span></span>
            </div>
            
            <nav class="menu-links">
                <a href="/" class="nav-link">Home</a>
                <a href="/sobre" class="nav-link">Sobre</a>
                <a href="/planos" class="nav-link">Planos</a>
                <a href="http://app.aquaassets.test" class="btn-app">Ir para aplicação</a>
            </nav>
        </div>
    </header>

    <main>
        <?= $this->section('content') ?>
    </main>

    <footer class="main-footer">
        <p>&copy; 2026 AquaAssets. Tecnologia para gestão patrimonial.</p>
        <a href="/credits" style="font-size: 0.8rem; color: #888; text-decoration: none;">Créditos de Imagens</a>
    </footer>
</body>
</html>