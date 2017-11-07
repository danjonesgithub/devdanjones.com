<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

//custom header from: http://www.admin-enclave.com/en/tutorials/joomla/36-customize-the-jdoc-include-type-head-part.html
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'rendererheader.php';
?>
<!DOCTYPE html>
<html>
	<head>
      	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
        <jdoc:include type="head" />	
        <!--<link href="/templates/devdanjones/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />-->
		<link rel="shortcut icon" href="/templates/devdanjones/favicon.ico" type="image/x-generic" />
		<link rel="icon" href="/templates/devdanjones/favicon.ico" type="image/x-generic" />
      
        <!--Add jQuery & jQuery UI-->
      	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
      
        <!--Add Bootstrap-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"/>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
        <!-- Add Modernizr -->
		<script src="/templates/devdanjones/javascript/modernizr-custom.js"></script>
				
		<!--Add animated-bokeh-background-javascript-canvas -->
		<script src="/templates/devdanjones/javascript/animated-bokeh-background-javascript-canvas.js"></script>
		
		<!--Add wow.js -->
        <link rel="stylesheet" href="/templates/devdanjones/javascript/wowJs/css/libs/animate.css"/>
      	<script src="/templates/devdanjones/javascript/wowJs/dist/wow.min.js"></script>

      	<!--Add nanoGallery.js -->
      	<link href="/templates/devdanjones/javascript/nanoGalleryJs/css/nanogallery.css" rel="stylesheet" />
		<script src="/templates/devdanjones/javascript/nanoGalleryJs/jquery.nanogallery.js"></script>
		
		<!--Add mouseWheelScrollSmoothing -->
		<!--<script src="/templates/devdanjones/javascript/mousewheelScrollSmoothing.js"></script>-->
      	
      	<!--Custom DevDanJones -->
      	<link rel="stylesheet" href="/templates/devdanjones/css/devdanjones.css" />
      	<script src="/templates/devdanjones/javascript/devdanjones.js"></script>
		
		<!--Add Fonts -->
		<!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> -->
		<link href='https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700' rel="stylesheet">

	</head>
	<body>
		<header>
			<nav id="navBar" class="navbar navbar-expand-lg bg-dark navbar-dark">
			  <a class="navbar-brand" href="/">Dan Jones</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div  id="navBar-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item">
					<a class="nav-link" href="#Home" data-index="0" data-title="DevDanJones" data-desc="Professional Full-Stack Developer" data-url="/">Home <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#About" data-index="1" data-title="About DevDanJones" data-desc="Professional Full-Stack Developer" data-url="/about">About <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#Skillset" data-index="2" data-title="Skillset - DevDanJones" data-desc="Professional Full-Stack Developer" data-url="/skillset">Skillset <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#ProfessionalBackground" data-index="3" data-title="Professional Background - DevDanJones" data-desc="Professional Full-Stack Developer" data-url="/professional-background">Professional Background <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#Projects" data-index="4" data-title="Projects - DevDanJones" data-desc="Professional Full-Stack Developer" data-url="/projects">Projects <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#ReachOut" data-index="5" data-title="Reach out to DevDanJones" data-desc="Professional Full-Stack Developer" data-url="/reach-out">Reach Out <span class="sr-only">(current)</span></a>
				  </li>
				</ul>
			  </div>
			</nav>	
		</header>
		<main>
			<section id="Message">
				<jdoc:include type="message" />
			</section>
			<div id="DDJLoading">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-center">
						<div class="col">
							<img src="/templates/devdanjones/images/loading.gif" />
							Loading...
						</div>
					</div>
				</div>
			</div>
			<section id="Home" class="container-fluid">
				<div id="imageBack">&nbsp;</div>
				<div class="row row1 justify-content-center align-items-center">
					<div class="col-md-10 home-container">
						<div class="row row2 align-items-center">
							<div class="col-md-3">
								<span class="img-dan">&nbsp;</span>
							</div>
							<h1 class="col-md-6">Dan Jones</h1>
							<div class="col-md-3">
								<img class="sm fb" src="/templates/devdanjones/images/facebook.png"/>
								<img class="sm tw" src="/templates/devdanjones/images/twitter.png"/>
								<img class="sm li" src="/templates/devdanjones/images/linkdin.png"/>
							</div>
						</div>
						<div class="row row3">
							<h2 class="col">Professional Full-Stack Developer</h2>
						</div>
					</div>
					<div class="center-con" onclick="pages[1].scrollTo();">
						<div class="round">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</section>
			<section id="About" class="container-fluid">
				<h1>About Me</h1>
				<p>"I started coding for fun at school where I created Mortal Kombat, Pong and Duck Hunt on my Texas TI-82 calculator. After a masters degree in Astrophisics, I ran a DJ agency for which I developed a custom booking management system in MS Access / VBA. I have also been, over the last decade, building websites for myself and others culminating in a lead developer role in a web agency which I co-founded with a web designer."</p>
				<p>&nbsp;</p>
				<p>"Throughout my professional career, I have been engaged with IT as a project manager and consultant, and after 8 years I decided to make the switch to professional developing. I enrolled onto a self-funded an IT training program with Just IT, where I specialised in both front- and back-end technologies."</p>
				<p style="text-align: right; font-weight: bold;"> - Dan Jones</p>
			</section>
			<section id="Skillset" class="container-fluid">
				<h1>Skillset</h1>
					<div class="row">
						<div class="col">
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="0">
											<h2>Aptitude</h2>
											<p>Having taught myself many programming languages over the years, I am a fast learner and adopter of new technologies and ideas.</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.25s" data-wow-offset="0">
											<h2>Professional</h2>
											<p>8 years in IT project management for large corportate clients gives me experience in professionalism and work ethic.</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
										<h2>Motivated</h2>
											<p>As a mathematician and physicist, I find logical tasks such as coding engageing and enjoyable. I am also quite good at them!</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h2>Front End</h2>
				<div class="row justify-content-center">
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0s">
							<span class="skill" id="html5">
								<span class="skill-title">
									HTML 5
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
							<span class="skill" id="css3">
								<span class="skill-title">
									CSS 3
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
							<span class="skill" id="javascript">
								<span class="skill-title">
									Javascript
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
							<span class="skill" id="jquery">
								<span class="skill-title">
									jQuery
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.8s">
							<span class="skill" id="bootstrap">
								<span class="skill-title">
									Bootstrap
								</span>
							</span>
						</div>
					</div>
				</div>
				<h2>Back End</h2>
				<div class="row justify-content-center">
					<div class="col-4 col-sm-2 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0s">
						<div class="skill-container">
							<span class="skill" id="csharp">
								<span class="skill-title">
									C#
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
							<span class="skill" id="asp-net">
								<span class="skill-title">
									ASP.NET
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
							<span class="skill" id="sql">
								<span class="skill-title">
									SQL
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
							<span class="skill" id="php">
								<span class="skill-title">
									PHP
								</span>
							</span>
						</div>
					</div>
				</div>
				<h2>Web</h2>
				<div class="row justify-content-center">
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0s">
							<span class="skill" id="joomla">
								<span class="skill-title">
									Joomla
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
							<span class="skill" id="wordpress">
								<span class="skill-title">
									WordPress
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
							<span class="skill" id="responsive">
								<span class="skill-title">
									Responsive Web Design
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
							<span class="skill" id="seo">
								<span class="skill-title">
									Search Engine Optimisation
								</span>
							</span>
						</div>
					</div>
					<div class="col-4 col-sm-2">
						<div class="skill-container wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.8s">
							<span class="skill" id="ecommerce">
								<span class="skill-title">
									E-Commerce
								</span>
							</span>
						</div>
					</div>
				</div>
			</section>
			<section id="ProfessionalBackground" class="container">
				<div class="row">
					<div class="col">
						<div class="pb-container">
							<h1>Professional Background</h1>
							<h2>Experience</h2>
							<div class="jobs-container" id="experienceContainer">
								<div class="left-col">
									<div class="job-container job-container-l wow fadeInLeft" id="jc1">
										<span class="job" id="job1">
											<span class="job-title">
												Lead Developer
											</span>
											<span class="job-dates">
												IQ Digital, 2014 - 2016
											</span>
											<span class="job-desc">
												Co-founder and responsible for all development, SEO and impelementation
											</span>
										</span>
									</div>
									<div class="job-spacer" id="job2Spacer">
									</div>
									<div class="job-container job-container-l wow fadeInLeft" id="jc3">
										<span class="job" id="job3">
											<span class="job-title">
												Managing Director
											</span>
											<span class="job-dates">
												Dan Jones Entertainments, 2003 - 2011
											</span>
											<span class="job-desc">
												Ran an entertainments agency, providing DJs and live acts to bars, clubs, weddings and corporete events in and around London. Managing a team of DJs and roadies, managing clients and taking bookings, marketing, maintaining equipment, logistics.
											</span>
										</span>
									</div>
									<div class="job-spacer" id="job4Spacer">
									</div>
								</div>
								<div class="center-col">
									<span class="center-line"></span>
								</div>
								<div class="right-col">
									<div class="job-spacer" id="job1Spacer">
									</div>
									<div class="job-container job-container-r wow fadeInRight" id="jc2">
										<span class="job" id="job2">
											<span class="job-title">
												Head of IT Consulting 
											</span>
											<span class="job-dates">
												SmallWorlders, 2011 - Present
											</span>
											<span class="job-desc">
												Pitching & new business (jointly with MD), Unitiating all major new clients and projects, User research and UX for major projects, Information architecture, Intranet analytics & measurement techniques, Intranet engagement strategy, Speaking and representing SmallWorlders at conferences and events.
											</span>
										</span>
									</div>
									<div class="job-spacer" id="job3Spacer">
									</div>
									<div class="job-container job-container-r wow fadeInRight" id="jc4">
										<span class="job" id="job4">
											<span class="job-title">
												IT Account Manager
											</span>
											<span class="job-dates">
												SmallWorlders, 2009 - 2011
											</span>
											<span class="job-desc">
												End-to-end delivery of all projects for a key client, Face-to-face meetings with all parties from client, escalation point for all day-to-day matters for that client.
											</span>
										</span>
									</div>
								</div>
							</div>
							<h2>Education</h2>
							<div class="jobs-container" id="educationContainer">
								<div class="left-col">
									<div class="job-container job-container-l wow fadeInLeft" id="jc1">
										<span class="job" id="job1">
											<span class="job-title">
												Developers Professional Blended
											</span>
											<span class="job-dates">
												JustIT, 2017-2018
											</span>
											<span class="job-desc">
												Working on a couple of projects. Acquired IT industry specific skills and knowledge about new technologies. Specialised in both front-end and back-end technologies.
											</span>
										</span>
									</div>
									<div class="job-spacer" id="job2Spacer">
									</div>
								</div>
								<div class="center-col">
									<span class="center-line"></span>
									<span class="center-dot" id="centerDot1"></span>
									<span class="center-dot" id="centerDot2"></span>
								</div>
								<div class="right-col">
									<div class="job-spacer" id="job1Spacer">
									</div>
									<div class="job-container job-container-r wow fadeInRight" id="jc2">
										<span class="job" id="job2">
											<span class="job-title">
												MSci Astrophysics
											</span>
											<span class="job-dates">
												UCL, 1998 - 2002
											</span>
											<span class="job-desc">
												Mathematical and theoretical physics techniques and their applications in relation to all elements of the cosmos. Also blended with astronomy, the measurement techniques employed to verify theoretical work.
											</span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="Projects">
				<h1>Projects</h1>
				<jdoc:include type="component" />
			</section>
			<section id="ReachOut" class="container">
				<div class="row">
					<div class="col">
						<div class="ro-container">
							<h1>Reach Out</h1>
							<form id="footerForm" method="post" action="">
								<span class="row-container">
									<label for="formName">Hi, what's your name?</label>
									<input id="formName" name="formName" type="text" value="" required onfocus="focusElement(this,'formEmail');"/>
								</span>
								<span class="row-container" style="display: none;">
									<label for="formEmail">your email address?</label>
									<input id="formEmail" name="formEmail" type="email" value="" required onfocus="focusElement(this,'formDesc');"/>
								</span>
								<span class="row-container" style="display: none;">
									<label for="formDesc">please describe your project</label>
									<textarea id="formDesc" name="formDesc" row="3" value="" required onfocus="focusSubmit(this,'formSubmit');"></textarea>
								</span>
								<span class="submit-container" style="display: none;">
									<input id="formSubmit" class="submitButton" type="submit" value="send"/>
								</span>
							</form>
						</div>
					</div>
				</div>
			</section>
			<jdoc:include type="modules" name="position-0" />
			<jdoc:include type="modules" name="debug" />
		</main>
		<footer>
			<h1>Footer</h1>
		</footer>
	</body>
</html>