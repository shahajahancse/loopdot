<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support & Information | MSH ERP Systems</title>
  
  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    html, body {
      min-height: 100vh;
      width: 100%;
      margin: 0;
      padding: 10px 0;
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background: linear-gradient(135deg, #f4f6fc 0%, #eef1f9 100%);
      color: #2d3748;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Ambient background glows */
    .bg-shape-1 {
      position: absolute;
      width: 380px;
      height: 380px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(104, 48, 145, 0.12) 0%, rgba(104, 48, 145, 0) 70%);
      top: -100px;
      right: -80px;
      pointer-events: none;
      z-index: 1;
    }

    .bg-shape-2 {
      position: absolute;
      width: 320px;
      height: 320px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(148, 36, 184, 0.1) 0%, rgba(148, 36, 184, 0) 70%);
      bottom: -80px;
      left: -60px;
      pointer-events: none;
      z-index: 1;
    }

    .support-card {
      position: relative;
      z-index: 2;
      width: 94%;
      max-width: 820px;
      background: #ffffff;
      border-radius: 18px;
      box-shadow: 0 15px 35px rgba(104, 48, 145, 0.08), 0 5px 15px rgba(0, 0, 0, 0.04);
      border: 1px solid rgba(104, 48, 145, 0.08);
      padding: 20px 28px 16px;
      text-align: center;
      margin: 10px auto;
      transition: all 0.3s ease;
    }

    /* Header section */
    .header-logo-wrap {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 14px;
      margin-bottom: 8px;
    }

    .logo-box {
      width: 52px;
      height: 52px;
      background: #ffffff;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 14px rgba(104, 48, 145, 0.12);
      border: 1px solid rgba(104, 48, 145, 0.1);
      padding: 6px;
    }

    .logo-box img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
    }

    .badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(104, 48, 145, 0.08);
      color: #683091;
      padding: 3px 12px;
      border-radius: 30px;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      margin-bottom: 8px;
    }

    .badge-pill i {
      font-size: 9px;
      color: #38a169;
    }

    .main-title {
      font-size: 24px;
      font-weight: 800;
      color: #3b1456;
      letter-spacing: -0.5px;
      margin: 0;
    }

    .subtitle {
      font-size: 13px;
      color: #718096;
      font-weight: 500;
      margin-bottom: 20px;
    }

    .subtitle strong {
      color: #683091;
      font-weight: 700;
    }

    /* Grid Section */
    .info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin-bottom: 20px;
      text-align: left;
    }

    .info-card {
      background: #fbfbfd;
      border-radius: 14px;
      padding: 13px 15px;
      border: 1px solid #edf0f7;
      transition: all 0.2s ease;
      display: flex;
      gap: 12px;
      align-items: flex-start;
    }

    .info-card:hover {
      background: #ffffff;
      border-color: rgba(104, 48, 145, 0.25);
      transform: translateY(-2px);
      box-shadow: 0 8px 18px rgba(104, 48, 145, 0.07);
    }

    .card-icon {
      width: 36px;
      height: 36px;
      min-width: 36px;
      border-radius: 10px;
      background: rgba(104, 48, 145, 0.09);
      color: #683091;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
      margin-top: 2px;
    }

    .card-body h4 {
      font-size: 12.5px;
      font-weight: 700;
      color: #2d3748;
      margin-bottom: 4px;
    }

    .card-body p {
      font-size: 11.5px;
      color: #5a6a85;
      line-height: 1.45;
    }

    .card-body a {
      color: #683091;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.15s ease;
    }

    .card-body a:hover {
      color: #9424b8;
      text-decoration: underline;
    }

    /* Footer / Actions */
    .card-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-top: 1px solid #f0f2f8;
      padding-top: 14px;
      flex-wrap: wrap;
      gap: 10px;
    }

    .status-indicator {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      color: #4a5568;
      font-weight: 600;
    }

    .status-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: #38a169;
      box-shadow: 0 0 0 3px rgba(56, 161, 105, 0.2);
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(56, 161, 105, 0.4); }
      70% { box-shadow: 0 0 0 6px rgba(56, 161, 105, 0); }
      100% { box-shadow: 0 0 0 0 rgba(56, 161, 105, 0); }
    }

    .action-links {
      display: flex;
      gap: 10px;
    }

    .btn-action {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 7px 14px;
      border-radius: 8px;
      font-size: 12px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .btn-primary {
      background: linear-gradient(135deg, #683091 0%, #8736bb 100%);
      color: #ffffff;
      box-shadow: 0 3px 8px rgba(104, 48, 145, 0.25);
    }

    .btn-primary:hover {
      opacity: 0.95;
      transform: translateY(-1px);
      box-shadow: 0 5px 12px rgba(104, 48, 145, 0.35);
      color: #ffffff;
    }

    .btn-outline {
      background: #f7f3fb;
      color: #683091;
      border: 1px solid rgba(104, 48, 145, 0.18);
    }

    .btn-outline:hover {
      background: rgba(104, 48, 145, 0.1);
      color: #683091;
    }

    @media (max-width: 650px) {
      .info-grid {
        grid-template-columns: 1fr;
      }
      .support-card {
        padding: 20px 18px;
      }
      .card-footer {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <div class="bg-shape-1"></div>
  <div class="bg-shape-2"></div>

  <div class="support-card">
    <div class="badge-pill">
      <i class="fa fa-circle"></i> Enterprise Helpdesk & Info
    </div>

    <div class="header-logo-wrap">
      <div class="logo-box">
        <img src="<?= base_url(); ?>uploads/company_photo/logo.gif" alt="Mysoftheaven Logo">
      </div>
      <div>
        <h1 class="main-title">MSH ERP SYSTEMS</h1>
      </div>
    </div>

    <p class="subtitle">Designed & Developed by <strong>Mysoftheaven (BD) Ltd.</strong></p>

    <!-- Modern Info Grid -->
    <div class="info-grid">
      <!-- Head Office -->
      <div class="info-card">
        <div class="card-icon">
          <i class="fa-solid fa-location-dot"></i>
        </div>
        <div class="card-body">
          <h4>Head Office (Bangladesh)</h4>
          <p>Raisa & Shikder Tower, Level-5, 3/8, North Pirerbag, 60 Fit Road, Mirpur, Dhaka-1207.</p>
        </div>
      </div>

      <!-- Corporate Office -->
      <div class="info-card">
        <div class="card-icon">
          <i class="fa-solid fa-building-columns"></i>
        </div>
        <div class="card-body">
          <h4>Corporate Office (USA)</h4>
          <p>8813 NW 23 Street, Miami, FL 33172, USA.</p>
        </div>
      </div>

      <!-- Direct Phone & Cell -->
      <div class="info-card">
        <div class="card-icon">
          <i class="fa-solid fa-phone-volume"></i>
        </div>
        <div class="card-body">
          <h4>Phone & Hotline</h4>
          <p>
            Phone: <a href="tel:+880258054029">+88 02 58054029</a><br>
            Cell / WhatsApp: <a href="tel:+8801970776609">+88 01970-776609</a>
          </p>
        </div>
      </div>

      <!-- Website & Portal -->
      <div class="info-card">
        <div class="card-icon">
          <i class="fa-solid fa-globe"></i>
        </div>
        <div class="card-body">
          <h4>Official Portal</h4>
          <p>
            Official Website:<br>
            <a href="http://www.mysoftheaven.com" target="_blank" rel="noopener noreferrer">www.mysoftheaven.com</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Footer actions -->
    <div class="card-footer">
      <div class="status-indicator">
        <span class="status-dot"></span>
        <span>24/7 Technical Support Active</span>
      </div>

      <div class="action-links">
        <a href="tel:+8801970776609" class="btn-action btn-outline">
          <i class="fa-solid fa-phone"></i> Call Hotline
        </a>
        <a href="http://www.mysoftheaven.com" target="_blank" rel="noopener noreferrer" class="btn-action btn-primary">
          <i class="fa-solid fa-arrow-up-right-from-square"></i> Visit Website
        </a>
      </div>
    </div>
  </div>

  <script>
    function notifyParentResize() {
      try {
        if (window.parent && typeof window.parent.iframeLoaded === 'function') {
          window.parent.iframeLoaded();
        }
      } catch(e) {}
    }
    window.addEventListener('load', notifyParentResize);
    window.addEventListener('resize', notifyParentResize);
    setTimeout(notifyParentResize, 100);
    setTimeout(notifyParentResize, 300);
  </script>
</body>
</html>
