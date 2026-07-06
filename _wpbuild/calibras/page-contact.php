<?php get_header(); $base = get_template_directory_uri() . "/assets/images/"; ?>

    <!-- ===== HERO ===== -->
    <section class="hero hero-contact">
      <div class="container hero-grid">
        <div class="hero-copy">
          <span class="badge badge-light"><i class="dot"></i> Contact Us</span>
          <h1>Let's <span class="text-red">Talk</span><br /><span class="text-red">Manufacturing</span> AI.</h1>
          <p class="lead">Tell us what you're working on. We reply within one business
            day, usually faster.</p>
        </div>
        <div class="hero-media">
          <img src="<?php echo $base; ?>contact/hero_image.jpg" alt="Manufacturing location" />
        </div>
      </div>
    </section>

    <div class="hatch-divider"></div>

    <!-- ===== REQUEST A DEMO FORM ===== -->
    <section class="section form-section">
      <div class="container">
        <div class="form-head center">
          <h2>Request <span class="text-red">A Demo</span></h2>
          <p>30 minutes with an engineer Bring a drawing if you have one</p>
        </div>
        <form class="demo-form" id="demoForm" novalidate>
          <div class="form-row">
            <div class="field">
              <label>First Name</label>
              <input type="text" placeholder="Enter your first name" />
            </div>
            <div class="field">
              <label>Last Name</label>
              <input type="text" placeholder="Enter your last name" />
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label>Work Email</label>
              <input type="email" placeholder="Enter your work email" />
            </div>
            <div class="field">
              <label>Company <span class="opt">(Optional)</span></label>
              <input type="text" placeholder="Enter your company" />
            </div>
          </div>
          <div class="field">
            <label>Tell Us About Your Use Case</label>
            <textarea rows="5" placeholder="What workflow would you like AI to handle?"></textarea>
          </div>
          <div class="form-foot">
            <span class="form-note"><i class="sq-dot"></i> We use your details only to reply. No marketing automation.</span>
            <button type="submit" class="btn btn-red">Book a Demo <span class="arr">&rarr;</span></button>
          </div>
        </form>
      </div>
    </section>

    <div class="hatch-divider"></div>

    <!-- ===== CONTACT INFO CARDS ===== -->
    <section class="section contact-cards-section">
      <div class="container contact-cards">
        <div class="contact-card">
          <span class="cc-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
          </span>
          <span class="cc-label">EMAIL</span>
          <span class="cc-value">Info@Calibras.Dk</span>
        </div>
        <div class="contact-card">
          <span class="cc-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </span>
          <span class="cc-label">Call</span>
          <span class="cc-value">+45 52 65 04 32</span>
        </div>
        <div class="contact-card">
          <span class="cc-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="3" width="16" height="18" rx="1.5"/><path d="M9 8h2M13 8h2M9 12h2M13 12h2M9 16h6"/></svg>
          </span>
          <span class="cc-label">OFFICE</span>
          <span class="cc-value">Calibras ApS, Søborg,<br />Denmark</span>
        </div>
      </div>
    </section>

    <!-- ===== NEWSLETTER ===== -->
    <section class="section newsletter-section">
      <div class="container">
        <div class="newsletter">
          <span class="badge badge-soft"><i class="dot"></i> Newslater</span>
          <h2>Get One Good <span class="text-red">Email A Month</span></h2>
          <p>New whitepapers, ROI models and field notes — no marketing fluff.</p>
          <form class="news-form" id="newsForm" novalidate>
            <input type="email" placeholder="enter your email" />
            <button type="submit" class="btn btn-red">Subscribe</button>
          </form>
        </div>
      </div>
    </section>

    <!-- ===== FOOTER ===== -->
<?php get_footer(); ?>
