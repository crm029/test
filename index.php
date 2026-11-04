<?php
declare(strict_types=1);

// Security headers for this public, static-style portfolio.
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
header("Content-Security-Policy: default-src 'self'; base-uri 'self'; form-action 'self'; frame-ancestors 'none'; object-src 'none'; img-src 'self' data:; font-src 'self' https://fonts.gstatic.com; style-src 'self' https://fonts.googleapis.com; script-src 'self'; upgrade-insecure-requests");

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$pageTitle = 'مهدی | ساختن ایده‌ها، توسعه کسب‌وکارها';
$pageDescription = 'وب‌سایت شخصی مهدی؛ فعال در طراحی وب، توسعه کسب‌وکار، فناوری و ایده‌های تولیدی.';
$projects = [
    ['name' => 'نایریکا', 'type' => 'برند و توسعه کسب‌وکار', 'description' => 'حرکت در مسیر ساخت یک برند در حوزه زیبایی، خدمات و راهکارهای دیجیتال.', 'url' => 'https://nayrika-clinic.ir/', 'label' => 'مشاهده وب‌سایت'],
    ['name' => 'چشم‌نواز', 'type' => 'تجربه دیجیتال و فروش آنلاین', 'description' => 'طراحی و توسعه تجربه آنلاین برای یک فروشگاه تخصصی عینک.', 'url' => 'https://cheshm-navaz.ir/', 'label' => 'مشاهده وب‌سایت'],
    ['name' => 'ایده‌های تولیدی', 'type' => 'تولید و کارآفرینی', 'description' => 'بررسی و توسعه ایده‌هایی با تمرکز بر تولید، ارزش‌آفرینی و رشد پایدار.', 'url' => null, 'label' => null],
    ['name' => 'پروژه‌های نرم‌افزاری', 'type' => 'فناوری و راهکارهای کاربردی', 'description' => 'ساخت ابزارها و سامانه‌هایی برای ساده‌تر و هوشمندتر کردن فرایندها.', 'url' => null, 'label' => null],
];
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0d1b2a">
  <meta name="description" content="<?= e($pageDescription) ?>">
  <meta name="robots" content="index,follow,max-image-preview:large">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="fa_IR">
  <meta property="og:title" content="<?= e($pageTitle) ?>">
  <meta property="og:description" content="<?= e($pageDescription) ?>">
  <meta property="og:image" content="assets/img/brand-mark.svg">
  <meta name="twitter:card" content="summary">
  <title><?= e($pageTitle) ?></title>
  <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
  <link rel="apple-touch-icon" href="assets/img/brand-mark.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"Person","name":"مهدی","jobTitle":"طراح وب و علاقه‌مند به توسعه کسب‌وکار","knowsAbout":["طراحی و توسعه وب","مدیریت کسب‌وکار","کارآفرینی","فناوری"]}</script>
