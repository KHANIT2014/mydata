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
	<title>Privacy Policy</title>
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
					
					if(isset($_SESSION['uid'])){
						?>

						<li class="nav-item dropdown">
							<a href="#" class="nav-link btn btn-outline-danger my-2 my-sm-0" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Welcome , <?php 
								$string = "SELECT * FROM `users` WHERE UID=$_SESSION[uid]";
								$temp = $mysqli->query($string);
								if($demo = $temp->fetch_row()){
									echo "$demo[1] $demo[2]";
								}
								?>
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown1">

								<a href="changep.php" class="dropdown-item">
									Change Password
								</a>

								<div class="dropdown-divider"></div>

								<a href="logout.php" class="dropdown-item">
									Logout
								</a>
							</div>
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
<div class="container my-5" style="text-align: justify;">
	<h2>PRIVACY POLICY</h2>
	<p>This Privacy Policy ("Privacy Policy") describes <a href="http://www.caexamclub.com">caexamclub.com</a>’s policies and procedures
		on the collection, use, and disclosure of your information when you use the Website.
		<a href="http://www.caexamclub.com">caexamclub.com</a> is committed to ensuring that any use or sharing of your information with
		anyone shall be only in accordance with the procedures described in this Privacy Policy.
	</br></br>
	The terms "we", "caexamclub", "our" and "us" refer to <a href="http://www.caexamclub.com">caexamclub.com</a>, and the terms "you"
	and "your" refer to a user of the Website. The term "Services" shall refer to the services and
	information offered by <a href="http://www.caexamclub.com">caexamclub.com</a> to the users through the Website. The capitalized terms
	used in this Privacy Policy, but not defined in this Privacy Policy, shall have the meaning given
	to such terms in the Terms of Service.
</br></br>
Please read this Privacy Policy before using the Website or submitting any personal
information to <a href="http://www.caexamclub.com">caexamclub.com</a>.
</p>
</br>
<h5>PRIVACY POLICY IS PART OF OUR TERMS OF SERVICE</h5>
<p>This Privacy Policy is a part of and incorporated within, and is to be read along with, the
Terms of Service.</p>
</br>
<h5>YOUR CONSENT</h5>
<p>By using the Website, you agree and consent to the collection, use and sharing of your
information collected by us in accordance with this Privacy Policy.</p>
</br>
<h5>POLICY CHANGES</h5>
<p>If we change our Privacy Policy, we will post those changes on this page. If we make any
	changes to this Privacy Policy that materially change how we treat your personal information,
	we will endeavor to provide you with reasonable notice of such changes, such as via prominent
	notice on the Website or to your email address on record and where required by law, we will
	obtain your consent. Your continued use of our Services after we publish or send a notice about
our changes to this Privacy Policy shall constitute your consent to the updated Privacy Policy.</p>
</br>
<h5>LINKS TO OTHER WEBSITES</h5>
<p>The Website may contain links to other websites. Any personal information about you collected
	whilst visiting such websites is not governed by this Privacy Policy. You are encouraged to
	exercise caution and review the privacy policies applicable to such websites before accessing
	them. <a href="http://www.caexamclub.com">caexamclub.com</a> shall not be responsible for and has no control over the practices and
	content of any website accessed using the links contained on our website. This Privacy Policy
	shall not apply to any information disclosed by you to the visitors of our website or any third
party.</p>
<h5>COMPETENCY TO CONTRACT</h5>
<p>We do not knowingly collect or solicit personal information from anyone who is a minor or
	otherwise incompetent to contract, or knowingly allow such persons to register on
caexamclub.com, except with parental consent.</p>
<h5>INFORMATION WE MAY COLLECT FROM YOU</h5>
We will collect and process the following information about you:
</br></br>
<span style="font-weight: 500;">Information you give us.</span> You will be required to give us personal information about yourself
by filling in your details whilst undertaking the following:
<ul>
	<li>creating an Account, or</li>
	<li>corresponding with us by phone, e-mail, or</li>
	<li>subscribing/using our specific Services,or</li>
	<li>searching for a subject matter,or</li>
	<li>participating in the interactive services offered by the Website such as discussion boards,
	competition, promotion or survey, other social media functions or make payments etc., or</li>
	<li>troubleshooting any problems.</li>
</ul>
<p>
	The information you give us will include your name, e-mail address, phone number and location
	details, and may include your personal description, photograph, professional registration details,
	qualification, designation, etc. Your name, photograph, personal description and any other
	information that you choose to add to your public facing profile will be available for viewing
	to other users of the Website. Once you create an Account, other users will be able to see on
	your profile certain information about your activity on the Website, such as the questions and
	answers you post, your followers and who you follow, topics of interest to you, the information
	you list as credentials, the information viewed by you on the website and your edits to Your
Content (defined below). </br></br>
The Website enables you to add posts, texts, photographs, videos, links, and files to share with
others. All material that you upload, publish or display to others via the Website will be referred
to collectively as "Your Content". You acknowledge and agree that, as part of using the
Website, Your Content may be viewed by the general public. </br></br>
<span style="font-weight: 500;">Information we collect about you. </span>With regard to each of your visits to the Website, we
will automatically collect and analyze the following demographic and other information:
</br></br>
• We collect and store the information and content that you post on the Website, including your questions, answers, photographs, and comments. Unless you have posted certain content anonymously, Your Content, date and time stamps, and all associated comments are publicly viewable on the Website, along with your name. This also may be indexed by search engines and be republished elsewhere on the Internet in accordance with our Terms of Service. For more information about what you can change, see the below section on YourRights; 
</br></br>
• When you communicate with us (via email, phone, through the Website or otherwise), we may maintain a record of your communication;• The Website includes the caexamclub advertising services ("Ad Services"), which may collect user activity and browsing history within the Website and across third-party sites and online services, including those that include our ad pixels ("Pixels"), widgets, plug-ins, buttons, or related services. Our Ad Services collect browsing information such as Internet protocol (IP) address and location , your login information, browser type and version, date and time stamp, user agent, time zone setting, browser plug-in types and versions, operating system and platform, and other information about user activities on the Website, as well as on third party sites and services that have embedded our Pixels, widgets, plug-ins, buttons, or related services. 
</br></br>
• Information about your visit, including the full Uniform Resource Locators (URL), through and from the Website (including date and time); material or information that you viewed or searched for; page response times, download errors, length of visits to certain pages, page interaction information (such as scrolling, clicks, and mouse overs), and methods used to browse away from the page and any phone number used to call our customer service number. • If you use your account information with Facebook, Twitter, Google Plus or Gmail or any other social networking or similar site (collectively, "SNS") to sign in to the Website, an option of which may be provided by the Website to you at its sole discretion, you will be allowing us to pass to and receive from the SNS your log-in information and other user data. <span style="font-weight: 450">If you elect to sign up through an SNS, you may be asked to enable sharing of your contacts with the Website. If you agree to this sharing, in order to facilitate a more connected experience, we may send notices informing your contacts you have joined the Website so that you and your contacts can find and follow each other on the Website.</span> Please be aware that the specific information we obtain from the SNS is dependent on their privacy policies and/or on your settings regarding what information you have consented to share. You should consult their respective privacy policies for information about their practices.</p>

<span style="font-weight: 500;">Information we receive from other sources.</span> We may receive information about you from
third parties, such as other users, partners (including ad partners, analytics providers, search
information providers), or our affiliated companies or if you use any of the other websites/apps
we operate or the other Services we provide. Users of our Ad Services and other third parties
may share information with us such as a cookie ID, device ID, or demographic or interest data,
and information about content viewed or actions taken on a third party website, online service
or app. For example, users of our Ad Services may also be able to share customer list
information (e.g., email or phone number) with us to create customized audience segments for
their ad campaigns.
</br></br>
<h5>COOKIES</h5>
<p>
	Our Website uses cookies and tracking technology (including pixels) depending on the
	features offered.
</br></br>
Cookies are small files that the websites place on your computer/device as you browse the web. Like many websites, we use cookies to discover how people are using our services and
to make them work better.
</br></br>
We do use cookies to store information, such as your personal preferences when you visit our
Website. This could include only showing you a popup once in your visit, or the ability to login
to some of our features, such as forums. For more detailed information about these mechanisms
and how we collect activity information, see our <span style="font-weight: 500;">‘Cookie Policy’</span>.</p>
<h5>USES OF YOUR INFORMATION</h5>
<p>
	We will use your personal information and any other information collected by us:
</br></br>
• To carry out our obligations arising from any contracts entered into between you and us
and to provide you with the relevant information and Services;
</br>
• To administer and enhance the security of our Website and for internal operations,
including troubleshooting, data analysis, testing, research, statistical and survey purposes;
</br>
• To remember information to help you efficiently access your Account;
</br>
• To provide you, or permit selected third parties to provide you, with information about
services we consider similar to those that you are already using, or have enquired about, or
may interest you. If you are a registered user, we (or they) will contact you by electronic
means (e-mail or SMS or telephone) with information about these services;
</br>
• To ensure that Content from our Website is presented in the most effective manner;
</br>
• To send you Service-related notices (including regarding any change to the Services) and
other promotional material. In order to verify that the e-mail address provided by you belongs
to you, we may send you a verification e-mail. Once, the verification process is complete,
your Account will be fully functional;
</br>
• To allow you to participate in interactive features of our Services, if any, when you choose
to do so;
</br>
• To measure or understand the effectiveness of advertising we serve to you and others, and
to deliver relevant advertising to you.
</br></br>
Further, we may combine the information that we receive from third parties with the information
you give to us and information we collect about you for the purposes set outabove.
We analyze the log files of our Website to better understand the volume of traffic to particular
areas of our Website. This information helps us to serve your information needs.
</p>
<h5>DISCLOSURE AND DISTRIBUTION OF YOUR INFORMATION</h5>
<p>
	We reserve the rights to distribute your personal information to any third party only under
one of the following circumstances. </br></br>
<span style="font-weight: 500;">For Crime Prevention or Investigation.</span> We may share this information with governmental
agencies or other companies assisting us, when we are: </br></br>
• Obligated under the applicable laws or in good faith to respond to court orders and processes;or Detecting and preventing against the actual or potential occurrence of identity theft, fraud,
abuse of Services and other illegal acts;</br>
• Responding to claims that an advertisement, posting or other content violates the intellectual
property rights of a third party;</br>
• Under a duty to disclose or share your personal data in order to enforce or apply our
Terms of Service and other agreements; or to protect the rights, property, or safety of the
Company, our customers, or others. This includes exchanging information with other
companies and organizations for the purposes of fraud protection and credit risk reduction.
</br></br>
<span style="font-weight: 500;">For Internal Use.</span> We may share this information with any member of our Group. The term
"Group" includes means, with respect to any person, any entity that is controlled by such
person, or any entity that controls such person, or any entity that is under common control with
such person, whether directly or indirectly, or, in the case of a natural person, any Relative (as
such term is defined in the Companies Act, 1956 and Companies Act, 2013 to the extent
applicable) of such person.
</br></br>
<span style="font-weight: 500;">With Selected Third Parties.</span> We or our Group entities may disclose your personal
information to third parties:
</br></br>
• In the event that we sell any business or assets, in which case we may disclose your personal
data to the prospective buyer of such business or assets.
</br></br>
• If the Company or substantially all of its assets are acquired by a third party, in which case
personal data held by it about its customers will be one of the transferredassets.
</br></br>
• We may also share your information with selected business partners such as:
</br>
- Payment processing companies.
</br>
- Service providers and sub-contractors for the performance of any contract we enter into.
</p>
<h5>With Advertisers and advertising networks.</h5>
<p>
	We share your personal information and any other information collected by us with third parties
	for direct marketing purposes, research and strategic client analysis objectives and other
	internal business purposes, and you hereby give consent to the same. This makes it possible
	for us to operate our companies and provide free services to users like you. If you object to our
	data sharing practices, please refer to the section Your Rights.
</br></br>
We may also provide our subscribers/advertisers with aggregate or de-identified information
about our users to select and serve relevant adverts to you. We may also use such aggregate
information tohelp advertisers reach the kind of audience they want totarget.
</br></br>
We may also work with third parties such as network advertisers to serve advertisements on
the Website and on third-party websites or other media (e.g., social networking platforms), such
as DoubleClick Ad Exchange (<a href="https://support.google.com/admanager/answer/3376772?hl=en">more info here</a>), Google AdSense (<a href="https://support.google.com/adsense/answer/142293?hl=en">more info here</a>) and
Facebook Audience Network (<a href="https://support.google.com/admanager/answer/3376772?hl=en">more info here</a>). These third parties may use cookies,JavaScript, web beacons (including clear GIFs), Flash LSOs and other tracking technologies to measure the effectiveness of their ads and to personalize advertising content to you.
</br></br>
While you cannot opt out of advertising on the Website, you may opt out of much interest-based
advertising on third party sites and through third party ad networks (including DoubleClick Ad
Exchange, Facebook Audience Network, and Google AdSense). For more information, visit
www.aboutads.info/choices. Opting out means that you will no longer receive personalized ads
by third parties ad networks from which you have opted out, which is based on your browsing
information across multiple sites and online services; if you delete cookies or change devices,
your opt-out may no longer be effective.
</p>
<h5>DATA SECURITY PRECAUTIONS</h5>
<p>
	We have in place appropriate technical and security measures to prevent unlawful access to or
	accidental loss of information collected. All information you provide to us is stored on our
	secure servers. We use firewalls on our servers. Where we have given you (or where you have
	chosen) a username and password which enables you to access certain parts of our Website,
	you are responsible for keeping these details confidential. We ask you not to share a password
	with anyone. You must log out when you leave any section of our Website protected by a
	password. We recommend closing the browser completely and re-opening it before accessing
	other websites over the internet.
</br></br>
Unfortunately, the transmission of information via the internet is not completely secure.
Although we will do our best to protect your personal data, we cannot guarantee the security
of your data transmitted through our Website; any transmission is at your own risk. Once we
have received your information, we will use strict physical, electronic, and procedural
safeguards to try to prevent unauthorized access.
</p>
<h5>OPT-OUT</h5>
<p>
	You may at any time opt out from this Privacy Policy and Terms by deactivating/deleting your
	Account and writing to us at info@caexamclub.com. Please note that such request shall only
	be valid from the date that we receive such request and we will not be responsible for any
	communications that you may receive from third parties that received your information prior to
	such request.
</p>
<h5>YOUR RIGHTS</h5>
<p>
	You may choose to restrict the collection or use of your personal information in the following
	ways:
</br>
<ul>
	<li>You have the right to ask us not to process your personal data for direct marketing
		purposes by sending us an email at info@caexamclub.com, in which case we may not
	be able to provide certain or all the Services to you.</li>
	<li>You may correct, amend, add or delete personal information from your Account at any
	time by logging in and visiting your profile page.</li>
	<li>You are free to remove or delete Account at any point in time. If you choose to delete
		your Account information, then your Account will be removed from public visibility on
		the Website, and it may not be restored by us, however Your Content shall be available
	on the Website and/or any other platform where it has been shared, linked or referred.</li>
</ul>
</p>
<h5>Grievance Officer</h5>
<p>
	In accordance with Information Technology Act, 2000 and Information Technology
	(Intermediaries Guidelines) Rules, 2011 made thereunder, the contact details of the Grievance
	Officer are provided below:
</br>
contact@caexamclub.com
</br>
Monday to Friday - 10 am to 6 pm
</br>
If you come across any abuse or violation of the Privacy Policy, please report to
<a href="mailto:contact@caexamclub.com">contact@caexamclub.com</a>
</p>
<h5>PRIVACY CONTACT INFORMATION</h5>
If you have any queries, concerns, or comments with regards to anything contained in our
Privacy Policy, you may contact us by sending an email to <a href="mailto:contact@caexamclub.com">contact@caexamclub.com</a>

</div>
<!-- footer starts here -->
<div class="footer m-0 bg-black py-3">

	<div class="row justify-content-center mx-0 bottom-link">
		<div class="col-2 col-md-auto text-center ">
			<a href="terms.php">Terms</a>
		</div>
		<div class="col-3 col-md-auto text-center ">
			<a href="disclaimer.php">Disclaimer</a>
		</div>
		<div class="col-2 col-md-auto text-center">
			<a href="privacy.php">Privacy</a>
		</div>
		<div class="col-2 col-md-auto text-center">
			<a href="cookie.php">Cookie</a>
		</div>
		<div class="col-3 col-md-auto text-center">
			<a href="contact.php">Contact</a>
		</div>
	</div>
	
	<div class="row justify-content-end mx-0 pr-3 text-danger">
		&copy; 2018-2019 , created by &nbsp<a href="http://www.hertzsoft.com" class="text-light">Hertzsoft</a>
	</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>