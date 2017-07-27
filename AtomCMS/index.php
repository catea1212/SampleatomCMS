<!--variables from setup.php can be used-->
<?php include('config/setup.php'); ?>


<!DOCTYPE html>
<html>
	<!--The <head> element is a container for metadata (data about data) and is placed between the <html> tag and the <body> tag.

HTML metadata is data about the HTML document. Metadata is not displayed.

Metadata typically define the document title, character set, styles, links, scripts, and other meta information.

The following tags describe metadata: <title>, <style>, <meta>, <link>, <script>, and <base>.
 -->
	<head>
		<!-- previous <title>Atom CMS 2.0</title>-->
		<!-- previous title><?php echo $page_title; ?> | <?php echo $site_title; ?> </title>-->
		<!-- previous <title><?php echo $page_title.'|'. $site_title; ?></title>-->
		<title><?php echo $apage['title'].' | '.$site_title; ?></title>
		<!--viewport template from bootrap-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- include css file use php-->
		<?php include('config/css.php');  //path of css.php ?>
		<?php include('config/js.php');  //path of js.php ?>			
	</head>
	<!--contents show on website-->
	<body>
		<!-- navigation bar-->
		<?php include(D_TEMPLATE.'/navigation.php');?>
		
		<div class="container">
			<h1><?php echo $apage['header']; ?></h1>
			<p><?php echo $apage['body']; ?></p>
		</div> <!-- END Content Area-->
		<!--footer-->
		<?php include(D_TEMPLATE.'/footer.php');?>
		
	</body>	
</html>
