<?php require 'assets/header.php'; ?>
<?php require 'assets/navbar.php'; ?>
<style>
	.left {
		text-align: left;
	}

	.center {
		text-align: center;
	}

	.right {
		text-align: right;
	}
	.2ndrow {
		padding-top: -20px;
	}

</style>

	<div class="dark"><div class="container">

		<div class="page-header">
			<h1>ChromaDonate Installation Page</h1>
		</div>
		<p class="lead width-limit">
			Welcome to the one time installation page for the Chroma Hills donation system. It is imperative that you delete this page one you have finished the installation.
		</p>
		<p>Or <a href="http://chromahills.com">return back</a> to the main site.</p>

	</div><!--contain--></div><!--dark-->











	<div class="cream left"><div class="container">

		<h1 class="hobo">Installation Page</h1>
		<p>Welcome to the one time installation page of the Chroma Hills donations system</p>


		<!--========================= A STEP ========================= -->
		<div class="row">

			<div class="col-md-2">
				<h1 class="hobo right">Pre</h1>
			</div><!--end of 4th-->

			<div class="col-md-8">
				<h3>
					Before Installation
				</h3>

				<p>
					It is required that you have installed and configured <B>PHP</B> and <B>MYSQL</B> to allow this installation to work.<br/>

					<div class="more-div">
						<a href="#">Click here for instructions</a>
						<div class="more">
							<p>
								Assuming that you have CentOS install the following commands would be:<br/>
								<code>yum install httpd php-mysql php mysql-server wget phpmyadmin</code>
							</p>
							<p>
								Next turn on httpd (web server daemon) and mysqld (database daemon).<br/>
								<code>service httpd start</code> <code>service mysqld start</code>
							</p>
							<p>
								To remove the Apache CentOS splash page please <code>#</code> (comment) out all lines.<br/>
								<code>vi /etc/httpd/conf.d/welcome.conf</code>
							</p>

							<div class="row">

								<div class="col-md-1"></div>

								<div class="col-md-1"><b class="right">Notice:</b></div>

								<div class="col-md-8">
									<p>
										To configure MySQL please click on the next <b>PHPMYADMIN</b> instructions
										and go to step two for a walk-through on what to put on there.
									</p>
								</div><!--end of 10th-->

							</div><!--row-->
						</div>
					</div>
				</p><hr>

				<p>
					Also, if you wish, you can install <B>PHPMYADMIN</B> to manage other databases, but it is not required.<br/>
					However, these next three steps that are explained below in the instructions are vital if you do not already have a fully operation SQL system.

					<div class="more-div">
						<a href="#">Click here for instructions</a>
						<div class="more">

							<h3>Step One: Installing EPEL repositories</h3>
							<div class="row">

								<div class="col-md-2"><b class="right">What is EPEL?</b></div>

								<div class="col-md-8">
									<p>
										The phpMyAdmin install and scripts package is not included in the CentOS default repositories,
										but it is available in the Fedora Projects EPEL (Extra Packages for Enterprise Linux) repositories.
									</p>
								</div><!--end of 10th-->

							</div><!--row-->

							<p>
								To add the repository to your yum source list access grab the download by using the following commands:<br/>
								<code>cd ~</code> <code>wget http://download.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-8.noarch.rpm</code><br/>
								Note, this is a 64-bit CentOS repo, but this perpetualar download will work on both 32-bit and 64-bit.
							</p>
							<p>
								This will download the package into our home directory. Install it by typing:<br/>
								<code>sudo rpm -ivh epel-release*</code>
							</p>
							<p>
								To check if it is on your system take a look at your repolist (list of repositories).<br/>
								<code>yum repolist</code>
							</p>
							<p>
								Since the EPEL repo is present, you can remove the configuration file as it will not be used again.<br/>
								<code>rm epel-release*</code>
							</p>

						<a href="#">Close instructions</a></div>



						<div class="more">

							<h3>Step Two: Configuring MySQL</h3>

							<p>
								The final stage in this installation is to <br/>
								<code>sudo mysql_install_db</code><br/>
							</p>
							<p>
								Afterwards, you can now customise your mysql settings by starting the installation script. (It's easier than it sounds) <br/>
								<code>sudo mysql_secure_installation</code>
								<p>You will be asked a number of questions:</p>

									<ul>
										<li><p>Enter current password for root: <strong>press Enter</strong></p></li>
										<li><p>Set root password? <strong>Y</strong></p>
										<ul>
											<li>New password: <strong>Type an administrative password here</strong></li>
											<li>Re-enter new password: <strong>Confirm the password</strong></li>
										</ul></li>
										<li><p>Remove anonymous users? <strong>Y</strong></p></li>
										<li><p>Disallow root login remotely? <strong>Y</strong></p></li>
										<li><p>Remove test database and access to it? <strong>Y</strong></p></li>
										<li><p>Reload privilege tables now? <strong>Y</strong></p></li>
									</ul>

							</p>
							<p>
								Now we can test that if you can remember your password (and if the setup works as it should).<br/>
								<code>mysql -u root -p</code>
							</p>
							<p>
								You are logging in as root, now your password <b>will not be visible</b> when you enter it.<br/>
								But you still input it as normal then click enter.<br/>
								<code>Enter password:</code><br/>
								If you entered it successfuly then you will be greeted by a mysql promt.
							</p>
							<p>
								The final thing to do in your command line for this step is to exit MySQL<br/>
								<code>exit;</code><br/>
							</p>
							<p>
								You will now exit out of the MySQL system on your server and back to the CentOS structure.
							</p>

						<a href="#">Close instructions</a></div>




						<div class="more">

							<h3>Step Three: Configuring MySQL</h3>

							<p>
								The final stage in this installation is to configure the phpMyAdmin config files.<br/>
								<code>sudo nano /etc/httpd/conf.d/phpMyAdmin.conf</code><br/>
							</p>
							<div class="row">

								<div class="col-md-1"></div>

								<div class="col-md-1"><b class="right">Notice:</b></div>

								<div class="col-md-8">
									<p>
										It is understandable that you many not want to completely lock down your phpMyAdmin
										and as much as it is advisable to do this it is just simple not practical to do.
									</p>
									<p>
										As most people and probably yourself will be using <b>dynamic IP address</b> to protect
										yourself and your home network we cannot limit phpMyAdmin to request IP so we will allow
										all IPs but you will still need a password to get into this system.
									</p>
								</div><!--end of 10th-->

							</div><!--row-->




							<div class="row">

								<div class="col-md-5 col-md-offset-1">
									<h3>Replace This</h3>
									<div class="code2">
										&lt;Directory /usr/share/phpMyAdmin/&gt;<br/>
		  									&emsp; &lt;IfModule mod_authz_core.c&gt;<br/>
											&emsp; &emsp;    # Apache 2.4<br/>
											&emsp; &emsp;    &lt;RequireAny&gt;<br/>
											&emsp; &emsp; &emsp;   <b>Require ip 127.0.0.1</b><br/>
											&emsp; &emsp; &emsp;   <b>Require ip ::1</b><br/>
											&emsp; &emsp;    &lt;/RequireAny&gt;<br/>
											&emsp; &lt;/IfModule&gt;<br/>
											&emsp; &lt;IfModule !mod_authz_core.c&gt;<br/>
											&emsp; &emsp;    # Apache 2.2<br/>
											&emsp; &emsp;    Order Deny,Allow<br/>
											&emsp; &emsp;    <b>Deny from All</b><br/>
											&emsp; &emsp;    Allow from 127.0.0.1<br/>
											&emsp; &emsp;    Allow from ::1<br/>
											&emsp; &lt;/IfModule&gt;<br/>
										&lt;/Directory&gt;<br/>
									</div>
								</div>

								<div class="col-md-5">
									<h3>With This</h3>
									<div class="code2">
										&lt;Directory /usr/share/phpMyAdmin/&gt;<br/>
												&emsp; &lt;IfModule mod_authz_core.c&gt;<br/>
											&emsp; &emsp;    # Apache 2.4<br/>
											&emsp; &emsp;    &lt;RequireAny&gt;<br/>
											<br/>
											<br/>
											&emsp; &emsp;    &lt;/RequireAny&gt;<br/>
											&emsp; &lt;/IfModule&gt;<br/>
											&emsp; &lt;IfModule !mod_authz_core.c&gt;<br/>
											&emsp; &emsp;    # Apache 2.2<br/>
											&emsp; &emsp;    Order Deny,Allow<br/>
											&emsp; &emsp;    <b>Allow from All</b><br/>
											&emsp; &emsp;    Allow from 127.0.0.1<br/>
											&emsp; &emsp;    Allow from ::1<br/>
											&emsp; &lt;/IfModule&gt;<br/>
										&lt;/Directory&gt;<br/>
									</div>
								</div>

							</div><!--row-->


							<br/>

							<p>
								Finally a quick restart and the phpMyAdmin will be ready to log in with user <code>root</code> and your password.<br/>
								Once you restart the webserver to apply your config changes that is.<br/>
								<code>service httpd restart</code>
							</p>
							<p>
								If you want to take a look to see if phpMyAdmin is working currently then you can view it here: (most likely)<br/>
								<code><a href="../../phpmyadmin" target="_blank">Click Here</a></code><br/>
								If doesn't work then it will be your server IP address followed by <code>/phpmyadmin</code>.
							</p>


						<a href="#">Close instructions</a></div>

					</div><!--END OF INSTRUCTIONS FOR SQL... FINALLY-->


				</p><hr>

				<p>
					Finally, it is seriously recommended that you only allow the pages to be viewed in <B>HTTPS</B> using a <B>SSL Certificate</B>.<br/>
					This will avoid any security vulnerabilities and to encrypt your data.
				</p>
				<div class="more-div">
					<a href="#">Click here for instructions</a>
					<div class="more">
						<p>
							As SSL and HTTPS is a too complex to cover in one page I will leave a link below to CloudFlare,<br/>
							who for $20 (Approx. £13) a month will manage the SSL, HTTPS and provide Anayltics and DDoS protection on their <a href="http://cloudflare.com/">Cloud Flare Pro</a> plan.
						</p>
					</div>
				</div>





			</div><!--end of 8th-->


		</div><!--row-->











































		<!--========================= A STEP ========================= -->
		<div class="row">

			<div class="col-md-2">
				<h1 class="hobo right">Step 1</h1>
			</div><!--end of 4th-->

			<div class="col-md-10">
				<h3>
					Setting up a database
				</h3>
				<p>
					The first step to setting up ChromaDonate is to set up a database, preferably running on the same system that this system is on for security reasons.<br/>
					Using the Pre installation, hopefully everything should be working correctly for you.
				</p>

				<div class="row">
					<div class="col-md-4">
						<div class="install">
							<div class="bar">
								Host: <input class="address" value="" placeholder="localhost" target="_blank" name="u" id="u">
							</div>
						</div>
					</div><!--end of 4th-->
					<div class="col-md-4">
						<div class="install">
							<div class="bar">
								Username: <input class="address" value="" placeholder="ChromaDonateUser" target="_blank" name="u" id="u">
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="install">
							<div class="bar">
								Password: <input class="address" value="" placeholder="A;23#s32c1T81a" target="_blank" name="u" id="u">
							</div>
						</div>
					</div><!--end of 4th-->
					<div class="col-md-4">
						<div class="install">
							<div class="bar">
								Database Name: <input class="address" value="" placeholder="ChromaDonateDB" target="_blank" name="u" id="u">
							</div>
						</div>
					</div>
				</div>


				<h3>
					Testing the connection and hooking into database
				</h3>
				<p>
					Once you have set up your system you can then, using thing guides above create your own database.<br/>
					Check the connection, then if successful you can save the settings to the database by clicking the green button.
				</p>

				<div class="row">
					<div class="col-md-2">
						<form method="post">
							<input type="submit" class="button button-grey" name="submit2" value="Test Connection">
						</form>
					</div>
					<div class="col-md-4">
						<p>
							Test your database connection by click on button to the left. If successful you will be allow to save the settings.
						</p>
					</div><!--end of 4th-->
					<div class="col-md-4">
						<?php
							if(isset($_POST['submit2'])){
							echo "<h3>Test Successful</h3>";
						} ?>
					</div><!--end of 4th-->
				</div>

				<div class="row">
					<div class="col-md-2">
						<form method="post">
							<?php
								if(isset($_POST['submit2'])){
									echo "<input type='submit' class='button button-successful' name='submit' value='Save Settings'>";
								} else {
									echo "<input type='submit' class='button button-grey' style='colour: grey;' name='submit' value=' Please test first. '>";
								}
							?>
						</form>
					</div>
					<div class="col-md-4">
						<p>
							If everything went well then the button to the left will turn green allowing you to save the settings into the system.
						</p>
					</div><!--end of 4th-->
				</div>


			</div><!--end of 4th-->

		</div><!--row-->





	</div><!--contain--></div><!--cream-->






<form method="post">
	<input type="submit" class="button button-grey" name="submit" value="say hello">
</form>

<?php
if(isset($_POST['submit'])){
	echo "<p>hello</p>";
}

?>

<script>
function clear_div() {
    document.getElementById("result").innerHTML = "";
}
</script>

<div id="result"></div>
<form method="POST" action="install.php" onsubmit="clear_div()">
<input class="button button-grey" type="submit" value="delete all form entries">

<?php
/*
// Create table
$sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";

// Execute query
if (mysqli_query($con,$sql)) {
  echo "Table persons created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}

$sql = "CREATE TABLE Persons
(
PID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(PID),
FirstName CHAR(15),
LastName CHAR(15),
Age INT
)";
*/
?>

<?php require 'assets/footer.php'; ?>