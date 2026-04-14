<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eleven TV & Audiovisual</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@300;400;500;600;700&family=Barlow+Condensed:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">
    <svg class="nav-logo-icon" viewBox="0 0 80 60" fill="none" xmlns="http://www.w3.org/2000/svg">
      <text x="4" y="42" font-family="Arial Black" font-size="38" font-weight="900" fill="url(#g1)">11</text>
      <polygon points="54,20 68,30 54,40" fill="url(#g1)"/>
      <circle cx="55" cy="30" r="5" fill="none" stroke="url(#g1)" stroke-width="1.5"/>
      <path d="M65 25 Q72 30 65 35" stroke="url(#g1)" stroke-width="2" fill="none" stroke-linecap="round"/>
      <path d="M68 22 Q77 30 68 38" stroke="url(#g1)" stroke-width="2" fill="none" stroke-linecap="round"/>
      <defs>
        <linearGradient id="g1" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#00c8e0"/>
          <stop offset="100%" stop-color="#0a6ebd"/>
        </linearGradient>
      </defs>
    </svg>
    <span class="nav-logo-text">ELEVEN</span>
  </div>
  <ul class="nav-links">
    <li><a href="#servicos">Serviços</a></li>
    <li><a href="#pacotes">Pacotes</a></li>
    <li><a href="#processo">Processo</a></li>
    <li><a href="#contacto">Contacto</a></li>
    <?php if (auth()->check()): ?>
      <li><a href="/dashboard" class="nav-cta">Dashboard</a></li>
      <li>
        <form method="POST" action="/logout" style="display:inline">
          <?php echo csrf_field(); ?>
          <button type="submit" style="background:none;border:none;cursor:pointer;color:rgba(200,212,220,0.7);font-family:'Barlow',sans-serif;letter-spacing:2px;font-size:0.85rem;font-weight:600;text-transform:uppercase;transition:color 0.2s;" onmouseover="this.style.color='#00c8e0'" onmouseout="this.style.color='rgba(200,212,220,0.7)'">Sair</button>
        </form>
      </li>
    <?php else: ?>
      <li><a href="/login" class="nav-cta">Entrar</a></li>
      <li><a href="/register" style="color:rgba(200,212,220,0.7);text-decoration:none;font-size:0.85rem;font-weight:600;letter-spacing:2px;text-transform:uppercase;transition:color 0.2s;" onmouseover="this.style.color='#00c8e0'" onmouseout="this.style.color='rgba(200,212,220,0.7)'">Registar</a></li>
    <?php endif; ?>
  </ul>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="scanlines"></div>
  <div class="hero-orb"></div>
  <div class="hero-content">
    <div class="hero-tag">Produção Audiovisual Profissional</div>
    <h1 class="hero-title">
      Capturamos<br>
      <span>Cada Momento</span><br>
      Com Precisão
    </h1>
    <p class="hero-desc">
      Da filmagem à transmissão ao vivo, a Eleven TV transforma visões em conteúdos audiovisuais de impacto. Qualidade profissional para cada projeto.
    </p>
    <div class="hero-actions">
      <a href="#pacotes" class="btn-primary">
        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"/></svg>
        Ver Pacotes
      </a>
      <a href="#servicos" class="btn-ghost">Nossos Serviços</a>
    </div>
  </div>
  <div class="hero-stats">
    <div class="stat">
      <div class="stat-num">6+</div>
      <div class="stat-label">Serviços</div>
    </div>
    <div class="stat">
      <div class="stat-num">4</div>
      <div class="stat-label">Pacotes</div>
    </div>
    <div class="stat">
      <div class="stat-num">HD</div>
      <div class="stat-label">Qualidade</div>
    </div>
    <div class="stat">
      <div class="stat-num">LIVE</div>
      <div class="stat-label">Streaming</div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="servicos">
  <div class="section-label">O Que Fazemos</div>
  <h2 class="section-title">Nossos Serviços</h2>
  <p class="section-sub">Cobertura completa das suas necessidades audiovisuais, com equipamentos de ponta e equipa especializada.</p>

  <div class="services-grid">
    <div class="service-card">
      <span class="service-num">01</span>
      <svg class="service-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
        <circle cx="12" cy="13" r="3" stroke="currentColor" stroke-width="1.5"/>
      </svg>
      <div class="service-title">Filmagem e Fotografia Profissional</div>
      <p class="service-desc">Cobertura de eventos, produção de vídeos e registo fotográfico com a mais alta qualidade técnica e estética.</p>
    </div>

    <div class="service-card">
      <span class="service-num">02</span>
      <svg class="service-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.889L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
      </svg>
      <div class="service-title">Produção de Conteúdo Audiovisual</div>
      <p class="service-desc">Vídeos publicitários, programas de TV, podcasts e conteúdos digitais criados com narrativa e impacto visual.</p>
    </div>

    <div class="service-card">
      <span class="service-num">03</span>
      <svg class="service-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"/>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.24 7.76a6 6 0 010 8.49m-8.48-.01a6 6 0 010-8.49m11.31-2.82a10 10 0 010 14.14m-14.14 0a10 10 0 010-14.14"/>
      </svg>
      <div class="service-title">Transmissão ao Vivo</div>
      <p class="service-desc">Cobertura de eventos em tempo real com equipamentos profissionais. Live streaming com qualidade de broadcast.</p>
    </div>

    <div class="service-card">
      <span class="service-num">04</span>
      <svg class="service-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
      </svg>
      <div class="service-title">Edição e Pós-produção</div>
      <p class="service-desc">Tratamento de vídeo e áudio com software de última geração. Conteúdos finais prontos para divulgação.</p>
    </div>

    <div class="service-card">
      <span class="service-num">05</span>
      <svg class="service-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
      </svg>
      <div class="service-title">Publicidade e Anúncios</div>
      <p class="service-desc">Produção e divulgação de conteúdos publicitários para empresas e marcas que querem se destacar.</p>
    </div>

    <div class="service-card">
      <span class="service-num">06</span>
      <svg class="service-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
      </svg>
      <div class="service-title">Aluguer de Espaço e Equipamentos</div>
      <p class="service-desc">Estúdio completo (incluindo podcast), câmeras, som e iluminação profissional disponíveis para aluguer.</p>
    </div>
  </div>
