<?php
$page_title = "Product Portfolio | Medisky Lifesciences Pvt. Ltd.";
$page_description = "Full 8-product portfolio from Medisky Lifesciences — parenteral nutrition, 3rd gen iron therapy, plasma volume expanders and certified surgical consumables.";
$current_page = "products";
include 'includes/header.php';
?>

<div class="breadcrumb-strip">
  <div class="container-xl">
    <a href="index.php">Home</a> / <span class="current">Products</span>
  </div>
</div>

<!-- HERO BANNER SECTION -->
<section class="hero hero-skyblue" style="padding:44px 0 36px !important;">
  <div class="container-xl">
    <div class="row g-4 align-items-center">
      <div class="col-lg-7">
        <div class="eyebrow mb-2">OFFICIAL MARKETING PORTFOLIO</div>
        <h1 style="max-width:none;">Clinical Therapeutics &amp; Hospital Products</h1>
        <p class="lede" style="max-width:none;">8 official clinical products marketed across 4 core therapeutic categories. Formulated to ESPEN 2022 guidelines and international pharmacopoeial safety standards for ICUs, surgical suites, and hospital procurement.</p>
        <div class="d-flex gap-3 mt-3 flex-wrap">
          <a href="#portfolioGrid" class="btn-brand" style="background:#ffffff; color:#0284c7; border-color:#ffffff;">Explore 8 Products</a>
          <a href="quality.php" class="btn-outline-brand" style="color:#ffffff; border-color:rgba(255,255,255,0.6);">Quality Standards</a>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="hero-visual" style="border:3px solid rgba(255,255,255,0.4); border-radius:18px; overflow:hidden; box-shadow:0 12px 30px rgba(0,20,50,0.3);">
          <img src="assets/img/products-banner.jpg?v=<?php echo $asset_ver; ?>" alt="Medisky Lifesciences Product Showcase Banner" style="width:100%; height:230px; object-fit:cover;">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN PRODUCT PORTFOLIO SECTION -->
<section class="section section-alt" id="portfolio" style="padding:48px 0 !important;">
  <div class="container-xl">
    <div class="section-head mb-4 text-center">
      <h2>Our Complete Product Portfolio</h2>
    </div>

    <!-- Category Filter Tabs -->
    <div class="portfolio-filter-bar mb-4">
      <button type="button" class="portfolio-filter-btn active" data-filter="all">All Products (8)</button>
      <button type="button" class="portfolio-filter-btn" data-filter="nutrition">Parenteral &amp; Oral Nutrition (3)</button>
      <button type="button" class="portfolio-filter-btn" data-filter="minerals">Trace Elements &amp; Iron (2)</button>
      <button type="button" class="portfolio-filter-btn" data-filter="volume">Plasma Expander (1)</button>
      <button type="button" class="portfolio-filter-btn" data-filter="surgical">Surgical Consumables (2)</button>
    </div>

    <!-- Cards Grid -->
    <div class="p-card-grid" id="portfolioGrid">
      
      <!-- 1. Aminosky-10% -->
      <div class="p-card-item" data-category="nutrition">
        <a href="product-aminosky.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Parenteral Nutrition</span>
            <img src="assets/img/product/product-1.jpeg?v=<?php echo $asset_ver; ?>" alt="Aminosky-10%">
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

      <!-- 2. Glutasky -->
      <div class="p-card-item" data-category="nutrition">
        <a href="product-glutasky.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Parenteral Nutrition</span>
            <img src="assets/img/product/product-2.jpeg?v=<?php echo $asset_ver; ?>" alt="Glutasky">
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

      <!-- 3. L-Glutasky Plus -->
      <div class="p-card-item" data-category="nutrition">
        <a href="product-lglutasky-plus.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Oral Nutrition Sachet</span>
            <img src="assets/img/lglutasky-box.jpg?v=<?php echo $asset_ver; ?>" alt="L-Glutasky Plus">
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

      <!-- 4. ZincFlow IP -->
      <div class="p-card-item" data-category="minerals">
        <a href="product-zincflow.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Trace Element</span>
            <img src="assets/img/product/product-5.jpeg?v=<?php echo $asset_ver; ?>" alt="ZincFlow">
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

      <!-- 5. Ferric-CM -->
      <div class="p-card-item" data-category="minerals">
        <a href="product-ferric-cm.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Iron Therapy</span>
            <img src="assets/img/product/product-3.jpeg?v=<?php echo $asset_ver; ?>" alt="Ferric-CM">
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

      <!-- 6. Tetravan -->
      <div class="p-card-item" data-category="volume">
        <a href="product-tetravan.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Plasma Expander</span>
            <img src="assets/img/tetravan-box.jpg?v=<?php echo $asset_ver; ?>" alt="Tetravan">
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

      <!-- 7. Touch-Med M-100 -->
      <div class="p-card-item" data-category="surgical">
        <a href="product-touch-med.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Surgical Consumables</span>
            <img src="assets/img/touchmed-100pcs.jpg?v=<?php echo $asset_ver; ?>" alt="Touch-Med M-100">
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

      <!-- 8. Touch-Med G30 Pack -->
      <div class="p-card-item" data-category="surgical">
        <a href="product-touch-med-g30.php" class="p-card">
          <div class="p-card-img-wrapper">
            <span class="p-card-cat-badge">Retail Consumables</span>
            <img src="assets/img/touchmed-g30.jpg?v=<?php echo $asset_ver; ?>" alt="Touch-Med G30">
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

