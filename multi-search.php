<center><h2>Multi Search</h2>
<form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
<input type="text" name="text" id="text">
<input type="submit" value="Search" id="search">
</form>
</center>

<?php
if (isset($_POST["search"])){
	
	$text=$_POST["text"];
}
?>
		
<iframe src='https://www.google.co.in/?gfe_rd=cr&ei=plLTU-e8HISL8Qews4DoBg#q=<?php echo $text;?>' width = '25%' height = '500px'></iframe>
<iframe src='https://in.search.yahoo.com/search;_ylt=AsxYWMauBuyfJO9_S.55iv6uitIF?p=<?php echo $text;?>&toggle=1&cop=mss&ei=UTF-8&fr=yfp-t-704&fp=1' width = '25%' height = '500px'></iframe>
<iframe src='http://www.bing.com/search?q=<?php echo $text;?>&qs=n&form=QBLH&filt=all&pq=abc&sc=0-0&sp=-1&sk=&cvid=d2112873df754b4fa0609087a60dd00d' width = '25%' height = '500px'></iframe>


