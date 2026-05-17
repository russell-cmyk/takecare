<?php include 'header.php'; ?>

<style>
    /* Homepage Specific Styles */
    .hero-section {
        background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('images/hero-house.jpg') center/cover no-radius;
        color: var(--white);
        padding: 120px 20px;
        text-align: center;
    }
    .hero-section h1 {
        color: var(--white);
        font-size: 3rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .hero-section p {
        font-size: 1.25rem;
        max-width: 800px;
        margin: 0 auto 30px;
    }

    /* Intro Section */
    .intro-text h2 {
        font-size: 2.2rem;
        color: var(--primary);
    }
    .intro-text p {
        font-size: 1.1rem;
        margin-bottom: 20px;
    }

    /* Service Cards Grid (Matching Inspiration) */
    .service-card {
        background: var(--white);
        border: 1px solid var(--border-color);
        border-radius: 6px;
        padding: 30px;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        text-align: center;
    }
    .service-card:hover {
        box-shadow: 0 10px 20px rgba(0,0,0,0.08);
        transform: translateY(-5px);
        border-color: var(--primary);
    }
    .service-card h3 {
        color: var(--primary);
        font-size: 1.4rem;
        margin-bottom: 15px;
    }
    .service-card p {
        font-size: 0.95rem;
        margin-bottom: 20px;
    }
    .service-card .btn-outline {
        display: inline-block;
        padding: 8px 20px;
        border: 2px solid var(--primary);
        color: var(--primary);
        border-radius: 4px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }
    .service-card:hover .btn-outline {
        background-color: var(--primary);
        color: var(--white);
    }

    /* CTA Banner */
    .cta-banner {
        background-color: var(--text-dark);
        color: var(--white);
        text-align: center;
    }
    .cta-banner h2 {
        color: var(--white);
    }
</style>

<section class="hero-section">
    <div class="container">
        <h1>Keep Your Property Looking Pristine</h1>
        <p>Reliable, family-owned property maintenance servicing Rakaia and the Ashburton District. We believe in clear communication and getting jobs done properly.</p>
        <a href="contact.php" class="btn-primary">Get Your Free Quote Today</a>
    </div>
</section>

<section id="about" class="section section-alt">
    <div class="container grid-2 align-center">
        <div class="intro-image">
            <img src="images/joel-work.jpg" alt="Joel Preece working on a property" style="border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        </div>
        <div class="intro-text">
            <h2>Local Workmanship You Can Trust.</h2>
            <p>Take Care Property Maintenance is a local, family-owned business based in Rakaia, proudly servicing the Ashburton District.</p>
            <p>We understand the importance of maintaining your home's value and safety. Led by Joel Preece, we emphasize reliable workmanship, straightforward communication, and a commitment to doing every job right the first time.</p>
            <p>From clearing gutters to building new driveways, if it needs fixing outside, we take care of it.</p>
        </div>
    </div>
</section>

<section id="services" class="section">
    <div class="container">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2>Comprehensive Property Maintenance</h2>
            <p>Everything your property needs to stay safe, secure, and looking its best.</p>
        </div>

        <div class="grid-3">
            <div class="service-card">
                <h3>Exterior Cleaning</h3>
                <p>Comprehensive exterior washing for homes and buildings to remove dirt and buildup. Specialized Lichen & Moss Kill treatments for invasive growths (best in Autumn/Spring).</p>
                <a href="contact.php?service=cleaning" class="btn-outline">Learn More</a>
            </div>

            <div class="service-card">
                <h3>Roofing & Drainage</h3>
                <p>Protect your home from water damage. Full servicing of roofing and gutter systems to fix leaks and clear blockages. Expert property drainage repair and maintenance.</p>
                <a href="contact.php?service=roofing" class="btn-outline">Learn More</a>
            </div>

            <div class="service-card">
                <h3>Hardscaping & Driveways</h3>
                <p>Expertise in building and maintaining driveways in concrete, asphalt, or pavers. We also construct, repair, and upkeep outdoor living spaces, decks, and boundary fencing.</p>
                <a href="contact.php?service=hardscaping" class="btn-outline">Learn More</a>
            </div>

            <div class="service-card">
                <h3>Landscaping & Grounds</h3>
                <p>Keep your section tidy and safe. We provide professional tree trimming, safe removal of unwanted trees, and general comprehensive garden cleanups.</p>
                <a href="contact.php?service=landscaping" class="btn-outline">Learn More</a>
            </div>

            <div class="service-card">
                <h3>General Maintenance</h3>
                <p>"Everything Property Maintenance." A comprehensive service for general upkeep and minor fixes around your residential or lifestyle property.</p>
                <a href="contact.php?service=general" class="btn-outline">Learn More</a>
            </div>

            <div class="service-card">
                <h3>Contractor Networking</h3>
                <p>Honest and transparent service. If we encounter a highly specialized job we cannot do ourselves, we will organize or recommend a trusted local professional who can.</p>
                <a href="contact.php?service=network" class="btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="section cta-banner">
    <div class="container">
        <h2>Ready to tick those maintenance jobs off your list?</h2>
        <p style="margin-bottom: 30px; font-size: 1.1rem;">Contact Joel today for a reliable quote and friendly local service.</p>
        <a href="contact.php" class="btn-primary" style="background-color: var(--primary); color: var(--white); font-size: 1.1rem; padding: 15px 30px;">Request a Quote</a>
    </div>
</section>

<?php include 'footer.php'; ?>
