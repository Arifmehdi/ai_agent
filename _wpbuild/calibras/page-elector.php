<?php get_header(); $base = get_template_directory_uri() . "/assets/images/"; ?>

    <!-- ===== HERO ===== -->
    <section class="hero hero-elector">
      <div class="container hero-grid">
        <div class="hero-copy">
          <span class="badge badge-light"><i class="dot"></i> Manufacturing AI — Made in Europe</span>
          <h1>Manufacturing <span class="text-red">AI</span><br />agents &amp; Automation</h1>
          <p class="lead">
            Elector reads 2025 features, augments FMEA documentation and runs
            engineering workflows your team does every day — grounded in your
            own data, hosted in Europe.
          </p>
          <div class="hero-buttons">
            <a href="#pricing" class="btn btn-red">Book a Demo!</a>
            <a href="#pricing" class="btn btn-outline">See Pricing</a>
          </div>
          <div class="hero-tags">
            <span class="mini-tag"><img src="<?php echo $base; ?>elector/block_icon.jpg" alt="" /> 12 MONTHS FREE STACK</span>
            <span class="mini-tag"><img src="<?php echo $base; ?>elector/block_icon.jpg" alt="" /> ON-PREM OPTION</span>
            <span class="mini-tag"><img src="<?php echo $base; ?>elector/block_icon.jpg" alt="" /> EU SOVEREIGN CLOUD</span>
          </div>
        </div>
        <div class="hero-media">
          <img src="<?php echo $base; ?>elector/hero_image.jpg" alt="Elector platform" />
        </div>
      </div>
    </section>

    <!-- ===== CAPABILITY HUB (mind-map) ===== -->
    <section class="section pillcloud-section">
      <div class="container">
        <div class="ehub">
          <div class="ehub-group">
            <span class="epill">Drawings</span>
            <span class="epill">3D Models</span>
            <span class="epill">P &amp; IDs</span>
            <span class="epill">Standards</span>
          </div>

          <svg class="ehub-bracket" viewBox="0 0 46 106" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0 23 H30 Q42 23 42 35 V71 Q42 83 30 83 H0 M42 53 H46"
                  fill="none" stroke="#d3d3d8" stroke-width="1.5" vector-effect="non-scaling-stroke" />
          </svg>
          <span class="ehub-line"></span>

          <div class="ehub-center">
            <img src="<?php echo $base; ?>elector/elector_model_center.jpg" alt="Elector" />
          </div>

          <span class="ehub-line"></span>
          <svg class="ehub-bracket" viewBox="0 0 46 106" preserveAspectRatio="none" aria-hidden="true">
            <path d="M46 23 H16 Q4 23 4 35 V71 Q4 83 16 83 H46 M0 53 H4"
                  fill="none" stroke="#d3d3d8" stroke-width="1.5" vector-effect="non-scaling-stroke" />
          </svg>

          <div class="ehub-group">
            <span class="epill">Quotation</span>
            <span class="epill">Risk Reporat</span>
            <span class="epill">Knowledge</span>
            <span class="epill">Workflow</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== WORKFLOWS / VIDEO ===== -->
    <section class="section workflows">
      <div class="container">
        <div class="section-head center">
          <span class="badge badge-soft"><i class="dot"></i> Live · Demos</span>
          <h2>See Elector <span class="text-red">Workflows</span> In Action</h2>
          <p>Watch how Elector handles your real workflows, grounded in your data.</p>
        </div>
        <div class="video-grid">
          <article class="video-card">
            <div class="video-thumb">
              <img src="<?php echo $base; ?>elector/video/002.jpg" alt="" />
              <button class="play" aria-label="Play"><span></span></button>
              <span class="vtime">01:45</span>
            </div>
            <div class="video-body">
              <h3><span class="vnum">1</span> Drawing &amp; OCR Extraction</h3>
              <p>Accurately extract dimensions, GD&amp;T and the critical inputs from engineering drawings.</p>
            </div>
          </article>
          <article class="video-card">
            <div class="video-thumb">
              <img src="<?php echo $base; ?>elector/video/001.jpg" alt="" />
              <button class="play" aria-label="Play"><span></span></button>
              <span class="vtime">02:45</span>
            </div>
            <div class="video-body">
              <h3><span class="vnum">2</span> RFQ &amp; Risk Analysis</h3>
              <p>Analyse RfQs, assess risk, and produce a recommendation with real scores.</p>
            </div>
          </article>
          <article class="video-card">
            <div class="video-thumb">
              <img src="<?php echo $base; ?>elector/video/003.jpg" alt="" />
              <button class="play" aria-label="Play"><span></span></button>
              <span class="vtime">00:45</span>
            </div>
            <div class="video-body">
              <h3><span class="vnum">3</span> Knowledge Library Search</h3>
              <p>Search across your internal guidelines, standards and project history in seconds.</p>
            </div>
          </article>
          <article class="video-card">
            <div class="video-thumb">
              <img src="<?php echo $base; ?>elector/video/004.jpg" alt="" />
              <button class="play" aria-label="Play"><span></span></button>
              <span class="vtime">03:45</span>
            </div>
            <div class="video-body">
              <h3><span class="vnum">4</span> ERP &amp; System Integration</h3>
              <p>Connect Elector with SAP, ERP and MES so data and automations stay in sync.</p>
            </div>
          </article>
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

    <!-- ===== EUROPEAN ANSWER ===== -->
    <section class="section answer">
      <div class="container">
        <div class="section-head center">
          <span class="badge badge-soft"><i class="dot"></i> The agentic stack</span>
          <h2>Elector — The European Answer</h2>
          <p>Best-in-class engineering agents, grounded in your own data and
            deployed on infrastructure you control.</p>
        </div>
        <div class="answer-grid">
          <article class="answer-card">
            <span class="answer-num">1</span>
            <div>
              <h3>Drawing &amp; 3D Feature Extraction</h3>
              <p>Extract features, dimensions and tolerances from drawings and 3D models with manufacturing-aware OCR &amp; CAD.</p>
            </div>
          </article>
          <article class="answer-card">
            <span class="answer-num">2</span>
            <div>
              <h3>FMEA &amp; Documentation Automation</h3>
              <p>Auto-generate inspection plans, FMEA and technical documentation — reviewed and approved by your engineers.</p>
            </div>
          </article>
          <article class="answer-card">
            <span class="answer-num">3</span>
            <div>
              <h3>Company Knowledge Library</h3>
              <p>Connect standards, guidelines and project history into a searchable, grounded knowledge graph.</p>
            </div>
          </article>
          <article class="answer-card">
            <span class="answer-num">4</span>
            <div>
              <h3>ERP &amp; Webshop Integration</h3>
              <p>Push results into ERP, MES and webshops so quoting and automation stay perfectly in sync.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ===== WHY ELECTOR WINS ===== -->
    <section class="section why">
      <div class="container why-grid">
        <div class="why-copy">
          <span class="badge badge-soft"><i class="dot"></i> Competitive advantage</span>
          <h2>Why <span class="text-red">Elector</span> Wins</h2>
          <p class="why-sub">Built specifically to read, reason and act on manufacturing-grade data.</p>
          <div class="why-boxes">
            <div class="why-box">
              <div class="why-box-head">
                <span class="check">&check;</span>
                <h4>Domain Context</h4>
              </div>
              <p>Trained on engineering data and grounded in your own parts and standards.</p>
            </div>
            <div class="why-box">
              <div class="why-box-head">
                <span class="check">&check;</span>
                <h4>Domain Context</h4>
              </div>
              <p>Trained on engineering data and grounded in your own parts and standards.</p>
            </div>
            <div class="why-box">
              <div class="why-box-head">
                <span class="check">&check;</span>
                <h4>Domain Context</h4>
              </div>
              <p>Trained on engineering data and grounded in your own parts and standards.</p>
            </div>
            <div class="why-box">
              <div class="why-box-head">
                <span class="check">&check;</span>
                <h4>Domain Context</h4>
              </div>
              <p>Trained on engineering data and grounded in your own parts and standards.</p>
            </div>
          </div>
        </div>
        <div class="why-media">
          <img src="<?php echo $base; ?>elector/competittive_advantage.jpg" alt="Machined part" />
        </div>
      </div>
    </section>

    <!-- ===== BIG TECH LLMs ===== -->
    <section class="section bigtech">
      <div class="container">
        <div class="bigtech-top">
          <div class="bigtech-copy">
            <h2>Big Tech LLMs Don't<br />Speak Manufacturing.</h2>
            <p>Generic models are trained on the public web. They don't understand
              GD&amp;T, drawing conventions or your tolerances. Elector is purpose-built
              around manufacturing data and runs as a sovereign agent — not an API call.</p>
          </div>
          <div class="bigtech-media">
            <img src="<?php echo $base; ?>elector/why_elevator.jpg" alt="Engineering workstation" />
          </div>
        </div>
        <div class="bigtech-cards">
          <div class="bt-card">
            <h4>Domain Context Management</h4>
            <p>Tailored knowledge graphs grounded in your parts, processes and history.</p>
          </div>
          <div class="bt-card">
            <h4>European &amp; Secure</h4>
            <p>Hosted on EU infrastructure with on-premise and GDPR-compliant options.</p>
          </div>
          <div class="bt-card">
            <h4>Manufacturer-Built Data Model</h4>
            <p>A data model designed by manufacturers, for real production workflows.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== PRICING ===== -->
    <section class="section pricing" id="pricing">
      <div class="container">
        <div class="section-head center">
          <span class="badge badge-soft"><i class="dot"></i> Pricing</span>
          <h2>Pricing For <span class="text-red">Manufacturing</span> Teams</h2>
          <p>Pick the model that suits your team, with a path to full deployment on EU infrastructure.</p>
        </div>
        <div class="pricing-grid">
          <article class="price-card">
            <span class="price-tier">Cloud</span>
            <p class="price-desc">Multi-tenant EU cloud. Spin up in minutes.</p>
            <div class="price-amount">&euro;140 <span>per user / month</span></div>
            <a href="#" class="btn btn-outline-dark price-btn">Start a Pilot</a>
            <h5>What You Get:</h5>
            <ul class="price-list">
              <li><span class="check">&check;</span> Managed EU-hosted deployment</li>
              <li><span class="check">&check;</span> Core extraction &amp; RfQ agents</li>
              <li><span class="check">&check;</span> Up to 5 connected seats</li>
              <li><span class="check">&check;</span> Knowledge library access</li>
              <li><span class="check">&check;</span> Email support, 24h response</li>
            </ul>
          </article>

          <article class="price-card price-card--popular">
            <span class="popular-badge">Most Popular</span>
            <span class="price-tier">On-Premise</span>
            <p class="price-desc">Run Elector inside your own infrastructure.</p>
            <div class="price-amount price-amount--custom">Custom <span>annual licence</span></div>
            <a href="#" class="btn btn-red price-btn">Request Pricing</a>
            <h5>What You Get:</h5>
            <ul class="price-list">
              <li><span class="check">&check;</span> Full on-prem deployment</li>
              <li><span class="check">&check;</span> Unlimited seats &amp; agents</li>
              <li><span class="check">&check;</span> Air-gapped / private cloud option</li>
              <li><span class="check">&check;</span> Dedicated onboarding</li>
              <li><span class="check">&check;</span> Priority support &amp; SLA</li>
            </ul>
          </article>

          <article class="price-card">
            <span class="price-tier">Pilot</span>
            <p class="price-desc">A structured pilot on your own parts.</p>
            <div class="price-amount price-amount--custom">Fixed-Fee <span>6-week pilot</span></div>
            <a href="#" class="btn btn-outline-dark price-btn">Book a Scoping Call</a>
            <h5>What You Get:</h5>
            <ul class="price-list">
              <li><span class="check">&check;</span> Scoping &amp; success criteria</li>
              <li><span class="check">&check;</span> Real parts &amp; real drawings</li>
              <li><span class="check">&check;</span> Live extraction &amp; quoting demo</li>
              <li><span class="check">&check;</span> ROI &amp; production roadmap</li>
              <li><span class="check">&check;</span> Clear path to a wider contract</li>
            </ul>
          </article>
        </div>
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

    <!-- ===== CTA ===== -->
    <section class="section cta-section" id="contact">
      <div class="container">
        <div class="cta-banner">
          <span class="badge badge-ghost"><i class="dot"></i> Ready when you are</span>
          <h2>Ready To Make Your<br />Manufacturing Sovereign?</h2>
          <p>30-minute live demo. Bring a part. We'll show extraction, agent
            reasoning and a sample RfQ — running on EU infrastructure.</p>
          <div class="cta-buttons">
            <a href="#" class="btn btn-white">Book a Demo</a>
            <a href="#" class="btn btn-ghost">Contact Us</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FOOTER ===== -->
<?php get_footer(); ?>
