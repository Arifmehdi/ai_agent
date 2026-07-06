<?php get_header(); $base = get_template_directory_uri() . "/assets/images/"; ?>

    <!-- ===== HERO ===== -->
    <section class="hero about-hero">
      <div class="container hero-grid">
        <div class="hero-copy">
          <span class="badge badge-light"><i class="dot"></i> About Calibras</span>
          <h1>Building the Future<br />of <span class="text-red">Manufacturing</span><br />Intelligence</h1>
          <p class="lead">Calibras empowers manufacturers with digital workflows &amp;
            transformation expertise to improve efficiency &amp; drive sustainable growth.</p>
        </div>
        <div class="hero-media">
          <img src="<?php echo $base; ?>about/hero_img.jpg" alt="Precision machined part" />
        </div>
      </div>
    </section>

    <!-- ===== BRAND STRIP ===== -->
    <section class="brand-strip">
      <div class="container brand-track">
        <img src="<?php echo $base; ?>home/brand/brand_01.jpg" alt="brand" />
        <img src="<?php echo $base; ?>home/brand/brand_02.jpg" alt="brand" />
        <img src="<?php echo $base; ?>home/brand/brand_03.jpg" alt="brand" />
        <img src="<?php echo $base; ?>home/brand/brand_04.jpg" alt="brand" />
        <img src="<?php echo $base; ?>home/brand/brand_05.jpg" alt="brand" />
        <img src="<?php echo $base; ?>home/brand/brand_06.jpg" alt="brand" />
        <img src="<?php echo $base; ?>home/brand/brand_07.jpg" alt="brand" />
      </div>
    </section>

    <!-- ===== STORY ===== -->
    <section class="section story-section">
      <div class="container">
        <div class="story-head">
          <div class="story-left">
            <span class="badge badge-soft"><i class="dot"></i> Our Story</span>
            <h2>Engineering The <span class="text-red">Future<br />Of</span> Manufacturing</h2>
          </div>
          <div class="story-right">
            <p>Calibras digitalizes manufacturing workflows and provides strategic
              digital transformation consultancy for manufacturing companies.</p>
            <p>We live in a world built by manufacturing, where innovation is a
              self-driving virtuous cycle. As manufacturing becomes increasingly
              digital, businesses need a trusted partner to bridge the transformation
              with confidence. <strong>Elector</strong>, our European Manufacturing AI
              platform, empowers manufacturers with secure, intelligent automation —
              reducing engineering and documentation workloads by up to 60% through a
              flexible, sovereign, and on-premise-ready solution.</p>
          </div>
        </div>

        <div class="story-image">
          <img src="<?php echo $base; ?>about/manufacture_img.jpg" alt="Engineering team reviewing a 3D model" />
        </div>

        <div class="cs-grid">
          <div class="cs-card">
            <div class="cs-head"><img src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" /> Your Challenges</div>
            <ul class="cs-list">
              <li>
                <img class="cs-ico" src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" />
                <span><strong>Slow Manual Workflows</strong> — engineers spend hours parsing 2D drawings and filling FMEA templates by hand.</span>
              </li>
              <li>
                <img class="cs-ico" src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" />
                <span><strong>Old Paradigms &amp; Systems</strong> — legacy ERP and document workflows were not built for an AI-augmented future.</span>
              </li>
              <li>
                <img class="cs-ico" src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" />
                <span><strong>Defects &amp; Dimensional Deviations</strong> — invisible 2D features are slow to scope and easy to miss.</span>
              </li>
              <li>
                <img class="cs-ico" src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" />
                <span><strong>Raw Data &amp; No Insights</strong> — production data piles up that no one can summarize or relate.</span>
              </li>
            </ul>
          </div>

          <div class="cs-card">
            <div class="cs-head"><img src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" /> Our Solutions</div>
            <ul class="cs-list">
              <li>
                <img class="cs-ico" src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" />
                <span><strong>AI agents, MES &amp; ERP integration</strong> — Elector connects to your existing stack and automates the workflow.</span>
              </li>
              <li>
                <img class="cs-ico" src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" />
                <span><strong>Strategy &amp; Change Management</strong> — we guide the full digital transformation, not just the software.</span>
              </li>
              <li>
                <img class="cs-ico" src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" />
                <span><strong>Computer Vision Inspection</strong> — automated dimensional and surface quality checks at production speed.</span>
              </li>
              <li>
                <img class="cs-ico" src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" />
                <span><strong>AI 3D geometry Processing</strong> — extract manufacturing context from any 3D model automatically.</span>
              </li>
              <li>
                <img class="cs-ico" src="<?php echo $base; ?>about/solution_challenge_con.jpg" alt="" />
                <span><strong>Industrial Data Science &amp; MLOps</strong> — turn raw production data into clear, actionable intelligence.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== TEAM ===== -->
    <section class="section team-section">
      <div class="container">
        <div class="section-head center">
          <span class="badge badge-soft"><i class="dot"></i> Meet our leadership</span>
          <h2>The People <span class="text-red">Behind Calibras</span></h2>
          <p>A multidisciplinary team of engineers, AI specialists, and manufacturing
            experts committed to transforming industrial workflows.</p>
        </div>

        <div class="team-grid">
          <article class="team-card">
            <div class="team-photo"><img src="<?php echo $base; ?>about/people_1.jpg" alt="Ihab Brini" /></div>
            <h4>Ihab Brini</h4>
            <span>Founder &amp; AI / ML</span>
          </article>
          <article class="team-card">
            <div class="team-photo"><img src="<?php echo $base; ?>about/people_2.png" alt="Mateus Spencer" /></div>
            <h4>Mateus Spencer</h4>
            <span>CMO, CMS Reviews</span>
          </article>
          <article class="team-card">
            <div class="team-photo"><img src="<?php echo $base; ?>about/people3.png" alt="Noor Alam" /></div>
            <h4>Noor Alam</h4>
            <span>Backed Pretend</span>
          </article>
        </div>

        <div class="team-grid team-grid--2">
          <article class="team-card">
            <div class="team-photo"><img src="<?php echo $base; ?>about/people_4.png" alt="Johannes Hackl" /></div>
            <h4>Johannes Hackl</h4>
            <span>CFO &amp; 3D geometry</span>
          </article>
          <article class="team-card">
            <div class="team-photo"><img src="<?php echo $base; ?>about/people_5.png" alt="Vice Rundlevi" /></div>
            <h4>Vice Rundlevi</h4>
            <span>Founder &amp; CLO</span>
          </article>
        </div>
      </div>
    </section>

    <!-- ===== OUR PROJECT ===== -->
    <section class="section projects">
      <div class="container">
        <div class="section-head center">
          <h2>Our <span class="text-red">Project</span></h2>
          <p>From computer vision to automation, our projects deliver measurable
            impact across engineering quality, and production workflows.</p>
        </div>
        <div class="projects-grid">
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>about/project_01.png" alt="" /></div>
            <h3>AI &amp; Computer Vision Based AM Process Monitoring</h3>
            <p>Fully integrated AI-based process monitoring solution, accurately predicting a critical defect during printing.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>about/project_02.png" alt="" /></div>
            <h3>Pharmaceutical OCR &amp; Lab Automation</h3>
            <p>Developed and deployed an intelligent hardware-software module for Tradisolar's pipette calibration line.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>about/project_03.png" alt="" /></div>
            <h3>Computer Vision Dimensional Measurements</h3>
            <p>Calibrated Computer Vision 2D dimensional measurement system. Dedicated tracking dimensioning.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>about/project_04.png" alt="" /></div>
            <h3>Industrial CT Calibration &amp; Filtering Analysis</h3>
            <p>Project scope was focused on validation of a new Werth TomoScope XS CT for the use in production.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>about/project_05.png" alt="" /></div>
            <h3>OCR Feature Extraction Pipeline For Mechanical CAD Drawing PDFs</h3>
            <p>Project applied advanced Optical Character Recognition (OCR) ML models to extract critical data.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>about/project_06.png" alt="" /></div>
            <h3>3D Scanning Automation &amp; QC Dashboards</h3>
            <p>3D scanning workflow automation for an industry leading 3D printing bureau. Parts on Demand.</p>
          </article>
        </div>
        <div class="center"><a href="#" class="link-view">View All</a></div>
      </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="section cta-section">
      <div class="container">
        <div class="cta-banner">
          <span class="badge badge-ghost"><i class="dot"></i> Ready when you are</span>
          <h2>Ready To Make Your<br />Manufacturing Sovereign?</h2>
          <p>30-minute live demo. Bring a part. We'll show extraction, agent
            reasoning and a sample RfQ — running on EU infrastructure.</p>
          <div class="cta-buttons">
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">Book a Demo</a>
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-ghost">Contact Us</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FOOTER ===== -->
<?php get_footer(); ?>
