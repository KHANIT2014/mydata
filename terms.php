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
	<title>Terms</title>
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

<!-- terms content -->
<div class="container my-5" style="text-align: justify;">
	<h2>Terms of Service</h2>
	<p>All information posted on the Site is provided on a volunteer basis by users, members and
		administrators of <a href="http://www.caexamclub.com">caexamclub.com</a>. <a href="http://www.caexamclub.com">caexamclub.com</a> does not certify accuracy of any
		information or certify that any level of expertise relevant to that information has been met. Your
		access to and use of <a href="http://www.caexamclub.com">caexamclub.com</a> or any other site/app operated by the
		Company (collectively the "website") is governed by these Terms of Service (“Terms"), Privacy
		Policy and disclaimer clause on the Site and any notices and consent provided or obtained in
	connection with the Site (collectively, the "Agreement").</br></br>
	Use of the Site includes accessing, browsing, or registering to use the Site. Please read these
	Terms carefully before you start to use the Site. By using the Site and/or providing Content to the
	site, you confirm that you accept these Terms and that you agree to comply with them. If you do
	not agree to these Terms, you must not use the Site. If you do not agree with any amendments
	made to these Terms at any time in future, you must stop using the Site with immediate effect. As
	used in this Agreement "<a href="http://www.caexamclub.com">caexamclub.com</a>", "We," "Us," or "Our" refers to <a href="http://www.caexamclub.com">caexamclub.com</a>’s
	administrators, members and designers/developers. "You" or "Your" or "User" refers to you, the
user of this Site.</p>
<span style="font-size: 20px; font-weight: 100">BY USING THE SITE, YOU AGREE AS FOLLOWS:</span>
<hr>
<h4>1. Type of Content on the Site</h4>
<p>The information available on this Site, including, without limitation, questions, reviews, opinions,
	directions, guides, graphics, photographs, logos, audio or video clips, submissions and data
	(collectively "Content") is not a substitute for any type of professional advice, including, without
	limitation, psychiatric, medical, financial, or legal advice. Always seek the advice of an
	appropriate professional and never disregard professional advice or delay in seeking it because of
	Content on this Site. <a href="http://www.caexamclub.com">caexamclub.com</a> does not certify or endorse the Content on this Site,
	including without limitation any opinion, recommendation, advice, or any other information
	contained in the Content. The website<span style="font-size: 20px; font-weight: 100">IS NOT RESPONSIBLE FOR HARM TO PERSONS OR PROPERTY THAT RESULTS FROM YOUR USE OF THE SITE, INCLUDING WITHOUT LIMITATION, USE OF ANY CONTENT ON THE SITE.</span></p>
</br>
<h4>2. Agreement to Deal Electronically</h4>
<p>Your use of the Site is conducted electronically and you agree that this website may communicate
	with you electronically for all aspects of your use of the Site, including sending you electronic
	notices. If you do not wish to deal electronically, do not use this Site. Delivery of electronic
	notices is not infallible, so you agree to contact <a href="http://www.caexamclub.com">caexamclub.com</a> if you need information about
	the Site. You agree to keep all records relating to your use of the Site and to print or make an
	electronic copy of this Agreement and any disclosures provided on the Site. You agree that in
	case there are any changes in your information provided by you to us, including your e-mail
	address and other contact details, you will be solely responsible to update them regularly. Except
	as prohibited by law, you waive any law requiring different communication methods in
	connection with your use of this website. <a href="http://www.caexamclub.com">caexamclub.com</a> reserves the right, at its sole
	discretion, to deliver notices and disclosures by other means such as postal mail. You agree that
	all notices, disclosures and other communications that we provide to you electronically satisfy
any legal requirement that such communications be in writing.</p>
</br>
<h4>3. Changes to this Agreement</h4>
<p>The Site is like a store: every time a customer enters a store the customer is bound by the Terms
	in effect on the date of the customer's visit. Similarly, at this website, you are bound by the
	version of this Agreement that is in effect on the date of your visit. The terms of this Agreement
	may change from time to time so please review it when you visit the website. Any use of the Site
after the effective date of any change will constitute your consent to the revised Agreement.</p>
</br>
<h4>4. Protect Your Password: Account and Password</h4>
<p>When you register with us, an account will be created for your use (“Account") on the website
	and you will be provided with required Account Information to enable your access to the
	Account. The term “Account Information" refers to a user identification code, password or any
	other piece of information which may be provided to you as part of our security procedures. If
	you access the website after logging into any third party app like Facebook, Twitter or Gmail, the
	login information of such third party account, as the case may be, shall be considered as the
	Account Information. You must always treat Account Information as confidential and must not
	disclose it to any third party. Any access to the Site through your Account shall be considered an
	access by you or on your behalf and you shall be solely responsible for any activity carried out in,
	by or through your Account either on the website or any other website accessed by you through
	the website. Subject to applicable law, you agree to be liable for all uses of your Account
	whether or not actually authorized by you, including but not limited to uses of your Account to
	submit questions at the Site or to answer questions through the Site. If you know or suspect that
	anyone other than you knows or has unauthorized access to your Account Information or any part
	of it, you must promptly notify us by sending us an e-mail at info@<a href="http://www.caexamclub.com">caexamclub.com</a>. If we
	change the eligibility criteria to be registered with the website and you no longer comply with the
	new eligibility criteria, as determined by us in our sole discretion, you accept that we may close
	your Account without any liability for us. You are solely responsible for ensuring that these
	Terms are in compliance with all laws, rules and regulations applicable to you and the right to
	access the services is revoked where these Terms or use of the services is prohibited under the
	applicable law and, in such circumstances, you agree not to use or access the website or services
	in any way. We have the right to disable your use of the Account Information or any part of it,
	whether chosen by you or allocated by us, at any time, if in our reasonable opinion you have
failed to comply with any of the provisions of these Terms.</p>
<!-- </br> -->
<h4>5. Privacy</h4>
<p>In the event that you choose to create an Account with <a href="http://www.caexamclub.com">caexamclub.com</a>, you may be required to
	provide some personal information, including your name, username, password, email address,
	phone number and other information.
</br></br>
Our Privacy Policy, sets out the terms on which we process any personal information we collect
from you, or that you provide us. By continuing to use the website and its services, you consent
to the terms as set forth in the Privacy Policy, including the transfer of this information to third
party affiliates for purposes mentioned in the Privacy Policy.</p>
</br>
<h4>6. Intellectual Property Rights</h4>
<p>We are the owner of the website. However, the ownership of the Content is with the creator of
	that specific Content. The Company does not have any ownership rights on the Content available
	on the Site. We are the licensee of all copyrights, trademarks, service marks or any other
	intellectual property in the Content published on the Site. All such rights are reserved. You must
	not modify the paper or digital copies of any materials you have printed off or downloaded in any
	way, and you must not use any illustrations, photographs, video or audio sequences or any
	graphics separately from any accompanying text. You must not use any part of the Content on the
	website for commercial purposes without obtaining a licence to do so from us or our licensors. If
	you print off, copy or download any part of the website in breach of these Terms, your right to
	use the Site will cease immediately and you must, at our option, return or destroy any copies of
	the materials you have made. <a href="http://www.caexamclub.com">caexamclub.com</a> retains all right, title, and interest in and to the
	website and Content. Subject to applicable law, <a href="http://www.caexamclub.com">caexamclub.com</a> reserves the right to suspend or
	deny, at its sole discretion, your access to all or any portion of the website with or without notice.
	You may not access or use the website or any portion of the website if such access would violate
	any law. Reprinting or electronic reproduction of any Content in whole or in part for any purpose
	is expressly prohibited, unless prior written consent is obtained from <a href="http://www.caexamclub.com">caexamclub.com</a>. You may
	contact us if you wish to obtain such consent. The Content on this Site is protected by copyright
	under both Indian and foreign laws. All rights not expressly granted herein are reserved to
	<a href="http://www.caexamclub.com">caexamclub.com</a> and its licensors. Subject to applicable law, <a href="http://www.caexamclub.com">caexamclub.com</a> reserves the right
	to revoke the above permission at any time and to suspend or deny, in its sole discretion, your
	access to all or any portion of the Site with or without notice. Except as expressly provided in this
	Agreement, neither <a href="http://www.caexamclub.com">caexamclub.com</a> nor any third party has conferred upon you by implication,
	estoppels, or otherwise, any license or right under any patent, copyright, trademark, trade secret
or any other proprietary right.</p>
</br>
<h4>7. Terms Relating Services</h4>
<p>If you use the services, you agree that violation of any of the following Terms constitutes a
	material breach of this Agreement:
	<span class="container">
		<ul class="">
			<li>Using the service for any purpose in violation of local, state, national, or international
			laws;</li>
			<li>Providing false information on your registration form or impersonating any person;</li>
			<li>Posting or copying or transferring material that infringes on the intellectual property
			rights of others or on the privacy or publicity rights of others;</li>
			<li>Posting or transmitting any information, data, text, files, links, software, chat,
				communication, or any other materials that are unlawful, harmful, threatening, abusive,
				invasive of another's privacy, harassing, defamatory, slanderous, vulgar, obscene, hateful,
				racist, embarrassing or otherwise objectionable to any other person or entity as
				determined by <a href="http://www.caexamclub.com">caexamclub.com</a> in its sole discretion, or contains content that would be
			prohibited or violates the letter or spirit of the Terms;</li>
			<li>Posting or transmitting any unsanctioned advertising, promotional materials, or any other
				forms of unsanctioned solicitation, including, without limitation, "junk mail," "Spam,"
			"chain letters," or any unsolicited mass distribution of email;</li>
			<li>Posting surveys, contests, or pyramid schemes;</li>
			<li>Posting improper questions or answers that are not related to the particular topic;</li>
			<li>Stalking, harassing, or otherwise harming others;</li>
			<li>Distributing viruses, corrupted files, or any other similar software or programs that may
			damage the operation of another's computer;</li>
			<li>Collecting or storing personal data about other users of the Site;</li>
			<li>Inducing, enticing, soliciting, recruiting, luring, or attempting to induce, entice, solicit,
				recruit, or lure users or experts to another web site which, in <a href="http://www.caexamclub.com">caexamclub.com</a> reasonable
				determination, is a competitor of <a href="http://www.caexamclub.com">caexamclub.com</a>;</li>
				<li>Engaging in any other conduct that inhibits any other person from using or enjoying the
				services of the website;</li>
				<li>Accessing or attempting to access any restricted portions of the website including any
				developer code not freely available;</li>
				<li>Breach of any legal duty owed to a third party, such as a contractual duty or a duty of
				confidence;</li>
				<li>Threatening the unity, integrity, defence, security, foreign relations or sovereignty of
				India.</li>
				<li>Engaging in any other behaviour on the website, which in <a href="http://www.caexamclub.com">caexamclub.com</a> sole
				discretion is unacceptable.</li>
			</ul>
		</span>
		<a href="http://www.caexamclub.com">caexamclub.com</a> may (but is not obligated) to remove Content for any reason, with or
		without notice to you, including without limitation Submissions (as defined below) that do
		not conform with the Terms and terminate your access to the Site.
	</p>
</br>
<h4>8. License to Submissions to the Site</h4>
<p>Should you provide this website with information to be available to other users of the website,
	including without limitation, postings, feedback, data, questions, comments or suggestions
	("Submissions") those Submissions will be deemed non confidential and to be your property and
	you undertake that you have the requisite permissions to share such Submissions. In
	consideration of the services provided to you by us, you grant <a href="http://www.caexamclub.com">caexamclub.com</a> a royalty-free,
	perpetual, irrevocable, world-wide license to use, copy, reproduce, create derivative works from,
	adapt, modify, publish, edit, translate, sell, distribute, transmit, transfer, publicly display, publicly
	perform, and display the Submissions without any limitation and in any media or any form now
	known or later developed. Such additional uses by us or others may be made with no further
	consideration paid to you. <a href="http://www.caexamclub.com">caexamclub.com</a> may sublicense these rights to third parties.</p>
</br>
<h4>9. Copyright Infringement Notification & Other Reports</h4>
<p><a href="http://www.caexamclub.com">caexamclub.com</a> relies on users of the website to bring copyright violations to our attention. If
	you are aware of infringing materials on the website, please notify <a href="http://www.caexamclub.com">caexamclub.com</a>
	agent: info@<a href="http://www.caexamclub.com">caexamclub.com</a>. To be effective, the Notification must include the following:
	<span class="container">
		<ul>
			<li>A physical or electronic signature of a person authorized to act on behalf of the owner of
			an exclusive right that is allegedly infringed;</li>
			<li>Identification of the copyrighted work claimed to have been infringed, or if multiple
				copyrighted works at a single online site are covered by a single notification, a
			representative list of such works at that site;</li>
			<li>Identification of the material that is claimed to be infringing or to be the subject of
				infringing activity and that is to be removed or access to which is to be disabled, and
				information reasonably sufficient to permit <a href="http://www.caexamclub.com">caexamclub.com</a> to locate the material;</li>
				<li>Information reasonably sufficient to permit <a href="http://www.caexamclub.com">caexamclub.com</a> to contact you, such as an
					address, telephone number, and if available, an electronic mail address at which you may
				be contacted;</li>
				<li>A statement that you have a good faith belief that use of the material in the manner
				complained about is not authorized by the copyright owner, its agent, or the law; and</li>
				<li>A statement that the information in the notification is accurate, and under penalty of
					perjury, that you are authorized to act on behalf of the owner of an exclusive right that is
				allegedly infringed.</li>
			</ul>
		</span>
		Notwithstanding the foregoing, <a href="http://www.caexamclub.com">caexamclub.com</a> does not guarantee any action based upon
		the receipt of such information.
		<span style="font-size: 20px; font-weight: 100">ALL INQUIRIES NOT IN COMPLIANCE WITH THE
			ABOVE NOTICE AND PROCEDURE FOR MAKING CLAIMS OF COPYRIGHT
		INFRINGEMENT WILL RECEIVE NO RESPONSE.</span></p>
	</br>
	<h4>10. Your Representations & Warranties</h4>
	<p>You represent and warrant for the benefit of <a href="http://www.caexamclub.com">caexamclub.com</a> and <a href="http://www.caexamclub.com">caexamclub.com</a> licensors,
		suppliers, and any third parties mentioned on the website that:
		<span class="container">
			<ol type="a">
				<li> You are at least 18 years of age. If you are below 18, then you have obtained verifiable
				parental consent to use this site;</li>
				<li>You possess the legal right and ability to enter into and make the representations and
				warranties contained in this Agreement;</li>
				<li>You will not copy or download or transfer by any means any of the information/ resources
					present on the website without the explicit permission of <a href="http://www.caexamclub.com">caexamclub.com</a>.</li>
					<li>You will keep your registration information accurate at all times;</li>
					<li>You will be responsible for all use of your Account even if such use was conducted without
						your authority or permission (for example, and not by way of limitation, if an unauthorized third
					party submits or answers a question under your Account);</li>
					<li>You will not use this website for any purpose that is unlawful or prohibited by this Agreement
					(for example, and not by way of limitation, abiding by the Terms); and ‘</li>
					<li>All Submissions made by you are owned by you and <a href="http://www.caexamclub.com">caexamclub.com</a>’s use of the
						Submissions does not infringe or violate the intellectual property or other rights of any third
					parties.</li>
					<li>All information that you submit to us is true and accurate;</li>
				</ol>
			</span></p>
		</br>
		<h4>11. Indemnity</h4>
		<p>You agree to defend, indemnify and hold harmless <a href="http://www.caexamclub.com">caexamclub.com</a> and its members, officers,
			directors, employees, agents, licensors, and suppliers, from and against all claims, actions or
			demands, liabilities, and settlements, including, without limitation, reasonable legal and
			accounting fees, arising in connection with your use of the website or resulting from, or alleged to
			result from, your use of the website or your violation of this Agreement or your violation of the
			applicable law or the rights (including infringement of intellectual property rights) of a third
			party. You will cooperate as fully required by the Company in the defense of any claim. The
			Company reserves the right to assume the exclusive defense and control of any matter subject to
			indemnification by you, and you will not in any event settle any claim without the prior written
		consent of the Company.</p>
	</br>
	<h4>12. DISCLAIMERS OF ALL WARRANTIES AND DUTIES</h4>
	<p>THIS SITE AND ALL CONTENT IS PROVIDED "AS IS," "AS AVAILABLE," "WITH ALL
		FAULTS," AND WITHOUT WARRANTY OF ANY KIND. <a href="http://www.caexamclub.com">caexamclub.com</a> AND
		<a href="http://www.caexamclub.com">caexamclub.com</a> LICENSORS GIVE NO EXPRESS WARRANTIES AND DISCLAIM:
		<span class="container">
			<ol type="A">
				<li>ALL IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, WARRANTIES
					OF MERCHANTABILITY; FITNESS FOR A PARTICULAR PURPOSE; <a href="http://www.caexamclub.com">caexamclub.com</a> OF
					THE SITE; LACK OF VIRUSES, WORMS, TROJAN HORSES, OR OTHER CODE THAT
				MANIFESTS CONTAMINATING OR DESTRUCTIVE PROPERTIES; ACCURACY,</li>
				<li>ANY DUTIES OF REASONABLE CARE, WORKMANLIKE EFFORT OR LACK OF
					NEGLIGENCE. THE ENTIRE RISK AS TO SATISFACTORY QUALITY, PERFORMANCE,
					ACCURACY AND EFFORT IN CONNECTION WITH THE SITE AND CONTENT IS WITH
					YOU. WE ASSUME NO LIABILITY OR RESPONSIBILITY FOR ANY ERRORS OR
					OMISSIONS IN CONTENT. IN ADDITION, <a href="http://www.caexamclub.com">caexamclub.com</a> DISCLAIMS ANY
				WARRANTIES OF NON-INFRINGEMENT, TITLE, OR QUIET ENJOYMENT.</li>
			</ol>
		</span>
		We are not responsible for the Content/ information on the website. We are not responsible for
		any direct or indirect damages or losses caused to you, including without limitation, lost profits,
		business interruption or other loss resulting from use of or reliance in any way on anything
		available on the website. It is solely your responsibility to evaluate the accuracy, reliability,
		completeness and usefulness of Content available on the website that is used by you. We make no
		warranty that the services and information on the website will meet your requirements or that the
		services or your access to the website will be uninterrupted, timely, accurate or reliable; nor do
		we make any warranty as to any information that may be obtained through the services or
		website. In case there is any defect in any software being used for the provision of the services,
		we do not make any warranty that defects in such software will be corrected. You understand and
		agree that any material and/or data that are permissible to be downloaded or otherwise obtained
		through use of the services or website is done at your own discretion and risk and you will be
		solely responsible for any damage to your computer system or loss of data that results from the
		download of such material or data. The Company disclaims all liability to either the user or any
		person claiming for any breach of the terms of the Agreement including claims based on the
		ratings, reviews mentioned on the website. The website makes no representations as to the
		reliability, accuracy of the Content or qualifications of any of the users or the quality, security orlegality of any services and the website disclaims any and all liability relating thereto. The
		Company/website does not implicitly or explicitly support or endorse the procurement of any
		service on the website. No advice or information, whether oral or written, obtained by you from
		the services or Site or through the service(s) or Site shall create any warranty not expressly made
	herein.</p>
</br>
<h4>13. RELEASE AND WAIVER</h4>
<p>To the maximum extent permitted by applicable law, you hereby release and waive all claims
	against the Company, website, and its subsidiaries, owners, affiliates, officers, agents, licensors,
	co-branders or other partners, and employees from any and all liability for claims, damages
	(actual and/or consequential), costs and expenses (including litigation costs and attorneys' fees) of
	every kind and nature, arising from or in any way related to your use of our website, its services
	or Content. You understand that any fact relating to any matter covered by this release may be
	found to be other than now believed to be true and you accept and assume the risk of such
	possible differences in fact. In addition, you expressly waive and relinquish any and all rights and
	benefits which you may have under any other state or federal statute or common law principle of
	similar effect, to the fullest extent permitted by law. If we fail to insist that you perform any of
	your obligations under these Terms, or if we do not enforce our rights against you, or if we delay
	in doing so, that will not mean that we have waived our rights against you and will not mean that
	you do not have to comply with those obligations. If we do waive a default by you, we will only
do so in writing, and that will not mean that we will automatically waive any later default by you.</p>
</br>
<h4>14. Viruses</h4>
<p>You will be responsible for introduction of any viruses, trojans, worms, logic bombs or other
	material which is malicious or technologically harmful. You must not attempt to gain
	unauthorised access to the Site, the server on which the website is stored or any server, computer
	or database connected to the Site. You must not attack the website via a denial-of-service attack
	or a distributed denial-of service attack. By breaching this provision, you would commit a
	criminal offence under the Information Technology Act, 2000. We will report any such breach to
	the relevant law enforcement authorities and we will co-operate with those authorities by
	disclosing your identity to them. In the event of such a breach, your right to use the website will
	cease immediately. You should use your own virus protection software. We cannot and do not
	guarantee or warrant that files available for downloading from the Site will be free of infection by
viruses, worms, Trojan horses or other code that manifest contaminating or destructive properties.</p>
</br>
<h4>15. Links to Third Party Sites</h4>
<p>As a convenience, we may provide links to third party web sites from this website.
	<a href="http://www.caexamclub.com">caexamclub.com</a> is not responsible for and does not endorse the informational content or any
	products or services available on any third-party web site and does not make any representations
	regarding their content or accuracy. We do not control any third party web site, and we are not
	liable for any technological, legal or other consequences that arise out of your visit or transactions
	there. Your use of third party websites is at your own risk and subject to the terms and conditions
	of use for such sites. This means that we are not your agent and will not be a party to any contract
you enter.</p>
</br>
<h4>16. Limitation of Liability and Remedies</h4>
<p>IN NO EVENT WILL <a href="http://www.caexamclub.com">caexamclub.com</a> LICENSORS BE LIABLE FOR ANY DIRECT,
	INDIRECT, INCIDENTAL, CONSEQUENTIAL, SPECIAL, PUNITIVE, EXEMPLARY
	DAMAGES, OR ANY AND ALL OTHER DAMAGES WHATSOEVER (INCLUDING,
	WITHOUT LIMITATION, DAMAGES FOR LOSS OF BUSINESS PROFITS, BUSINESS
	INTERRUPTION, LOSS OF DATA, PERSONAL INJURY, FAILURETO MEET ANY DUTY
	INCLUDING ACTS OF GOOD FAITH OR OF REASONABLE CARE, LACK OF
	NEGLIGENCE, AND FOR ANY OTHER PECUNIARY OR OTHER LOSS WHATSOEVER)
	ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OR PERFORMANCE
	OF THIS SITE, THE DELAY OR INABILITY TO USE THIS SITE, OR THIS AGREEMENT,
	EVEN IN THE EVENT OF FAULT, TORT (INCLUDING NEGLIGENCE), STRICT
	LIABILITY, BREACH OF CONTRACT, OR BREACH OF WARRANTY OF <a href="http://www.caexamclub.com">caexamclub.com</a>
	AND EVEN IF <a href="http://www.caexamclub.com">caexamclub.com</a> HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH
	DAMAGES. NOTWITHSTANDING ANY DAMAGES THAT YOU MIGHT INCUR FOR
	ANY REASON, YOUR EXCLUSIVE REMEDY FOR ALL OF THE FOREGOING WILL BE
	LIMITED TO DISCONTINUING YOUR USE OF THE SITE. THESE LIMITATIONS AND
	EXCLUSIONS REGARDING DAMAGES WILL APPLY EVEN IF ANY REMEDY FAILS.
	IF, HOWEVER, A COURT OF COMPETENT JURISDICTION DETERMINES THAT YOU
	ARE ENTITLED TO DIRECT DAMAGES PURSUANT TO APPLICABLE LAW YOU
	AGREE THAT <a href="http://www.caexamclub.com">caexamclub.com</a>’s LIABILITY WILL NOT EXCEED THE AMOUNT OF Rs
	100.00 (Indian Rupees One Hundred). YOU ACKNOWLEDGE THAT THIS PROVISION IS
FAIR.</p>
</br>
<p><span style="font-size: 20px; font-weight: 700">17. </span>Miscellaneous; Entire Agreement If any part of this Agreement is determined to be illegal, void, invalid or unenforceable, then the invalid or unenforceable provision (or portion) will be deemed superseded by valid, enforceable language that most closely matches the intent and allocation of risk in the original provision (or portion) and the rest of the Agreement will continue in full force and effect. The Agreement constitutes the entire agreement between you and <a href="http://www.caexamclub.com">caexamclub.com</a> with respect to the website and your use of the website, and supersedes all other (prior or contemporaneous) communications or displays whether electronic, oral, or written, between you and <a href="http://www.caexamclub.com">caexamclub.com</a> regarding the Site and your activities.</p>
</br>
<h4>18. Geographical & Export Restrictions	</h4>
<p>You agree that all Content posted or accessible via the website is subject to applicable export
	control laws and regulations of the Indian Government. You agree not to export or re-export any
	Content directly or indirectly, to any country not permitted by Indian government export
restrictions.</p>
</br>
<h4>19. APPLICABLE LAW &JURISDICTION</h4>
<p>This Agreement is governed by the law of India, without giving effect to the principles of
	conflicts of laws thereof. Your consent to this Agreement includes your consent to jurisdiction
	and venue in the courts in Mumbai, Maharashtra in all disputes arising out of or relating to this
	Agreement. <a href="http://www.caexamclub.com">caexamclub.com</a> makes no claims that this website is appropriate for viewing or
	accessing outside India. You consent to exclusive jurisdiction and venue in the courts of Mumbai,
	Maharashtra. You waive all defenses of lack of jurisdiction, venue, or forum non-convenience.
	Use of the website is not authorized in any jurisdiction that does not give effect to all provisions
	of this Agreement. <a href="http://www.caexamclub.com">caexamclub.com</a>’s performance of this Agreement is subject to existing laws
	and legal process, and you agree that we may comply with law enforcement or regulatory
	requests or requirements notwithstanding any contrary term of this Agreement. Any cause of
	action or claim you may bring in connection with this website, including without limitation any
	Content, must be commenced within one (1) month after the claim or cause of action arises
	otherwise such claim or cause of action shall, subject to the applicable law, be deemed to be
	barred. In any dispute between <a href="http://www.caexamclub.com">caexamclub.com</a> and you relating to this website, the prevailing
party will not be entitled to attorneys' fees, costs and expenses.</p>
</br>
<h4>20. TERM & TERMINATION</h4>
<p>We reserve the right to refuse to continue providing you with access to this website if we discover
	that you are incompetent to contract by virtue of your age or otherwise under Applicable Law.
	This Site is not available to persons whose membership has been suspended or terminated by us
	for any reason whatsoever. The Terms shall continue to form a valid and binding contract
	between the user and the website, and shall continue to be in full force and effect until users
	continue to access and use this website. Provided, however, certain sections of these Terms such
	as Disclaimer of all Warranties and Duties, Limitation of Liability and Remedies, Intellectual
	Property Rights, Indemnification, Release and Waiver, Applicable Law & Jurisdiction shall
continue to remain in full force and effect indefinitely.</p>
<hr>
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