<?php include("db.php");?>
<?php include("functions.php");?>
<?php include("include/header.php");?>
	<div class="container" style="padding: 100px;">
	<h1 class="text-center">READ</h1>
		<div class="col-sm-6">
			<pre class="bg-warning">
				<?php readRows()?>
			</pre>
		</div>
	</div>
<?php include("include/footer.php");?>