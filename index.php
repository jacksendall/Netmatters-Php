<?php
    require 'header.php';


    $posts = selectAll('posts');

?>



<!-- Big sliding image element -->
<div id="slider">
            <div class="slides">
                <div class="slide">
                    <div class="banner banner-webdesign">
                        <div class="big-img-container">
                        </div>
                        <div class="content-container container">
                            <div class="container">
                                <h1>Web Design</h1>
                                <p>For businesses looking to make a strong<br> and effective first impression.</p>
                                <a class="btn more" id="design">Find out more
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="banner banner-it">
                        <div class="big-img-container">
                        </div>
                        <div class="content-container container">
                            <div class="container">
                                <h1>IT Support</h1>
                                <p>Fast and cost-effective IT support<br>services for your business</p>
                                <a class="btn more" id="it">Find out more
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="banner banner-telecoms">
                        <div class="big-img-container">
                        </div>
                        <div class="content-container container">
                            <div class="container">
                                <h1>Telecoms Services</h1>
                                <p>A new approach to connectivity, see how<br>we can help your business</p>
                                <a class="btn more" id="telecoms">Find out more
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="banner banner-software">
                        <div class="big-img-container">
                        </div>
                        <div class="content-container container">
                            <div class="container">
                                <h1>Bespoke Software</h1>
                                <p>Bring your business together<br>with solutions that grow you.</p>
                                <a class="btn more" id="software">Find out more
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="banner banner-marketing">
                        <div class="big-img-container">
                        </div>
                        <div class="content-container container">
                            <div class="container">
                                <h1>Digital Marketing</h1>
                                <p>Generating new business through<br>results-driven marketing activities.</p>
                                <a class="btn more" id="marketing">Find out more
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="banner banner-security">
                        <div class="big-img-container">
                        </div>
                        <div class="content-container container">
                            <div class="container">
                                <h1>Cyber Security</h1>
                                <p>Keeping businesses and their customers<br>sensitive information protected.</p>
                                <a class="btn more" id="security">Find out more
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Services grid section -->
<div id="middle">
    <div class="hover-grid">
        <div class="container section">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <a href="http://www.netmatters.co.uk/bespoke-software" class="block software">
                        <span class="icon"><i class="fas fa-th"></i></span>
                        <span class="h2">
                            Bespoke Software
                        </span>
                        <span class="p">
                            Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.
                            <br class="min1261">&nbsp;
                        </span>
                        <span class="btn-container">
                            <span class="btn btn-software">Read More</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12">
                    <a href="http://www.netmatters.co.uk/it-support" class="block support">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="h2">IT Support</span>
                        <span class="p">
                            Remotely managed IT services that is catered to your businesses needs, adds value and reduces costs.
                            <br class="min992">&nbsp;
                        </span>
                        <span class="btn-container">
                            <span class="btn btn-support">Read More</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12">
                    <a href="http://www.netmatters.co.uk/bespoke-marketing" class="block marketing">
                        <span class="icon"><i class="fas fa-poll"></i></span>
                        <span class="h2">Digital Marketing</span>
                        <span class="p">
                            Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor online performances.
                            <br class="min1261">&nbsp;
                        </span>
                        <span class="btn-container">
                            <span class="btn btn-marketing">Read More</span>
                        </span>
                    </a>
                </div>
                <div class="nm-col-xl-3 col-lg-6 col-md-6">
                    <a href="http://www.netmatters.co.uk/telecoms-services" class="block telecoms">
                        <span class="icon"><i class="fas fa-phone-alt"></i></span>
                        <span class="h2">
                            Telecoms Services
                        </span>
                        <span class="p">
                            Stay connected with bespoke telecoms solutions when you need it most.
                            
                            <br class="max991">&nbsp;
                        </span>
                        <span class="btn-container">
                            <span class="btn btn-telecoms">Read More</span>
                        </span>
                    </a>
                </div>
                <div class="nm-col-xl-3 col-lg-6 col-md-6">
                    <a href="http://www.netmatters.co.uk/web-design" class="block design">
                        <span class="icon"><i class="fas fa-code"></i></span>
                        <span class="h2">Web Design</span>
                        <span class="p">
                            User-centric design for businesses looking to make a lasting first impression.
                        </span>
                        <span class="btn-container">
                            <span class="btn btn-design">Read More</span>
                        </span>
                    </a>
                </div>
                <div class="nm-col-xl-3 col-lg-6 col-md-6">
                    <a href="http://www.netmatters.co.uk/bespoke-marketing" class="block security">
                        <span class="icon"><i class="fas fa-shield-alt"></i></span>
                        <span class="h2">Cyber Security</span>
                        <span class="p">
                            Ensuring your online business stays secure 24/7, 365 days of the year. 
                            
                            <br class="max991">&nbsp;
                            
                        </span>
                        <span class="btn-container">
                            <span class="btn btn-security">Read More</span>
                        </span>
                    </a>
                </div>
                <div class="nm-col-xl-3 col-lg-6 col-md-6">
                    <a href="http://www.netmatters.co.uk/bespoke-marketing" class="block training">
                        <span class="icon"><i class="fas fa-poll"></i></span>
                        <span class="h2">Developer Training</span>
                        <span class="p">
                            Have you considered a career in web development but you aren’t sure where to start?
                        </span>
                        <span class="btn-container">
                            <span class="btn btn-training">Read More</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-background" id="nm-culture">
        <div class="container section">
            <div class="row">
                <div class="col-lg-6">
                    <h1 style="text-transform: uppercase;">Netmatters</h1>
                    <p>
                        <strong>
                            Netmatters Ltd is a leading web design, IT support and digital marketing agency based in Wymondham, Norfolk.
                        </strong>
                    </p>
                    <p>
                        Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture existing leads and further grow their sales.
                    </p>
                    <p>
                        We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning.
                    </p>
                    <div>
                        <a href="http://www.netmatters.co.uk/our-culture" class="btn btn-white">
                            Our Culture
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="latest-articles">
        <div class="bar">
            <div class="container">
                <ul>
                    <li class="active">
                        <span>Latest</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="article-list">
                    <div class="row">

                    <?php foreach ($posts as $post): ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="item <?php echo $post['color']; ?>">
                                <div class="img-container">
                                    <a href="#" class="category btn-tooltip"><?php echo $post['category']; ?></a>
                                    <a class="img-responsive" href="/our-careers/senior-web-developer">
                                        <img src="<?php echo $post['image']; ?>" class="img-responsive" alt="Senior Web Developer">
                                    </a>
                                </div>
                                <div class="block">
                                    <h3><?php echo $post['title']; ?></h3>
                                    <p><?php echo $post['body']; ?></p>
                                    <a class="btn">Read More</a>
                                    <div class="user">
                                        <div class="avatar">
                                            <img src="img/netmatters-avatar.png" class="img-responsive" alt="Netmatters Ltd.">
                                        </div>
                                        <div class="details">
                                            <strong class="text-main">Posted by Netmatters</strong>
                                            <br><?php echo $post['published']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section clients">
        <div class="container">
            <div class="list">
                <div class="item">
                    <div class="description">
                        <div class="box">
                            <h3>Busseys</h3>
                            <p>One of the UK's leading Ford dealerships.</p>
                            <div class="arrow"></div>
                        </div>
                    </div>
                    <img src="img/busseys-c.png" alt="Busseys" class="colored">
                    <img src="img/busseys-g.jpg" alt="Busseys" class="greyscale">
                </div>
                <div class="item">
                    <div class="description">
                        <div class="box">
                            <h3>Crane Garden Builders</h3>
                            <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                            <div class="arrow"></div>
                        </div>
                    </div>
                    <img src="img/crane-c.png" alt="Crane" class="colored">
                    <img src="img/crane-g.jpg" alt="Crane" class="greyscale">
                </div>
                <div class="item">
                    <div class="description">
                        <div class="box">
                            <h3>Beat</h3>
                            <p>The UK's eating disorder charity founded in 1989.</p>
                            <div class="arrow"></div>
                        </div>
                    </div>
                    <img src="img/beat-c.png" alt="Beat" class="colored">
                    <img src="img/beat-g.jpg" alt="Beat" class="greyscale">
                </div>
                <div class="item">
                    <div class="description">
                        <div class="box">
                            <h3>Northern Diver</h3>
                            <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                            <div class="arrow"></div>
                        </div>
                    </div>
                    <img src="img/northern-diver-c.png" alt="Northern Diver" class="colored">
                    <img src="img/northern-diver-g.jpg" alt="Northern Diver" class="greyscale">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require 'footer.php';
?>