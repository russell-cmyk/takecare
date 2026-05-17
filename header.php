<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Care Property Maintenance | Rakaia & Ashburton</title>
    <meta name="description" content="Local, family-owned property maintenance in Rakaia and the Ashburton District. Reliable exterior cleaning, roofing, hardscaping, and landscaping for residential homeowners.">
    <link rel="icon" type="image/png" href="images/favicon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:wght@700&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Core Brand Colors based on modern/clean aesthetic */
            --primary: #1abc9c; /* Teal/Cyan accent */
            --primary-hover: #16a085;
            --text-dark: #2c3e50; /* Slate dark text */
            --text-light: #7f8c8d; /* Gray body text */
            --bg-light: #f8f9fa; /* Off-white for alternate sections */
            --white: #ffffff;
            --border-color: #e0e6ed;
            
            /* Typography */
            --font-headers: 'Roboto', sans-serif;
            --font-body: 'Open Sans', sans-serif;
            
            /* Spacing & Layout */
            --max-width: 1280px;
            --section-pad: 80px 20px;
        }

        /* Reset & Basics */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: var(--font-body);
            color: var(--text-light);
            background-color: var(--white);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }
        h1, h2, h3, h4 {
            font-family: var(--font-headers);
            color: var(--text-dark);
            line-height: 1.2;
            margin-bottom: 1rem;
        }
        a { text-decoration: none; color: inherit; transition: color 0.3s ease; }
        ul { list-style: none; }
        img { max-width: 100%; height: auto; display: block; }

        /* Modular Layout System */
        .mainframe {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main { flex-grow: 1; }
        .container {
            width: 100%;
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }
        .section { padding: var(--section-pad); }
        .section-alt { background-color: var(--bg-light); }

        /* Buttons */
        .btn-primary {
            display: inline-block;
            background-color: var(--primary);
            color: var(--white);
            padding: 12px 24px;
            font-weight: 600;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            text-align: center;
        }
        .btn-primary:hover {
            background-color: var(--primary-hover);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Header & Control Bar */
        .control-bar {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 15px 0;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo-area {
            font-family: var(--font-headers);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .logo-area img { max-height: 50px; } /* Assuming a logo image exists */
        
        .main-nav ul {
            display: flex;
            gap: 30px;
        }
        .main-nav a {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-dark);
            text-transform: uppercase;
        }
        .main-nav a:hover, .main-nav a.active {
            color: var(--primary);
        }

        /* Mobile Menu Toggle (Hidden on Desktop) */
        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-dark);
        }

        /* Modular Grid Systems */
        .grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px; }
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }

        /* Responsive Design */
        @media (max-width: 992px) {
            .main-nav { display: none; /* Add JS toggle for real site */ }
            .header-cta { display: none; }
            .mobile-toggle { display: block; }
            .grid-3, .grid-4 { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 768px) {
            .grid-2, .grid-3, .grid-4 { grid-template-columns: 1fr; }
            .section { padding: 50px 20px; }
        }
    </style>

    </head>
<body>
<div class="mainframe">
    <header class="control-bar">
        <div class="container header-content">
            <a href="index.php" class="logo-area">
                <span>Take Care Property Maintenance</span>
            </a>
            
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="header-cta">
                <a href="tel:0273361513" class="btn-primary">Call 027 336 1513</a>
            </div>

            <div class="mobile-toggle">
                ☰
            </div>
        </div>
    </header>
    <main>
