<?php
$page_title = "Medisky Lifesciences Pvt. Ltd. | Clinical Nutrition & Critical Care Therapeutics";
$page_description = "Medisky Lifesciences Pvt. Ltd. — Patna-based marketer of parenteral nutrition, IV infusions, iron therapy and surgical consumables for Indian hospitals.";
$current_page = "home";
include 'includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container-xl">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <div class="eyebrow">Pharmaceutical &amp; Surgical Product Marketing</div>
        <h1>Protein Enhancement, Blood Therapeutics &amp; Surgical Care</h1>
        <p class="lede">Specialized marketing platform providing parenteral protein enhancement (Aminosky, Glutasky), blood &amp; hemoglobin correction (Ferric-CM, Tetravan), trace elements and certified surgical supplies for Indian hospitals.</p>
        <div class="d-flex gap-3 mt-4 flex-wrap">
          <a href="products.php" class="btn-brand">View Our Portfolio</a>
          <a href="about.php" class="btn-outline-brand">About Medisky</a>
        </div>
        <div class="hero-stats">
          <div>
            <span class="stat-num">7</span>
            <span class="stat-label">Core Products</span>
          </div>
          <div>
            <span class="stat-num">2015</span>
            <span class="stat-label">Est. (Patna ROC)</span>
          </div>
          <div>
            <span class="stat-num">Pan-India</span>
            <span class="stat-label">Hospital Network</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-right-img-wrapper">
          <img src="assets/img/home-banner.jpg?v=<?php echo $asset_ver; ?>" alt="Medisky Lifesciences Clinical Products Portfolio">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COMPACT CERTIFICATIONS & COMPLIANCE STRIP -->
<section class="compact-cert-strip">
  <div class="container-xl">
    <div class="row g-2 text-center text-md-start">
      <div class="col-6 col-md-3">
        <div class="cert-item d-flex align-items-center gap-2 p-2 bg-white border rounded-3 shadow-sm h-100">
          <span class="cert-icon fs-4">📜</span>
          <div class="text-start">
            <strong class="d-block text-navy" style="font-size:0.82rem; line-height:1.2;">ISO 9001 &amp; WHO-GMP</strong>
            <span class="text-muted" style="font-size:0.72rem;">Certified Manufacturing</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="cert-item d-flex align-items-center gap-2 p-2 bg-white border rounded-3 shadow-sm h-100">
          <span class="cert-icon fs-4">🧪</span>
          <div class="text-start">
            <strong class="d-block text-navy" style="font-size:0.82rem; line-height:1.2;">ESPEN 2022 Aligned</strong>
            <span class="text-muted" style="font-size:0.72rem;">Clinical Guidelines</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="cert-item d-flex align-items-center gap-2 p-2 bg-white border rounded-3 shadow-sm h-100">
          <span class="cert-icon fs-4">🛡️</span>
          <div class="text-start">
            <strong class="d-block text-navy" style="font-size:0.82rem; line-height:1.2;">US FDA &amp; CE Approved</strong>
            <span class="text-muted" style="font-size:0.72rem;">Global Compliance</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="cert-item d-flex align-items-center gap-2 p-2 bg-white border rounded-3 shadow-sm h-100">
          <span class="cert-icon fs-4">🧤</span>
          <div class="text-start">
            <strong class="d-block text-navy" style="font-size:0.82rem; line-height:1.2;">AQL 1.5 &amp; ASTM D 6319</strong>
            <span class="text-muted" style="font-size:0.72rem;">Surgical Standards</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- THERAPEUTIC INDEX -->
