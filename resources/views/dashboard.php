<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard — Eleven TV</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@300;400;500;600;700&family=Barlow+Condensed:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<style>
  .dashboard-wrap {
    min-height: 100vh;
    background: var(--darker);
    padding-top: 80px;
  }
  .dashboard-header {
    background: var(--card);
    border-bottom: 1px solid var(--border);
    padding: 1.5rem 6%;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .dashboard-greeting {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.6rem;
    letter-spacing: 2px;
    color: var(--white);
  }
  .dashboard-greeting span {
    background: linear-gradient(90deg, var(--cyan), var(--blue));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .dashboard-content {
    padding: 3rem 6%;
  }
  .dashboard-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-bottom: 3rem;
  }
  .dash-card {
    background: var(--card);
    border: 1px solid var(--border);
    padding: 2rem;
    border-radius: 3px;
    position: relative;
    overflow: hidden;
  }
  .dash-card::before {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--cyan), var(--blue));
  }
  .dash-card-label {
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: rgba(200,212,220,0.45);
    margin-bottom: 0.8rem;
  }
  .dash-card-value {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 2.8rem;
    background: linear-gradient(90deg, var(--cyan), var(--blue));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1;
  }
  .dash-info {
    background: var(--card);
    border: 1px solid var(--border);
    padding: 2rem;
    border-radius: 3px;
    text-align: center;
  }
  .dash-info p {
    font-size: 0.9rem;
    color: rgba(200,212,220,0.5);
    line-height: 1.7;
  }
  @media (max-width: 768px) {
    .dashboard-grid { grid-template-columns: 1fr; }
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
        <button type="submit" style="background:none;border:none;cursor:pointer;color:inherit;font:inherit;letter-spacing:2px;font-size:0.85rem;font-weight:600;text-transform:uppercase;padding:0.55rem 1.4rem;background:linear-gradient(135deg,#00c8e0,#0a6ebd);border-radius:2px;color:#fff;">
          Sair
        </button>
      </form>
    </li>
  </ul>
</nav>

<div class="dashboard-wrap">
  <div class="dashboard-header">
    <div class="dashboard-greeting">
      Bem-vindo, <span><?php echo auth()->user()->name; ?></span>
    </div>
    <div style="font-size:0.78rem;color:rgba(200,212,220,0.4);letter-spacing:1px;">
      <?php echo auth()->user()->email; ?>
    </div>
  </div>

  <div class="dashboard-content">

    <div class="dashboard-grid">
      <div class="dash-card">
        <div class="dash-card-label">Serviços Activos</div>
        <div class="dash-card-value">6</div>
      </div>
      <div class="dash-card">
        <div class="dash-card-label">Pacotes Disponíveis</div>
        <div class="dash-card-value">4</div>
      </div>
      <div class="dash-card">
        <div class="dash-card-label">Área de Gestão</div>
        <div class="dash-card-value">ON</div>
      </div>
    </div>

    <div class="dash-info">
      <p>Esta é a área privada da Eleven TV.<br>Aqui podes gerir conteúdos, pedidos e configurações do site.</p>
    </div>

  </div>
</div>

</body>
</html>
