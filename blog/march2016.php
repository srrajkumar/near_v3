<?php include("../includes/_config.php"); include("../includes/_lib.php"); ?>

<!DOCTYPE html>
<html class="background-100-e">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Near Blog - Thought leadership pieces on leveraging Location Intelligence for broader Business Decisions</title>
    
    
<!--META TAG-->

    <meta name="title" content="Near Blog - Thought leadership pieces on leveraging Location Intelligence for broader Business Decisions" />
    <meta name="description" content="Near's blog section showcases our leaders' opinion on various location data and technology topics and how insights from the data can help many brands for their marketing & business decision purposes today." />
    <meta name="KEYWORDS" content="Data-driven marketing blogs, Location intelligence, location data, mobile data, consumer insights, data analytics, location analytics, real time audience insights, attribution measurement, footfall attribution, retail analytics, marketing and business decisions, attribution analytics" />
    <meta name="AUTHOR" content="Near" />
    <meta name="RATING" content="General" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="REVISIT-AFTER" content="30 days" />
	<?php include('../includes/_head.php'); ?>
	<link rel="stylesheet" href="<?php CSS('filter.css');?>" />
    <link rel="stylesheet" href="<?php CSS('social-buttons.css');?>">	
	</head>
	<body class="state1 background-100-e">
		<!-- BEGIN: Top menu -->
		<?php include('../includes/_header.php'); ?>
		<!-- END: Top menu -->
        <div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
			<div class="overlay-control background-85-d">
				<a class="previos" href="#"></a>
				<a class="next" href="#"></a>
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view"></div>
			<ul class="loader">
				<!--li class="background-100-d"></li>
				<li class="background-100-d"></li>
				<li class="background-100-d"></li-->
			</ul>
		</div>
		<div class="overlay-window map-overlay colors-f background-95-f">
			<div class="overlay-control background-90-f">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				
			</div>
		</div>
		<div class="gate colors-e background-solid">
			<div class="gate-bar background-highlight-e"></div>
			<ul class="loader">
				<!--li class="background-100-g"></li>
				<li class="background-90-c"></li>
				<li class="background-100-f"></li-->
			</ul>
		</div>
		<!-- BEGIN: Page content -->
	
            
            <div class="view sub-banner">
        <div class="overlay-vdo2" ></div>
				<img alt class="bg" src="<?php IMAGE('bg-blog.png');?>" /><img alt class="bg" src="<?php IMAGE('bg-blog.png');?>" />
				<div class="content one-third-size colors-e background-60" style="z-index:2">
					<div class="container">
						<h2 class="blog-head"><span>Corporate Blog</span><a href="<?php echo SITE_URL; ?>engineering/" class="blog-link"><span class="tech">Tech Blog</span></a></h2>
						
					</div>
				</div>
			</div>
            
		<!-- BEGIN: Page content -->
		<section>
			<div class="view">
				<div class="content small-top-padding colors-e background-90-e blog" id="main-content">
					<div class="container">
						<div class="row">
                        	<?php include('../includes/_blog-filter.php'); ?>
							<div  class="col-md-9 col-md-pull-9">
							<div class="row post">
									<div class="col-md-3 post-meta">
									<div class="post-date">
										<div class="post-day">08</div>
										<div class="post-month">Mar 2016</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 -736px; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp;<b> By Cameron Curtis</b></div>
                                        <div class="post-author disgnation">General Manager -<br> Australia & New Zealand</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<a class="page-transition" href="<?php echo SITE_URL; ?>blogs/why-qsrs-in-australia-should-leverage-mobile-location-data-for-enhanced-consumer-understanding.php"><img class="fluid-width" src="<?php IMAGE('blog/why-qsrs-in-australia-should-leverage-mobile-location-data-for-enhanced-consumer-understanding.png'); ?>" alt=""></a>
											</div>
											<h4 style="text-align:left;"><a class="page-transition" href="<?php echo SITE_URL; ?>blogs/why-qsrs-in-australia-should-leverage-mobile-location-data-for-enhanced-consumer-understanding.php">Why QSRs in Australia should leverage Mobile Location Data for enhanced consumer understanding</a></h4>
											
											<p>In Australia, the Quick Service Restaurant (QSR) industry will see an annual revenue growth rate of <a href="http://www.ibisworld.com.au/industry/default.aspx?indid=2005" target="_blank">2.4 percent</a> in the next five years. This market, which is led by McDonald’s and Subway has an annual revenue of more than $15 billion currently and employs more than 150,000 people...</p>
											<p><a href="<?php echo SITE_URL; ?>blogs/why-qsrs-in-australia-should-leverage-mobile-location-data-for-enhanced-consumer-understanding.php"  class="page-transition btn-sm">Read more...</a></p>
											
										</div>
									</div>
								</div>     
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: Page content -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  	 <!-- BEGIN: Footer -->
		<?php include('../includes/_footer.php'); ?>
		<!-- END: Footer -->
	<?php include('../includes/_java_scripts.php'); ?>
<script src="<?php JS('social-buttons.js'); ?>" type="text/javascript"></script>   
<script>
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});

var stickySidebar = $('.sticky');

if (stickySidebar.length > 0) { 
  var stickyHeight = stickySidebar.height(),
      sidebarTop = stickySidebar.offset().top;
}

// on scroll move the sidebar
$(window).scroll(function () {
  if (stickySidebar.length > 0) { 
    var scrollTop = $(window).scrollTop();
            
    if (sidebarTop < scrollTop) {
      stickySidebar.css('top', scrollTop - sidebarTop);

      // stop the sticky sidebar at the footer to avoid overlapping
      var sidebarBottom = stickySidebar.offset().top + stickyHeight,
          stickyStop = $('.blog').offset().top + $('.blog').height();
      if (stickyStop < sidebarBottom) {
        var stopPosition = $('.blog').height() - stickyHeight;
        stickySidebar.css('top', stopPosition);
      }
    }
    else {
      stickySidebar.css('top', '0');
    } 
  }
});

$(window).resize(function () {
  if (stickySidebar.length > 0) { 
    stickyHeight = stickySidebar.height();
  }
});
</script>

  </body>
</html>