<section class="section" style="background:#f0f8ff; border-bottom:1px solid rgba(2,132,199,0.12); padding:52px 0 !important;">
  <div class="container-xl">
    <div class="section-head mb-4 text-center border-0">
      <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-1 rounded-pill mb-2" style="font-size:0.75rem;">THERAPEUTIC SPECIALIZATION</span>
      <h2 style="font-size:1.6rem; color:var(--navy);">Therapeutic Focus &amp; Marketing Portfolio</h2>
    </div>
    <div class="row g-3 g-md-4">
      <div class="col-6 col-md-6 col-lg-3">
        <a href="products.php#nutrition" class="tindex-card tindex-card-nutrition">
          <div class="tindex-card-head">
            <span class="tindex-icon-badge">💪</span>
            <span class="tindex-arrow">&#8594;</span>
          </div>
          <h3>Protein Enhancement</h3>
          <p>Parenteral &amp; oral amino acid infusions to rebuild protein &amp; boost ICU recovery.</p>
          <div class="tindex-footer">
            <span class="tindex-products">Aminosky · Glutasky</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <a href="products.php#minerals" class="tindex-card tindex-card-blood">
          <div class="tindex-card-head">
            <span class="tindex-icon-badge">🩸</span>
            <span class="tindex-arrow">&#8594;</span>
          </div>
          <h3>Blood Enhancement</h3>
          <p>3rd gen parenteral iron for anemia &amp; colloid plasma expanders for blood replacement.</p>
          <div class="tindex-footer">
            <span class="tindex-products">Ferric-CM · Tetravan</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <a href="products.php#minerals" class="tindex-card tindex-card-trace">
          <div class="tindex-card-head">
            <span class="tindex-icon-badge">⚡</span>
            <span class="tindex-arrow">&#8594;</span>
          </div>
          <h3>Trace Elements</h3>
          <p>Injectable zinc chloride for ICU parenteral nutrition, wound healing &amp; immunity.</p>
          <div class="tindex-footer">
            <span class="tindex-products">ZincFlow IP</span>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-6 col-lg-3">
        <a href="products.php#surgical" class="tindex-card tindex-card-surgical">
          <div class="tindex-card-head">
            <span class="tindex-icon-badge">🧤</span>
            <span class="tindex-arrow">&#8594;</span>
          </div>
          <h3>Surgical Supplies</h3>
          <p>Certified AQL 1.5 powder-free nitrile examination gloves for clinical protection.</p>
          <div class="tindex-footer">
            <span class="tindex-products">Touch-Med Nitrile</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CLINICAL PHILOSOPHY SECTION (3 CORE PILLARS) -->
<section class="section medisky-philosophy-section" style="padding:56px 0 !important;">
  <div class="container-xl">
    <div class="section-head mb-4 text-center border-0">
      <span class="badge bg-white text-primary fw-bold px-3 py-1 rounded-pill mb-2" style="font-size:0.75rem;">OUR THREE CORE CLINICAL PILLARS</span>
      <h2 style="color:#ffffff !important;">Pioneering Excellence in Critical Care, Therapeutics &amp; Surgical Safety</h2>
    </div>
    
    <div class="row g-4">
      <!-- Card 1: Critical Care Therapeutics -->
      <div class="col-md-4">
        <div class="philosophy-card h-100 p-4 rounded-3 shadow-lg" style="background:rgba(0,0,0,0.18); border:1px solid rgba(255,255,255,0.25) !important;">
          <div class="philosophy-icon-circle mb-3">🧪</div>
          <h3 class="fw-bold mb-2" style="font-size:1.25rem; color:#ffffff !important;">1. Critical Care Therapeutics</h3>
          <p class="mb-0" style="color:#ffffff !important; font-size:0.88rem; line-height:1.65; opacity:0.96;">WHO-GMP certified 100% Sorbitol &amp; Xylitol-free amino acid infusions (Aminosky-10%), glutamine dipeptides (Glutasky), and Day 1 ICU trace element zinc infusions (ZincFlow IP) adhering strictly to ESPEN 2022 clinical guidelines.</p>
        </div>
      </div>

      <!-- Card 2: Advanced Blood Therapeutics -->
      <div class="col-md-4">
        <div class="philosophy-card h-100 p-4 rounded-3 shadow-lg" style="background:rgba(0,0,0,0.18); border:1px solid rgba(255,255,255,0.25) !important;">
          <div class="philosophy-icon-circle mb-3">🩸</div>
          <h3 class="fw-bold mb-2" style="font-size:1.25rem; color:#ffffff !important;">2. Advanced Blood Therapeutics</h3>
          <p class="mb-0" style="color:#ffffff !important; font-size:0.88rem; line-height:1.65; opacity:0.96;">3rd generation dextran-free Ferric Carboxymaltose 500mg (Ferric-CM) for rapid +4.4 g/dL Hb elevation without dextran allergy risks, and 3rd gen HES 6% 130/0.4 colloid (Tetravan) for safe plasma volume expansion.</p>
        </div>
      </div>

      <!-- Card 3: Surgical Protection & Logistics -->
      <div class="col-md-4">
        <div class="philosophy-card h-100 p-4 rounded-3 shadow-lg" style="background:rgba(0,0,0,0.18); border:1px solid rgba(255,255,255,0.25) !important;">
          <div class="philosophy-icon-circle mb-3">🧤</div>
          <h3 class="fw-bold mb-2" style="font-size:1.25rem; color:#ffffff !important;">3. Surgical Protection &amp; Supply</h3>
          <p class="mb-0" style="color:#ffffff !important; font-size:0.88rem; line-height:1.65; opacity:0.96;">AQL 1.5 certified, powder-free Touch-Med nitrile examination gloves meeting FDA, CE &amp; EN 455 standards, supported by zero-delay supply operations from Patna ROC &amp; Navi Mumbai corporate hubs.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OUR PRODUCTS SECTION -->
