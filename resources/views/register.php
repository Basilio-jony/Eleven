<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Criar Conta — Eleven TV</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@300;400;500;600;700&family=Barlow+Condensed:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="login-page">
  <div class="scanlines"></div>

  <div class="login-card" style="max-width:460px">

    <!-- Logo -->
    <div class="login-logo">
      <svg width="38" height="38" viewBox="0 0 80 60" fill="none" xmlns="http://www.w3.org/2000/svg">
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
      <span class="login-logo-text">ELEVEN</span>
    </div>

    <h1 class="login-title">Criar Conta</h1>
    <p class="login-subtitle">Registe-se para solicitar os nossos serviços</p>

    <!-- Erros -->
    <?php if ($errors->any()): ?>
      <div class="alert-error">
        <?php echo $errors->first(); ?>
      </div>
    <?php endif; ?>

    <!-- Formulário de Registo -->
    <form method="POST" action="/register">
      <?php echo csrf_field(); ?>

      <div class="form-group">
        <label class="form-label" for="name">Nome Completo</label>
        <input
          class="form-input"
          type="text"
          id="name"
          name="name"
          value="<?php echo old('name'); ?>"
          placeholder="O seu nome"
          required
          autocomplete="name"
        >
      </div>

      <div class="form-group">
        <label class="form-label" for="email">Email</label>
        <input
          class="form-input"
          type="email"
          id="email"
          name="email"
          value="<?php echo old('email'); ?>"
          placeholder="email@exemplo.com"
          required
          autocomplete="email"
        >
      </div>

      <div class="form-group">
        <label class="form-label" for="phone">Telefone / WhatsApp</label>
        <input
          class="form-input"
          type="text"
          id="phone"
          name="phone"
          value="<?php echo old('phone'); ?>"
          placeholder="+244 9XX XXX XXX"
          autocomplete="tel"
        >
      </div>

      <div class="form-group">
        <label class="form-label" for="password">Palavra-passe</label>
        <input
          class="form-input"
          type="password"
          id="password"
          name="password"
          placeholder="Mínimo 8 caracteres"
          required
          autocomplete="new-password"
        >
      </div>

      <div class="form-group">
        <label class="form-label" for="password_confirmation">Confirmar Palavra-passe</label>
        <input
          class="form-input"
          type="password"
          id="password_confirmation"
          name="password_confirmation"
          placeholder="Repita a palavra-passe"
          required
          autocomplete="new-password"
        >
      </div>

      <button type="submit" class="btn-login">Criar Conta</button>
    </form>

    <!-- Link para login -->
    <div style="text-align:center;margin-top:1.5rem;">
      <span style="font-size:0.8rem;color:rgba(200,212,220,0.35);letter-spacing:0.5px;">Já tem conta?</span>
      <a href="/login" style="font-size:0.8rem;color:var(--cyan);text-decoration:none;margin-left:0.4rem;letter-spacing:0.5px;">Entrar</a>
    </div>

    <a href="/" class="login-back">← Voltar ao site</a>

  </div>
</div>

</body>
</html>
