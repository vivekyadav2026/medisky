<?php
$page_title = "Medisky Lifesciences Pvt. Ltd. | Clinical Nutrition & Critical Care Therapeutics";
$page_description = "Medisky Lifesciences Pvt. Ltd. — Patna-based marketer of parenteral nutrition, IV infusions, iron therapy and surgical consumables for Indian hospitals.";
$current_page = "home";
include 'includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="container-xl">
    <div class="row g-5 align-items-center">
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
        <div class="hero-visual">
          <div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3500">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Glutasky"></button>
              <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="Aminosky"></button>
              <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" aria-label="Ferric-CM"></button>
              <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="3" aria-label="ZincFlow"></button>
              <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="4" aria-label="Touch-Med"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="product-lglutasky-plus.php">
                  <img src="assets/img/lglutasky-box.jpg" alt="L-Glutasky Plus Sachet — Glutamine Supplement with Antioxidants">
                </a>
              </div>
              <div class="carousel-item">
                <a href="product-touch-med.php">
                  <img src="assets/img/touchmed-100pcs.jpg" alt="Touch-Med Nitrile Examination Gloves 100 Pcs">
                </a>
              </div>
              <div class="carousel-item">
                <a href="product-tetravan.php">
                  <img src="assets/img/tetravan-box.jpg" alt="Tetravan 500ml IV Infusion">
                </a>
              </div>
              <div class="carousel-item">
                <a href="product-ferric-cm.php">
                  <img src="assets/img/ferriccm-1.jpg" alt="Ferric-CM — Ferric Carboxymaltose Injection">
                </a>
              </div>
              <div class="carousel-item">
                <a href="product-zincflow.php">
                  <img src="assets/img/zincflow-1.jpg" alt="ZincFlow — Zinc Chloride Injection">
                </a>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- THERAPEUTIC INDEX -->
<section class="section">
  <div class="container-xl">
    <div class="section-head">
      <h2>Therapeutic Focus &amp; Marketing Portfolio</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <a href="products.php#nutrition" class="tindex-card">
          <div class="tindex-card-head">
            <span class="tindex-icon">💪</span>
          </div>
          <h3>Protein Enhancement</h3>
          <p>Amino acid infusions and glutamine therapy to rebuild protein, maintain nitrogen balance &amp; boost recovery.</p>
          <div class="tindex-footer">
            <span class="tindex-products">Aminosky · Glutasky · L-Glutasky</span>
            <span class="tindex-arrow">&#8594;</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3">
        <a href="products.php#minerals" class="tindex-card">
          <div class="tindex-card-head">
            <span class="tindex-icon">🩸</span>
          </div>
          <h3>Blood Enhancement</h3>
          <p>3rd gen parenteral iron for rapid anemia correction &amp; plasma volume expanders for blood replacement.</p>
          <div class="tindex-footer">
            <span class="tindex-products">Ferric-CM · Tetravan</span>
            <span class="tindex-arrow">&#8594;</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3">
        <a href="products.php#minerals" class="tindex-card">
          <div class="tindex-card-head">
            <span class="tindex-icon">⚡</span>
          </div>
          <h3>Trace Element Therapy</h3>
          <p>Injectable zinc chloride for ICU parenteral nutrition support, wound healing &amp; immune defense.</p>
          <div class="tindex-footer">
            <span class="tindex-products">ZincFlow IP</span>
            <span class="tindex-arrow">&#8594;</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3">
        <a href="products.php#surgical" class="tindex-card">
          <div class="tindex-card-head">
            <span class="tindex-icon">🧤</span>
          </div>
          <h3>Surgical Consumables</h3>
          <p>Certified AQL 1.5 powder-free, latex-free nitrile examination gloves for clinical and surgical protection.</p>
          <div class="tindex-footer">
            <span class="tindex-products">Touch-Med Nitrile</span>
            <span class="tindex-arrow">&#8594;</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- PRODUCT LIST / PORTFOLIO -->
<section class="section section-alt" id="portfolio">
  <div class="container-xl">
    <div class="section-head">
      <h2>Full portfolio</h2>
    </div>

    <!-- Category Filter Tabs -->
    <div class="portfolio-filter-bar">
      <button type="button" class="portfolio-filter-btn active" data-filter="all">All Products (7)</button>
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
            <img src="assets/img/aminosky-1.jpg" alt="Aminosky-10%">
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
            <img src="assets/img/glutasky-1.jpg" alt="Glutasky">
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
            <img src="assets/img/zincflow-1.jpg" alt="ZincFlow">
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
            <img src="assets/img/ferriccm-1.jpg" alt="Ferric-CM">
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

      <!-- Touch-Med -->
      <div class="p-card-item" data-category="surgical">
        <a href="product-touch-med.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Surgical Consumables</span>
            <img src="assets/img/touchmed-100pcs.jpg" alt="Touch-Med">
          </div>
          <div class="p-card-body">
            <div class="p-card-title">
              <span>Touch-Med</span>
            </div>
            <p class="p-card-generic">Nitrile examination gloves (M 100pcs box / G30 retail pack)</p>
            <ul class="p-card-uses">
              <li>Powder-free &amp; Latex-free, AQL 1.5</li>
              <li>Fingertip textured &amp; ambidextrous</li>
              <li>FDA, CE &amp; ISO 9001:2008 certified</li>
            </ul>
            <div class="p-card-footer">
              <span class="p-card-link-btn">View Details &#8594;</span>
              <span onclick="event.preventDefault(); window.open('https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20about%20Touch-Med', '_blank')" class="p-card-wa-btn">Enquire 💬</span>
            </div>
          </div>
        </a>
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