<section class="section section-alt" id="portfolio" style="padding:56px 0 !important;">
  <div class="container-xl">
    <div class="section-head">
      <h2>Our Products</h2>
    </div>

    <!-- Category Filter Tabs -->
    <div class="portfolio-filter-bar">
      <button type="button" class="portfolio-filter-btn active" data-filter="all">All Products (8)</button>
      <button type="button" class="portfolio-filter-btn" data-filter="nutrition">Parenteral &amp; Oral Nutrition</button>
      <button type="button" class="portfolio-filter-btn" data-filter="minerals">Trace Elements &amp; Iron</button>
      <button type="button" class="portfolio-filter-btn" data-filter="volume">Plasma Expander</button>
      <button type="button" class="portfolio-filter-btn" data-filter="surgical">Surgical Consumables</button>
    </div>

    <!-- Cards Grid -->
    <div class="p-card-grid" id="portfolioGrid">
      
      <!-- Aminosky-10% -->
      <div class="p-card-item" data-category="nutrition">
        <a href="product-aminosky.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Parenteral Nutrition</span>
            <img src="assets/img/product/product-3.jpeg" alt="Aminosky-10%">
          </div>
          <div class="p-card-body">
            <div class="p-card-title">
              <span>Aminosky-10%</span>
              <span class="rx-flag">Rx</span>
            </div>
            <p class="p-card-generic">Amino acid (8 essential &amp; 10 non-essential) 10% w/v + Electrolytes</p>
            <ul class="p-card-uses">
              <li>ESPEN-aligned parenteral nutrition</li>
              <li>Infectious conditions &amp; burn recovery</li>
              <li>Safe for IUGR &amp; Oligohydramnios</li>
            </ul>
            <div class="p-card-footer">
              <span class="p-card-link-btn">View Details &#8594;</span>
              <span onclick="event.preventDefault(); window.open('https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20about%20Aminosky-10%25', '_blank')" class="p-card-wa-btn">Enquire 💬</span>
            </div>
          </div>
        </a>
      </div>

      <!-- Glutasky -->
      <div class="p-card-item" data-category="nutrition">
        <a href="product-glutasky.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Parenteral Nutrition</span>
            <img src="assets/img/product/product-7.jpeg" alt="Glutasky">
          </div>
          <div class="p-card-body">
            <div class="p-card-title">
              <span>Glutasky</span>
              <span class="rx-flag">Rx</span>
            </div>
            <p class="p-card-generic">L-alanyl-L-glutamine infusion 20% w/v (50 ml container)</p>
            <ul class="p-card-uses">
              <li>ICU &amp; GI surgery nutrition support</li>
              <li>Boosts immune system &amp; cell metabolism</li>
              <li>Reduces oxidative stress &amp; organ dysfunction</li>
            </ul>
            <div class="p-card-footer">
              <span class="p-card-link-btn">View Details &#8594;</span>
              <span onclick="event.preventDefault(); window.open('https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20about%20Glutasky', '_blank')" class="p-card-wa-btn">Enquire 💬</span>
            </div>
          </div>
        </a>
      </div>

      <!-- L-Glutasky Plus -->
      <div class="p-card-item" data-category="nutrition">
        <a href="product-lglutasky-plus.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Oral Nutrition Sachet</span>
            <img src="assets/img/lglutasky-box.jpg" alt="L-Glutasky Plus">
          </div>
          <div class="p-card-body">
            <div class="p-card-title">
              <span>L-Glutasky Plus</span>
              <span class="rx-flag">Rx</span>
            </div>
            <p class="p-card-generic">Glutamine (10g) + Vit C, E, Zinc, Selenium &amp; Beta-Carotene (10x15g Box)</p>
            <ul class="p-card-uses">
              <li>Oral mucositis &amp; gut integrity repair</li>
              <li>Pre &amp; post-operative immune function</li>
              <li>Delicious Orange Flavor 15g Sachet</li>
            </ul>
            <div class="p-card-footer">
              <span class="p-card-link-btn">View Details &#8594;</span>
              <span onclick="event.preventDefault(); window.open('https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20about%20L-Glutasky%20Plus', '_blank')" class="p-card-wa-btn">Enquire 💬</span>
            </div>
          </div>
        </a>
      </div>

      <!-- ZincFlow -->
      <div class="p-card-item" data-category="minerals">
        <a href="product-zincflow.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Trace Element</span>
            <img src="assets/img/product/product-8.jpeg" alt="ZincFlow">
          </div>
          <div class="p-card-body">
            <div class="p-card-title">
              <span>ZincFlow</span>
              <span class="rx-flag">Rx</span>
            </div>
            <p class="p-card-generic">Zinc chloride injection IP 1 mg/ml (10 ml vial)</p>
            <ul class="p-card-uses">
              <li>ESPEN 2022 guideline recommended</li>
              <li>Wound healing, burns &amp; sepsis reduction</li>
              <li>CRRT &amp; GI fistula trace element support</li>
            </ul>
            <div class="p-card-footer">
              <span class="p-card-link-btn">View Details &#8594;</span>
              <span onclick="event.preventDefault(); window.open('https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20about%20ZincFlow', '_blank')" class="p-card-wa-btn">Enquire 💬</span>
            </div>
          </div>
        </a>
      </div>

      <!-- Ferric-CM -->
      <div class="p-card-item" data-category="minerals">
        <a href="product-ferric-cm.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Iron Therapy</span>
            <img src="assets/img/product/product-1.jpeg" alt="Ferric-CM">
          </div>
          <div class="p-card-body">
            <div class="p-card-title">
              <span>Ferric-CM</span>
              <span class="rx-flag">Rx</span>
            </div>
            <p class="p-card-generic">Ferric carboxymaltose 500 mg / 10 ml injection (50mg/ml elemental iron)</p>
            <ul class="p-card-uses">
              <li>3rd gen parenteral iron formulation</li>
              <li>Increases Hb by 4.4 g/dL at 6 weeks</li>
              <li>Non-dialysis CKD &amp; pre/post-op anemia</li>
            </ul>
            <div class="p-card-footer">
              <span class="p-card-link-btn">View Details &#8594;</span>
              <span onclick="event.preventDefault(); window.open('https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20about%20Ferric-CM', '_blank')" class="p-card-wa-btn">Enquire 💬</span>
            </div>
          </div>
        </a>
      </div>

      <!-- Tetravan -->
      <div class="p-card-item" data-category="volume">
        <a href="product-tetravan.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Plasma Expander</span>
            <img src="assets/img/tetravan-box.jpg" alt="Tetravan">
          </div>
          <div class="p-card-body">
            <div class="p-card-title">
              <span>Tetravan</span>
              <span class="rx-flag">Rx</span>
            </div>
            <p class="p-card-generic">Hydroxyethyl starch (6%) 130/0.4 IV infusion (500 ml container)</p>
            <ul class="p-card-uses">
              <li>3rd generation safest colloid infusion</li>
              <li>Safe alternative to blood (up to 1L loss)</li>
              <li>Treatment of hypovolemia &amp; shock</li>
            </ul>
            <div class="p-card-footer">
              <span class="p-card-link-btn">View Details &#8594;</span>
              <span onclick="event.preventDefault(); window.open('https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20about%20Tetravan', '_blank')" class="p-card-wa-btn">Enquire 💬</span>
            </div>
          </div>
        </a>
      </div>

      <!-- Touch-Med M-100 -->
      <div class="p-card-item" data-category="surgical">
        <a href="product-touch-med.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Surgical Consumables</span>
            <img src="assets/img/touchmed-100pcs.jpg" alt="Touch-Med M-100">
          </div>
          <div class="p-card-body">
            <div class="p-card-title">
              <span>Touch-Med M-100</span>
            </div>
            <p class="p-card-generic">Nitrile examination gloves (M 100pcs hospital box presentation)</p>
            <ul class="p-card-uses">
              <li>Powder-free &amp; Latex-free, AQL 1.5</li>
              <li>Fingertip textured &amp; ambidextrous</li>
              <li>FDA, CE &amp; ISO 9001:2008 certified</li>
            </ul>
            <div class="p-card-footer">
              <span class="p-card-link-btn">View Details &#8594;</span>
              <span onclick="event.preventDefault(); window.open('https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20about%20Touch-Med%20M-100', '_blank')" class="p-card-wa-btn">Enquire 💬</span>
            </div>
          </div>
        </a>
      </div>

      <!-- Touch-Med G30 Retail Pack -->
      <div class="p-card-item" data-category="surgical">
        <a href="product-touch-med-g30.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Retail Consumables</span>
            <img src="assets/img/touchmed-g30.jpg" alt="Touch-Med G30">
          </div>
          <div class="p-card-body">
            <div class="p-card-title">
              <span>Touch-Med G30 Pack</span>
            </div>
            <p class="p-card-generic">Nitrile examination gloves (G30 count retail dispenser pack)</p>
            <ul class="p-card-uses">
              <li>Inner polymer coating for easy donning</li>
              <li>Ideal for pharmacy retail &amp; OPD clinics</li>
              <li>Powder-free &amp; AQL 1.5 quality inspected</li>
            </ul>
            <div class="p-card-footer">
              <span class="p-card-link-btn">View Details &#8594;</span>
              <span onclick="event.preventDefault(); window.open('https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20about%20Touch-Med%20G30', '_blank')" class="p-card-wa-btn">Enquire 💬</span>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- CLINICAL FORMULATION & SAFETY COMMITMENTS -->
