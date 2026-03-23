<?php
// Раздел "Решения для Битрикс.Сайты"
$logoPath = '/upload/catalog_resheniy_ckpr_icons';
?>

<!-- Подключение шрифта Montserrat -->
<link rel="preconnect" href="https://fonts.googleapis.com  ">
<link rel="preconnect" href="https://fonts.gstatic.com  " crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat  :wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
/* ====================================
   РЕШЕНИЯ ДЛЯ БИТРИКС.САЙТЫ
   ==================================== */

@keyframes ckprFadeInDown {
  from { opacity: 0; transform: translateY(-30px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes ckprFadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

.ckpr-section {
  font-family: 'Montserrat', sans-serif;
  max-width: 1200px;
  margin: 0 auto;
  padding: 60px 30px 300px 30px;
  background: linear-gradient(135deg, #FFFFFF 0%, #D7F0FF 100%);
  border-radius: 16px;
  position: relative;
  overflow: hidden;
}

.ckpr-section::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -20%;
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(0, 120, 192, 0.1) 0%, transparent 70%);
  pointer-events: none;
}

.ckpr-section::after {
  content: '';
  position: absolute;
  bottom: -30%;
  left: -10%;
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, rgba(0, 120, 192, 0.06) 0%, transparent 70%);
  pointer-events: none;
}

.ckpr-header {
  text-align: center;
  margin-bottom: 50px;
  position: relative;
  z-index: 1;
}

.ckpr-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 3rem;
  font-weight: 900;
  color: #0078C0;
  margin: 0 0 24px 0;
  text-transform: uppercase;
  animation: ckprFadeInDown 0.8s ease-out;
  -webkit-text-stroke: 1.5px #0078C0;
}

.ckpr-subtitle {
  font-family: 'Montserrat', sans-serif;
  font-size: 1.2rem;
  font-weight: 500;
  color: #000000;
  max-width: 720px;
  margin: 0 auto;
  padding: 20px 32px;
  background: rgba(255, 255, 255, 0.9);
  border-radius: 12px;
  border-left: 4px solid #0078C0;
  line-height: 1.6;
  text-align: left;
  box-shadow: 0 4px 20px rgba(0, 120, 192, 0.08);
  animation: ckprFadeInUp 0.8s ease-out 0.2s both;
}

.ckpr-products {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
  justify-content: center;
  position: relative;
  z-index: 1;
}

.ckpr-product {
  background: #FFFFFF;
  border-radius: 16px;
  padding: 32px 28px;
  box-shadow: 0 4px 24px rgba(0, 120, 192, 0.1);
  border: 1px solid rgba(0, 120, 192, 0.1);
  border-top: 4px solid #0078C0;
  display: flex;
  flex-direction: column;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  animation: ckprFadeInUp 0.6s ease-out both;
  width: calc(33.333% - 16px);
  min-width: 300px;
  max-width: 380px;
}

.ckpr-product:nth-child(1) { animation-delay: 0.2s; }
.ckpr-product:nth-child(2) { animation-delay: 0.3s; }
.ckpr-product:nth-child(3) { animation-delay: 0.4s; }
.ckpr-product:nth-child(4) { animation-delay: 0.5s; }
.ckpr-product:nth-child(5) { animation-delay: 0.6s; }
.ckpr-product:nth-child(6) { animation-delay: 0.7s; }

.ckpr-product:hover {
  transform: translateY(-8px);
  box-shadow: 0 16px 48px rgba(0, 120, 192, 0.2);
  border-color: #0078C0;
}

.ckpr-product-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 1.3rem;
  font-weight: 900;
  color: #0078C0;
  margin: 0 0 12px 0;
  text-transform: uppercase;
  -webkit-text-stroke: 0.5px #0078C0;
}

.ckpr-product-desc {
  font-family: 'Montserrat', sans-serif;
  font-size: 0.95rem;
  font-weight: 500;
  color: #555555;
  line-height: 1.6;
  margin: 0 0 24px 0;
  flex-grow: 1;
}

.ckpr-product-logo {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 24px;
}

.ckpr-product-logo img {
  width: 100%;
  height: auto;
}

.ckpr-product-btn {
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

.ckpr-product-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: left 0.5s ease;
}

.ckpr-product-btn:hover::before {
  left: 100%;
}

.ckpr-product-btn:hover {
  background: linear-gradient(135deg, #006199 0%, #0078C0 100%);
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(0, 120, 192, 0.4);
  color: #FFFFFF;
}

.ckpr-product-btn-arrow {
  transition: transform 0.3s ease;
}

.ckpr-product-btn:hover .ckpr-product-btn-arrow {
  transform: translateX(4px);
}

/* Адаптив */
@media (max-width: 768px) {
  .ckpr-section {
    padding: 40px 20px;
    border-radius: 12px;
  }
  
  .ckpr-title {
    font-size: 2rem;
  }
  
  .ckpr-subtitle {
    font-size: 1rem;
    padding: 16px 20px;
  }
  
  .ckpr-product {
    width: 100%;
    max-width: 100%;
    padding: 28px 24px;
  }
  
  .ckpr-product-title {
    font-size: 1.1rem;
  }
}
</style>

<div class="ckpr-section">
  <div class="ckpr-header">
    <h1 class="ckpr-title">Решения для Битрикс.Сайты</h1>
    <p class="ckpr-subtitle">Создавайте современные и функциональные сайты с нашими решениями для Битрикс24.Сайты</p>
  </div>
  
  <div class="ckpr-products">
    
    <div class="ckpr-product">
      <h3 class="ckpr-product-title">Сайт-визитка</h3>
      <p class="ckpr-product-desc">Сайт с информацией о компании и ее деятельности</p>
      <div class="ckpr-product-logo">
        <img src="<?= $logoPath ?>/logo-website.png" alt="КИС">
      </div>
      <a href="https://cis.gazpromcps.ru/knowledge/block_it/saytvizitka/?IFRAME=Y" class="ckpr-product-btn">
        Перейти к странице продукта
        <span class="ckpr-product-btn-arrow">→</span>
      </a>
    </div>
    
    <!-- Добавьте дополнительные продукты по этому шаблону -->
    <!--
    <div class="ckpr-product">
      <h3 class="ckpr-product-title">Название продукта</h3>
      <p class="ckpr-product-desc">Описание продукта</p>
      <div class="ckpr-product-logo">
        <img src="<?= $logoPath ?>/logo-name.png" alt="Название">
      </div>
      <a href="#" class="ckpr-product-btn">
        Перейти к странице продукта
        <span class="ckpr-product-btn-arrow">→</span>
      </a>
    </div>
    -->
    
  </div>
</div>