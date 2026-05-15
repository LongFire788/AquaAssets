<?php $this->layout('Site/layout', ['title' => 'Planos']) ?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Planos Disponíveis</h2>
        <p class="text-muted">Encontre o modelo ideal para a sua estrutura.</p>
    </div>
    
    <div class="row justify-content-center g-4">
        
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm p-4">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-muted">STARTER</h5>
                    <h2 class="display-4 fw-bold">Grátis</h2>
                    <hr class="my-4 opacity-10">
                    <ul class="list-unstyled text-start mb-5 px-3">
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Até 50 ativos</li>
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> 1 Administrador</li>
                        <li><i class="bi bi-check2 text-primary me-2"></i> Suporte via Comunidade</li>
                    </ul>
                    <a href="http://app.aquaassets.test" class="btn btn-outline-primary w-100 py-3 rounded-pill">Começar Agora</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-lg p-4 bg-dark text-white">
                <div class="card-body text-center">
                    <span class="badge bg-primary mb-2">MAIS ESCOLHIDO</span>
                    <h5 class="fw-bold">BUSINESS</h5>
                    <h2 class="display-4 fw-bold text-primary">R$ 49</h2>
                    <hr class="my-4 border-secondary">
                    <ul class="list-unstyled text-start mb-5 px-3">
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Ativos Ilimitados</li>
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Dashboard Completo</li>
                        <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Exportação Excel/PDF</li>
                        <li><i class="bi bi-check2 text-primary me-2"></i> Suporte VIP</li>
                    </ul>
                    <a href="http://app.aquaassets.test" class="btn btn-primary w-100 py-3 rounded-pill">Assinar Plano</a>
                </div>
            </div>
        </div>

    </div>
</div>