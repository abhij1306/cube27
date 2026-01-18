Cube27 Website Implementation Plan
Overview
Build a 7-page static HTML/CSS/JS website for Cube27, a Global Capability Center (GCC) and enterprise technology partner. The site will feature a light, professional theme with scroll animations, designed to be easily recreated in WordPress by the team.

Design Direction
Visual Style (Inspired by Banani Wireframes)
Theme: Light, clean, professional
Layout: Generous whitespace, bento-grid service cards
Typography: Modern sans-serif (Inter or similar)
Interactions: Smooth scroll animations on reveal
Color Palette (Light Professional Theme)
Role	Color	Usage
Primary	#2563EB (Royal Blue)	CTAs, links, accents
Secondary	#0EA5E9 (Cyan)	Tech/innovation elements
Text Primary	#1E293B (Slate 800)	Headlines, body
Text Secondary	#64748B (Slate 500)	Subtitles, captions
Background	#FFFFFF	Main background
Surface	#F8FAFC (Slate 50)	Cards, sections
Border	#E2E8F0 (Slate 200)	Dividers, borders
Typography
Headings: Inter (700 weight)
Body: Inter (400 weight)
Scale: 16px base, 1.5 line-height
Site Structure
Page 1: Homepage
Section	Content Source
Header/Nav	Logo, Services dropdown, Success Stories, About Us, Contact, "Partner with Us" CTA
Hero	Headline: "Powered by People, Enabled by Tech." + subheadline from wireframe.md
Trust Bar	"Trusted by Global Leaders" + placeholder logos (Dell, Ford, Epson, Avaya, Arrow)
Core Offerings	4-card bento grid: GCC & BOT, Enterprise Commerce, MarTech & Intelligence, Agentic AI
Cube27 Advantage	4 points: Stringent Hiring, Rapid Scale, Stability, Global Reach
Footer	Links, copyright
Page 2: GCC & BOT Service
Section	Content
Hero	"Your Team, Extended Globally."
BOT Model	Build → Operate → Transfer (3-step visual)
Operational Excellence	Culture Mirroring, Efficiency, Compliance
Page 3: Enterprise Commerce & MarTech
Section	Content
Hero	"Scalable Commerce Architectures."
Commerce Solutions	Enterprise Class + Agile/OpenSource + Migrations
MarTech & Connectivity	Integrations + Proprietary Tools (DSMM, AQ360)
Page 4: Agentic AI & Automation
Section	Content
Hero	"Future-Proofing via Agentic AI."
Agentic Checkout	Autonomous agents, tech stack
Process Automation	R&D, Automation, Data Stack
Page 5: Case Studies
Case Study	Format
Feednomics	Challenge → Solution → Result
Supplier ERP	Challenge → Solution → Result
Page 6: About Us
Section	Content
Hero	"Stability. Intelligence. Scale."
Leadership	Arpan Jain (CEO), Amber Jain (CTO) with credentials
Infrastructure	150+ Specialists, 95% SLA, $1B ad spend
Employee Engagement	Photo carousel (10 images, no captions)
Page 7: Contact
Section	Content
Hero	"Ready to Transform?"
Form	Name, Company, Interest dropdown, Budget Range
CTA	"Schedule a consultation with our Solutions Architect"
Technical Implementation
Project Structure
cube27/
├── index.html              # Homepage
├── gcc-bot.html           # GCC & BOT page
├── commerce.html          # Enterprise Commerce page
├── ai-automation.html     # Agentic AI page
├── case-studies.html      # Case Studies page
├── about.html             # About Us page
├── contact.html           # Contact page
├── css/
│   ├── styles.css         # Main stylesheet
│   └── animations.css     # AOS overrides
├── js/
│   ├── main.js            # Navigation, carousel
│   └── aos.min.js         # Scroll animations
└── images/
    └── (placeholder images)
Libraries
AOS (Animate on Scroll): For scroll-triggered animations
No jQuery: Vanilla JS only for performance
Responsive Breakpoints
Mobile: < 768px
Tablet: 768px - 1024px
Desktop: > 1024px
Verification Plan
Browser Testing
Chrome, Firefox, Edge (latest)
Mobile responsive check
Functionality
All navigation links work
Scroll animations trigger correctly
Contact form validates inputs
Employee carousel navigates properly
WordPress Handoff Notes
Will provide a separate guide covering:

Recommended theme (Astra/Kadence/GeneratePress)
Plugin recommendations for animations
Section-by-section recreation instructions
CSS snippets to paste into customizer