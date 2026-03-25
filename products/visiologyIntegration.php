<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Модуль интеграции с Visiology</title>
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

    /* ===== ФУНКЦИОНАЛЬНЫЕ ВОЗМОЖНОСТИ ===== */
    .ckpr-capabilities {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 24px;
    }

    .ckpr-capability {
      background: #FFFFFF;
      border-radius: 16px;
      padding: 28px;
      box-shadow: 0 4px 20px rgba(0, 120, 192, 0.1);
      border-top: 4px solid #0078C0;
      transition: all 0.3s ease;
    }

    .ckpr-capability:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 32px rgba(0, 120, 192, 0.18);
    }

    .ckpr-capability-header {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 20px;
    }

    .ckpr-capability-icon {
      width: 48px;
      height: 48px;
      background: linear-gradient(135deg, #D7F0FF 0%, #E8F6FF 100%);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .ckpr-capability-icon svg {
      width: 24px;
      height: 24px;
      stroke: #0078C0;
    }

    .ckpr-capability-title {
      font-size: 1.1rem;
      font-weight: 800;
      color: #0078C0;
      text-transform: uppercase;
    }

    .ckpr-capability-list {
      list-style: none;
      padding-left: 64px;
    }

    .ckpr-capability-list li {
      font-size: 0.95rem;
      font-weight: 500;
      color: #555;
      padding: 6px 0 6px 20px;
      position: relative;
    }

    .ckpr-capability-list li::before {
      content: '';
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 8px;
      height: 8px;
      background: #0078C0;
      border-radius: 50%;
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

    /* ===== ПРЕИМУЩЕСТВА ===== */
    .ckpr-advantages {
      background: #FFFFFF;
      border-radius: 16px;
      padding: 32px;
      box-shadow: 0 4px 24px rgba(0, 120, 192, 0.1);
    }

    .ckpr-advantages-list {
      list-style: none;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }

    .ckpr-advantages-list li {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      font-size: 0.95rem;
      font-weight: 500;
      color: #333;
      padding: 12px 16px;
      background: linear-gradient(135deg, #f8fbff 0%, #eef7ff 100%);
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .ckpr-advantages-list li:hover {
      transform: translateX(5px);
      box-shadow: 0 4px 12px rgba(0, 120, 192, 0.1);
    }

    .ckpr-advantages-list li svg {
      width: 20px;
      height: 20px;
      stroke: #0078C0;
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* ===== СТОИМОСТЬ ===== */
    .ckpr-pricing-single {
      background: #FFFFFF;
      border-radius: 16px;
      padding: 40px;
      box-shadow: 0 4px 24px rgba(0, 120, 192, 0.1);
      text-align: center;
      max-width: 600px;
      margin: 0 auto;
    }

    .ckpr-pricing-single-title {
      font-size: 1rem;
      font-weight: 600;
      color: #555;
      margin-bottom: 16px;
    }

    .ckpr-pricing-single-value {
      font-size: 2rem;
      font-weight: 900;
      color: #0078C0;
      margin-bottom: 24px;
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

      .ckpr-capabilities {
        grid-template-columns: 1fr;
      }

      .ckpr-advantages-list {
        grid-template-columns: 1fr;
      }

      .ckpr-specs {
        flex-direction: column;
      }

      .ckpr-spec {
        min-width: 100%;
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

      .ckpr-capability-list {
        padding-left: 0;
      }
    }
  </style>
</head>
<body>

<div class="ckpr-product-page">

  <section class="ckpr-hero">
    <div class="ckpr-hero-content">
      <h1 class="ckpr-hero-title">Модуль интеграции с Visiology</h1>
      <p class="ckpr-hero-desc">Модуль встраивания аналитических дашбордов и отчётов BI-платформы Visiology в интерфейс корпоративного портала, обеспечивающий доступ к интерактивной визуализации данных без переключения между системами</p>
      <a href="/upload/catalog_resheniy_ckpr_presentations/visiology-integration.pdf" class="ckpr-btn" onclick="top.BX.SidePanel.Instance.open(this.href, {cacheable: false}); return false;">Презентация о продукте</a>
    </div>
    <div class="ckpr-hero-logo">
      <img src="/upload/catalog_resheniy_ckpr_icons/logo-visiology-integration.png" alt="Модуль интеграции с Visiology">
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Функциональные возможности</h2>
    <div class="ckpr-capabilities">
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
          </div>
          <div class="ckpr-capability-title">Встраивание дашбордов</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Размещение интерактивных дашбордов Visiology на страницах корпоративного портала</li>
          <li>Поддержка виджетов с графиками, диаграммами, таблицами и KPI-показателями</li>
          <li>Адаптивное отображение на различных устройствах</li>
        </ul>
      </div>
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
          </div>
          <div class="ckpr-capability-title">Сквозная авторизация</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Единый вход через учётную запись корпоративного портала (SSO)</li>
          <li>Автоматическая аутентификация при переходе к дашбордам</li>
          <li>Отсутствие необходимости повторного ввода логина и пароля</li>
        </ul>
      </div>
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div class="ckpr-capability-title">Разграничение доступа</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Настройка прав доступа к дашбордам на основе ролей и подразделений</li>
          <li>Отображение только релевантных данных для каждого пользователя</li>
          <li>Интеграция с системой прав доступа Битрикс24</li>
        </ul>
      </div>
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
          </div>
          <div class="ckpr-capability-title">Интерактивная работа с данными</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Фильтрация данных непосредственно в интерфейсе портала</li>
          <li>Детализация показателей (drill-down)</li>
          <li>Экспорт данных и отчётов</li>
        </ul>
      </div>
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
          </div>
          <div class="ckpr-capability-title">Настройка отображения</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Выбор дашбордов для размещения на страницах портала</li>
          <li>Настройка размеров и расположения виджетов</li>
          <li>Создание персонализированных страниц аналитики</li>
        </ul>
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
        <div class="ckpr-spec-value">PHP, JS, REST API, iframe</div>
      </div>
      <div class="ckpr-spec">
        <div class="ckpr-spec-label">Интеграции</div>
        <div class="ckpr-spec-value">Visiology BI</div>
      </div>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Преимущества продукта</h2>
    <div class="ckpr-advantages">
      <ul class="ckpr-advantages-list">
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Единая точка доступа к аналитике — сотрудники работают с данными, не покидая привычный интерфейс портала
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Сквозная авторизация — отсутствие необходимости помнить отдельные пароли для BI-системы
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Оперативный доступ к ключевым показателям деятельности для принятия управленческих решений
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Интерактивная визуализация данных с возможностью фильтрации и детализации
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Гибкая настройка прав доступа — каждый видит только те данные, которые ему разрешены
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Снижение порога входа для работы с аналитикой — данные доступны в знакомом интерфейсе
        </li>
      </ul>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Стоимость</h2>
    <div class="ckpr-pricing-single">
      <div class="ckpr-pricing-single-title">Стоимость внедрения и адаптации под специфику организации</div>
      <div class="ckpr-pricing-single-value">По запросу</div>
      <a href="form:#crmFormPopup" class="ckpr-btn">Оставить заявку</a>
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
        <div class="ckpr-contact-name">Архипенко Антон Алексеевич</div>
        <div class="ckpr-contact-role">Специалист по интеграционным решениям</div>
        <div class="ckpr-contact-info"></div>
      </div>
    </div>
  </section>

</div>

</body>
</html>