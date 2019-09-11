<?php include("header.php"); ?>
<body>
<style>
@font-face{
font-family:mono;
src:url('mono.ttf');
}
</style>
<pre style="font-family:mono;font-size:30px;">
<?php 
for($i=1;$i<= 5;$i++){
	echo $i;
 for($j=1;$j<=($i+4);$j++){
   echo "*";
  }


  echo "\n";for($i=1;$j<=4;$j++) {
	for($i=1;$i<=4-$j;$i++) {
	echo(" ");
	}
	echo($j);
	for($i=2;$i<=$j;$i++){
	echo("**");
	}
	echo($j);
	echo "<br/>";
}
for($j=3;$j>=1;$j--) {
	for($i=1;$i<=4-$j;$i++) {
	echo(" ");
	}
	echo($i);

	for($i=2;$i<=$j;$i++){
	echo("**");
	}
	echo($j);
	echo "<br/>";
}

?></pre></body>
<?php include("footer.php"); ?>