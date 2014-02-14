<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Somesh's Portfolio</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- The full width container. -->
    <div class="container-fluid">
	  <div class="row full">
	    <div class="col-md-5 blue">
	    	<div class="row topHeader">
	    		<div class="col-md-4 profileHeader resume"><h2><a href="CV_Somesh3.0.pdf" title="Resume"><span class="glyphicon glyphicon-download" style="top: 4px; padding-right: 10px;"></span><span class="textResume">Resume</span></a></h2></div>
	    		<div class="col-md-8 profileHeader contact"><h4><a href="www.linkedin.com/pub/somesh-rahul/14/65/372/" title="LinkedIn Profile">LinkedIn</a> | <a href="https://twitter.com/SomeshRahul" title="Twitter Profile">Twitter</a> | <a href="skype:somesh.rahul?call" title="Skype Username">Skype</a> | <a href="https://github.com/somrahul" title="Github Account">Github</a> | <a href="mailto:somrahul@umich.edu" title="Email Address">Email</a> </h4></div>
	    	</div>
	    	<!-- adding the photograph, usp and name. -->
	    	<div class="row">
	    		<a href="profile.php"><div class="col-md-12 profile text-center"><img src="images/Somesh.png" alt="Somesh Profile Picture" class="img-circle" height="225"></div>
	    		<div class="col-md-12 profileName text-center"><h1>Somesh Rahul</h1></div>
	    		<hr width="50%" color="white" style="margin-bottom:10px;"/>
	    		<div class="col-md-12 profileText text-center">Designer + Developer + Problem Solver</div>
	    		<div class="col-md-12 profileSummary text-center">I love observing and talking to people and then design softwares (including websites, apps) based on their actual and anticipated needs and desires. When not with other people, I take time to prototype and develop apps that make my life easier. I love hacking, participating in discussions and throwing around my opinions and views. </div></a>

	    	</div>
	    </div>
	    <!-- designing the portfolio and the projects sections -->
  		<div class="col-md-7 white">
  			<div class="row">
  				<div class="col-md-5 projectHeader"><h2>Selected Projects</h2></div>
  				<div class="col-md-7">
  					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="Research Design Interaction">All</span></li>
						<li><span class="filter" data-filter="Research">Research</span></li>
						<li><span class="filter" data-filter="Design">Design</span></li>
						<li><span class="filter" data-filter="Interaction">Interaction</span></li>
					</ul>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-md-12 portfolioItems">

					<div id="portfoliolist">
						
						<a href="loadProject.php?name=advanceSocialProjects&subProject=cotr"><div class="portfolio Design Interaction" data-cat="">
							<div class="portfolio-wrapper">				
								<img src="images/portfoliothumbs/community.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a href="loadProject.php?name=advanceSocialProjects&subProject=cotr" class="text-title">Advance Social Projects</a>
										<span class="text-category">Implementation of Social Components</span>
									</div>
									<a href="loadProject.php?name=advanceSocialProjects&subProject=cotr"><div class="label-bg"></div></a>
								</div>
							</div>
						</div></a>				

						<a href="loadProject.php?name=graphic&subProject=web"><div class="portfolio Design" data-cat="app">
							<div class="portfolio-wrapper">			
								<img src="images/portfoliothumbs/graphicDesign.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a href="loadProject.php?name=graphic&subProject=web" class="text-title">Graphics Design</a>
										<span class="text-category">For Web, Print, Logos</span>
									</div>
									<a href="loadProject.php?name=graphic&subProject=web"><div class="label-bg"></div></a>
								</div>
							</div>
						</div></a>		
						
						<a href="loadProject.php?name=surprize"><div class="portfolio Interaction" data-cat="web">
							<div class="portfolio-wrapper">						
								<img src="images/portfoliothumbs/surprizeme.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a href="loadProject.php?name=surprize" class="text-title">Surprize Me</a>
										<span class="text-category">Interaction Design Project</span>
									</div>
									<a href="loadProject.php?name=surprize"><div class="label-bg"></div></a>
								</div>
							</div>
						</div></a>				
						
						<a href="loadProject.php?name=socialme"><div class="portfolio Research Design Interaction" data-cat="card">
							<div class="portfolio-wrapper">			
								<img src="images/portfoliothumbs/socialmethumb.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a href="loadProject.php?name=socialme" class="text-title">Social Me</a>
										<span class="text-category">App to improve Social Wellness</span>
									</div>
									<a href="loadProject.php?name=socialme"><div class="label-bg"></div></a>
								</div>
							</div>
						</div></a>	
									
						<a href="loadProject.php?name=digication"><div class="portfolio Research" data-cat="app">
							<div class="portfolio-wrapper">
								<img src="images/portfoliothumbs/digicationthumb.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a href="loadProject.php?name=digication" class="text-title">Digi[cation]</a>
										<span class="text-category">Evaluation of an existing system</span>
									</div>
									<a href="loadProject.php?name=digication"><div class="label-bg"></div></a>
								</div>
							</div>
						</div></a>			
						
						<a href="loadProject.php?name=workex&subProject=tug"><div class="portfolio Research Design Interaction" data-cat="card">
							<div class="portfolio-wrapper">			
								<img src="images/portfoliothumbs/workex.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a href="loadProject.php?name=workex&subProject=tug" class="text-title">Work Experience</a>
										<span class="text-category">At TUG, University of Michigan</span>
									</div>
									<a href="loadProject.php?name=workex&subProject=tug"><div class="label-bg"></div></a>
								</div>
							</div>
						</div></a>	
						
						<a href="loadProject.php?name=infoviz&subProject=socialtracker"><div class="portfolio Design Interaction" data-cat="card">
							<div class="portfolio-wrapper">			
								<img src="images/portfoliothumbs/infoViz.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a href="loadProject.php?name=infoviz&subProject=socialtracker" class="text-title">Information Visualization</a>
										<span class="text-category">Visualizing data using D3.js</span>
									</div>
									<a href="loadProject.php?name=infoviz&subProject=socialtracker"><div class="label-bg"></div></a>
								</div>
							</div>
						</div></a>	
						
						<a href="loadProject.php?name=descomp&subProject=aroundme"><div class="portfolio Design Interaction" data-cat="logo">
							<div class="portfolio-wrapper">			
								<img src="images/portfoliothumbs/designComp.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a href="loadProject.php?name=descomp&subProject=aroundme" class="text-title">Design Competitions</a>
										<span class="text-category">Design Jams and Competitions</span>
									</div>
									<a href="loadProject.php?name=descomp&subProject=aroundme"><div class="label-bg"></div></a>
								</div>
							</div>
						</div></a>																																							
						
						<a href="loadProject.php?name=uxpapers"><div class="portfolio Research" data-cat="app">
							<div class="portfolio-wrapper">			
								<img src="images/portfoliothumbs/uxpapers.jpg" alt="" />
								<div class="label">
									<div class="label-text">
										<a href="loadProject.php?name=uxpapers" class="text-title">User Experience Papers</a>
										<span class="text-category">Papers capturing an experience</span>
									</div>
									<a href="loadProject.php?name=uxpapers"><div class="label-bg"></div></a>
								</div>
							</div>
						</div></a>																																	
													
						
					</div>
				</div> <!-- for portfolio item div -->
			</div> <!-- for the row -->
	  </div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -20}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -20}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="bootstrap/js/jquery.mixitup.min.js"></script>
  </body>
</html>