<!-- PRODUCT SUMMARY MATRIX TABLE -->
<section class="section">
  <div class="container-xl">
    <div class="section-head text-center mb-4">
      <h2>Product Portfolio Summary Matrix</h2>
    </div>
    <div class="table-responsive">
      <table class="table table-hover table-bordered align-middle bg-white shadow-sm" style="font-size:0.9rem;">
        <thead class="table-dark">
          <tr>
            <th>Product Name</th>
            <th>Therapeutic Category</th>
            <th>Composition &amp; Strength</th>
            <th>Pack Size</th>
            <th>Primary Clinical Indication</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Aminosky-10%</strong> <span class="rx-flag">Rx</span></td>
            <td>Parenteral Nutrition</td>
            <td>Amino Acid (8 Essential + 10 Non-Essential) 10% w/v + Electrolytes</td>
            <td>250 ml Bottle</td>
            <td>ICU nutrition, severe burns, recovery, IUGR pregnancy</td>
            <td class="text-center"><a href="product-aminosky.php" class="btn btn-sm btn-outline-primary fw-bold">Details</a></td>
          </tr>
          <tr>
            <td><strong>Glutasky</strong> <span class="rx-flag">Rx</span></td>
            <td>Parenteral Nutrition</td>
            <td>L-alanyl-L-glutamine infusion 20% w/v</td>
            <td>50 ml Container</td>
            <td>ICU, GI surgery, severe burns, pancreatitis</td>
            <td class="text-center"><a href="product-glutasky.php" class="btn btn-sm btn-outline-primary fw-bold">Details</a></td>
          </tr>
          <tr>
            <td><strong>L-Glutasky Plus</strong> <span class="rx-flag">Rx</span></td>
            <td>Oral Nutrition Sachet</td>
            <td>L-Glutamine 10g + Vit C, E, Zinc, Selenium &amp; Beta-Carotene</td>
            <td>10x15g Box (Orange)</td>
            <td>Oral mucositis, gut integrity, pre/post surgery</td>
            <td class="text-center"><a href="product-lglutasky-plus.php" class="btn btn-sm btn-outline-primary fw-bold">Details</a></td>
          </tr>
          <tr>
            <td><strong>ZincFlow IP</strong> <span class="rx-flag">Rx</span></td>
            <td>Trace Element Therapy</td>
            <td>Zinc Chloride Injection IP 1 mg/ml</td>
            <td>10 ml Vial</td>
            <td>ESPEN 2022 trace element, wound healing, sepsis</td>
            <td class="text-center"><a href="product-zincflow.php" class="btn btn-sm btn-outline-primary fw-bold">Details</a></td>
          </tr>
          <tr>
            <td><strong>Ferric-CM</strong> <span class="rx-flag">Rx</span></td>
            <td>Iron Therapy</td>
            <td>Ferric Carboxymaltose 500 mg / 10 ml Injection</td>
            <td>10 ml Vial</td>
            <td>3rd gen parenteral iron, IDA, non-dialysis CKD</td>
            <td class="text-center"><a href="product-ferric-cm.php" class="btn btn-sm btn-outline-primary fw-bold">Details</a></td>
          </tr>
          <tr>
            <td><strong>Tetravan</strong> <span class="rx-flag">Rx</span></td>
            <td>Plasma Volume Expander</td>
            <td>Hydroxyethyl Starch (6%) 130/0.4 IV Infusion</td>
            <td>500 ml Container</td>
            <td>3rd gen safest colloid, hypovolemia, shock</td>
            <td class="text-center"><a href="product-tetravan.php" class="btn btn-sm btn-outline-primary fw-bold">Details</a></td>
          </tr>
          <tr>
            <td><strong>Touch-Med M-100</strong></td>
            <td>Surgical Consumables</td>
            <td>Nitrile Examination Gloves (Powder-Free, Latex-Free)</td>
            <td>M 100pcs Hospital Box</td>
            <td>AQL 1.5, clinical &amp; surgical examination</td>
            <td class="text-center"><a href="product-touch-med.php" class="btn btn-sm btn-outline-primary fw-bold">Details</a></td>
          </tr>
          <tr>
            <td><strong>Touch-Med G30</strong></td>
            <td>Retail Consumables</td>
            <td>Nitrile Examination Gloves (Polymer Coated)</td>
            <td>G30 Retail Pack</td>
            <td>Easy donning, pharmacy retail &amp; OPD exam</td>
            <td class="text-center"><a href="product-touch-med-g30.php" class="btn btn-sm btn-outline-primary fw-bold">Details</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="cta-band">
  <div class="container-xl d-flex flex-wrap justify-content-between align-items-center gap-4">
    <div>
      <h2>Need product literature or a hospital supply quote?</h2>
      <p>We can share full prescribing information, MRP, and stockist distribution terms instantly on WhatsApp.</p>
    </div>
    <a href="https://wa.me/919304827152?text=Hello,%20I%20have%20an%20inquiry%20regarding%20product%20literature%20and%20supply" target="_blank" rel="noopener" class="btn-brand" style="background:#25D366; color:#fff; border-color:#25D366;">Enquire on WhatsApp 💬</a>
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

<?php include 'includes/footer.php'; ?>
