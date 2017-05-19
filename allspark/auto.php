<?php include('../includes/_config.php');
$meta_title="";
$meta_desc="";
$meta_keywords="";
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>

<link rel="stylesheet" type="text/css" href="<?php CSS_PATH('allspark.css'); ?>">
</head>
<body>
<div class="preloader"></div>
	<?php include('../includes/_navigation.php'); ?>
	<div id="particles-js" class="col-lg-12  k carousel-custom" style="background-color: #fafafa; " data-particles> 
<div class="banner-space container allspark-space"></div>

<div class="container allspark-inner">
 <div class="row">
  
  <div class="col-lg-9 col-sm-9">
  <div class="carsousel-banner">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade carousel-fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
          <!-- Wrapper For Slides -->
          <div class="carousel-inner" role="listbox">
              <div class="item active">
                <!-- Slide Background -->
                <img src="<?php IMAGE('allspark/allspark-dashboard.png'); ?>" alt="Allspark Dashboard"/>
              </div>
              <div class="item">
                <!-- Slide Background -->
                <img src="<?php IMAGE('allspark/allspark-builderpage.png'); ?>" alt="Allspark Builderpage"/>
              </div>
              <div class="item">
                <!-- Slide Background -->
                <img src="<?php IMAGE('allspark/allspark-campaign-view.png'); ?>" alt="Allspark Campaign View"/>
              </div>
            </div><!-- End of Wrapper For Slides -->
            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- End  bootstrap-touch-slider Slider -->
    </div>
  </div>  
  <div class="col-lg-3 col-sm-3">
  <div class="banner-space container"></div>
  <div class="banner-content allspark-page">
    <div class="d-md-block text-left"  style="margin-bottom: 20%;">
          <h1>Allspark for</h1>
          <p>Auto</p>
          <a href="#" class="button button--primary button--rounded" style="margin-left: 0;">SETUP A DEMO</a>
        </div>
  </div>
  </div>
 </div>
</div>
<div class="banner-space container allspark-space"></div>


  <div class="mouse"></div>
  <div class="animation-wrapper">
    <div class="particle particle-1"></div>
    <div class="particle particle-2"></div>
    <div class="particle particle-3"></div>
    <div class="particle particle-4"></div>
  </div>
</div>
<div class="container container--fixed top-spacer allspark-subpages" style="padding: 100px 0">
            <div class="row" style="margin: 0;">
                <div class="col col-md-3">

                    <!-- Side Menu -->
                    

<div class="side-menu">
    <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
        <li class="list-group-item list-toggle"><a href="#"></a></li>
        <li class="list-group-item list-toggle">
            <a href="#" target="_self">USE CASES</a>
            <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
                <li class="list-group-item list-toggle">
                    <a href="<?php echo SITE_URL; ?>allspark/audience-curation.php" target="_self" >Audience Curation</a>
                </li>
                <li class="list-group-item list-toggle">
                    <a href="<?php echo SITE_URL; ?>allspark/media-planning.php" target="_self">Media Planning</a>
                </li>
                <li class="list-group-item list-toggle">
                    <a href="<?php echo SITE_URL; ?>allspark/out-of-home-analytics.php" target="_self" class="active">Out-of-Home Analytics</a>
                </li>
                <li class="list-group-item list-toggle">
                    <a href="<?php echo SITE_URL; ?>allspark/offline-attribution.php" target="_self">Offline attribution</a>
                </li>
                <li class="list-group-item list-toggle">
                    <a href="<?php echo SITE_URL; ?>allspark/consumer-research.php" target="_self" >Consumer research</a>
                </li>
                <li class="list-group-item list-toggle">
                    <a href="<?php echo SITE_URL; ?>allspark/omni-channel-customer-experience.php" target="_self">Omni-Channel Experience</a>
                </li>
            </ul>
        </li>
        <li class="list-group-item list-toggle "><a href="#"></a></li>
        <li class="list-group-item list-toggle active">
            <a href="#" target="_self">VERTICAL</a>
            <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
                <li class="list-group-item list-toggle">
                    <a href="<?php echo SITE_URL; ?>allspark/retail.php" target="_self">Retail</a>
                </li>
                <li class="list-group-item list-toggle">
                    <a  href="<?php echo SITE_URL; ?>allspark/qsr.php" target="_self">QSR</a>
                </li>
                <li class="list-group-item list-toggle">
                    <a href="<?php echo SITE_URL; ?>allspark/telco.php" target="_self">Telco</a>
                </li>
                <li class="list-group-item list-toggle">
                    <a href="<?php echo SITE_URL; ?>allspark/auto.php" target="_self" class="active">Auto</a>
                </li>
               
            </ul>
        </li>
    </ul>
