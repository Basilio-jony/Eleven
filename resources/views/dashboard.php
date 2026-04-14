<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard — Eleven TV</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@300;400;500;600;700&family=Barlow+Condensed:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<style>
  body { background: var(--darker); }

  .dash-wrap { min-height: 100vh; padding-top: 72px; }

  .dash-topbar {
    background: var(--card);
    border-bottom: 1px solid var(--border);
    padding: 1.4rem 6%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 1rem;
  }

  .dash-welcome {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.5rem;
    letter-spacing: 2px;
    color: var(--white);
  }

  .dash-welcome span {
    background: linear-gradient(90deg, var(--cyan), var(--blue));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .dash-meta { font-size: 0.78rem; color: rgba(200,212,220,0.35); letter-spacing: 1px; }

  .dash-content { padding: 2.5rem 6%; }

  /* Estatísticas */
  .dash-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.2rem;
    margin-bottom: 3rem;
  }

  .stat-card {
    background: var(--card);
    border: 1px solid var(--border);
    padding: 1.6rem 1.8rem;
    border-radius: 3px;
    position: relative;
    overflow: hidden;
  }

  .stat-card::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--cyan), var(--blue));
  }

  .stat-card-label {
    font-size: 0.68rem;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: rgba(200,212,220,0.4);
    margin-bottom: 0.6rem;
  }

  .stat-card-value {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 2.5rem;
    line-height: 1;
    background: linear-gradient(90deg, var(--cyan), var(--blue));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* Títulos de secção */
  .dash-section-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.8rem;
    letter-spacing: 2px;
    color: var(--white);
    margin-bottom: 0.4rem;
  }

  .dash-section-sub {
    font-size: 0.85rem;
    font-weight: 300;
    color: rgba(200,212,220,0.45);
    margin-bottom: 2rem;
    line-height: 1.6;
  }

  /* Grid serviços */
  .services-dash-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.2rem;
    margin-bottom: 3rem;
  }

  .sdc {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 3px;
    padding: 2rem 1.8rem;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    transition: border-color 0.25s, box-shadow 0.25s;
  }

  .sdc:hover {
    border-color: rgba(0,200,224,0.35);
    box-shadow: 0 8px 40px rgba(0,0,0,0.4);
  }

  .sdc::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--cyan), var(--blue));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s;
  }

  .sdc:hover::before { transform: scaleX(1); }

  .sdc-num {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 2.5rem;
    color: rgba(0,200,224,0.07);
    line-height: 1;
    margin-bottom: 0.8rem;
  }

  .sdc-icon { width: 40px; height: 40px; color: var(--cyan); margin-bottom: 1rem; }

  .sdc-title {
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--white);
    margin-bottom: 0.6rem;
    line-height: 1.3;
  }

  .sdc-desc {
    font-size: 0.82rem;
    font-weight: 300;
    color: rgba(200,212,220,0.55);
    line-height: 1.65;
    flex: 1;
    margin-bottom: 1.5rem;
  }

  /* Botão solicitar */
  .btn-solicitar {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background: linear-gradient(135deg, var(--cyan), var(--blue));
    color: #fff;
    text-decoration: none;
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 0.7rem 1.2rem;
    border-radius: 2px;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 0 20px rgba(0,200,224,0.15);
    align-self: flex-start;
  }

  .btn-solicitar:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 30px rgba(0,200,224,0.35);
  }

  /* Grid pacotes */
  .packages-dash-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.2rem;
    margin-bottom: 1.5rem;
  }

  .pkgd {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 3px;
    padding: 1.8rem 1.5rem;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    transition: transform 0.25s, box-shadow 0.25s;
  }

  .pkgd:hover { transform: translateY(-4px); box-shadow: 0 16px 50px rgba(0,0,0,0.45); }

  .pkgd.featured-pkg { border-color: var(--cyan); background: linear-gradient(180deg, rgba(0,200,224,0.05) 0%, var(--card) 100%); }

  .pkg-badge {
    position: absolute; top: 0; left: 50%; transform: translateX(-50%);
    background: linear-gradient(90deg, var(--cyan), var(--blue));
    color: #fff; font-size: 0.6rem; font-weight: 700; letter-spacing: 2px;
    text-transform: uppercase; padding: 0.25rem 1rem; border-radius: 0 0 4px 4px;
  }

  .pkg-dot { width: 10px; height: 10px; border-radius: 50%; margin-bottom: 1rem; margin-top: 0.5rem; }

  .pkg-name { font-size: 0.68rem; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: rgba(200,212,220,0.4); margin-bottom: 0.3rem; }

  .pkg-title { font-family: 'Bebas Neue', sans-serif; font-size: 1.4rem; color: var(--white); letter-spacing: 2px; margin-bottom: 1rem; }

  .pkg-price { margin-bottom: 1.2rem; }
  .pkg-amount { font-family: 'Bebas Neue', sans-serif; font-size: 2rem; color: var(--white); line-height: 1; }
  .pkg-currency { font-family: 'Barlow Condensed', sans-serif; font-size: 0.85rem; font-weight: 600; color: var(--cyan); margin-left: 0.2rem; vertical-align: middle; }

  .pkg-features { list-style: none; margin-bottom: 1.5rem; flex: 1; }
  .pkg-features li { font-size: 0.78rem; color: rgba(200,212,220,0.6); padding: 0.4rem 0; border-bottom: 1px solid rgba(255,255,255,0.04); display: flex; gap: 0.5rem; }
  .pkg-features li::before { content: '›'; color: var(--cyan); flex-shrink: 0; }

  /* Ícone WhatsApp inline reutilizável */
  .wa-icon { width:14px; height:14px; flex-shrink:0; }

  @media (max-width: 1024px) {
    .services-dash-grid { grid-template-columns: repeat(2, 1fr); }
    .packages-dash-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 768px) {
    .dash-stats { grid-template-columns: repeat(2, 1fr); }
    .services-dash-grid { grid-template-columns: 1fr; }
    .packages-dash-grid { grid-template-columns: 1fr; }
    .dash-content { padding: 2rem 4%; }
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">
    <svg class="nav-logo-icon" viewBox="0 0 80 60" fill="none" xmlns="http://www.w3.org/2000/svg">
      <text x="4" y="42" font-family="Arial Black" font-size="38" font-weight="900" fill="url(#g1)">11</text>
      <polygon points="54,20 68,30 54,40" fill="url(#g1)"/>
      <circle cx="55" cy="30" r="5" fill="none" stroke="url(#g1)" stroke-width="1.5"/>
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
    <li><a href="/">Site Público</a></li>
    <li>
      <form method="POST" action="/logout" style="display:inline">
        <?php echo csrf_field(); ?>
        <button type="submit" style="background:linear-gradient(135deg,#00c8e0,#0a6ebd);border:none;cursor:pointer;color:#fff;font-family:'Barlow',sans-serif;letter-spacing:1.5px;font-size:0.85rem;font-weight:600;text-transform:uppercase;padding:0.55rem 1.4rem;border-radius:2px;">
          Sair
        </button>
      </form>
    </li>
  </ul>
</nav>

<div class="dash-wrap">

  <!-- Topbar -->
  <div class="dash-topbar">
    <div>
      <div class="dash-welcome">Olá, <span><?php echo e(auth()->user()->name); ?></span></div>
      <div class="dash-meta" style="margin-top:0.3rem;"><?php echo e(auth()->user()->email); ?></div>
    </div>
    <div class="dash-meta"><?php echo date('d \d\e F \d\e Y'); ?></div>
  </div>

  <div class="dash-content">

    <!-- Stats -->
    <div class="dash-stats">
      <div class="stat-card">
        <div class="stat-card-label">Serviços Disponíveis</div>
        <div class="stat-card-value">6</div>
      </div>
      <div class="stat-card">
        <div class="stat-card-label">Pacotes</div>
        <div class="stat-card-value">4</div>
      </div>
      <div class="stat-card">
        <div class="stat-card-label">Suporte</div>
        <div class="stat-card-value">24H</div>
      </div>
    </div>

    <!-- ===== SERVIÇOS ===== -->
    <div class="dash-section-title">Serviços Disponíveis</div>
    <p class="dash-section-sub">Clique em "Solicitar" para ser redirecionado ao nosso WhatsApp e falar connosco directamente.</p>

    <div class="services-dash-grid">

      <?php
      $servicos = [
        ['01','Filmagem e Fotografia Profissional','Cobertura de eventos, produção de vídeos e registo fotográfico com a mais alta qualidade técnica e estética.','Filmagem+e+Fotografia+Profissional',
          '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><circle cx="12" cy="13" r="3" stroke="currentColor" stroke-width="1.5"/>'],
        ['02','Produção de Conteúdo Audiovisual','Vídeos publicitários, programas de TV, podcasts e conteúdos digitais criados com narrativa e impacto visual.','Produção+de+Conteúdo+Audiovisual',
          '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.889L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>'],
        ['03','Transmissão ao Vivo','Cobertura de eventos em tempo real com equipamentos profissionais. Live streaming com qualidade de broadcast.','Transmissão+ao+Vivo',
          '<circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.24 7.76a6 6 0 010 8.49m-8.48-.01a6 6 0 010-8.49m11.31-2.82a10 10 0 010 14.14m-14.14 0a10 10 0 010-14.14"/>'],
        ['04','Edição e Pós-produção','Tratamento de vídeo e áudio com software de última geração. Conteúdos finais prontos para divulgação.','Edição+e+Pós-produção',
          '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>'],
        ['05','Publicidade e Anúncios','Produção e divulgação de conteúdos publicitários para empresas e marcas que querem se destacar.','Publicidade+e+Anúncios',
          '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>'],
        ['06','Aluguer de Espaço e Equipamentos','Estúdio completo (incluindo podcast), câmeras, som e iluminação profissional disponíveis para aluguer.','Aluguer+de+Espaço+e+Equipamentos',
          '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>'],
      ];
      foreach($servicos as $s): ?>
      <div class="sdc">
        <div class="sdc-num"><?php echo $s[0]; ?></div>
        <svg class="sdc-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><?php echo $s[4]; ?></svg>
        <div class="sdc-title"><?php echo $s[1]; ?></div>
        <p class="sdc-desc"><?php echo $s[2]; ?></p>
        <a href="https://wa.me/244958432897?text=Olá%2C+gostaria+de+solicitar+o+serviço+de+*<?php echo $s[3]; ?>*." target="_blank" class="btn-solicitar">
          <svg class="wa-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.116 1.524 5.845L0 24l6.335-1.509A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-4.964-1.345l-.356-.211-3.762.895.952-3.653-.232-.374A9.77 9.77 0 012.182 12C2.182 6.579 6.579 2.182 12 2.182S21.818 6.579 21.818 12 17.421 21.818 12 21.818z"/></svg>
          Solicitar
        </a>
      </div>
      <?php endforeach; ?>

    </div>

    <!-- ===== PACOTES ===== -->
    <div class="dash-section-title">Pacotes de Serviços</div>
    <p class="dash-section-sub">Escolha o pacote ideal e solicite directamente via WhatsApp.</p>

    <div class="packages-dash-grid">

      <!-- Essencial -->
      <div class="pkgd">
        <div class="pkg-dot" style="background:#00e676;box-shadow:0 0 10px #00e676;"></div>
        <div class="pkg-name">Pacote</div>
        <div class="pkg-title">Essencial</div>
        <div class="pkg-price"><span class="pkg-amount">50.000</span><span class="pkg-currency">KZ</span></div>
        <ul class="pkg-features">
          <li>Cobertura de até 5 horas</li>
          <li>Até 30 fotos editadas</li>
          <li>Entrega digital</li>
        </ul>
        <a href="https://wa.me/244958432897?text=Olá%2C+tenho+interesse+no+*Pacote+Essencial*+%2850.000+KZ%29." target="_blank" class="btn-solicitar">
          <svg class="wa-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.116 1.524 5.845L0 24l6.335-1.509A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-4.964-1.345l-.356-.211-3.762.895.952-3.653-.232-.374A9.77 9.77 0 012.182 12C2.182 6.579 6.579 2.182 12 2.182S21.818 6.579 21.818 12 17.421 21.818 12 21.818z"/></svg>
          Solicitar
        </a>
      </div>

      <!-- Intermédio -->
      <div class="pkgd">
        <div class="pkg-dot" style="background:#ffd740;box-shadow:0 0 10px #ffd740;"></div>
        <div class="pkg-name">Pacote</div>
        <div class="pkg-title">Intermédio</div>
        <div class="pkg-price"><span class="pkg-amount">150.000</span><span class="pkg-currency">KZ</span></div>
        <ul class="pkg-features">
          <li>Cobertura de até 6 horas</li>
          <li>Até 50 fotos editadas</li>
          <li>1 vídeo resumo (1–3 min)</li>
          <li>Edição profissional</li>
        </ul>
        <a href="https://wa.me/244958432897?text=Olá%2C+tenho+interesse+no+*Pacote+Intermédio*+%28150.000+KZ%29." target="_blank" class="btn-solicitar">
          <svg class="wa-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.116 1.524 5.845L0 24l6.335-1.509A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-4.964-1.345l-.356-.211-3.762.895.952-3.653-.232-.374A9.77 9.77 0 012.182 12C2.182 6.579 6.579 2.182 12 2.182S21.818 6.579 21.818 12 17.421 21.818 12 21.818z"/></svg>
          Solicitar
        </a>
      </div>

      <!-- Completo - Featured -->
      <div class="pkgd featured-pkg">
        <div class="pkg-badge">Mais Escolhido</div>
        <div class="pkg-dot" style="background:#ff5252;box-shadow:0 0 10px #ff5252;margin-top:1.2rem;"></div>
        <div class="pkg-name">Pacote</div>
        <div class="pkg-title">Completo</div>
        <div class="pkg-price"><span class="pkg-amount">300.000</span><span class="pkg-currency">KZ</span></div>
        <ul class="pkg-features">
          <li>Cobertura de até 8 horas</li>
          <li>Até 100 fotos editadas</li>
          <li>2 vídeos (resumo + completo)</li>
          <li>Edição avançada</li>
          <li>Conteúdo para redes sociais</li>
        </ul>
        <a href="https://wa.me/244958432897?text=Olá%2C+tenho+interesse+no+*Pacote+Completo*+%28300.000+KZ%29." target="_blank" class="btn-solicitar">
          <svg class="wa-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.116 1.524 5.845L0 24l6.335-1.509A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-4.964-1.345l-.356-.211-3.762.895.952-3.653-.232-.374A9.77 9.77 0 012.182 12C2.182 6.579 6.579 2.182 12 2.182S21.818 6.579 21.818 12 17.421 21.818 12 21.818z"/></svg>
          Solicitar
        </a>
      </div>

      <!-- Premium -->
      <div class="pkgd">
        <div class="pkg-dot" style="background:var(--cyan);box-shadow:0 0 10px var(--cyan);"></div>
        <div class="pkg-name">Pacote</div>
        <div class="pkg-title">Premium Total</div>
        <div class="pkg-price"><span class="pkg-amount">500.000+</span><span class="pkg-currency">KZ</span></div>
        <ul class="pkg-features">
          <li>Cobertura completa (até 10h)</li>
          <li>+150 fotos editadas</li>
          <li>Vídeo completo + shorts</li>
          <li>Equipa + suporte técnico</li>
          <li>Transmissão ao vivo</li>
        </ul>
        <a href="https://wa.me/244958432897?text=Olá%2C+tenho+interesse+no+*Pacote+Premium+Total*." target="_blank" class="btn-solicitar">
          <svg class="wa-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.116 1.524 5.845L0 24l6.335-1.509A11.94 11.94 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-4.964-1.345l-.356-.211-3.762.895.952-3.653-.232-.374A9.77 9.77 0 012.182 12C2.182 6.579 6.579 2.182 12 2.182S21.818 6.579 21.818 12 17.421 21.818 12 21.818z"/></svg>
          Solicitar
        </a>
      </div>

    </div>

    <p style="font-size:0.78rem;color:rgba(200,212,220,0.3);font-style:italic;text-align:center;margin-bottom:3rem;">
      * Os preços podem variar conforme duração, localização e necessidades específicas.
    </p>

  </div>
</div>

</body>
</html>
