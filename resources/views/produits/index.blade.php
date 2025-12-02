<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Catalogue - Peripherique - Boisson Energisante - Goodies - Streaming (Prototype sans JS)</title>
  <style>
    /* Reset basique */
    * { box-sizing: border-box; margin:0; padding:0; }
    html,body { height:100%; }
    body { font-family: "Inter", Arial, sans-serif; background:#fafafa; color:#111; line-height:1.4; }

    /* Topbar */
    .topbar {
      display:flex; align-items:center; gap:12px;
      padding:12px 20px; background:#fff; border-bottom:1px solid rgba(0,0,0,0.06);
    }
    .logo { display:flex; align-items:center; gap:8px; font-weight:800; color:#2b2bff; }
    .search { flex:1; display:flex; justify-content:center; padding: 0 12px; }
    .search input {
      width:100%; max-width:720px; padding:10px 14px; border-radius:24px; border:1px solid #e6e6e6; background:#f8f8f8;
    }
    .top-actions { display:flex; gap:14px; font-size:14px; color:#444; align-items:center; }

    /* Main nav */
    nav.main-nav { background:#222; color:#fff; padding:10px 20px; }
    nav.main-nav ul { display:flex; gap:18px; list-style:none; flex-wrap:wrap; }
    nav.main-nav a { color:inherit; text-decoration:none; font-size:14px; opacity:0.95; }
    nav.main-nav a:hover { opacity:1; }

    /* Hero */
    .hero {
      display:flex; align-items:center; justify-content:space-between; gap:20px;
      padding:100px 40px; background: linear-gradient(90deg,#f18982 0%, #ffb3c2 60%);
      color:#fff; position:relative; overflow:hidden;
    }
    .hero h1 { font-size:44px; text-transform:uppercase; letter-spacing:1px; font-weight:700; max-width:65%; }
    .hero .hero-image { width:34%; min-width:220px; display:flex; justify-content:flex-end; }
    .hero img { width:240px; height:auto; border-radius:8px; box-shadow:0 10px 30px rgba(0,0,0,0.18); }

    /* Tags sous hero */
    .tags { display:flex; gap:10px; padding:18px 40px; }
    .tag { background:#fff; border-radius:12px; padding:8px 12px; border:1px solid rgba(0,0,0,0.05); font-size:14px; }

    /* Controls (faux-filtres / tri) */
    .controls { display:flex; justify-content:space-between; align-items:center; padding:18px 40px; gap:12px; }
    .left-controls { display:flex; gap:12px; align-items:center; }
    .btn-filter { background:#3b82f6; color:#fff; border:none; padding:10px 14px; border-radius:8px; font-weight:600; cursor:default; }
    .results-info { color:#666; font-size:14px; }
    .sort-select select { padding:8px 10px; border-radius:8px; border:1px solid #ddd; background:#fff; }

    /* Layout à deux colonnes : catégories + contenu */
    .container {
      display:grid; grid-template-columns: 260px 1fr; gap:24px;
      padding:18px 40px 60px 40px;
    }

    /* Sidebar catégories */
    .aside { background:#fff; border-radius:10px; padding:16px; border:1px solid rgba(0,0,0,0.04); height:fit-content; }
    .aside h2 { font-size:16px; margin-bottom:8px; }
    .cat-list { list-style:none; display:flex; flex-direction:column; gap:8px; padding-top:6px; }
    .cat-list a {
      display:block; text-decoration:none; color:#222; padding:8px 10px; border-radius:8px; font-size:14px;
    }
    .cat-list a:hover { background:#f4f6fb; }

    /* Grille de produits */
    .content { }
    .grid { display:grid; grid-template-columns: repeat(4, 1fr); gap:18px; }
    .card {
      background:#fff; border-radius:10px; padding:16px; border:1px solid rgba(0,0,0,0.06);
      display:flex; flex-direction:column; align-items:center; min-height:280px;
    }
    .card img { width:200px; height:200px; object-fit:contain; margin-bottom:12px; }
    .card .title { font-weight:700; text-align:center; color:#222; font-size:15px; }
    .card .meta { color:#666; font-size:13px; margin-top:6px; text-align:center; }

    /* Petite légende catégorie de la carte (pour repérer) */
    .card .badge {
      display:inline-block; margin-top:10px; font-size:12px; color:#fff; background:#6b7280; padding:6px 8px; border-radius:999px;
    }

    /* Footer */
    footer { padding:24px 40px; color:#666; font-size:14px; text-align:center; }

    /* Responsive rules */
    @media (max-width:1100px) { .grid { grid-template-columns: repeat(3, 1fr); } .hero h1 { font-size:36px; } }
    @media (max-width:820px) {
      .container { grid-template-columns: 1fr; padding:12px 18px 60px 18px; }
      .aside { order:2; margin-top:18px; }
      .grid { grid-template-columns: repeat(2, 1fr); }
      .hero { padding:28px 18px; flex-direction:column; align-items:flex-start; }
      .hero .hero-image { width:100%; justify-content:center; margin-top:12px; }
      .tags, .controls { padding:12px 18px; }
    }
    @media (max-width:480px) {
      .grid { grid-template-columns: 1fr; gap:14px; }
      .search input { max-width:100%; }
      nav.main-nav ul { overflow:auto; gap:12px; }
      .hero h1 { font-size:24px; }
    }
  </style>
</head>
<body>

  <!-- Topbar -->
  <header class="topbar" role="banner">
    <div class="logo" aria-hidden="true">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" style="transform:translateY(2px);">
        <rect width="24" height="24" rx="6" fill="#2b2bff"/>
      </svg>
      <div>MAXESPORT</div>
    </div>

    <div class="search">
      <input type="search" placeholder="Recherche... ex: Manchette Gaming, G FUEL..." aria-label="Recherche"/>
    </div>

    <div class="top-actions">
      <div>🖤 Black Friday</div>
      <div>Nouveautés</div>
      <div>Besoins d'aide ?</div>
      <div>Mon compte</div>
    </div>
  </header>

  <!-- Main nav -->
  <nav class="main-nav" role="navigation" aria-label="Menu principal">
    <ul>
      <li><a href="#">Périphériques</a></li>
      <li><a href="#">Boissons</a></li>
      <li><a href="#">Goodies</a></li>
      <li><a href="#">Streaming</a></li>
    </ul>
  </nav>

  <!-- Hero/banner -->
  <section class="hero" aria-label="Bannière principale">
    <h1>Boisson énergisante gamer</h1>
    <div class="hero-image" aria-hidden="true">
      <img src="https://via.placeholder.com/300x300.png?text=G+FUEL" alt="Produit mis en avant" />
    </div>
  </section>

  <!-- Tags -->
  <div class="tags" role="list">
    <div class="tag" role="listitem">Shaker</div>
    <div class="tag" role="listitem">Compléments Alimentaires Gaming</div>
    <div class="tag" role="listitem">Hydro Booster</div>
    <div class="tag" role="listitem">Pré-workout</div>
  </div>

  <!-- Controls (visuels uniquement) -->
  <div class="controls" role="region" aria-label="Contrôles">
    <div class="left-controls">
      <div class="btn-filter" aria-hidden="true">Filtres</div>
      <div class="results-info">1–48 sur 188 résultats</div>
    </div>
    <div class="sort-select">
      <label for="sort-select" style="margin-right:8px; font-size:14px; color:#555;">Trier :</label>
      <select id="sort-select" aria-label="Trier les produits">
        <option>Nouveautés</option>
        <option>Prix : croissant</option>
        <option>Prix : décroissant</option>
        <option>Popularité</option>
      </select>
    </div>
  </div>

  <!-- Layout principal -->
  <div class="container">

    <!-- Sidebar categories -->
    <aside class="aside" aria-label="Catégories">
      <h2>Catégories</h2>
      <nav>
        <ul class="cat-list">
            
          <li><a href="#hydro">Péripherique</a></li>
          <li><a href="#boissons">Boissons Énergisantes</a></li>
          <li><a href="#electrolytes">Goodies</a></li>
          <li><a href="#proteines">Streaming</a></li>
          
        </ul>
      </nav>
    </aside>

    <!-- Contenu (grille produits) -->
    <main class="content" role="main">
      <!-- Section: Boissons Énergisantes -->
      <section id="boissons" style="margin-bottom:18px;">
        <h3 style="font-size:18px; margin-bottom:12px;">Boissons Énergisantes</h3>
        <div class="grid" aria-label="Produits Boissons Énergisantes">
          <!-- Carte produit exemple -->
          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Night+Claw" alt="LEVLUP Night Claw"/>
            <div class="title">LEVLUP — Night Claw</div>
            <div class="meta">Hydro Booster — 40 portions</div>
            <div class="badge">Hydro Booster</div>
          </article>

          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Sour+Candy" alt="LEVLUP Sour Candy"/>
            <div class="title">LEVLUP — Sour Candy</div>
            <div class="meta">Energy — 30 portions</div>
            <div class="badge">Energy</div>
          </article>

          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Sweet+Candy" alt="LEVLUP Sweet Candy"/>
            <div class="title">LEVLUP — Sweet Candy</div>
            <div class="meta">Energy — 30 portions</div>
            <div class="badge">Energy</div>
          </article>

          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Iced+Coffee" alt="LEVLUP Iced Coffee"/>
            <div class="title">LEVLUP — Iced Coffee</div>
            <div class="meta">Energy — 40 portions</div>
            <div class="badge">Saveur Iced Coffee</div>
          </article>
        </div>
      </section>

      <!-- Section: Shakers -->
      <section id="shakers" style="margin:28px 0;">
        <h3 style="font-size:18px; margin-bottom:12px;">Shakers</h3>
        <div class="grid" aria-label="Shakers">
          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Shaker+Noir" alt="Shaker Noir"/>
            <div class="title">Shaker Pro — 700ml</div>
            <div class="meta">Graduations, étanche</div>
            <div class="badge">Shaker</div>
          </article>

          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Shaker+Transparant" alt="Shaker Transparent"/>
            <div class="title">Shaker Clear — 600ml</div>
            <div class="meta">Bec anti-goutte</div>
            <div class="badge">Shaker</div>
          </article>

          <!-- Espaces vides remplacables -->
          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Shaker+3" alt="Shaker 3"/>
            <div class="title">Shaker Gamer</div>
            <div class="meta">Design gaming</div>
            <div class="badge">Shaker</div>
          </article>

          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Shaker+4" alt="Shaker 4"/>
            <div class="title">Shaker Duo</div>
            <div class="meta">Compartiment protéines</div>
            <div class="badge">Shaker</div>
          </article>
        </div>
      </section>

      <!-- Section: Compléments Alimentaires Gaming -->
      <section id="complements" style="margin:28px 0;">
        <h3 style="font-size:18px; margin-bottom:12px;">Compléments Alimentaires Gaming</h3>
        <div class="grid" aria-label="Compléments Alimentaires">
          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Nootropic" alt="Nootropic"/>
            <div class="title">Focus Booster — Nootropic</div>
            <div class="meta">Améliore la concentration</div>
            <div class="badge">Complément</div>
          </article>

          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Electrolyte" alt="Electrolyte"/>
            <div class="title">Hydrate+ — Electrolytes</div>
            <div class="meta">Récupération & hydratation</div>
            <div class="badge">Electrolytes</div>
          </article>

          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Protein" alt="Recovery Protein"/>
            <div class="title">Recovery Protein</div>
            <div class="meta">Protéines & récupération</div>
            <div class="badge">Protéine</div>
          </article>

          <article class="card">
            <img src="https://via.placeholder.com/240x240.png?text=Pack+Promo" alt="Pack Promo"/>
            <div class="title">Pack Découverte — 3 saveurs</div>
            <div class="meta">Promo limitée</div>
            <div class="badge">Pack</div>
          </article>
        </div>
      </section>

    </main>
  </div>

  <footer>
    © 2025 — Prototype e-commerce — Exemple de page catalogue (HTML + CSS, sans JavaScript)
  </footer>
</body>
</html>