</div>
</div>
                <div class="col col-md-9">
                <div class="col col-md-12 custom-banner row perspective" style="padding:0; margin: 0;">
                    <div class="col-md-4" data-aos="3dflip" data-aos-delay="200" style="background:#000">
                    <span>
                        <h1>Ford</h1>
                        <p>Case Study</p>
                    </span>
                    </div>
                    <div class="col-md-4" data-aos="3dflip" data-aos-delay="400" style="background-image:url('<?php IMAGE('allspark/banner-1.png') ?>'); background-size: cover;"></div>
                    <div class="col-md-4"  data-aos="3dflip" data-aos-delay="600"  style="background:#f5f5f5"></div>
                </div>
                <div class="col col-md-12 custom-banner row perspective" style="padding:0; margin: 0;">
                    <div class="col-md-4" data-aos="3dflip" data-aos-delay="200">
                    <span>
                        <h1>Automotive</h1>
                        <p>Whitepaper</p>
                    </span>
                    </div>
                    <div class="col-md-4" data-aos="3dflip" data-aos-delay="400" style="background-image:url('<?php IMAGE('allspark/banner-1.png') ?>'); background-size: cover;"></div>
                    <div class="col-md-4" style="background-color: #c1c1c1" data-aos="3dflip" data-aos-delay="600"></div>
                </div>
                <div class="col col-md-12 custom-banner row perspective" style="padding:0; margin: 0;">
                    <div class="col-md-4" data-aos="3dflip" data-aos-delay="200"  style="background:#000">
                    <span>
                        <h1>Maserati research</h1>
                        <p>Research</p>
                    </span>
                    </div>
                    <div class="col-md-4" data-aos="3dflip" data-aos-delay="400" style="background-image:url('<?php IMAGE('allspark/banner-1.png') ?>'); background-size: cover;"></div>
                    <div class="col-md-4"  data-aos="3dflip" data-aos-delay="600"  style="background:#f5f5f5"></div>
                </div>
                <div class="space"></div>
                <h1>Allspark can be used by the Auto players to:</h1>
                <!-- h2>to curate their audience of choice in real-time:</h2 -->
                <div class="space"></div>
                <div class="row allspark-container" style="margin: 0; padding:0 ">
                <div class="col-md-6 row" >
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/icon-1.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Curate</span> their target audience in real-time and estimate reach in different places
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/icon-2.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Understand</span> the behaviour of audience in the digital and physical world, by mapping their journey with data from channels including mobile, desktops and tablets
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/icon-3.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Engage</span> with the target audience in real-time, across channels
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/icon-4.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Drive</span> footfall to their showrooms and events, to promote their products and raise brand awareness
                    </div>
                </div>
                 <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/icon-4.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Analyse</span> and measure store visits of their own and competitor stores 
                    </div>
                </div>
                  <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/icon-4.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Understand</span> which channel (Mobile/Tablet/Desktop/OOH) influenced their consumer walk-in, and make smarter marketing decisions
 
                    </div>
                </div>
                  <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/icon-4.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Ingest</span> their own data sets such as CRM data into Allspark to get an enhanced, unified view of their consumers across locations 
                    </div>
                </div>
                  <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/icon-4.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Get</span> Allspark data through DaaS API for making data-driven decisions  
                    </div>
                </div>
                  <div class="col-md-6 row">
                    <div class="col-md-4">
                        <img src="<?php IMAGE('allspark/icon-4.png') ?>" />
                    </div>
                    <div class="col-md-8 subcontent">
                        <span class="blue">Identify</span> the best places to open their next stores with rich insights from smart environments
                    </div>
                </div>
                </div>
               
                 <div class="space"></div>
                <a href="#" class="button button--primary button--rounded">SETUP A DEMO</a>
                <div class="space"></div>
                <hr />

                <?php include('inside-usecases.php'); ?>

        </div>
    </div>
