<nav class="navbar navbar-default" role="navigation"> <!--Stlye for other pages stehen same-->
	<div class="container"> <!--put Navigation also in a container-->
		<ul class="nav navbar-nav">
			<!--Previous<li class="active"><a href="?page=1">Home</a></li>-->
			<?php nav_main($dbc, $pageID);
				?>	
		
			<!--Previous
			<li <?php if($pageID==1) {echo 'class="active"'; } ?>><a href="?page=1">Home</a></li> 
			<li <?php if($pageID==2) {echo 'class="active"'; } ?>><a href="?page=2">About us</a></li>
			<li <?php if($pageID==3) {echo 'class="active"'; } ?>><a href="?page=3">FAQ</a></li>
			<li <?php if($pageID==4) {echo 'class="active"'; } ?>><a href="?page=4">Contact</a></li>
			-->
			<li <?php if($pageID==3) {echo 'class="active"'; } ?>><a href="?page=3">FAQ</a></li>
			<li <?php if($pageID==4) {echo 'class="active"'; } ?>><a href="?page=4">Contact</a></li>
		</ul>
	</div>
</nav> <!-- END main navigation-->