<section class="section compact-safety-section" style="background:#ffffff; border-top:1px solid var(--line); border-bottom:1px solid var(--line);">
  <div class="container-xl">
    <div class="section-head mb-3 pb-2">
      <h2>Formulation &amp; Clinical Safety Standards</h2>
    </div>
    <div class="row g-3">
      <div class="col-md-4">
        <div class="safety-card p-3 border rounded-3 h-100 bg-light-subtle">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-danger-subtle text-danger fw-bold">100% SUGAR-FREE SAFETY</span>
          </div>
          <h5 class="fw-bold text-navy mb-1" style="font-size:1.02rem;">Without Sorbitol or Xylitol</h5>
          <p class="text-muted small mb-0">Our parenteral amino acid infusions (Aminosky-10%) strictly avoid Sorbitol and Xylitol to prevent IV toxic side-effects and renal failure risks.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="safety-card p-3 border rounded-3 h-100 bg-light-subtle">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-primary-subtle text-primary fw-bold">3RD GEN THERAPEUTICS</span>
          </div>
          <h5 class="fw-bold text-navy mb-1" style="font-size:1.02rem;">Advanced Blood &amp; Iron Care</h5>
          <p class="text-muted small mb-0">Ferric-CM offers 3rd gen parenteral iron boosting Hb by 4.4 g/dL, while Tetravan provides 3rd gen safest colloid for up to 1L blood loss replacement.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="safety-card p-3 border rounded-3 h-100 bg-light-subtle">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-success-subtle text-success fw-bold">ICU &amp; SURGICAL FOCUS</span>
          </div>
          <h5 class="fw-bold text-navy mb-1" style="font-size:1.02rem;">ESPEN 2022 Protocol Aligned</h5>
          <p class="text-muted small mb-0">ZincFlow &amp; Glutasky deliver essential trace elements and L-glutamine dipeptides from Day 1 of parenteral nutrition for ICU &amp; burn patients.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKY-BLUE OUR VISION & MISSION SECTION -->
