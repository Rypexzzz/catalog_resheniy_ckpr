<?php
// Каталог типовых решений ЦК ПР
$iconPath = '/upload/catalog_resheniy_ckpr_icons';
?>

<!-- Подключение шрифта Montserrat -->
<link rel="preconnect" href="https://fonts.googleapis.com  ">
<link rel="preconnect" href="https://fonts.gstatic.com  " crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat  :wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
/* ====================================
   КАТАЛОГ РЕШЕНИЙ ЦК ПР
   ==================================== */

@keyframes ckprFadeInDown {
  from { opacity: 0; transform: translateY(-30px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes ckprFadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

.ckpr-catalog {
  font-family: 'Montserrat', sans-serif;
  max-width: 1200px;
  margin: 0 auto;
  padding: 60px 30px 300px 30px;
  background: linear-gradient(135deg, #FFFFFF 0%, #D7F0FF 100%);
  border-radius: 16px;
  position: relative;
  overflow: hidden;
}

.ckpr-catalog::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -20%;
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(0, 120, 192, 0.1) 0%, transparent 70%);
  pointer-events: none;
}

.ckpr-catalog::after {
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

.ckpr-cards {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
  justify-content: center;
  position: relative;
  z-index: 1;
}

.ckpr-card {
  background: #FFFFFF;
  border-radius: 16px;
  padding: 40px 28px 32px;
  text-align: center;
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

.ckpr-card:nth-child(1) { animation-delay: 0.3s; }
.ckpr-card:nth-child(2) { animation-delay: 0.45s; }
.ckpr-card:nth-child(3) { animation-delay: 0.6s; }

.ckpr-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 16px 48px rgba(0, 120, 192, 0.2);
  border-color: #0078C0;
}

.ckpr-icon {
  width: 80px;
  height: 80px;
  margin: 0 auto 24px;
  background: linear-gradient(135deg, #D7F0FF 0%, #E8F6FF 100%);
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 12px rgba(0, 120, 192, 0.1);
  transition: all 0.4s ease;
}

.ckpr-card:hover .ckpr-icon {
  transform: scale(1.1) rotate(3deg);
  box-shadow: 0 8px 24px rgba(0, 120, 192, 0.2);
}

.ckpr-icon img {
  width: 40px;
  height: 40px;
  transition: transform 0.3s ease;
}

.ckpr-card:hover .ckpr-icon img {
  transform: scale(1.1);
}

.ckpr-card-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 1.5rem;
  font-weight: 900;
  color: #0078C0;
  margin: 0 0 16px 0;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  -webkit-text-stroke: 0.8px #0078C0;
}

.ckpr-card-desc {
  font-family: 'Montserrat', sans-serif;
  font-size: 1.1rem;
  font-weight: 500;
  color: #333333;
  line-height: 1.7;
  margin: 0 0 24px 0;
  flex-grow: 1;
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
  margin-top: auto;
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

.ckpr-btn-arrow {
  transition: transform 0.3s ease;
}

.ckpr-btn:hover .ckpr-btn-arrow {
  transform: translateX(4px);
}

/* Адаптив */
@media (max-width: 768px) {
  .ckpr-catalog {
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
  
  .ckpr-card {
    width: 100%;
    max-width: 100%;
    padding: 32px 24px 28px;
  }
  
  .ckpr-card-title {
    font-size: 1.3rem;
  }
  
  .ckpr-card-desc {
    font-size: 1rem;
  }
}
</style>

<div class="ckpr-catalog">
  <div class="ckpr-header">
    <h1 class="ckpr-title">Каталог типовых решений ЦК ПР</h1>
    <p class="ckpr-subtitle">В данном разделе размещен каталог типовых решений ЦК ПР, содержащий надежные инструменты для бизнеса</p>
  </div>
  
  <div class="ckpr-cards">
    
    <div class="ckpr-card">
      <div class="ckpr-icon">
        <img src="<?= $iconPath ?>/icon-bitrix24.svg" alt="">
      </div>
      <h3 class="ckpr-card-title">Решения для Битрикс24</h3>
      <p class="ckpr-card-desc">Повышайте эффективность бизнеса с нашими модулями и платформами на базе Битрикс24</p>
      <a href="page:#landing1772" class="ckpr-btn">
        Перейти к разделу
        <span class="ckpr-btn-arrow">→</span>
      </a>
    </div>
    
    <div class="ckpr-card">
      <div class="ckpr-icon">
        <img src="<?= $iconPath ?>/icon-sites.svg" alt="">
      </div>
      <h3 class="ckpr-card-title">Решения для Битрикс.Сайты</h3>
      <p class="ckpr-card-desc">Современные и функциональные сайты с нашими решениями для Битрикс24.Сайты</p>
      <a href="page:#landing1773" class="ckpr-btn">
        Перейти к разделу
        <span class="ckpr-btn-arrow">→</span>
      </a>
    </div>
    
    <div class="ckpr-card">
      <div class="ckpr-icon">
        <img src="<?= $iconPath ?>/icon-dev.svg" alt="">
      </div>
      <h3 class="ckpr-card-title">Решения для разработки</h3>
      <p class="ckpr-card-desc">Усовершенствуйте процесс разработки при помощи наших кастомных решений</p>
      <a href="page:#landing1774" class="ckpr-btn">
        Перейти к разделу
        <span class="ckpr-btn-arrow">→</span>
      </a>
    </div>
    
  </div>
</div>