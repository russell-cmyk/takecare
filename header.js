class SiteHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header class="control-bar">
            <div class="container header-content">
                <a href="index.html" class="logo-area">
                    <span>Take Care Property Maintenance</span>
                </a>
                
                <nav class="main-nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Advice</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>

                <div class="header-cta">
                    <a href="tel:0273361513" class="btn-primary">Call 027 336 1513</a>
                </div>
                <div class="mobile-toggle">☰</div>
            </div>
        </header>
        `;
    }
}

// Register the custom element
customElements.define('site-header', SiteHeader);
