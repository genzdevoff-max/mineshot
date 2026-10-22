<?php
// Dynamic SEO Configuration
$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($requestUri, 'projects') !== false || $currentPage === 'projects.php') {
    $isProjectsPage = true;
} else {
    $isProjectsPage = false;
}

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? "https://" : "https://";
$host = $_SERVER['HTTP_HOST'] ?? 'mineshot.in';
$baseUrl = $protocol . $host;

if ($isProjectsPage) {
    $seoTitle = "Projects & Portfolio | Mineshot Production Hub | Commercial Photography Chennai";
    $seoDescription = "View commercial photography, automotive shoots, fashion, product showcases, and ad film portfolio by Simbhu Sandy at Mineshot Production Hub, Chennai.";
    $seoKeywords = "Mineshot Projects, Mineshot Portfolio, Simbhu Sandy photographer, Commercial photography portfolio Chennai, Automotive photographer in Chennai, Product photoshoot studio in Chennai, Fashion photographer in Chennai, Mineshot Production Hub";
    $canonicalUrl = $baseUrl . "/projects.php";
} else {
    $seoTitle = "Mineshot Production Hub | Best Photographer in Chennai | Simbhu Sandy";
    $seoDescription = "Mineshot Production Hub by Simbhu Sandy - Premier commercial photography & media production house in Chennai. Specializing in automotive, product, fashion, food photography, and commercial ad films.";
    $seoKeywords = "Mineshot Production Hub, Mineshot Chennai, Mineshot Productions, Simbhu Sandy, Simbhu Sandy photographer, Simbhu Sandy Mineshot, Mineshot Studio Chennai, Best photographer in Chennai, Top commercial photographer in Chennai, Advertising photographer in Chennai, Production house in Chennai, Media production company in Chennai, Creative production studio Chennai, Automotive photographer in Chennai, Product photoshoot studio in Chennai, Fashion photographer in Chennai, Food photography studio in Chennai, Commercial ad film makers Chennai, Corporate video production Chennai";
    $canonicalUrl = $baseUrl . "/";
}
$ogImage = $baseUrl . "/assets/img/mineshot/About.jpeg";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Character Set & Viewport -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <!-- Primary Meta & SEO Tags -->
    <title><?= htmlspecialchars($seoTitle) ?></title>
    <meta name="title" content="<?= htmlspecialchars($seoTitle) ?>">
    <meta name="description" content="<?= htmlspecialchars($seoDescription) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($seoKeywords) ?>">
    <meta name="author" content="Simbhu Sandy - Mineshot Production Hub">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Mobile & Speed Optimization -->
    <meta name="theme-color" content="#0d0d0d">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Mineshot">
    <meta name="format-detection" content="telephone=no">

    <!-- Preconnect & DNS-Prefetch for Speed Optimization -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">

    <!-- Open Graph / Facebook / WhatsApp (Optimized 1200x630 Instant Preview) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta property="og:site_name" content="Mineshot Production Hub">
    <meta property="og:title" content="<?= htmlspecialchars($seoTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($seoDescription) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
    <meta property="og:image:secure_url" content="<?= htmlspecialchars($ogImage) ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Mineshot Production Hub - Commercial Photography & Media House Chennai">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta name="twitter:site" content="@Mineshothub">
    <meta name="twitter:creator" content="@Mineshothub">
    <meta name="twitter:title" content="<?= htmlspecialchars($seoTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($seoDescription) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">

    <!-- Enhanced Schema.org JSON-LD (LocalBusiness, ProfessionalService & Founder) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": ["LocalBusiness", "ProfessionalService"],
          "@id": "<?= htmlspecialchars($baseUrl) ?>/#business",
          "name": "Mineshot Production Hub",
          "alternateName": "Mineshot Chennai",
          "url": "<?= htmlspecialchars($baseUrl) ?>/",
          "logo": "<?= htmlspecialchars($baseUrl) ?>/assets/img/mineshot/mineshot-logo.png",
          "image": "<?= htmlspecialchars($ogImage) ?>",
          "description": "Premier commercial photography and media production house in Chennai founded by Simbhu Sandy. Specializing in automotive, product, fashion, food photography, and commercial ad films.",
          "telephone": "+919962222257",
          "email": "simbhu@mineshot.in",
          "priceRange": "$$$",
          "currenciesAccepted": "INR",
          "paymentAccepted": "Cash, Credit Card, UPI, Bank Transfer",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Chennai",
            "addressRegion": "Tamil Nadu",
            "addressCountry": "IN"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 13.0827,
            "longitude": 80.2707
          },
          "areaServed": [
            {
              "@type": "City",
              "name": "Chennai"
            },
            {
              "@type": "State",
              "name": "Tamil Nadu"
            },
            {
              "@type": "Country",
              "name": "India"
            }
          ],
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
              ],
              "opens": "09:00",
              "closes": "20:00"
            }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Commercial Photography & Production Services",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Automotive Commercial Photography",
                  "description": "High-impact cinematic automotive shoots and commercial photography."
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Product Photoshoot & E-commerce Photography",
                  "description": "Clean, conversion-oriented product photography studio services."
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Fashion & Lifestyle Photography",
                  "description": "Editorial fashion campaigns and model photoshoots."
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Food & Beverage Photography",
                  "description": "Appetizing culinary and FMCG commercial food photography."
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Commercial Ad Films & Video Production",
                  "description": "End-to-end commercial ad filmmaking, corporate videos, and post-production."
                }
              }
            ]
          },
          "founder": {
            "@type": "Person",
            "name": "Simbhu Sandy",
            "jobTitle": "Founder & Lead Commercial Photographer",
            "knowsAbout": [
              "Commercial Photography",
              "Automotive Photography",
              "Lighting & Camera Logistics",
              "Ad Film Direction"
            ],
            "sameAs": [
              "https://www.linkedin.com/in/mineshotproductionhub-simbhusandy",
              "https://www.instagram.com/mineshotproductionhub"
            ]
          },
          "sameAs": [
            "https://www.instagram.com/mineshotproductionhub",
            "https://www.facebook.com/share/1DzjLjphcx/",
            "https://youtube.com/@mineshotproductionhub",
            "https://x.com/Mineshothub",
            "https://pin.it/mRxtnsqg9"
          ]
        }
      ]
    }
    </script>

    <!-- Favicon and touch Icons -->
    <link href="assets/img/mineshot/mineshot-icon.png" rel="shortcut icon" type="image/png">
    <link href="assets/img/mineshot/mineshot-icon.png" rel="apple-touch-icon">
    <link href="assets/img/mineshot/mineshot-icon.png" rel="apple-touch-icon" sizes="72x72">
    <link href="assets/img/mineshot/mineshot-icon.png" rel="apple-touch-icon" sizes="114x114">
    <link href="assets/img/mineshot/mineshot-icon.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Styles Include -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>