</head>
<body>
  <a class="skip-link" href="#main">رفتن به محتوای اصلی</a>
  <div class="site-glow glow-one" aria-hidden="true"></div><div class="site-glow glow-two" aria-hidden="true"></div>
  <header class="topbar">
    <a class="brand" href="#home" aria-label="مهدی - صفحه اصلی"><img class="brand-logo" src="assets/img/brand-mark.svg" alt=""><span>MEHDI<span class="brand-dot">.</span></span></a>
    <button class="menu-toggle" type="button" aria-label="باز کردن منو" aria-expanded="false" aria-controls="primary-navigation"><span></span><span></span></button>
    <nav class="nav-links" id="primary-navigation" aria-label="منوی اصلی">
      <a href="#about">درباره من</a><a href="#skills">زمینه‌های فعالیت</a><a href="#projects">پروژه‌ها</a><a href="#vision">نگاه من</a>
      <a class="nav-contact" href="#contact">ارتباط با من <span aria-hidden="true">↗</span></a>
    </nav>
  </header>

  <main id="main">
    <section class="hero section-wrap" id="home" aria-labelledby="hero-title">
      <div class="hero-copy reveal">
        <div class="eyebrow"><span class="eyebrow-line"></span> خوش آمدی به دنیای من</div>
        <p class="hero-kicker">سلام، من مهدی هستم</p>
        <h1 id="hero-title">علاقه‌مند به <span class="gold-text">ساختن</span><br>و تبدیل ایده‌ها به واقعیت.</h1>
        <p class="hero-description">از دنیای وب و فناوری تا مدیریت و کسب‌وکار؛ به پیدا کردن فرصت‌ها، ساختن راه‌حل‌ها و خلق چیزهایی که ارزش ماندن دارند علاقه دارم.</p>
        <div class="hero-actions"><a class="button button-primary" href="#projects">دیدن پروژه‌ها <span aria-hidden="true">↗</span></a><a class="text-link" href="#about">بیشتر درباره من <span aria-hidden="true">↓</span></a></div>
        <div class="hero-meta"><span class="meta-line"></span><span>ایده‌پردازی&nbsp; · &nbsp;توسعه&nbsp; · &nbsp;اجرا</span></div>
      </div>
      <div class="hero-art reveal" aria-label="نشان شخصی مهدی">
        <div class="orbit orbit-outer"></div><div class="orbit orbit-inner"></div>
        <div class="monogram-card"><img class="hero-logo" src="assets/img/brand-mark.svg" alt="نشان مهدی"><span class="monogram-caption">THINK · BUILD · GROW</span></div>
        <div class="floating-note note-top"><span class="note-icon" aria-hidden="true">✳</span><span>همیشه در حال یادگیری</span></div>
        <div class="floating-note note-bottom"><span class="note-number">01</span><span>از ایده تا اجرا</span></div>
        <div class="art-cross cross-one" aria-hidden="true">＋</div><div class="art-cross cross-two" aria-hidden="true">✳</div>
      </div>
      <a class="scroll-cue" href="#about"><span></span> اسکرول کن</a>
    </section>

    <section class="about section-wrap section-block" id="about" aria-labelledby="about-title">
      <div class="section-heading reveal"><span class="section-index">01 / درباره من</span><h2 id="about-title">مسیر من، <span class="gold-text">مسیر ساختن است.</span></h2></div>
      <div class="about-grid">
        <div class="about-lead reveal"><p>برای من، هر ایده می‌تواند شروع یک مسیر تازه باشد؛ مسیری که با کنجکاوی آغاز می‌شود، با یادگیری شکل می‌گیرد و با تلاش به نتیجه می‌رسد.</p></div>
        <div class="about-body reveal"><p>تجربه و علاقه‌ام در نقطه اتصال چند حوزه قرار دارد: طراحی وب، مدیریت، توسعه کسب‌وکار و بررسی فرصت‌های جدید. دوست دارم فقط تماشاگر ایده‌ها نباشم؛ آن‌ها را بررسی کنم، برایشان راه‌حل بسازم و تا مرحله اجرا پیش ببرم.</p><p>این وب‌سایت گوشه‌ای از مسیر، تجربه‌ها و پروژه‌هایی است که در حال شکل دادن به آن‌ها هستم.</p></div>
      </div>
      <div class="principles">
        <div class="principle reveal"><span>۰۱</span><h3>یادگیری مداوم</h3><p>هر تجربه، فرصتی برای بهتر شدن است.</p></div>
        <div class="principle reveal"><span>۰۲</span><h3>نگاه اجرایی</h3><p>ایده زمانی ارزشمند است که به عمل برسد.</p></div>
        <div class="principle reveal"><span>۰۳</span><h3>رشد پایدار</h3><p>ساختن چیزی که در طول زمان ارزش ایجاد کند.</p></div>
      </div>
    </section>

    <section class="skills-section section-block" id="skills" aria-labelledby="skills-title"><div class="section-wrap">
      <div class="section-heading reveal"><span class="section-index">02 / زمینه‌های فعالیت</span><h2 id="skills-title">چیزهایی که دنبال <span class="gold-text">می‌کنم.</span></h2><p class="section-subtitle">ترکیبی از مهارت‌های دیجیتال، تفکر مدیریتی و علاقه به ساخت کسب‌وکار.</p></div>
      <div class="skills-grid">
        <article class="skill-card reveal"><span class="skill-no">01</span><div class="skill-symbol" aria-hidden="true">⌘</div><h3>طراحی و توسعه وب</h3><p>طراحی وب‌سایت، تجربه کاربری و راهکارهای دیجیتال برای کسب‌وکارها.</p><span class="skill-line"></span></article>
        <article class="skill-card reveal"><span class="skill-no">02</span><div class="skill-symbol" aria-hidden="true">↗</div><h3>مدیریت و توسعه کسب‌وکار</h3><p>بررسی فرصت‌ها، بهبود فرایندها و تبدیل ایده‌ها به مسیرهای اجرایی.</p><span class="skill-line"></span></article>
        <article class="skill-card reveal"><span class="skill-no">03</span><div class="skill-symbol" aria-hidden="true">◇</div><h3>کارآفرینی و تولید</h3><p>علاقه‌مند به راه‌اندازی فعالیت‌های مولد و ساخت ارزش واقعی.</p><span class="skill-line"></span></article>
        <article class="skill-card reveal"><span class="skill-no">04</span><div class="skill-symbol" aria-hidden="true">⌁</div><h3>فناوری و ایده‌پردازی</h3><p>شناخت مسئله‌ها و ساخت ابزارها و محصولات کاربردی.</p><span class="skill-line"></span></article>
      </div>
    </div></section>

    <section class="projects section-wrap section-block" id="projects" aria-labelledby="projects-title">
      <div class="section-heading reveal"><span class="section-index">03 / پروژه‌ها و تجربه‌ها</span><h2 id="projects-title">بخشی از چیزهایی که <span class="gold-text">می‌سازم.</span></h2></div>
      <div class="project-grid">
        <?php foreach ($projects as $i => $project): ?>
        <article class="project-card reveal">
          <div class="project-top"><span class="project-index"><?= e(str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT)) ?></span><span class="project-arrow" aria-hidden="true">↗</span></div>
          <span class="project-type"><?= e($project['type']) ?></span>
          <h3><?= e($project['name']) ?></h3>
          <p><?= e($project['description']) ?></p>
          <div class="project-bottom"><span><?= $project['url'] ? '<a href="' . e($project['url']) . '" target="_blank" rel="noopener noreferrer">' . e($project['label']) . ' ↗</a>' : 'در حال توسعه و تجربه' ?></span><span class="project-dash"></span></div>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="vision-section section-block" id="vision" aria-labelledby="vision-title"><div class="section-wrap vision-inner reveal">
      <span class="section-index">04 / نگاه من به آینده</span>
      <div class="vision-mark" aria-hidden="true">“</div>
      <h2 id="vision-title">به آینده‌ای فکر می‌کنم که در آن، <span class="gold-text">ایده‌ها به کسب‌وکارهای واقعی</span> تبدیل می‌شوند.</h2>
      <p>تمرکز من روی یادگیری، فناوری، تولید و ساخت مجموعه‌هایی است که فقط رشد نکنند؛ بلکه برای آدم‌ها و جامعه ارزشمند باشند.</p>
      <span class="vision-signature">THINK BIG. BUILD REAL.</span>
    </div></section>

    <section class="contact section-wrap section-block" id="contact" aria-labelledby="contact-title">
      <div class="contact-panel reveal"><div><span class="section-index">05 / ارتباط</span><h2 id="contact-title">برای شروع یک <span class="gold-text">گفت‌وگوی خوب</span><br>همیشه جا هست.</h2><p>برای آشنایی بیشتر با فعالیت‌ها و پروژه‌ها، از صفحه گیت‌هاب من دیدن کن.</p></div><a class="button button-primary" href="https://github.com/crm029" target="_blank" rel="noopener noreferrer">صفحه گیت‌هاب <span aria-hidden="true">↗</span></a><div class="contact-decoration" aria-hidden="true">م</div></div>
    </section>
  </main>

  <footer class="footer section-wrap"><a class="brand" href="#home"><img class="brand-logo" src="assets/img/brand-mark.svg" alt=""><span>MEHDI<span class="brand-dot">.</span></span></a><span>ساخته‌شده با علاقه به ایده‌ها و آینده.</span><a href="#home" class="back-top">بازگشت به بالا ↑</a><span class="copyright">© <?= date('Y') ?> MEHDI</span></footer>
  <script src="assets/js/main.js" defer></script>
</body>
</html>
