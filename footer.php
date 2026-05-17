</main>
    <style>
        .site-footer {
            background-color: var(--text-dark);
            color: var(--white);
            padding: 60px 0 20px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }
        .footer-col h4 {
            color: var(--white);
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        .footer-col h4::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary);
        }
        .footer-col p, .footer-col li {
            color: #bdc3c7;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }
        .footer-col a:hover {
            color: var(--primary);
        }
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }
        .social-icons a:hover {
            background-color: var(--primary);
        }
        .social-icons svg {
            width: 20px;
            height: 20px;
            fill: var(--white);
        }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            text-align: center;
            font-size: 0.85rem;
            color: #95a5a6;
        }

        @media (max-width: 768px) {
            .footer-grid { grid-template-columns: 1fr; }
        }
    </style>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Take Care Property Maintenance</h4>
                    <p>Proudly servicing Rakaia and the Ashburton District. Reliable workmanship, clear communication, and getting jobs done properly for local homeowners.</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61574331402169" target="_blank" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><strong>Joel Preece</strong></li>
                        <li>Phone: <a href="tel:0273361513">027 336 1513</a></li>
                        <li>Email: <a href="mailto:jkpreeceltd@outlook.com">jkpreeceltd@outlook.com</a></li>
                        <li>Location: Rakaia, Ashburton District</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> Take Care Property Maintenance. All Rights Reserved. NZBN: 9429053202987</p>
                <p><small>Website built by Creative Startup NZ</small></p>
            </div>
        </div>
    </footer>
</div> </body>
</html>
