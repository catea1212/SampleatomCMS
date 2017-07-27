<?php
	#function to get nav infos from database
function nav_main($dbc, $pageID)
	{
		
		$q="SELECT * FROM pages";
		$r=mysqli_query($dbc, $q);
		while ($nav=mysqli_fetch_assoc($r)) 
		{
			//echo '<li><a href="?page='.$nav['id'].'">'.$nav['title'].'</a></li>';
		?>
		<!--hier is code of html-->
		<li <?php if($pageID==$nav['id']) {echo 'class="active"'; } ?>><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['label'] ?></a></li> <!-- active for default-->
	
		<?php	}
		
	}
?>