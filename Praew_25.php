<?php include("header.php"); ?>
<body>
<pre style="font-family:mono;font-size:20px;">

<?php
for($r=1;$r<=5;$r++) {
	for($col=1;$col<=5-$r;$col++) {
		echo("*");	
	}
	
	for($col=1;$col<=$r;$col++){
		echo(6-$r);
	}
	for($col=2;$col<=$r;$col++){
		echo(6-$r);
	}
	for($col=0;$col<=5-$r;$col++) {
		echo("*");	
	}
	echo "\n";
?></pre></body>
<?php include("footer.php"); ?>
