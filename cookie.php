<?php
ob_start();
require("config.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/navfoot.css">
		<title>Cookie</title>
		<style>
		</style>
	</head>
	<body>
		<!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-black0">

		<div class="container">

			<a href="" class="navbar-brand" title="navbar">Question Paper</a>

			<div class="navbar-toggler" data-toggle="collapse" data-target="#navexpand">

				<div class="navbar-toggler-icon"></div>

			</div>
			<!-- sidenav & nav links -->
			<div class="collapse navbar-collapse justify-content-end" id="navexpand">

				<ul class="navbar-nav mr-3">

					<li class="nav-item">
						<a href="index.php" class="nav-link">
							Home
						</a>
					</li>
					
					<li class="nav-item">
						<a href="question/question.php" class="nav-link">
							Question Paper
						</a>
					</li>

					<li class="nav-item">
						<a href="about.php" class="nav-link">
							About
						</a>
					</li>

					<?php
					if(!isset($_SESSION['uid'])){
						?>
						<li class="nav-item dropdown">

							<a href="#" class="nav-link btn btn-outline-danger my-2 my-sm-0" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Account
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">

								<a class="dropdown-item" href="login.php">
									Login
								</a>

								<div class="dropdown-divider"></div>

								<a class="dropdown-item" href="signup.php">
									Signup
								</a>

							</div>
						</li>
						<?php
					}
					?>

					<?php
					if(isset($_SESSION['uid'])){
						?>

						<li class="nav-item">
							<a href="logout.php" class="nav-link btn btn-outline-danger my-2 my-sm-0">
								Logout
							</a>
						</li>
						<?php
					}
					?>

				</li>
			</ul>
		</div>
	</div>
</nav>
	<!-- content starts here -->
	<div class="container my-5">
		<p>
			<h3>COOKIE POLICY</h3>
			</br>
			This Cookie Policy ("Cookie Policy") is a part of and incorporated within and is to be read
			along with the Terms of Website Use ("Terms"). The capitalized terms used in this Cookie
			Policy, but not defined herein, shall have the meaning given to such terms in the Terms of
			Service.
			</br>
			</br>
			<h5>What are cookies and local storage?</h5>
			</br>
			Cookies are small files that the websites place on your computer/device as you browse the
			web. Like many websites, we use cookies to discover how people are using our services
			and to make them work better.
			</br></br>
			Local storage is an industry standard technology that allows a website or application to
			store information locally on your computer or mobile device. We use local storage to
			customize what we show you based on your past interactions with the Website.
			</br></br>
			<h5>Why do we use these technologies?</h5>
			</br>
			We use these technologies to do things like:
			</br></br>
			• Make the Website easier or faster to use;
			</br>
			• Enable features and store information about you (including on your device or in your
			browser cache) and your use of theWebsite;
			</br>
			• Deliver, understand and improve advertising;
			</br>
			• Monitor and understand the use of our products and services;
			</br>
			• Protect you, others and theWebsite;</br>
			• Speed up your future activities and experience on our Website (such as showing you a
			popup only once in your visit) ; and
			</br>
			• Remember information about your browser and your preferences.
			</br></br>
			<h5>Third-party Cookies</h5>
			</br>
			We also use third party advertisements on caexamclub.com to support our Website and
			provide our users with free services. Some of these advertisers may use technology such as
			cookies and web beacons when they advertise on our site, which will also send these
			advertisers (such as Google through the Google AdSense program) information including
			your IP address, your ISP, the browser you used to visit our site, and in some cases, whether
			you have Flash installed. This is generally used for geo-targeting purposes (showing New
			York real estate ads to someone in New York,for example) or showing certain ads based
			on specific sites visited (such as showing cooking ads to someone who frequents cooking
			sites).
			</br></br>
			We cannot identify you personally from this information.
			</br></br>
			<h5>What types of cookies do we use?</h5>
			</br>
			Two types of cookies may be used on the Website - "session cookies" and “persistent cookies".
			</br></br>
			Session cookies are temporary cookies that remain on your device until you leave the Website.
			A persistent cookie remains on your device for much longer or until you manually delete it
			(how long the cookie remains on your device will depend on the duration or "lifetime" of the
			specific cookie and your browser settings).
			</br></br>
			Some of the pages you visit may also collect information using pixel tags (also called clear
			gifs) that may be shared with third parties which directly support our promotional activities and
			website development. For example, website usage information about visitors of the Website
			may be shared with our third party advertising agency to better target internet banner
			advertisements on our Website. The information is not, however, personally identifiable,
			although it could be linked to your personal information.
			</br>
			<h5>Cookies used on the Website</h5>
			</br></br>
			<div class="container">
				<table border="1" cellspacing="0" class="Table" style="border-collapse:collapse; border:solid black 1.0pt; margin-left:4.95pt">
					<tbody>
						<tr>
							<td style="background-color:#d9dada; height:52.9pt; width:111.95pt">
								<p style="margin-left:0in; margin-right:0in">&nbsp;</p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-size:11.0pt"><span style="color:#2f2f2f">T</span></span></strong><strong><span style="font-size:11.0pt"><span style="color:#2f2f2f">y</span></span></strong><strong><span style="font-size:11.0pt"><span style="color:#2f2f2f">p</span></span></strong><strong><span style="font-size:11.0pt"><span style="color:#2f2f2f">e of Cookie</span></span></strong></span></span></p>
							</td>
							<td style="background-color:#d9dada; height:52.9pt; width:185.5pt">
								<p style="margin-left:0in; margin-right:0in">&nbsp;</p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-size:11.0pt"><span style="color:#2f2f2f">What do they do?</span></span></strong></span></span></p>
							</td>
							<td style="background-color:#d9dada; height:52.9pt; width:183.25pt">
								<p style="margin-left:0in; margin-right:0in">&nbsp;</p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-size:11.0pt"><span style="color:#2f2f2f">D</span></span></strong><strong><span style="font-size:11.0pt"><span style="color:#2f2f2f">o these cookies collect my personal data / identify me?</span></span></strong></span></span></p>
							</td>
						</tr>
						<tr>
							<td style="height:104.75pt; vertical-align:top; width:111.95pt">
								<p style="margin-left:0in; margin-right:0in">&nbsp;</p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">N</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">ecessary</span></span></span></span></p>
							</td>
							<td style="height:104.75pt; vertical-align:top; width:185.5pt">
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt">T</span><span style="font-size:11.0pt">hese cookies are essential to make</span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt">our Website work correctly, they enable you to move around our Website and use our features. Examples include remembering previous actions (e.g. entered text) when navigating back to a page in the same session.</span></span></span></p>
							</td>
							<td style="height:104.75pt; vertical-align:top; width:183.25pt">
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">T</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">hese cookies don&rsquo;t identify you as</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">an individual. If you do not accept these cookies, it may affect the performance of the Website, or parts of it.</span></span></span></span></p>
							</td>
						</tr>
						<tr>
							<td style="height:142.3pt; vertical-align:top; width:111.95pt">
								<p style="margin-left:0in; margin-right:0in">&nbsp;</p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">Performance</span></span></span></span></p>
							</td>
							<td style="height:142.3pt; vertical-align:top; width:185.5pt">
								<p style="margin-left:0in; margin-right:0in">&nbsp;</p>
								<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">T</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">hese cookies help us understand how visitors interact with our Website by providing information about the areas visited, the time spent on the Website, and &nbsp;any issues encountered, such&nbsp; as error messages.&nbsp; This helps us improve the performance of our Website.</span></span></span></span></p>
							</td>
							<td style="height:142.3pt; vertical-align:top; width:183.25pt">
								<p style="margin-left:0in; margin-right:0in">&nbsp;</p>
								<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">T</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">hese cookies don&rsquo;t identify you as an individual. All data is collected and aggregated anonymously.</span></span></span></span></p>
							</td>
						</tr>
						<tr>
							<td style="height:169.8pt; vertical-align:top; width:111.95pt">
								<p style="margin-left:0in; margin-right:0in">&nbsp;</p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">Functionality</span></span></span></span></p>
							</td>
							<td style="height:169.8pt; vertical-align:top; width:185.5pt">
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">T</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">hese cookies allow our Website to</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">r</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">emember the choices you make</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">(</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">such as your user name, language</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">or the region you are in) to provide a more personalized online</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">experience.</span></span></span></span></p>
							</td>
							<td style="height:169.8pt; vertical-align:top; width:183.25pt">
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">T</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">he information these cookies</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">collect may include personally identifiable information that you have disclosed, such as your username or profile picture. We</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">shall always be transparent with you about what information we collect,</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">w</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">hat we do with it and with whom</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">w</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">e share it. If you do not accept these cookies, it may affect the</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">performance and functionality of</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">t</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">he Website and may restrict access to content on the Website.</span></span></span></span></p>
							</td>
						</tr>
						<tr>
							<td style="height:177.85pt; vertical-align:top; width:111.95pt">
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">T</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">a</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">r</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">g</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">eting /</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">advertising</span></span></span></span></p>
							</td>
							<td style="height:177.85pt; vertical-align:top; width:185.5pt">
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">T</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">hese cookies are used to deliver</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">content that is more relevant to you and your interests. They may be used to deliver targeted advertising or to limit the number of times you</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">see an advertisement. They also help us measure the effectiveness of</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">advertising campaigns. We may use</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">t</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">hese cookies to remember websites you have visited and we may share</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">t</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">his information with other parties,</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">i</span></span><span style="font-size:11.0pt"><span style="color:#2f2f2f">ncluding advertisers and our agencies.</span></span></span></span></p>
							</td>
							<td style="height:177.85pt; vertical-align:top; width:183.25pt">
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">Most types of these cookies track</span></span></span></span></p>
								<p style="margin-left:0in; margin-right:0in"><span style="font-size:10pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:11.0pt"><span style="color:#2f2f2f">consumers via their IP address so may collect some personal identifiable information.</span></span></span></span></p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			</br>
			<h5>Where are these technologies used?</h5>
			</br>
			We use these technologies on our own Website and services and on other Website that have
			integrated our services. This includes our advertising and platform partners’. Third parties may
			also use these technologies, for example, when you interact with their content from within our
			services, like when you click a link or stream media on the Website from a third-party service,
			and to help with the delivery of ads shown on and off of the Website.
			</br></br>
			<h5>Do we use Third Party Cookies?</h5>
			</br>
			We use a number of suppliers that may also set cookies on your device on our behalf when
			you visit the Website to allow them to deliver the services they are providing.
			</br></br>
			When you visit the Website you may receive cookies from third party websites or domains.
			More information about these cookies may be available on the relevant third party's website.
			</br></br>
			<h5>Additional Information about Third Party Analytics in use on our Website:</h5>
			</br>
			<span style="font-weight: 450">Facebook Connect.</span> For more information about what Facebook collects when you use
			Facebook buttons on the Website, please see: <a href="https://www.facebook.com/about/privacy/">Data Policy</a>.
			</br></br>
			<span style="font-weight: 450">Twitter.</span> For more information about what Twitter collects when you use our Website, please see: <a href="https://twitter.com/en/privacy">https://twitter.com/en/privacy</a>.
			</br></br>
			<span style="font-weight: 450">Google Analytics:</span> For more information about Google Analytics cookies, please see Google's
			help pages and privacy policy:
			</br>
			• <a href="https://policies.google.com/privacy" class="pl-4">Google's Privacy Policy</a>
			</br>
			• <a href="https://support.google.com/analytics/#topic=3544906" class="pl-4">Google Analytics Help pages</a>
			</br></br>
			Please note that this is not an exhaustive list of all third party analytics providers that
			we work with. <span style="font-weight: 450">How can I control Cookies?</span>
			</br></br>
			Most internet browsers are initially set up to automatically accept cookies. You can change
			the settings to block cookies or to alert you when cookies are being sent to your device.
			There are a number of ways to manage cookies. Please refer to your browser instructions or
			help screen to learn more about how to adjust or modify your browser settings.
			</br></br>
			If you disable the cookies that we use, this may impact your experience while on the Website,
			for example you may not be able to visit certain areas of the Website or you may not receive
			personalized information when you visit the Website or you may also be unable to login to
			services or programs, such as logging into forums or accounts.
			</br></br>
			If you use different devices to view and access the Website (e.g. your computer,
			smartphone, tablet etc.) you will need to ensure that each browser on each device is adjusted
			to suit your cookie preferences.
			</br></br>
			<span style="font-weight: 450">Changing your Cookie Settings.</span> The browser settings for changing your cookies settings are
			usually found in the 'options' or 'preferences' menu of your internet browser. In order to
			understand these settings, the following links may be helpful. Otherwise you should use the
			'Help' option in your internet browser for more details.
			</br>
			<ul>
				<li><a href="https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies">Cookie settings in Internet Explorer</a></li>
				<li><a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences">Cookie settings in Firefox</a></li>
				<li><a href="https://support.google.com/chrome/answer/95647">Cookie settings in Chrome</a></li>
				<li><a href="https://support.apple.com/kb/ph21411?locale=en_GB">Cookie settings in Safari</a></li>
			</ul>
			</br>
			<span style="font-weight: 450">More information.</span> To find out more about cookies, including how to see what cookies have
			been set and how to manage and delete them, visit <a href="//www.aboutcookies.org">About Cookies</a> or
			<a href="//www.allaboutcookies.org">www.allaboutcookies.org</a>.
		</div>
		<!-- footer starts here -->
		<div class="footer m-0 bg-black py-3">
			<div class="row justify-content-center mx-0 bottom-link">
				<div class="col-sm-12 col-md-auto text-center ">
					<a href="terms.php">Terms</a>
				</div>
				<div class="col-sm-12 col-md-auto text-center ">
					<a href="disclaimer.php">Disclaimer</a>
				</div>
				<div class="col-sm-12 col-md-auto text-center">
					<a href="privacy.php">Privacy</a>
				</div>
				<div class="col-sm-12 col-md-auto text-center">
					<a href="cookie.php">Cookie</a>
				</div>
				<div class="col-sm-12 col-md-auto text-center">
					<a href="contact.php">Contact</a>
				</div>
			</div>
			<div class="row justify-content-end mx-0 pr-3 text-danger">
				&copy; 2018-2019 , created by &nbsp<a href=".http://www.hertzsoft.com" class="text-light">Hertzsoft</a>
			</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>