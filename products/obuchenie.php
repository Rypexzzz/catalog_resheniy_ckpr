<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Модуль обучения</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    @keyframes ckprFadeInDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes ckprFadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .ckpr-product-page {
      font-family: 'Montserrat', sans-serif;
      max-width: 1200px;
      margin: 0 auto;
      padding: 60px 30px;
      background: linear-gradient(135deg, #FFFFFF 0%, #D7F0FF 100%);
      min-height: 100vh;
      color: #333;
    }

    /* ===== HERO ===== */
    .ckpr-hero {
      display: flex;
      justify-content: space-between;
      align-items: stretch;
      gap: 40px;
      margin-bottom: 60px;
      animation: ckprFadeInDown 0.8s ease-out;
    }

    .ckpr-hero-content {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .ckpr-hero-title {
      font-size: 3rem;
      font-weight: 900;
      color: #0078C0;
      margin-bottom: 24px;
      text-transform: uppercase;
      -webkit-text-stroke: 1.5px #0078C0;
    }

    .ckpr-hero-desc {
      font-size: 1.2rem;
      font-weight: 500;
      color: #000;
      line-height: 1.7;
      margin-bottom: 32px;
      padding: 20px 32px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 12px;
      border-left: 4px solid #0078C0;
      box-shadow: 0 4px 20px rgba(0, 120, 192, 0.08);
      flex-grow: 1;
      display: flex;
      align-items: center;
    }

    .ckpr-hero-logo {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 12px;
      padding: 24px;
      box-shadow: 0 4px 20px rgba(0, 120, 192, 0.08);
    }

    .ckpr-hero-logo img {
      max-width: 100%;
      height: auto;
    }

    .ckpr-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 14px 28px;
      background: linear-gradient(135deg, #0078C0 0%, #0088D4 100%);
      color: #FFFFFF;
      font-family: 'Montserrat', sans-serif;
      font-size: 0.85rem;
      font-weight: 700;
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 1px;
      border-radius: 10px;
      box-shadow: 0 4px 16px rgba(0, 120, 192, 0.3);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .ckpr-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s ease;
    }

    .ckpr-btn:hover::before {
      left: 100%;
    }

    .ckpr-btn:hover {
      background: linear-gradient(135deg, #006199 0%, #0078C0 100%);
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0, 120, 192, 0.4);
      color: #FFFFFF;
    }

    /* ===== СЕКЦИИ ===== */
    .ckpr-section {
      margin-bottom: 60px;
      animation: ckprFadeInUp 0.6s ease-out both;
    }

    .ckpr-section:nth-child(2) { animation-delay: 0.1s; }
    .ckpr-section:nth-child(3) { animation-delay: 0.2s; }
    .ckpr-section:nth-child(4) { animation-delay: 0.3s; }
    .ckpr-section:nth-child(5) { animation-delay: 0.4s; }
    .ckpr-section:nth-child(6) { animation-delay: 0.5s; }

    .ckpr-section-title {
      font-size: 1.8rem;
      font-weight: 900;
      color: #0078C0;
      margin-bottom: 30px;
      text-transform: uppercase;
      -webkit-text-stroke: 0.5px #0078C0;
    }

    /* ===== ФУНКЦИИ (простые карточки) ===== */
    .ckpr-features {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }

    .ckpr-feature {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 20px 24px;
      background: #FFFFFF;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 120, 192, 0.08);
      border-left: 4px solid #0078C0;
      transition: all 0.3s ease;
    }

    .ckpr-feature:hover {
      transform: translateX(8px);
      box-shadow: 0 8px 24px rgba(0, 120, 192, 0.15);
    }

    .ckpr-feature-icon {
      width: 48px;
      height: 48px;
      background: linear-gradient(135deg, #D7F0FF 0%, #E8F6FF 100%);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .ckpr-feature-icon svg {
      width: 24px;
      height: 24px;
      stroke: #0078C0;
    }

    .ckpr-feature-text {
      font-size: 1rem;
      font-weight: 500;
      color: #333;
    }

    /* ===== ХАРАКТЕРИСТИКИ ===== */
    .ckpr-specs {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .ckpr-spec {
      background: #FFFFFF;
      border-radius: 16px;
      padding: 28px 24px;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0, 120, 192, 0.1);
      border-top: 4px solid #0078C0;
      transition: all 0.3s ease;
      flex: 1;
      min-width: 200px;
    }

    .ckpr-spec:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 32px rgba(0, 120, 192, 0.18);
    }

    .ckpr-spec-label {
      font-size: 0.8rem;
      font-weight: 700;
      color: #0078C0;
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .ckpr-spec-value {
      font-size: 1rem;
      font-weight: 600;
      color: #333;
    }

    .ckpr-spec-highlight {
      margin-top: 24px;
      background: linear-gradient(135deg, #0078C0 0%, #0088D4 100%);
      border-radius: 16px;
      padding: 32px;
      display: flex;
      align-items: center;
      gap: 24px;
      box-shadow: 0 8px 32px rgba(0, 120, 192, 0.3);
    }

    .ckpr-spec-highlight-icon {
      width: 72px;
      height: 72px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .ckpr-spec-highlight-icon svg {
      width: 36px;
      height: 36px;
      stroke: #FFFFFF;
    }

    .ckpr-spec-highlight-content {
      flex: 1;
    }

    .ckpr-spec-highlight-title {
      font-size: 1.2rem;
      font-weight: 800;
      color: #FFFFFF;
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .ckpr-spec-highlight-list {
      list-style: none;
    }

    .ckpr-spec-highlight-list li {
      font-size: 1rem;
      font-weight: 500;
      color: #FFFFFF;
      padding: 8px 0 8px 28px;
      position: relative;
    }

    .ckpr-spec-highlight-list li::before {
      content: '';
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 18px;
      height: 18px;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
    }

    .ckpr-spec-highlight-list li::after {
      content: '';
      position: absolute;
      left: 5px;
      top: 50%;
      transform: translateY(-50%);
      width: 8px;
      height: 8px;
      background: #FFFFFF;
      border-radius: 50%;
    }

    /* ===== ПРЕИМУЩЕСТВА ===== */
    .ckpr-advantages {
      background: #FFFFFF;
      border-radius: 16px;
      padding: 32px;
      box-shadow: 0 4px 24px rgba(0, 120, 192, 0.1);
    }

    .ckpr-advantages-intro {
      font-size: 1.1rem;
      font-weight: 700;
      color: #0078C0;
      margin-bottom: 24px;
    }

    .ckpr-advantages-list {
      list-style: none;
    }

    .ckpr-advantages-list li {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      font-size: 0.95rem;
      font-weight: 500;
      color: #333;
      padding: 16px 20px;
      margin-bottom: 12px;
      background: linear-gradient(135deg, #f8fbff 0%, #eef7ff 100%);
      border-radius: 12px;
      border-left: 4px solid #0078C0;
      transition: all 0.3s ease;
      line-height: 1.6;
    }

    .ckpr-advantages-list li:last-child {
      margin-bottom: 0;
    }

    .ckpr-advantages-list li:hover {
      transform: translateX(5px);
      box-shadow: 0 4px 12px rgba(0, 120, 192, 0.1);
    }

    .ckpr-advantages-list li svg {
      width: 24px;
      height: 24px;
      stroke: #0078C0;
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* ===== СТОИМОСТЬ ===== */
    .ckpr-pricing {
      background: #FFFFFF;
      border-radius: 16px;
      padding: 40px;
      box-shadow: 0 4px 24px rgba(0, 120, 192, 0.1);
    }

    .ckpr-pricing-title {
      font-size: 1.1rem;
      font-weight: 700;
      color: #0078C0;
      margin-bottom: 24px;
      text-align: center;
    }

    .ckpr-pricing-tiers {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      margin-bottom: 32px;
    }

    .ckpr-pricing-tier {
      flex: 1;
      min-width: 200px;
      padding: 24px;
      background: linear-gradient(135deg, #f8fbff 0%, #eef7ff 100%);
      border-radius: 12px;
      text-align: center;
      border: 2px solid transparent;
      transition: all 0.3s ease;
    }

    .ckpr-pricing-tier:hover {
      border-color: #0078C0;
      transform: translateY(-3px);
    }

    .ckpr-pricing-tier-value {
      font-size: 2rem;
      font-weight: 900;
      color: #0078C0;
      margin-bottom: 8px;
    }

    .ckpr-pricing-tier-label {
      font-size: 0.85rem;
      font-weight: 500;
      color: #555;
      line-height: 1.5;
    }

    .ckpr-pricing-btn {
      text-align: center;
    }

    /* ===== КОНТАКТЫ ===== */
    .ckpr-contacts {
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
      justify-content: center;
    }

    .ckpr-contact {
      background: #FFFFFF;
      border-radius: 16px;
      padding: 32px 28px;
      box-shadow: 0 4px 20px rgba(0, 120, 192, 0.1);
      text-align: center;
      transition: all 0.3s ease;
      flex: 1;
      min-width: 280px;
      max-width: 400px;
    }

    .ckpr-contact:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 32px rgba(0, 120, 192, 0.18);
    }

    .ckpr-contact-name {
      font-size: 1.1rem;
      font-weight: 800;
      color: #0078C0;
      margin-bottom: 8px;
    }

    .ckpr-contact-role {
      font-size: 0.85rem;
      font-weight: 500;
      color: #555;
      margin-bottom: 16px;
      line-height: 1.5;
    }

    .ckpr-contact-info a {
      color: #0078C0;
      text-decoration: none;
      display: block;
      font-size: 0.9rem;
      margin-bottom: 6px;
      transition: color 0.3s ease;
    }

    .ckpr-contact-info a:hover {
      text-decoration: underline;
    }

    /* ===== АДАПТИВ ===== */
    @media (max-width: 900px) {
      .ckpr-hero {
        flex-direction: column;
      }

      .ckpr-hero-desc {
        text-align: left;
      }

      .ckpr-features {
        grid-template-columns: 1fr;
      }

      .ckpr-specs {
        flex-direction: column;
      }

      .ckpr-spec {
        min-width: 100%;
      }

      .ckpr-pricing-tiers {
        flex-direction: column;
      }

      .ckpr-spec-highlight {
        flex-direction: column;
        text-align: center;
      }

      .ckpr-spec-highlight-list li {
        text-align: left;
      }
    }

    @media (max-width: 600px) {
      .ckpr-product-page {
        padding: 40px 20px;
      }

      .ckpr-hero-title {
        font-size: 2rem;
      }

      .ckpr-section-title {
        font-size: 1.4rem;
      }
    }
  </style>
</head>
<body>

<div class="ckpr-product-page">

  <section class="ckpr-hero">
    <div class="ckpr-hero-content">
      <h1 class="ckpr-hero-title">Модуль обучения</h1>
      <p class="ckpr-hero-desc">Инструмент для повышения доступности и эффективности обучения пользователей</p>
      <a href="/upload/catalog_resheniy_ckpr_presentations/obuchenie.pdf" class="ckpr-btn" onclick="top.BX.SidePanel.Instance.open(this.href, {cacheable: false}); return false;">Презентация о продукте</a>
    </div>
    <div class="ckpr-hero-logo">
      <img src="/upload/catalog_resheniy_ckpr_icons/logo-obuchenie.png" alt="Модуль обучения">
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Основные функциональные возможности</h2>
    <div class="ckpr-features">
      <div class="ckpr-feature">
        <div class="ckpr-feature-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg>
        </div>
        <span class="ckpr-feature-text">Создание и редактирование курсов</span>
      </div>
      <div class="ckpr-feature">
        <div class="ckpr-feature-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
        </div>
        <span class="ckpr-feature-text">Создание и редактирование глав и уроков</span>
      </div>
      <div class="ckpr-feature">
        <div class="ckpr-feature-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
        </div>
        <span class="ckpr-feature-text">Составление вопросов и тестов к курсам</span>
      </div>
      <div class="ckpr-feature">
        <div class="ckpr-feature-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg>
        </div>
        <span class="ckpr-feature-text">Сертификация по итогам прохождения курса</span>
      </div>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Характеристики</h2>
    <div class="ckpr-specs">
      <div class="ckpr-spec">
        <div class="ckpr-spec-label">Платформа для размещения</div>
        <div class="ckpr-spec-value">1С-Битрикс: Корпоративный портал</div>
      </div>
      <div class="ckpr-spec">
        <div class="ckpr-spec-label">Технологический стек</div>
        <div class="ckpr-spec-value">PHP, JS, CSS</div>
      </div>
      <div class="ckpr-spec">
        <div class="ckpr-spec-label">Год ввода в эксплуатацию</div>
        <div class="ckpr-spec-value">2024</div>
      </div>
    </div>
    <div class="ckpr-spec-highlight">
      <div class="ckpr-spec-highlight-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
      </div>
      <div class="ckpr-spec-highlight-content">
        <div class="ckpr-spec-highlight-title">Наличие в реестре ПО РФ</div>
        <ul class="ckpr-spec-highlight-list">
          <li>Имеет свидетельство о государственной регистрации в Роспатенте</li>
          <li>Включен в реестр Российского ПО от Минцифры</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Преимущества продукта</h2>
    <div class="ckpr-advantages">
      <div class="ckpr-advantages-intro">Автоматизация процессов по:</div>
      <ul class="ckpr-advantages-list">
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Обучению регламентам Общества внешних (Экстранет) пользователей для понимания принципов работы компании</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Обучению внешних (Экстранет) пользователей работе с программным обеспечением, созданным командой Общества</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Обучению инструментам работы в Обществе внешних (Экстранет) пользователей для оптимизации времени их адаптации</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Обучению работников. Модуль позволит создать курсы и обучающие материалы для новых и текущих работников компании. Это может включать в себя обучение по стандартным процедурам безопасности, работе с внутренними инструментами, методологиям разработки и так далее</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Адаптации новых работников. Модуль поможет при введении новых работников, предоставляя им необходимую информацию о компании, ее процессах и стандартах</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Развитию работников. Модуль позволит получать новую и актуальную информацию по профессиональной деятельности работников для их развития и повышения уровня компетенций</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Стоимость</h2>
    <div class="ckpr-pricing">
      <div class="ckpr-pricing-title">Создание курса + подключение к нему пользователей, генерация отчетности</div>
      <div class="ckpr-pricing-tiers">
        <div class="ckpr-pricing-tier">
          <div class="ckpr-pricing-tier-value">1000 руб</div>
          <div class="ckpr-pricing-tier-label">за пользователя при подключении<br><strong>100 и менее</strong> пользователей</div>
        </div>
        <div class="ckpr-pricing-tier">
          <div class="ckpr-pricing-tier-value">800 руб</div>
          <div class="ckpr-pricing-tier-label">за пользователя при подключении<br><strong>от 100 до 250</strong> пользователей</div>
        </div>
        <div class="ckpr-pricing-tier">
          <div class="ckpr-pricing-tier-value">600 руб</div>
          <div class="ckpr-pricing-tier-label">за пользователя при подключении<br><strong>более 250</strong> пользователей</div>
        </div>
      </div>
      <div class="ckpr-pricing-btn">
        <a href="form:#crmFormPopup" class="ckpr-btn">Купить продукт</a>
      </div>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Контакты</h2>
    <div class="ckpr-contacts">
      <div class="ckpr-contact">
        <div class="ckpr-contact-name">Яковлев Артем Викторович</div>
        <div class="ckpr-contact-role">Руководитель центра компетенций по разработке портальных решений</div>
        <div class="ckpr-contact-info">
          <a href="mailto:a.yakovlev@gazpromcps.ru">a.yakovlev@gazpromcps.ru</a>
          <a href="tel:+79218567609">+7 921 856 76 09</a>
        </div>
      </div>
      <div class="ckpr-contact">
        <div class="ckpr-contact-name">Архипенко Антон Игоревич</div>
        <div class="ckpr-contact-role">Начальник отдела разработки внутренних решений</div>
        <div class="ckpr-contact-info">
          <a href="mailto:a.arkhipenko@gazpromcps.ru">a.arkhipenko@gazpromcps.ru</a>
          <a href="tel:+79118177060">+7 911 817 70 60</a>
        </div>
      </div>
    </div>
  </section>

</div>

</body>
</html>