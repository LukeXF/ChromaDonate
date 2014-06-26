<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- Begin page content -->








	<div class="dark"><div class="container">

		<div class="page-header">
			<img src="./../assets/img/CHLogo.png" alt="some_text" width="1000px">
			<h1>Admin Area</h1>
		</div>
		<p class="lead width-limit">
			Welcome to the Admin section of donation system.
			Please leave this part of the site immediately if you do not have permission to view this page.
		</p>
		<p>Click <a href="../">here</a> to return back to the client panel.</p>

	</div><!--contain--></div><!--dark-->



	<div class="cream"><div class="container">

		<h2 class="hobo"><?php echo "Your IP Address is " . $_SERVER["REMOTE_ADDR"] . " and is been tracked for security reasons."; ?></h2>


		</div></div>


<?php require './../assets/footer.php'; ?>