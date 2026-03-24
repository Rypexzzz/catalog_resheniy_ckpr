<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Портал самообслуживания</title>
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

    /* ===== ТЕХНИЧЕСКИЕ ОСОБЕННОСТИ ===== */
    .ckpr-tech-facts {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .ckpr-tech-fact {
      background: #FFFFFF;
      border-radius: 16px;
      padding: 24px;
      box-shadow: 0 4px 20px rgba(0, 120, 192, 0.1);
      display: flex;
      align-items: flex-start;
      gap: 16px;
      transition: all 0.3s ease;
    }

    .ckpr-tech-fact:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 24px rgba(0, 120, 192, 0.15);
    }

    .ckpr-tech-fact-number {
      width: 40px;
      height: 40px;
      background: linear-gradient(135deg, #0078C0 0%, #0088D4 100%);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      font-weight: 900;
      color: #FFFFFF;
      flex-shrink: 0;
    }

    .ckpr-tech-fact-text {
      font-size: 0.95rem;
      font-weight: 500;
      color: #333;
      line-height: 1.6;
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

      .ckpr-hero-desc {
        text-align: left;
      }

      .ckpr-capabilities {
        grid-template-columns: 1fr;
      }

      .ckpr-advantages-list {
        grid-template-columns: 1fr;
      }

      .ckpr-tech-facts {
        grid-template-columns: 1fr;
      }

      .ckpr-spec-highlight {
        flex-direction: column;
        text-align: center;
      }

      .ckpr-spec-highlight-list li {
        text-align: left;
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
      <h1 class="ckpr-hero-title">Портал самообслуживания</h1>
      <p class="ckpr-hero-desc">Единый интерфейс для работников Общества для подачи и обработки обращений на получение информации и услуг из разных подразделений</p>
      <a href="/upload/catalog_resheniy_ckpr_presentations/pso.pdf" class="ckpr-btn" onclick="top.BX.SidePanel.Instance.open(this.href, {cacheable: false}); return false;">Презентация о продукте</a>
    </div>
    <div class="ckpr-hero-logo">
      <img src="/upload/catalog_resheniy_ckpr_icons/logo-pso.png" alt="Портал самообслуживания">
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Функциональные возможности</h2>
    <div class="ckpr-capabilities">
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6"/><path d="M9 15h6"/></svg>
          </div>
          <div class="ckpr-capability-title">Подача заявок</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Подача заявки в соответствии с каталогом услуг</li>
          <li>Выбор категории и типа обращения</li>
          <li>Прикрепление файлов и документов</li>
          <li>Добавление услуг в избранное</li>
        </ul>
      </div>
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg>
          </div>
          <div class="ckpr-capability-title">Мониторинг статусов</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Получение актуального статуса по заявкам</li>
          <li>Отслеживание истории изменений</li>
          <li>Фильтрация заявок по статусу</li>
          <li>Уведомления об изменении статуса</li>
        </ul>
      </div>
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><path d="M8 21h8"/><path d="M12 17v4"/></svg>
          </div>
          <div class="ckpr-capability-title">Учет оборудования</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Просмотр прикрепленного оборудования</li>
          <li>Информация о характеристиках</li>
          <li>История назначений</li>
          <li>Заявки на обслуживание</li>
        </ul>
      </div>
      <div class="ckpr-capability">
        <div class="ckpr-capability-header">
          <div class="ckpr-capability-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
          </div>
          <div class="ckpr-capability-title">Администрирование</div>
        </div>
        <ul class="ckpr-capability-list">
          <li>Управление каталогом услуг</li>
          <li>Настройка справочников</li>
          <li>Интеграция с Naumen Service Desk</li>
          <li>Настройка популярных услуг</li>
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
        <div class="ckpr-spec-value">PHP, JS (React)</div>
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
      <ul class="ckpr-advantages-list">
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Единое пользовательское окно для всех обращений
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Снижение когнитивной нагрузки участников бизнес-процессов
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Улучшенное восприятие ИТ-сервисов со стороны пользователей
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Круглосуточный доступ к информации Общества
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Централизация данных в едином интерфейсе
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Оптимизация трудозатрат инициатора и исполнителя
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Стандартизация методов предоставления услуг
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          Повышение производительности работников
        </li>
      </ul>
    </div>
  </section>

  <section class="ckpr-section">
    <h2 class="ckpr-section-title">Технические особенности</h2>
    <div class="ckpr-tech-facts">
      <div class="ckpr-tech-fact">
        <div class="ckpr-tech-fact-number">01</div>
        <div class="ckpr-tech-fact-text">Обмен данными между Naumen и КИС реализован с помощью REST API</div>
      </div>
      <div class="ckpr-tech-fact">
        <div class="ckpr-tech-fact-number">02</div>
        <div class="ckpr-tech-fact-text">Интерфейсная часть разработана с использованием React</div>
      </div>
      <div class="ckpr-tech-fact">
        <div class="ckpr-tech-fact-number">03</div>
        <div class="ckpr-tech-fact-text">Разработан в виде модуля, можно развернуть на любом Битрикс24 и масштабировать под нужды бизнеса</div>
      </div>
      <div class="ckpr-tech-fact">
        <div class="ckpr-tech-fact-number">04</div>
        <div class="ckpr-tech-fact-text">Возможность интеграции с различными ITSM-системами</div>
      </div>
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