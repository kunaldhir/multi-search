<center><h2>Multi Search</h2></center>

<form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
<input type="text" name="text" id="text" placeholder"type here...">
<input type="submit" value="Search" id="search">
</form>

<?php
if (isset($_POST["search"])){
	
	$name=$_POST["name"];
}
?>
		
<iframe src='https://www.google.co.in/?gfe_rd=cr&ei=plLTU-e8HISL8Qews4DoBg#q=<?php echo$name;?>' width = '25%' height = '500px'></iframe>

