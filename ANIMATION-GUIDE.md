# Calibras — Animation & Motion Guide (Elementor Pro)

A copy-paste reference for adding modern, premium motion to the Calibras site **after**
it's rebuilt in Elementor Pro. Keep the existing UI exactly as-is — these only add motion.

> **Golden rules** (read once, apply everywhere)
> - Animate **opacity + transform only** (GPU-friendly, no layout jank).
> - Duration **0.4–0.7s**, easing **ease-out** / `cubic-bezier(.2,.7,.2,1)`.
> - **Stagger** sibling items by **80–120ms** — this is what looks expensive.
> - **Animate once** (don't replay on every scroll). Set Elementor → "Animate once" where available.
> - **Honor reduced-motion** (code below already does).
> - Hero animates **on load**; everything else **on scroll into view**.

---

## 0. Global setup (do these once)

### Sticky shrinking header
Elementor → select the Header section → **Advanced → Motion Effects → Sticky = Top**,
"Effects Offset" 0. Then add this to **Site Settings → Custom CSS**:

```css
/* shrink + shadow once the header becomes sticky */
header.elementor-sticky--effects{
  background:rgba(251,251,252,.9)!important;
  backdrop-filter:blur(10px);
  box-shadow:0 6px 20px rgba(20,23,28,.06);
  transition:all .3s ease;
}
header.elementor-sticky--effects .elementor-container{ min-height:60px; } /* was ~64 */
```

### Smooth scrolling for anchor links
Site Settings → Custom CSS:

```css
html{ scroll-behavior:smooth; }
```

### Load the two custom files
- Paste `wordpress-snippets/animations.css` into **Site Settings → Custom CSS**.
- Paste `wordpress-snippets/animations.js` into **Elementor Pro → Custom Code**
  (Templates → Custom Code → Add New → location: `</body> – End`).

---

## 1. Entrance animations — the native way (no code)

For most widgets you just set, per widget:
**Advanced tab → Motion Effects → Entrance Animation.**

| Setting | Value |
|---|---|
| Animation | (see tables below) |
| Animation Duration | **Fast (0.4s)** for small items, **Normal (0.6s)** for big blocks |
| Animation Delay (ms) | use for **stagger** — 0, 100, 200, 300 … |

> To stagger a row of 3 cards: give them delays **0 / 120 / 240**.
> To stagger 4 cards: **0 / 100 / 200 / 300**.

---

## 2. Per-page plan

### 🏠 Home (`index.html`)

| Section / widget | Entrance animation | Duration | Delay (stagger) |
|---|---|---|---|
| Hero badge | fadeInUp | 0.4s | 0 |
| Hero H1 | fadeInUp | 0.6s | 100 |
| Hero paragraph | fadeInUp | 0.6s | 200 |
| Hero buttons | fadeInUp | 0.5s | 300 |
| Hero mini-tags | fadeIn | 0.5s | 400 |
| Hero image | fadeInRight | 0.7s | 200 + **Motion → Scrolling "Translate Y" floating** |
| Brand logos (7) | fadeIn | 0.4s | 0,80,160,240,320,400,480 |
| Platform text columns | fadeInUp | 0.6s | 0 / 150 |
| **Stat cards (4)** | fadeInUp | 0.5s | 0/100/200/300 — **use Counter widget** for the numbers |
| Elector product image | fadeInLeft | 0.6s | 0 |
| Elector copy + checklist | fadeInRight | 0.6s | 100 |
| Project cards (6) | fadeInUp | 0.5s | 0/100/200… + **hover lift (see §3)** |
| Voice cards (6) | fadeInUp | 0.5s | stagger by column |
| News cards (3) | fadeInUp | 0.5s | 0/120/240 |
| CTA banner | zoomIn | 0.6s | 0 |

### ⚙️ Elector (`elector.html`)

| Section | Animation | Notes |
|---|---|---|
| Hero (same as home) | fadeInUp staggered | — |
| **Capability mind-map** | **SVG line-draw + pill pop-in** | ⭐ signature effect — use `mindmap-widget.html` (HTML widget). |
| Video cards (4) | fadeInUp 0/100/200/300 | + hover zoom on thumb (§3) |
| Stat cards | Counter widget | count-up |
| European Answer cards (4) | fadeInUp, 2×2 stagger | — |
| Why-Elector boxes (4) | fadeInUp 0/100/200/300 | — |
| Big-Tech red cards (3) | fadeInUp 0/120/240 | — |
| Pricing cards (3) | fadeInUp 0/120/240 | "Most Popular" → add gentle float (§3) |

### 👥 About (`about.html`)
- Story image → **fadeInUp** (or clip-path wipe, §3 bonus).
- Challenges list rows → **fadeInLeft**, stagger 0/100/200/300.
- Solutions list rows → **fadeInRight**, stagger 0/100/200/300/400.
- Team cards → **fadeInUp** stagger + grayscale→color hover (§3).

### 📰 Blog (`blog.html`) & Blog detail (`blog-detail.html`)
- Featured cards → fadeInUp 0/150.
- Latest grid (12) → fadeInUp, stagger by row (0/100/200 per row).
- Blog detail headings/paragraphs → fadeInUp on scroll.
- Blog detail hero image → Motion Effects parallax (Translate Y, slow).
- **Bonus:** reading-progress bar (§3 bonus).

### ✉️ Contact (`contact.html`)
- Hero → fadeInUp staggered; pin image → subtle float (Motion Effects).
- Form fields → fadeInUp stagger 0/80/160/240.
- 3 red info cards → fadeInUp 0/120/240 + hover lift.
- Newsletter card → zoomIn.

---

## 3. Hover & micro-interactions (Custom CSS — already in `animations.css`)

- **Card lift:** cards rise 4px + stronger shadow on hover.
- **Button:** arrow nudges right, slight scale.
- **Video thumb:** image zooms 1.05, play button pulses.
- **Team photo:** grayscale → full color.
- **"Most Popular" pricing card:** slow infinite float.

All included in `wordpress-snippets/animations.css` — just paste it.

---

## 4. The 2 effects Elementor can't do natively

### ⭐ A. Mind-map line-draw (Elector capability section)
Use **`wordpress-snippets/mindmap-widget.html`** — drop an **HTML widget** where the
mind-map should go and paste the whole file. Replace the image `src` with your uploaded
Media Library URL. The brackets draw themselves, pills pop in staggered, Elector box scales
in — triggered when it scrolls into view.

### 🔢 B. Stat count-up + stagger
**Easiest:** use Elementor's **Counter** widget (Number, set Duration 2000ms) and give each
card an Entrance Animation with staggered delay. **No code needed.**
If you keep the stat cards as custom HTML instead, `animations.js` includes a `data-count`
counter so `<span class="stat-num" data-count="60" data-suffix="%">0</span>` animates up.

---

## 5. Performance / QA checklist
- [ ] Entrance animations set to **Animate Once**.
- [ ] Motion disabled or reduced on mobile (Elementor lets you set per-device).
- [ ] No animation longer than 1s.
- [ ] Test with OS "Reduce Motion" on — page must still be usable (code handles it).
- [ ] Lighthouse: animations shouldn't drop CLS (reserve image heights).
- [ ] Only one "hero" effect per page (the mind-map is Elector's).
```