</div>
	<?php include('../includes/_footer.php'); ?>
    <?php include('../includes/_java_scripts.php'); ?>
    <script>
    (function($) {

    var id = 1;

    var ColorUtil = {

        lightOrDark: function(hexcolor) {
            return this._rgbToHsl.apply(this, this._parseColor(hexcolor).slice(0,3))[2] <0.6 ? 'dark':'light';
        },

        _rgbToHsl: function(r, g, b){

            r /= 255, g /= 255, b /= 255;

            var max = Math.max(r, g, b), min = Math.min(r, g, b);
            var h, s, l = (max + min) / 2;

            if(max == min){
                h = s = 0; // achromatic
            }else{
                var d = max - min;
                s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
                switch(max){
                    case r: h = (g - b) / d + (g < b ? 6 : 0); break;
                    case g: h = (b - r) / d + 2; break;
                    case b: h = (r - g) / d + 4; break;
                }
                h /= 6;
            }

            return [h, s, l];
        },

        _parseColor: function(color) {

            var match, quadruplet;

            // match #aabbcc
            if (match = /#([0-9a-fA-F]{2})([0-9a-fA-F]{2})([0-9a-fA-F]{2})/.exec(color)) {
                quadruplet = [parseInt(match[1], 16), parseInt(match[2], 16), parseInt(match[3], 16), 1];

            // match #abc
            } else if (match = /#([0-9a-fA-F])([0-9a-fA-F])([0-9a-fA-F])/.exec(color)) {
                quadruplet = [parseInt(match[1], 16) * 17, parseInt(match[2], 16) * 17, parseInt(match[3], 16) * 17, 1];

            // match rgb(n, n, n)
            } else if (match = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(color)) {
                quadruplet = [parseInt(match[1]), parseInt(match[2]), parseInt(match[3]), 1];

            // match rgba(n,n,n,o)
            } else if (match = /rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9\.]*)\s*\)/.exec(color)) {
                quadruplet = [parseInt(match[1], 10), parseInt(match[2], 10), parseInt(match[3], 10),parseFloat(match[4])];

                // No browser returns rgb(n%, n%, n%), so little reason to support this format.
            } else {
                quadruplet = [255,255,255,0];
            }

            return quadruplet;
        }
    };


    $.fn.particles = function(options) {

        options = $.extend({
            color: 'auto',
            opacity: 0.35
        }, options)
      
        return this.each(function(){
            
            var $container = $(this).css('position', 'relative'),
                cid        = 'particles-'+(++id),
                o          = $.extend({}, options, $container.data('particles') || {}),
                color      = ColorUtil.lightOrDark($container.css('background-color')) == 'dark' ? '#ffffff':'#000000',
                $canvas    = $('<div></div>').attr('id', cid).css({
                    display: 'block',
                    position: 'absolute',
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                }).prependTo($container);
          
            if (o.color && o.color !== 'auto') {
                color = o.color; 
            }

            particlesJS(cid, {
                "particles": {
                    "number": {
                        "value": 100,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": color,
                        "opacity": o.opacity
                    },
                    "shape": {
                        "type": "circle",

                    },
                    "opacity": {
                        "value": o.opacity,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 20,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 30,
                        "color": color,
                        "opacity": o.opacity,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 1,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": true,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "resize": true
                    }
                },
                "retina_detect": true
            });
        });
    };

    $(function(){
        $('[data-particles]').particles();
    });

})(jQuery);
    </script>
    
</body>
</html>