</section>

<!-- PACKAGES -->
<section id="pacotes">
  <div class="section-label">Investimento</div>
  <h2 class="section-title">Pacotes de Serviços</h2>
  <p class="section-sub">Escolha o pacote ideal para o seu evento. Preços adaptáveis às suas necessidades específicas.</p>

  <div class="packages-grid">
    <!-- Essencial -->
    <div class="package-card">
      <div class="package-dot dot-green"></div>
      <div class="package-name">Pacote</div>
      <div class="package-title">Essencial</div>
      <div class="package-price">
        <span class="price-amount">50.000</span>
        <span class="price-currency">KZ</span>
      </div>
      <ul class="package-features">
        <li>Cobertura de até 5 horas</li>
        <li>Até 30 fotos profissionais editadas</li>
        <li>Entrega digital</li>
      </ul>
      <a href="#contacto" class="btn-package btn-package-outline">Solicitar</a>
    </div>

    <!-- Intermédio -->
    <div class="package-card">
      <div class="package-dot dot-yellow"></div>
      <div class="package-name">Pacote</div>
      <div class="package-title">Intermédio</div>
      <div class="package-price">
        <span class="price-amount">150.000</span>
        <span class="price-currency">KZ</span>
      </div>
      <ul class="package-features">
        <li>Cobertura de até 6 horas</li>
        <li>Até 50 fotos editadas</li>
        <li>1 vídeo resumo (1–3 min)</li>
        <li>Edição profissional</li>
      </ul>
      <a href="#contacto" class="btn-package btn-package-outline">Solicitar</a>
    </div>

    <!-- Completo - FEATURED -->
    <div class="package-card featured">
      <div class="featured-badge">Mais Escolhido</div>
      <div class="package-dot dot-red" style="margin-top:1.2rem"></div>
      <div class="package-name">Pacote</div>
      <div class="package-title">Completo</div>
      <div class="package-price">
        <span class="price-amount">300.000</span>
        <span class="price-currency">KZ</span>
      </div>
      <ul class="package-features">
        <li>Cobertura de até 8 horas</li>
        <li>Até 100 fotos editadas</li>
        <li>2 vídeos (resumo + completo)</li>
        <li>Edição avançada (imagem e áudio)</li>
        <li>Conteúdo para redes sociais</li>
      </ul>
      <a href="#contacto" class="btn-package btn-package-filled">Solicitar</a>
    </div>

    <!-- Premium -->
    <div class="package-card">
      <div class="package-dot dot-blue"></div>
      <div class="package-name">Pacote</div>
      <div class="package-title">Premium Total</div>
      <div class="package-price">
        <span class="price-amount">500.000+</span>
        <span class="price-currency">KZ</span>
      </div>
      <ul class="package-features">
        <li>Cobertura completa (até 10h)</li>
        <li>Mais de 150 fotos editadas</li>
        <li>Vídeo completo + shorts para redes</li>
        <li>Equipa completa + suporte técnico</li>
        <li>Possível transmissão ao vivo</li>
      </ul>
      <a href="#contacto" class="btn-package btn-package-outline">Solicitar</a>
    </div>
  </div>

  <p class="package-note">* Os preços podem variar conforme a duração, localização e necessidades específicas do cliente.</p>
