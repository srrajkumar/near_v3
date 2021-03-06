<?php include("../includes/_config.php");  $meta_title = 'AdNear is now Near | Real Time Consumer Insights | Near';
$meta_desc = "Near no longer focuses on location data, we're now dealing with Real Time Consumer Insights. Because of this, we are proud to announce that AdNear is now known as Near";
$title ="AdNear drops the ‘Ad’ in its name, rebrands to ‘Near’";
$meta_keywords="Data-driven Marketing Blog, Ambient Intelligence Platform, Marketing Blog, potential technology, Location Data, Consumer Insights, Data Driven Targeting, Attribution Measurement, Global brands, OOH Analytics, Rebranding, Cross channel analytics";
$meta_image="blog/AdNear-drops-the-ad.png";
 ?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en"><![endif]-->
<html  lang="en">
<head>
	<?php include('../includes/_head.php'); ?>
	<link rel="stylesheet" href="<?php CSS_path('page/jquery.snippet.min.css'); ?>" >
</head>

   <body>
	<div class="preloader">
  <?php include('../includes/preloader.php'); ?>
</div>
	<?php include('../includes/_navigation.php'); ?>
		<?php include('blog-banner.php'); ?>
		<!-- BEGIN: Page content -->
		<div class="view newsroom" style="margin-top: 100px;">
				<div class="content  colors-e background-90-e blog" id="main-content">
					<div class="container">
						<div class="row"><?php include('../includes/_blog-filter.php'); ?>
							<div class="col-md-9 col-md-pull-9">
								<div class="row post">
									<div class="col-md-3 post-meta sticky1">
									<div class="post-date">
										<div class="post-day">03</div>
										<div class="post-month">Aug 2015</div></div>
										<div class="post-author"><img src="<?php IMAGE('bb.png'); ?>" width="120" height="120" style="background: url(<?php IMAGE('near-team.png'); ?>); background-position: 0 0; background-size: 100% auto;" alt=""/></div>
										<div class="post-author"><i class="fa fa-user"></i>&nbsp; By Anil Mathews</div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-75-e">
											<div class="post-image">
												<img class="fluid-width" src="<?php IMAGE('blog/AdNear-drops-the-ad.png'); ?>" alt="">
											</div>
											<h2 style="text-align:left;"><?php echo $title; ?></h2>
											<p>Today is a very exciting day. Two years back, we started using our location data for intelligent mobile advertising. For a while now, we have been empowering brands to create custom audiences, derive powerful real-time consumer insights and measure offline attribution.</p>

<p>We are no longer a company just focusing on using location data for mobile advertising, since we have been doing a lot more with our platform. Hence, we are dropping the ‘Ad’ in ‘AdNear’ today. Say hello to ‘Near’.</p>

<p>This is a big step for us, but it is a natural progression as things have changed tremendously over time. Location data has always been at the core of everything we do, our products and our brand identity. And our new name reflects that.</p>

<p>Now, we plan to dedicate more time to expand our horizon and make this platform even more powerful, powering newer products in the upcoming months.</p>

<p>Check out our new website at <a href="//near.co" target="_blank">Near.co</a>, social media channels and our new logo, they indicate a very exciting journey ahead.</p>

<div class="container news">
             <div class="social-share">
           		 <div class="social-sharing is-clean" data-permalink="http://near.co/blogs/adnear-drops-ad-in-its-name-rebrands-to-near.html">

    <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php my_url();?>" class="share-facebook">
      <span class="fb-icon icon1"><i class="fa fa-facebook" style="font-style:normal; padding-left:7px;"></i><i class="share">Share</i></span>
      <span class="share-count">0</span>
    </a>

    <!-- https://dev.twitter.com/docs/intents -->
    <a target="_blank" href="http://twitter.com/share?url=<?php my_url();?>&amp;text=<?php echo $title; ?>&amp;via=Near&amp;count=true" class="share-twitter" data-dnt="true" data-counturl="http://near.co/blogs/adnear-drops-ad-in-its-name-rebrands-to-near.html"> <span class="twitter-icon icon1"><i class="fa fa-twitter" style="font-style:normal; padding-left:7px;"></i><i class="share">Tweet</i></span>
      <span class="share-count">0</span>
    </a>

</div>
            
            </div>
           <div class="fb-comments" data-href="<?php my_url();?>" data-width="100%" data-numposts="5"></div>
           
            </div>
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
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1409295566038536";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
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


</script>
	  
  </body>
</html>