<section class="section skyblue-vision-section">
  <div class="container-xl">
    <div class="section-head mb-4 text-center border-0">
      <h2 style="color:#ffffff !important;">Our Vision &amp; Clinical Mission</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="skyblue-vision-card h-100">
          <div class="vision-icon">🌟</div>
          <h4>Our Vision</h4>
          <p>To be India's most trusted pharmaceutical and surgical marketing platform, setting benchmark standards in ESPEN-aligned parenteral nutrition, 3rd generation blood therapeutics, and certified clinical protection for hospital critical care.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="skyblue-vision-card h-100">
          <div class="vision-icon">🚀</div>
          <h4>Our Mission</h4>
          <p>Ensuring zero-delay delivery of international-grade clinical products to ICUs, surgical teams, and hospital procurement departments across Patna, Bihar &amp; Pan-India with uncompromised safety, dedication, and clinical excellence.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
  const cardItems = document.querySelectorAll('.p-card-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const filterValue = this.getAttribute('data-filter');

      cardItems.forEach(item => {
        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});
</script>

<!-- WHY MEDISKY -->
<section class="section" style="background:#f8fafc;">
  <div class="container-xl">
    <div class="section-head">
      <h2>Why hospitals stock Medisky</h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="why-card h-100">
          <div class="why-card-icon">🧪</div>
          <div class="cat-pill" style="margin-bottom:0.8rem;">Guideline-aligned</div>
          <h4>Formulated to ESPEN Standards</h4>
          <p>Our clinical nutrition and trace-element lines adhere strictly to ESPEN (European Society for Clinical Nutrition and Metabolism) dosing and administration guidelines, ensuring seamless adoption by hospital clinical teams.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="why-card h-100">
          <div class="why-card-icon">🛡️</div>
          <div class="cat-pill" style="margin-bottom:0.8rem;">Quality-certified</div>
          <h4>Certified Manufacturing Partners</h4>
          <p>Sourced from WHO-GMP, ISO 9001:2008 and HACCP certified facilities. Our Touch-Med examination gloves meet AQL 1.5, ASTM D 6319 standards and carry CE, FDA, and EN374/EN455 international certifications.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="why-card h-100">
          <div class="why-card-icon">🚚</div>
          <div class="cat-pill" style="margin-bottom:0.8rem;">Reliable Supply</div>
          <h4>Patna &amp; Navi Mumbai Logistics</h4>
          <p>Backed by corporate offices in Kalamboli (Navi Mumbai) and registered offices in Rukanpura (Patna), we ensure swift procurement cycles, stockist support, and last-mile hospital deliveries.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKY-BLUE PAN-INDIA NETWORK & SUPPLY HUBS SECTION -->
<section class="section skyblue-network-section">
  <div class="container-xl">
    <div class="section-head mb-3 pb-2">
      <h2>Pan-India Supply Network &amp; Logistics Hubs</h2>
    </div>
    <div class="row g-3">
      <div class="col-md-4">
        <div class="network-hub-card h-100">
          <span class="network-hub-badge">REGISTERED OFFICE</span>
          <h5 class="fw-bold text-navy mb-1" style="font-size:1.02rem;">Patna ROC (Bihar Hub)</h5>
          <p class="text-muted small mb-0">Rukanpura, Bailey Road, Patna. Central dispatch hub catering to hospital stockists and medical centers across Eastern India.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="network-hub-card h-100">
          <span class="network-hub-badge">CORPORATE OFFICE</span>
          <h5 class="fw-bold text-navy mb-1" style="font-size:1.02rem;">Navi Mumbai Corporate Office</h5>
          <p class="text-muted small mb-0">Kalamboli, Navi Mumbai. Corporate logistics, quality assurance, and import coordination center.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="network-hub-card h-100">
          <span class="network-hub-badge">HOSPITAL NETWORK</span>
          <h5 class="fw-bold text-navy mb-1" style="font-size:1.02rem;">Multispecialty &amp; ICU Supply</h5>
          <p class="text-muted small mb-0">Supplying certified parenteral formulations and Touch-Med gloves to government &amp; leading private hospital networks.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CORE MISSION & VALUES STRIP -->
<section class="section compact-values-section" style="background:#eef6fc; border-top:1px solid var(--line);">
  <div class="container-xl">
    <div class="row align-items-center g-4">
      <div class="col-lg-4 text-center text-lg-start">
        <span class="eyebrow" style="font-size:0.75rem;">Company Philosophy</span>
        <h3 class="fw-bold text-navy mb-2" style="font-size:1.35rem;">Always HEALTH FIRST</h3>
        <p class="text-muted small mb-0">Committed to healthcare excellence with dedication, innovation, and compassion for Indian hospital care.</p>
      </div>
      <div class="col-lg-8">
        <div class="row g-3 text-center">
          <div class="col-12 col-md-4">
            <div class="p-3 p-md-4 bg-white border rounded-3 shadow-sm h-100">
              <div class="fs-3 mb-1">🎯</div>
              <strong class="d-block text-navy fw-bold mb-1" style="font-size:0.95rem;">Dedication</strong>
              <span class="text-muted" style="font-size:0.8rem; line-height:1.4;">Supplying critical ICU &amp; surgical therapeutics pan-India.</span>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="p-3 p-md-4 bg-white border rounded-3 shadow-sm h-100">
              <div class="fs-3 mb-1">💡</div>
              <strong class="d-block text-navy fw-bold mb-1" style="font-size:0.95rem;">Innovation</strong>
              <span class="text-muted" style="font-size:0.8rem; line-height:1.4;">Formulating 3rd gen ESPEN-aligned clinical solutions.</span>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="p-3 p-md-4 bg-white border rounded-3 shadow-sm h-100">
              <div class="fs-3 mb-1">❤️</div>
              <strong class="d-block text-navy fw-bold mb-1" style="font-size:0.95rem;">Compassion</strong>
              <span class="text-muted" style="font-size:0.8rem; line-height:1.4;">Dedicated to doctor &amp; patient recovery support.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-band">
  <div class="container-xl d-flex flex-wrap justify-content-between align-items-center gap-4">
    <div>
      <h2>Looking to stock Medisky products at your hospital or pharmacy?</h2>
      <p>Talk to our team about supply, pricing and distributorship in your district.</p>
    </div>
    <a href="contact.php" class="btn-brand">Contact our team</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
