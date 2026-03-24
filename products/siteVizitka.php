<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сайт-визитка</title>
  <link rel="preconnect" href="https://fonts.googleapis.com  ">
  <link rel="preconnect" href="https://fonts.gstatic.com  " crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat  :wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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

    .ckpr-capability-full {
      grid-column: 1 / -1;
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
      font-size: 2.5rem;
      font-weight: 900;
      color: #0078C0;
      margin-bottom: 8px;
    }

    .ckpr-pricing-single-note {
      font-size: 0.85rem;
      font-weight: 500;
      color: #777;
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

      .ckpr-hero-desc {
        text-align: left;
      }

      .ckpr-capabilities {
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
      <h1 class="ckpr-hero-title">Сайт-визитка</h1>
      <p class="ckpr-hero-desc">Инструмент для представления индивидуальности вашей компании в digital-пространстве</p>
      <a href="https://www.gazpromcps.ru/" target = "_blank" class="ckpr-btn">Пример реализации</a>
    </div>
    <div class="ckpr-hero-logo">
      <img src="/upload/catalog_resheniy_ckpr_icons/logo-website.png" alt="Сайт-визитка">
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Функциональные возможности</h2>
    <div class="ckpr-capabilities">
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
          </div>
          <div class="ckpr-capability-title">Предоставление информации</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>О компании в целом</li>
          <li>О продуктах или услугах компании</li>
          <li>О масштабе сотрудничества с компанией</li>
        </ul>
      </div>
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <div class="ckpr-capability-title">Связь с клиентами</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Встроенные формы для сбора обратной связи или заявок на какие-либо услуги компании</li>
          <li>Интеграция с соцсетями</li>
        </ul>
      </div>
      <div class="ckpr-capability ckpr-capability-full">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div class="ckpr-capability-title">Соблюдение нормативно-правовой базы</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Выполнение требований законодательства РФ в части раскрытия информации о закупках компании</li>
          <li>Выполнение требований Минцифры РФ в части раскрытия информации о цифровых продуктах компании</li>
          <li>Выполнение требований законодательства РФ в части защиты персональных данных</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Характеристики</h2>
    <div class="ckpr-specs">
      <div class="ckpr-spec">
        <div class="ckpr-spec-label">Платформа для размещения</div>
        <div class="ckpr-spec-value">1С-Битрикс: Управление сайтом</div>
      </div>
      <div class="ckpr-spec">
        <div class="ckpr-spec-label">Технологический стек</div>
        <div class="ckpr-spec-value">PHP, JS, HTML, CSS</div>
      </div>
      <div class="ckpr-spec">
        <div class="ckpr-spec-label">Мобильная версия сайта</div>
        <div class="ckpr-spec-value">Да</div>
      </div>
      <div class="ckpr-spec">
        <div class="ckpr-spec-label">Кроссбраузерная совместимость</div>
        <div class="ckpr-spec-value">Да</div>
      </div>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Преимущества продукта</h2>
    <div class="ckpr-advantages">
      <ul class="ckpr-advantages-list">
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Типовое стандартизированное решение, отвечающее всем нормам кибербезопасности</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Высокая производительность</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Масштабируемость: возможность добавления новых страниц или функционала без значительных структурных изменений</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Красивый и современный дизайн, соответствующий требованиям корпоративного брендбука компании</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Возможности интеграции со сторонними сервисами, такими как почтовые рассылки, CRM-системы или социальные сети</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Использование импортонезависимой технологической платформы</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          <span>Возможность размещения нескольких сайтов с единой панелью управления (многосайтовость)</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Стоимость</h2>
    <div class="ckpr-pricing-single">
      <div class="ckpr-pricing-single-title">Разработка сайта с нуля с учетом специфики организации</div>
      <div class="ckpr-pricing-single-value">От 500 тыс. руб</div>
      <div class="ckpr-pricing-single-note">* за типовой сайт без доработок</div>
      <a href="form:#crmFormPopup" class="ckpr-btn">Заказать разработку</a>
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
        <div class="ckpr-contact-name">Фомин Никита Николаевич</div>
        <div class="ckpr-contact-role">Ведущий разработчик центра компетенций по разработке портальных решений</div>
        <div class="ckpr-contact-info">
          <a href="mailto:n.fomin@gazpromcps.ru">n.fomin@gazpromcps.ru</a>
          <a href="tel:+79219752331">+7 921 975 23 31</a>
        </div>
      </div>
    </div>
  </section>

</div>

</body>
</html>