<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <img src="assets/img/mineshot/mineshot-logo.png" alt="img">
            </div>

        </div>
    </div>

    <!-- pointer start -->
    <div class="pointer bnz-pointer" id="bnz-pointer"></div>



    <!-- Main Header -->
    <header class="header color-fixed">
        <!-- Lower Bar -->
        <div class="header-inner">
            <div class="container-fluid pe-0">
                <div class="d-flex align-items-center justify-content-between">
                    <!-- Left Part -->
                    <div class="header_left_part d-flex align-items-center">
                        <div class="logo">
                            <a href="index.php" class="light_logo"><img src="assets/img/mineshot/mineshot-logo.png"
                                    alt="logo"></a>
                            <a href="index.php" class="dark_logo"><img src="assets/img/mineshot/mineshot-logo.png"
                                    alt="logo"></a>
                        </div>
                    </div>

                    <!-- Center Part -->
                    <div class="header_center_part d-none d-xl-block">
                        <div class="mainnav">
                            <ul class="main-menu">
                                <li class="menu-item"><a href="index.php">Home</a></li>
                                <li class="menu-item"><a href="#expertise">Expertise</a></li>
                                <li class="menu-item"><a href="#projects">Project</a></li>
                                <li class="menu-item"><a href="#services">Service</a></li>
                                <li class="menu-item"><a href="#about">About</a></li>
                                <li class="menu-item"><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Part -->
                    <div class="header_right_part d-flex align-items-center">
                        <div class="aside_open wptb-element">
                            <div class="aside-open--inner">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <button type="button" class="mr_menu_toggle wptb-element d-xl-none">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Main Header -->

    <!-- Mobile Responsive Menu -->
    <div class="mr_menu" data-lenis-prevent>
        <button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
        <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->

        <h6>Menu</h6>
        <div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->

        <h5 class="fw-bold mt-4 mb-3" style="color: #d3bc7e; letter-spacing: 1px;">About Me</h5>
        <div class="about-sidebar-img mb-3" style="border-radius: 12px; overflow: hidden; border: 1px solid rgba(211, 188, 126, 0.25);">
            <img src="assets/img/mineshot/About.jpeg" alt="Simbhu Sandy" style="width: 100%; height: auto; display: block; object-fit: cover;">
        </div>

        <p style="font-size: 13.5px; line-height: 1.75; color: #b3b3b3; margin-bottom: 24px; text-align: justify;">
            Simbhu Sandy is a visionary commercial photographer, entrepreneur, and the driving force behind Mineshot Production Hub. Specializing in high-impact Automotive, all consumer Products. Fashions and Food and so on. He possesses a rare ability to transform everyday subjects into striking. cinematic visual assets that command consumer attention above all. Simbhu Sandy is an incredibly passionate person when it comes to the art of the visual frame and It is this relentless creative energy that motivated him to establish his own full-service advertisement production house Today, through Mineshot Production Hub, he bridges the gap between commercial photography and premium production logistics, delivering comprehensive end-to-end media campaigns that help brands scale and stand out in competitive markets
        </p>

        <h6>Find Our Page</h6>
        <div class="social-box">
            <ul>
                <li><a href="https://share.google/KLaLu4tIDUu55LW3Y" target="_blank"><i class="bi bi-google"></i></a></li>
                <li><a href="https://wa.me/919962222257" target="_blank"><i class="bi bi-whatsapp"></i></a></li>
                <li><a href="https://www.linkedin.com/in/mineshotproductionhub-simbhusandy?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/mineshotproductionhub?utm_source=qr&stkn=MXRqMXVzNnQ5Z2c1OA==" target="_blank"><i class="bi bi-instagram"></i></a></li>
                <li><a href="https://www.threads.com/@mineshotproductionhub?invite=0" target="_blank"><i class="bi bi-threads"></i></a></li>
                <li><a href="https://www.facebook.com/share/1DzjLjphcx/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                <li><a href="https://youtube.com/@mineshotproductionhub?si=cGt7S2lUEPhVrR2d" target="_blank"><i class="bi bi-youtube"></i></a></li>
                <li><a href="https://pin.it/mRxtnsqg9" target="_blank"><i class="bi bi-pinterest"></i></a></li>
                <li><a href="https://x.com/Mineshothub" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="aside_info_wrapper" data-lenis-prevent>
        <button class="aside_close">Close <i class="bi bi-x-lg"></i></button>

        <div class="aside_info_inner pt-3">

            <h5 class="fw-bold mb-3" style="color: #d3bc7e; letter-spacing: 1px;">About Me</h5>

            <div class="about-sidebar-img mb-3" style="border-radius: 12px; overflow: hidden; border: 1px solid rgba(211, 188, 126, 0.25);">
                <img src="assets/img/mineshot/About.jpeg" alt="Simbhu Sandy" style="width: 100%; height: auto; display: block; object-fit: cover;">
            </div>

            <p style="font-size: 13.5px; line-height: 1.75; color: #b3b3b3; margin-bottom: 24px; text-align: justify;">
                Simbhu Sandy is a visionary commercial photographer, entrepreneur, and the driving force behind Mineshot Production Hub. Specializing in high-impact Automotive, all consumer Products. Fashions and Food and so on. He possesses a rare ability to transform everyday subjects into striking. cinematic visual assets that command consumer attention above all. Simbhu Sandy is an incredibly passionate person when it comes to the art of the visual frame and It is this relentless creative energy that motivated him to establish his own full-service advertisement production house Today, through Mineshot Production Hub, he bridges the gap between commercial photography and premium production logistics, delivering comprehensive end-to-end media campaigns that help brands scale and stand out in competitive markets
            </p>

            <div class="aside_logo logo text-center mb-4">
                <a href="index.php"><img src="assets/img/mineshot/mineshot-logo.png" alt="Mineshot Production Hub - Your Imagination" style="max-height: 84px; width: auto; max-width: 300px;"></a>
            </div>

            <h6 class="mb-3 text-center" style="font-size: 13px; color: #d3bc7e; letter-spacing: 1px; text-transform: uppercase;">// Follow Us</h6>
            <div class="social-box style-square text-center">
                <ul>
                    <li><a href="https://share.google/KLaLu4tIDUu55LW3Y" target="_blank"><i class="bi bi-google"></i></a></li>
                    <li><a href="https://wa.me/919962222257" target="_blank"><i class="bi bi-whatsapp"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/mineshotproductionhub-simbhusandy?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/mineshotproductionhub?utm_source=qr&stkn=MXRqMXVzNnQ5Z2c1OA==" target="_blank"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://www.threads.com/@mineshotproductionhub?invite=0" target="_blank"><i class="bi bi-threads"></i></a></li>
                    <li><a href="https://www.facebook.com/share/1DzjLjphcx/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://youtube.com/@mineshotproductionhub?si=cGt7S2lUEPhVrR2d" target="_blank"><i class="bi bi-youtube"></i></a></li>
                    <li><a href="https://pin.it/mRxtnsqg9" target="_blank"><i class="bi bi-pinterest"></i></a></li>
                    <li><a href="https://x.com/Mineshothub" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                </ul>
            </div>
        </div>
    </div>