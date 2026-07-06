<?php get_header(); $base = get_template_directory_uri() . "/assets/images/"; ?>

    <!-- ===== HERO ===== -->
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy">
          <span class="badge badge-light"><i class="dot"></i> Manufacturing AI — Made in Europe</span>
          <h1>Manufacturing AI,<br />made in <span class="text-red">Europe</span>.</h1>
          <p class="lead">
            Calibras builds Elector — an agentic AI platform that reads drawings,
            models and standards, and runs the engineering workflows your team
            does every day.
          </p>
          <div class="hero-buttons">
            <a href="<?php echo home_url('/elector/'); ?>" class="btn btn-red">Explore Elector <span class="arr">&rarr;</span></a>
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-outline">Book a Demo</a>
          </div>
          <div class="hero-tags">
            <span class="mini-tag"><img src="<?php echo $base; ?>home/block_icon.jpg" alt="" /> 100% EU TECH STACK</span>
            <span class="mini-tag"><img src="<?php echo $base; ?>home/block_icon.jpg" alt="" /> ON-PREMISE OPTION</span>
            <span class="mini-tag"><img src="<?php echo $base; ?>home/block_icon.jpg" alt="" /> EU SOVEREIGN CLOUD</span>
          </div>
        </div>
        <div class="hero-media">
          <img src="<?php echo $base; ?>home/hero_image.jpg" alt="Elector platform preview" />
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

    <!-- ===== PLATFORM & PEOPLE ===== -->
    <section class="section platform">
      <div class="container platform-grid">
        <div class="platform-left">
          <h2>A Platform, And The<br />People Behind It.</h2>
          <p>
            Calibras has no arms. Elector, our AI product for manufacturers, and
            our ongoing engineering consultancy that gets you to production-grade AI.
          </p>
        </div>
        <div class="platform-right">
          <p>
            Modern manufacturing is digital. Elector helps manufacturers navigate
            the intersection of physical production and digital innovation with
            confidence and clarity.
          </p>
          <p>
            With a sovereign and local stance, we stand ready to be just that.
            Elector is a European Manufacturing AI platform that automates analysis
            and documentation workflows, saving up to 60% of time with secure,
            cost-effective, and on-premise deployment options.
          </p>
        </div>
      </div>
    </section>

    <!-- ===== STATS ===== -->
    <section class="section stats-section">
      <div class="container stats-grid">
        <div class="stat-card">
          <span class="stat-num">60%</span>
          <span class="stat-label">ROI for customers</span>
          <span class="stat-sub">vs. startup-as-engineer right now</span>
        </div>
        <div class="stat-card">
          <span class="stat-num">&euro;140</span>
          <span class="stat-label">Per user, per month</span>
          <span class="stat-sub">75% gross margin at scale</span>
        </div>
        <div class="stat-card">
          <span class="stat-num">100%</span>
          <span class="stat-label">EU tech stack</span>
          <span class="stat-sub">Open-source + on-premise hosting</span>
        </div>
        <div class="stat-card">
          <span class="stat-num">4</span>
          <span class="stat-label">Pilots &amp; LOIs</span>
          <span class="stat-sub">Plus a growing EU pipeline</span>
        </div>
      </div>
    </section>

    <!-- ===== ELECTOR PRODUCT ===== -->
    <section class="section product" id="elector">
      <div class="container product-grid">
        <div class="product-copy">
          <span class="badge badge-soft"><i class="dot"></i> Our Product</span>
          <h2>Elector</h2>
          <p>
            Agentic AI for engineering drawings, 3D models, P&amp;IDs and
            standards. Connect it to your existing ERP or quoting tool.
          </p>
          <ul class="check-list">
            <li><span class="check">&check;</span> 3D feature extraction</li>
            <li><span class="check">&check;</span> Manufacturing-aware agents</li>
            <li><span class="check">&check;</span> Cloud or on-premise</li>
          </ul>
          <a href="<?php echo home_url('/elector/'); ?>" class="btn btn-outline-dark">Explore Elector <span class="arr">&rarr;</span></a>
        </div>
        <div class="product-media">
          <img src="<?php echo $base; ?>home/our_product_elector.jpg" alt="Elector dashboard" />
        </div>
      </div>
    </section>

    <!-- ===== PROJECTS ===== -->
    <section class="section projects" id="projects">
      <div class="container">
        <div class="section-head center">
          <h2>Our <span class="text-red">Projects</span></h2>
          <p>From computer vision to automation, our projects deliver measurable
            impact across engineering quality, and production workflows.</p>
        </div>
        <div class="projects-grid">
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>home/projets/project_001.jpg" alt="" /></div>
            <h3>AI &amp; Computer Vision Based AM Process Monitoring</h3>
            <p>Fully integrated AI-based process monitoring solution, accurately predicting a critical defect during printing.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>home/projets/project_002.jpg" alt="" /></div>
            <h3>Pharmaceutical OCR &amp; Lab Automation</h3>
            <p>Developed and deployed an intelligent hardware-software module for Tradisolar's pipette calibration line.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>home/projets/project_003.jpg" alt="" /></div>
            <h3>Computer Vision Dimensional Measurements</h3>
            <p>Calibrated Computer Vision 2D dimensional measurement system. Dedicated tracking dimensioning.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>home/projets/project_004.jpg" alt="" /></div>
            <h3>Industrial CT Calibration &amp; Filtering Analysis</h3>
            <p>Project scope was focused on validation of a new Werth TomoScope XS CT for the use in production.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>home/projets/project_005.jpg" alt="" /></div>
            <h3>OCR Feature Extraction Pipeline For Mechanical CAD Drawing PDFs</h3>
            <p>Project applied advanced Optical Character Recognition (OCR) ML models to extract critical data.</p>
          </article>
          <article class="project-card">
            <div class="project-thumb"><img src="<?php echo $base; ?>home/projets/project_006.jpg" alt="" /></div>
            <h3>3D Scanning Automation &amp; QC Dashboards</h3>
            <p>3D scanning workflow automation for an industry leading 3D printing bureau. Parts on Demand.</p>
          </article>
        </div>
        <div class="center"><a href="<?php echo home_url('/blog/'); ?>" class="link-view">View All</a></div>
      </div>
    </section>

    <!-- ===== CUSTOMER VOICES ===== -->
    <section class="section voices">
      <div class="container">
        <div class="section-head center">
          <span class="badge badge-soft"><i class="dot"></i> Testimonials</span>
          <h2>Customer <span class="text-red">Voices</span></h2>
          <p>Early adopters across CNC, parts marketplaces and process
            industries are putting Elector in front of real drawings.</p>
        </div>
        <div class="voices-grid">
          <article class="voice-card">
            <span class="quote-mark">&#10077;</span>
            <p>Elector reads our 2D drawings the way a senior estimator would. It got quoting time on complex parts from hours to minutes.</p>
            <div class="voice-author">
              <span class="avatar">EP</span>
              <span><strong>Operations Lead</strong><small>EazyPartz</small></span>
            </div>
          </article>
          <article class="voice-card">
            <span class="quote-mark">&#10077;</span>
            <p>Finally, an AI partner that understands European manufacturing — data stays on our infrastructure, and the team actually speaks our language.</p>
            <div class="voice-author">
              <span class="avatar">PD</span>
              <span><strong>CTO</strong><small>Parts on Demand</small></span>
            </div>
          </article>
          <article class="voice-card">
            <span class="quote-mark">&#10077;</span>
            <p>The Calibras team combines deep engineering know-how with practical AI. Their consultancy got us from pilot to production fast.</p>
            <div class="voice-author">
              <span class="avatar">MG</span>
              <span><strong>Head of Digital</strong><small>MetcoGroup</small></span>
            </div>
          </article>
          <article class="voice-card">
            <span class="quote-mark">&#10077;</span>
            <p>Elector's ability to process complex P&amp;ID diagrams and link them to our documentation saved us weeks of review.</p>
            <div class="voice-author">
              <span class="avatar">IQ</span>
              <span><strong>VP of Engineering</strong><small>IQ Inkool</small></span>
            </div>
          </article>
          <article class="voice-card">
            <span class="quote-mark">&#10077;</span>
            <p>From first contact to a working pilot, the Calibras team moved fast without cutting corners. A rare combination in this space.</p>
            <div class="voice-author">
              <span class="avatar">FD</span>
              <span><strong>Director of IT</strong><small>Fujifilm Diosynth</small></span>
            </div>
          </article>
          <article class="voice-card">
            <span class="quote-mark">&#10077;</span>
            <p>Data sovereignty was non-negotiable for us. Calibras delivered a compliant AI pipeline that runs entirely within our European perimeter.</p>
            <div class="voice-author">
              <span class="avatar">FD</span>
              <span><strong>Director of IT</strong><small>Fujifilm Diosynth</small></span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ===== BLOG & NEWS ===== -->
    <section class="section blog" id="blog">
      <div class="container">
        <div class="section-head center">
          <h2>Blog &amp; News</h2>
          <p>Calibras has two arms: Elector, our AI product for manufacturers, and
            our engineering consultancy that gets you to production-grade AI.</p>
        </div>
        <div class="news-grid">
          <article class="news-card">
            <a href="<?php echo home_url('/blog-detail/'); ?>"><div class="news-thumb"><img src="<?php echo $base; ?>home/news/news_01.jpg" alt="" /></div></a>
            <div class="news-body">
              <span class="news-meta">Feb 2026 · 10 min read</span>
              <h3><a href="<?php echo home_url('/blog-detail/'); ?>">Participated In The MTP Summit 2026 Held At IDA (Engineering Society Of …)</a></h3>
              <p>Calceiver - Module Type Package (MTP) integration insights…</p>
              <div class="news-tags"><span class="tag tag--red">Field notes</span><span class="tag tag--red">Policy</span></div>
            </div>
          </article>
          <article class="news-card">
            <a href="<?php echo home_url('/blog-detail/'); ?>"><div class="news-thumb"><img src="<?php echo $base; ?>home/news/news_02.jpg" alt="" /></div></a>
            <div class="news-body">
              <span class="news-meta">Feb 2026 · 10 min read</span>
              <h3><a href="<?php echo home_url('/blog-detail/'); ?>">Selected To Present Our Sovereign Manufacturing AI Agents Platform …</a></h3>
              <p>IPEC 2026 - Defence &amp; Security — Smart Industry showcase…</p>
              <div class="news-tags"><span class="tag tag--red">Technical</span><span class="tag tag--red">Policy</span></div>
            </div>
          </article>
          <article class="news-card">
            <a href="<?php echo home_url('/blog-detail/'); ?>"><div class="news-thumb"><img src="<?php echo $base; ?>home/news/news_03.jpg" alt="" /></div></a>
            <div class="news-body">
              <span class="news-meta">Feb 2026 · 10 min read</span>
              <h3><a href="<?php echo home_url('/blog-detail/'); ?>">Participation On GlobalSpecs (Sponsored By Rockwell Automation)</a></h3>
              <p>Read the full article on our latest industry collaboration…</p>
              <div class="news-tags"><span class="tag tag--red">Field notes</span><span class="tag tag--red">Policy</span></div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="section cta-section" id="contact">
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
