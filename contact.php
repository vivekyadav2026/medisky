<?php
$page_title = "Contact | Medisky Lifesciences Pvt. Ltd.";
$page_description = "Contact Medisky Lifesciences Private Limited — Patna office, phone numbers and enquiry form.";
$current_page = "contact";
include 'includes/header.php';
?>

<div class="breadcrumb-strip">
  <div class="container-xl">
    <a href="index.php">Home</a> / <span class="current">Contact</span>
  </div>
</div>

<section class="hero" style="padding:40px 0 32px;">
  <div class="container-xl">
    <div class="eyebrow">Get In Touch</div>
    <h1 style="max-width:none;">Talk to Our Team About Supply, Pricing or Distributorship</h1>
    <p class="lede" style="max-width:none;">Reach out directly to our directors, send a message through the form, or initiate a direct chat on WhatsApp for product literature and hospital procurement quotes.</p>
  </div>
</section>

<section class="section" style="padding-top:20px;">
  <div class="container-xl">
    <div class="row g-5">
      
      <!-- DIRECT CONTACT CARDS -->
      <div class="col-lg-5">
        <div class="section-head" style="border-bottom:none; margin-bottom:1.2rem; padding-bottom:0;">
          <h2>Direct Contact</h2>
        </div>

        <div class="why-card mb-4">
          <div class="d-flex align-items-center gap-3 mb-2">
            <div style="width:46px; height:46px; border-radius:50%; background:var(--navy); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:1.1rem;">RM</div>
            <div>
              <h4 style="margin:0;">Rajesh Kumar Mannujee</h4>
              <div style="color:var(--blue-deep); font-size:0.85rem; font-weight:600;">Managing Director &amp; Promoter</div>
            </div>
          </div>
          <div class="mt-3 pt-2 border-top d-flex justify-content-between align-items-center">
            <a href="tel:+919939679089" style="font-family:'Space Grotesk', sans-serif; font-weight:600; color:var(--navy);">📞 +91 99396 79089</a>
            <a href="https://wa.me/919939679089?text=Hello%20Rajesh%20ji,%20I%20have%20an%20inquiry" target="_blank" rel="noopener" class="p-card-wa-btn">WhatsApp 💬</a>
          </div>
        </div>

        <div class="why-card mb-4">
          <div class="d-flex align-items-center gap-3 mb-2">
            <div style="width:46px; height:46px; border-radius:50%; background:var(--blue-deep); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:1.1rem;">DK</div>
            <div>
              <h4 style="margin:0;">Dharmendra Kumar</h4>
              <div style="color:var(--blue-deep); font-size:0.85rem; font-weight:600;">Director (Product Enquiries)</div>
            </div>
          </div>
          <div class="mt-3 pt-2 border-top d-flex justify-content-between align-items-center">
            <a href="tel:+919304827152" style="font-family:'Space Grotesk', sans-serif; font-weight:600; color:var(--navy);">📞 +91 93048 27152</a>
            <a href="https://wa.me/919304827152?text=Hello%20Dharmendra%20ji,%20I%20have%20an%20inquiry" target="_blank" rel="noopener" class="p-card-wa-btn">WhatsApp 💬</a>
          </div>
        </div>

        <!-- LOCATIONS -->
        <div class="why-card mb-4">
          <h4 style="color:var(--navy); font-size:1.1rem; margin-bottom:0.8rem; border-bottom:2px solid var(--blue-deep); padding-bottom:0.4rem;">Office Locations</h4>
          <p class="mb-3" style="font-size:0.88rem;">
            <strong>Corporate Office:</strong><br>
            C-407, Steel Chamber Tower, KWC, Near RTO Office, Kalamboli, Navi Mumbai - 410218
          </p>
          <p class="mb-3" style="font-size:0.88rem;">
            <strong>Registered Office:</strong><br>
            H/O Sri Baikunth Singh, Behind Petrol Pump IOC, Rukanpura, P/O BV College, Thana Rupaspur, Patna, Bihar 800014
          </p>
          <div style="font-size:0.88rem; border-top:1px dashed var(--line); padding-top:0.8rem;">
            <div>Email: <a href="mailto:mediskyltd@gmail.com">mediskyltd@gmail.com</a></div>
            <div>Website: <a href="http://www.mediskyindia.com" target="_blank" rel="noopener">www.mediskyindia.com</a></div>
            <div class="text-muted mt-1" style="font-size:0.8rem;">CIN: U85100BR2015PTC024198 (ROC Patna)</div>
          </div>
        </div>

      </div>

      <!-- ENQUIRY FORM -->
      <div class="col-lg-7">
        <div class="why-card" style="padding:2rem;">
          <div class="section-head" style="border-bottom:none; margin-bottom:1.2rem; padding-bottom:0;">
            <h2>Send an Enquiry</h2>
          </div>
          <form id="contactForm" action="mailto:mediskyltd@gmail.com" method="post" enctype="text/plain">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="name" class="form-label font-weight-bold">Full Name *</label>
                <input type="text" class="form-control" id="name" name="Name" placeholder="e.g. Dr. A. K. Sharma" required>
              </div>
              <div class="col-md-6">
                <label for="org" class="form-label font-weight-bold">Hospital / Pharmacy / Organisation</label>
                <input type="text" class="form-control" id="org" name="Organisation" placeholder="e.g. City Hospital Patna">
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label font-weight-bold">Phone Number *</label>
                <input type="tel" class="form-control" id="phone" name="Phone" placeholder="+91 98765 43210" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label font-weight-bold">Email Address</label>
                <input type="email" class="form-control" id="email" name="Email" placeholder="name@domain.com">
              </div>
              <div class="col-12">
                <label for="interest" class="form-label font-weight-bold">Product / Topic of Interest</label>
                <select class="form-control form-select" id="interest" name="Product interest">
                  <option>General Enquiry</option>
                  <option>Aminosky-10% Infusion</option>
                  <option>Glutasky Infusion 20%</option>
                  <option>L-Glutasky Plus Sachet</option>
                  <option>ZincFlow IP Injection</option>
                  <option>Ferric-CM Injection</option>
                  <option>Tetravan Colloid Infusion</option>
                  <option>Touch-Med Nitrile Gloves</option>
                  <option>Distributorship / Stockist Enquiry</option>
                </select>
              </div>
              <div class="col-12">
                <label for="msg" class="form-label font-weight-bold">Message *</label>
                <textarea class="form-control" id="msg" name="Message" rows="4" placeholder="Please specify your requirements, quantity, or location..." required></textarea>
              </div>
              <div class="col-12 d-flex gap-3 flex-wrap mt-4">
                <button type="submit" class="btn-brand">Send via Email ✉️</button>
                <button type="button" onclick="sendWhatsAppEnquiry()" class="btn-brand" style="background:#25D366; border-color:#25D366;">Send via WhatsApp 💬</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
function sendWhatsAppEnquiry() {
  const name = document.getElementById('name').value || 'Visitor';
  const org = document.getElementById('org').value || 'N/A';
  const phone = document.getElementById('phone').value || 'N/A';
  const interest = document.getElementById('interest').value;
  const msg = document.getElementById('msg').value || 'No message text provided';

  const text = `Hello Medisky Team,%0A%0AI have an enquiry from your website:%0A- Name: ${encodeURIComponent(name)}%0A- Organisation: ${encodeURIComponent(org)}%0A- Phone: ${encodeURIComponent(phone)}%0A- Product Interest: ${encodeURIComponent(interest)}%0A- Message: ${encodeURIComponent(msg)}`;

  window.open(`https://wa.me/919304827152?text=${text}`, '_blank');
}
</script>

<?php include 'includes/footer.php'; ?>
