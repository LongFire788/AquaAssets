<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaAssets | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #0d6efd;
            --bg-gradient: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-gradient);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: #fff;
        }

        .login-header {
            background-color: #fff;
            padding: 40px 40px 20px;
            text-align: center;
        }

        .login-header h3 {
            font-weight: 700;
            color: var(--primary-color);
            letter-spacing: -1px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
            background-color: #fff;
        }

        .btn-login {
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
        }

        .input-group-text {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px 0 0 8px;
            color: #adb5bd;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            
            <div class="card login-card">
                <div class="login-header">
                    <h3>AquaAssets</h3>
                    <p class="text-muted">Gestão de Ativos & Periféricos</p>
                </div>
                
                <div class="card-body p-4">
                    <form action="/login" method="POST">
                        
                        <div class="mb-3">
                            <label class="form-label small fw-bold">E-mail Corporativo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="nome@empresa.com" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label small fw-bold">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" name="senha" class="form-control" placeholder="••••••••" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 btn-login mb-3">
                            Acessar Painel
                        </button>
                        
                        <div class="text-center">
                            <a href="http://aquaassets.test" class="text-decoration-none text-muted small">
                                <i class="bi bi-arrow-left"></i> Voltar ao site
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            
            <p class="text-center mt-4 text-muted small">
                &copy; <?php echo date('Y'); ?> AquaAssets System
            </p>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>