</section>

<!-- PROCESS -->
<section id="processo">
  <div class="section-label">Como Trabalhamos</div>
  <h2 class="section-title">Nosso Processo</h2>
  <p class="section-sub">Um fluxo de trabalho pensado para garantir o melhor resultado em cada projeto.</p>

  <div class="process-steps">
    <div class="process-step">
      <div class="step-num">01</div>
      <div class="step-title">Briefing</div>
      <p class="step-desc">Entendemos a sua visão, objetivos e necessidades do projeto</p>
    </div>
    <div class="process-step">
      <div class="step-num">02</div>
      <div class="step-title">Proposta</div>
      <p class="step-desc">Elaboramos uma proposta personalizada com o melhor pacote</p>
    </div>
    <div class="process-step">
      <div class="step-num">03</div>
      <div class="step-title">Produção</div>
      <p class="step-desc">Equipa profissional em ação com equipamentos de última geração</p>
    </div>
    <div class="process-step">
      <div class="step-num">04</div>
      <div class="step-title">Pós-produção</div>
      <p class="step-desc">Edição e tratamento de todo o material captado</p>
    </div>
    <div class="process-step">
      <div class="step-num">05</div>
      <div class="step-title">Entrega</div>
      <p class="step-desc">Material final entregue nos formatos e prazos acordados</p>
    </div>
  </div>
</section>

<!-- CTA / CONTACT -->
<section id="contacto">
  <div class="cta-inner">
    <div class="cta-glow"></div>
    <div class="section-label" style="justify-content:center">Vamos Trabalhar Juntos</div>
    <h2 class="cta-title">Pronto para<br>o Próximo Projeto?</h2>
    <p class="cta-desc">Entre em contacto connosco e descubra como a Eleven TV pode transformar o seu evento ou ideia num conteúdo audiovisual de excelência.</p>
    <div class="cta-buttons">
      <a href="https://wa.me/244958432897" class="btn-primary" target="_blank">
        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.116 1.524 5.845L0 24l6.335-1.509A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-4.964-1.345l-.356-.211-3.762.895.952-3.653-.232-.374A9.77 9.77 0 012.182 12C2.182 6.579 6.579 2.182 12 2.182S21.818 6.579 21.818 12 17.421 21.818 12 21.818z"/></svg>
        WhatsApp
      </a>
      <a href="/cdn-cgi/l/email-protection#a8cfcddac9c4e8cdc4cddecdc6dcde86c9c7" class="btn-ghost">
        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        Email
      </a>
    </div>
    <div class="contact-info">
      <div class="contact-item">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Luanda, Angola
      </div>
      <div class="contact-item">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        +244 958 432 897
      </div>
      <div class="contact-item">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81e6e4f3e0edc1e4ede4f7e4eff5f7afe0ee">[email&#160;protected]</a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-logo"