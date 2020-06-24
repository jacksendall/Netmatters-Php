<!DOCTYPE html>
<?php 

require_once 'dbh.inc.php'; 
require_once 'posts.php';

?>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Jack Sendall's CSS & HTML Reflection">
    <meta name="keywords" content="HTML,CSS,Reflection,Netmatters">
    <meta name="author" content="Jack Sendall">
    <title>(local) Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="js/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="js/mmenu/mmenu.css" />
    <script src="https://kit.fontawesome.com/399b336c17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body class="">
    <div class="cookie-container">
        <p>We use cookies in this website to give you the best experience on our site and show you relevant ads.<br> To find out more, read our <a href="">privacy policy</a> and <a href="">cookie policy</a>.</p>
        <button class="btn btn-primary-nm" id="acceptcookies">Accept</button>
    </div>
    <!-- <div id="container"> -->
    <div id="sidebar">
        <div class="max991" id="mobile-sidebar">
            <ul>
                <li class="contact-us">
                    <a href="">Contact Us</a>
                </li>
                <li role="web" class="mobile-section">
                    <a href="https://www.netmatters.co.uk/web-design" role="tile">
                        <i class="fas fa-code"></i>
                        <small>Web</small> Design
                    </a>
                    <ul role="menu">
                        <li><a href="https://www.netmatters.co.uk/web-design/website-design">Stylish Webistes</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/ecommerce-development">Ecommerce Stores</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/branding">Branding</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/mobile-apps-development">Mobile Apps</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/web-hosting">Web Hosting</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/pay-monthly-websites">Pay Monthly Websites</a></li>
                    </ul>
                </li>
                <li role="support" class="mobile-section">
                    <a href="https://www.netmatters.co.uk/it-support" role="tile">
                        <i class="fas fa-desktop"></i>
                        <small>IT</small> Support
                    </a>
                    <ul role="menu">
                        <li><a href="https://www.netmatters.co.uk/web-design/website-design">Stylish Webistes</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/ecommerce-development">Ecommerce Stores</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/branding">Branding</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/mobile-apps-development">Mobile Apps</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/web-hosting">Web Hosting</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/pay-monthly-websites">Pay Monthly Websites</a></li>
                    </ul>
                </li>
                <li role="telecoms" class="mobile-section">
                    <a href="https://www.netmatters.co.uk/telecoms-services" role="tile">
                        <i class="fas fa-phone-alt"></i>
                        <small>Telecoms</small> Services
                    </a>
                    <ul role="menu">
                        <li><a href="https://www.netmatters.co.uk/web-design/website-design">Stylish Webistes</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/ecommerce-development">Ecommerce Stores</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/branding">Branding</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/mobile-apps-development">Mobile Apps</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/web-hosting">Web Hosting</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/pay-monthly-websites">Pay Monthly Websites</a></li>
                    </ul>
                </li>
                <li role="software" class="mobile-section">
                    <a href="https://www.netmatters.co.uk/bespoke-software" role="tile">
                        <i class="fas fa-th"></i>
                        <small>Bespoke</small> Software
                    </a>

                    <ul role="menu">
                        <li><a href="https://www.netmatters.co.uk/web-design/website-design">Stylish Webistes</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/ecommerce-development">Ecommerce Stores</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/branding">Branding</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/mobile-apps-development">Mobile Apps</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/web-hosting">Web Hosting</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/pay-monthly-websites">Pay Monthly Websites</a></li>
                    </ul>
                </li>
                <li role="marketing" class="mobile-section">
                    <a href="https://www.netmatters.co.uk/digital-marketing" role="tile">
                        <i class="fas fa-poll"></i>
                        <small>Digital</small> Marketing
                    </a>
                    <ul role="menu">
                        <li><a href="https://www.netmatters.co.uk/web-design/website-design">Stylish Webistes</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/ecommerce-development">Ecommerce Stores</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/branding">Branding</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/mobile-apps-development">Mobile Apps</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/web-hosting">Web Hosting</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/pay-monthly-websites">Pay Monthly Websites</a></li>
                    </ul>
                </li>
                <li role="security" class="mobile-section">
                    <a href="https://www.netmatters.co.uk/cyber-security" role="tile">
                        <i class="fas fa-shield-alt"></i>
                        <small>Cyber</small> Security
                    </a>
                    <ul role="menu">
                        <li><a href="https://www.netmatters.co.uk/web-design/website-design">Stylish Webistes</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/ecommerce-development">Ecommerce Stores</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/branding">Branding</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/mobile-apps-development">Mobile Apps</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/web-hosting">Web Hosting</a></li>
                        <li><a href="https://www.netmatters.co.uk/web-design/pay-monthly-websites">Pay Monthly Websites</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <ul>
            <li class="sb-title">
                <a id="sb-hdr" href="https://www.netmatters.co.uk/scs-web-developer-course">
                        Training
                </a>

                <ul class="" role="menu">
                    <li>
                        <a href="https://www.netmatters.co.uk/scs-web-developer-course">
                            Web Developer Course
                        </a>


                    </li>
                </ul>

            </li>


            <li class="sb-title">
                <a id="sb-hdr" href="https://www.netmatters.co.uk/our-culture">
                        Our Company
                    </a>

                <ul class="" role="menu">
                    <li>
                        <a href="https://www.netmatters.co.uk/our-culture">
                            Our Culture
                        </a>


                    </li>
                    <li>
                        <a href="https://www.netmatters.co.uk/office-tour">
                            Our Office Tour
                        </a>


                    </li>
                    <li>
                        <a href="https://www.netmatters.co.uk/team">
                            Our Team
                        </a>


                    </li>
                    <li>
                        <a href="https://www.netmatters.co.uk/our-careers">
                            Our Careers
                        </a>


                    </li>
                    <li>
                        <a href="https://www.netmatters.co.uk/our-benefits">
                            Our Benefits
                        </a>


                    </li>
                    <li>
                        <a href="https://www.netmatters.co.uk/it-support-in-great-yarmouth">
                            Our Great Yarmouth Office
                        </a>


                    </li>
                </ul>

            </li>


            <li class="sb-title">
                <a id="sb-hdr" href="https://www.netmatters.co.uk/case-studies">
                        Our Work
                    </a>

                <ul class="" role="menu">
                    <li>
                        <a href="https://www.netmatters.co.uk/case-studies">
                            Case Studies
                        </a>


                    </li>
                    <li>
                        <a href="https://www.netmatters.co.uk/portfolio">
                            Portfolio
                        </a>


                    </li>
                </ul>

            </li>


            <li class="sb-title">
                <a id="sb-hdr" href="https://www.netmatters.co.uk/guides">
                        Our Knowledge
                    </a>

                <ul class="" role="menu">
                    <li>
                        <a href="https://www.netmatters.co.uk/guides">
                            Guides
                        </a>


                    </li>
                    <li>
                        <a href="https://www.netmatters.co.uk/articles">
                            News
                        </a>


                    </li>
                    <li>
                        <a href="https://www.netmatters.co.uk/insights">
                            Insights
                        </a>


                    </li>
                </ul>

            </li>


        </ul>
    </div>
    <div class="content-wrapper">
        <div id="page-cover" onclick="toggleSidebar()"></div>
        <header class="navtop">
            <div class="inner">
                <div class="container">
                    <div class="row" id="headrow">
                        <div class="col-s-6 col-m-6 col-lg-5 col-xl-4" id="logo-column">
                            <div class="logo-container">
                                <a class="logo" href="index.php"><img src="img/f-logo.png" alt="Netmatters logo"></a>
                            </div>
                        </div>
                        <div class="col-s-3 col-m-6 col-lg-7 col-xl-8">
                            <div class="actions">
                                <a href="https://support.netmatters.com/" target="_blank" class="btn btn-primary-nm" id="support-nm"><i class="fas fa-mouse"></i> Support</a>
                                <a href="/contact.php" class="btn btn-secondary-nm" id="contact-nm"><i class="far fa-paper-plane"></i>Contact</a>
                                <div class="search-form" id="top-form">
                                    <form class="search-bar-form form-inline" method="GET" action="http://www.netmatters.co.uk/search/" accept-charset="utf-8">
                                        <input class="search-bar form-control" placeholder="Search..." id="search-input" name="keyword" type="text">
                                        <button class="btn btn-secondary-nm" type="submit" id="search-submit">
                                            <span><i class="fas fa-search"></i></span>
                                        </button>
                                    </form>
                                    <button class="btn btn-secondary-nm" type="submit" id="search-submit-solo">
                                        <span><i class="fas fa-search"></i></span>
                                    </button>
                                </div>
                                <div class="mobile-container">
                                    <a class="mobile" href="tel:01603704020">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>
                                <button type="button" class="btn-menu-nm btn btn-secondary-nm" onclick="toggleSidebar()">
                                    <i class="fas fa-bars"></i><br>
                                    <span class="menu-txt">Menu</span>
                                    </button>
                            </div>
                        </div>

                    </div>
                    <div class="search-form-mobile-wrapper">
                        <form method="GET" class="search-input-form-mobile" action="/search" accept-charset="utf-8">
                            <input class="search-form-mobile form-control search-bar" placeholder="Search..." id="search-input-mobile" name="keyword" type="text">
                            <button type="submit" id="search-submit-mobile">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="navmenu">
            <div class="container">
                <ul class="hover-nav row">
                    <li class="design col">

                        <a href="/web-design">
                            <i class="fas fa-code"></i>
                            <small>Web</small> Design
                        </a>
                        <ul class="hover-menu" id="design-menu">
                            <li>
                                <a href="">Stylish Webistes</a>
                            </li>
                            <li>
                                <a href="">Ecommerce Stores</a>
                            </li>
                            <li>
                                <a href="">Branding</a>
                            </li>
                            <li>
                                <a href="">Mobile Apps</a>
                            </li>
                            <li>
                                <a href="">Web Hosting</a>
                            </li>
                            <li>
                                <a href="">Pay Monthly Websites</a>
                            </li>
                        </ul>

                    </li>
                    <li class="support col">

                        <a href="/it-support">
                            <i class="fas fa-desktop"></i>
                            <small>IT</small> Support
                        </a>
                        <ul class="hover-menu" id="support-menu" style="font-size: 13px">
                            <li>
                                <a href="">Managed IT Support</a>
                            </li>
                            <li>
                                <a href="">Business IT Support</a>
                            </li>
                            <li>
                                <a href="">Office 365</a>
                            </li>
                            <li>
                                <a href="">Consultancy</a>
                            </li>
                            <li>
                                <a href="">Cloud Provider</a>
                            </li>
                            <li>
                                <a href="">Data Backup</a>
                            </li>
                        </ul>
                    </li>
                    <li class="telecoms col">

                        <a href="/telecoms-services">
                            <i class="fas fa-phone-alt"></i>
                            <small>Telecoms</small> Services
                        </a>
                        <ul class="hover-menu" id="telecoms-menu" style="font-size: 13px">
                            <li>
                                <a href="">Gigabit Voucher</a>
                            </li>
                            <li>
                                <a href="">Hosted VOIP</a>
                            </li>
                            <li>
                                <a href="">Business VOIP</a>
                            </li>
                            <li>
                                <a href="">Business Broadband</a>
                            </li>
                            <li>
                                <a href="">Leased Line</a>
                            </li>
                            <li>
                                <a href="">3CX Systems</a>
                            </li>
                        </ul>
                    </li>
                    <li class="software col">
                        <a href="/bespoke-software">
                            <i class="fas fa-th"></i>
                            <small>Bespoke</small> Software
                        </a>
                        <ul class="hover-menu" id="software-menu" style="font-size: 13px">
                            <li>
                                <a href="">Workflow Solutions</a>
                            </li>
                            <li>
                                <a href="">Automation</a>
                            </li>
                            <li>
                                <a href="">System Integration</a>
                            </li>
                            <li>
                                <a href="">Database Management</a>
                            </li>
                            <li>
                                <a href="">Sharepoint</a>
                            </li>
                            <li>
                                <a href="">ERP</a>
                            </li>
                        </ul>
                    </li>
                    <li class="marketing col">
                        <a href="/digital-marketing">
                            <i class="fas fa-poll"></i>
                            <small>Digital</small> Marketing
                        </a>
                        <ul class="hover-menu" id="marketing-menu" style="font-size: 13px">
                            <li>
                                <a href="">SEO</a>
                            </li>
                            <li>
                                <a href="">PPC</a>
                            </li>
                            <li>
                                <a href="">CRO</a>
                            </li>
                            <li>
                                <a href="">Email</a>
                            </li>
                            <li>
                                <a href="">Social</a>
                            </li>
                            <li>
                                <a href="">Content</a>
                            </li>
                        </ul>
                    </li>
                    <li class="security col">
                        <a href="/cyber-security">
                            <i class="fas fa-shield-alt"></i>
                            <small>Cyber</small> Security
                        </a>
                        <ul class="hover-menu" id="security-menu" style="font-size: 13px">
                            <li>
                                <a href="">Assessment</a>
                            </li>
                            <li>
                                <a href="">Management</a>
                            </li>
                            <li>
                                <a href="">Penetration Testing</a>
                            </li>
                            <li>
                                <a href="">Cyber Essentials</a>
                            </li>
                            <li>
                                <a href="">PCI/DSS</a>
                            </li>
                            <li>
                                <a href="">Hacker Prevention</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        
