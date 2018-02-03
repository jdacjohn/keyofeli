<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="description" content="Home Page provides specific, overall information about the film, including title, credits, photos of central characters and images, trailer and links to facebook and other pages on the site." />
<meta name="keywords" content="In The Key Of Eli, Scarpaci/Kelly Productions" />
<LINK REL=StyleSheet HREF="css/global.css" TYPE="text/css" MEDIA=screen>

		<script type='text/javascript' src='http://inthekeyofeli.com/jwplayer/swfobject.js'></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
		<!-- include Cycle plugin --> 
		<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script> 
		<script type="text/javascript"> 
		$(document).ready(function() {
		    $('#background_home').cycle({
				fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
			});
		});
		</script>
	</script>
<title>In The Key Of Eli Movie - Official Site</title>

</head>

<body>

<div id="header"><? include("header.php");?></div>

<div id="content">

<div id="home_contentholder">
	
<div id="hometrailer"><!-- START OF THE PLAYER EMBEDDING TO COPY-PASTE -->

	

		<div id='mediaspace'>Trailer for In the Key of Eli - Please re-load your page if movie doesn't load</div>


		<script type='text/javascript'>
		  var so = new SWFObject('http://inthekeyofeli.com/jwplayer/player.swf','mpl','556','376','9');
		  so.addParam('allowfullscreen','true');
		  so.addParam('allowscriptaccess','always');
		  so.addParam('wmode','opaque');
		  so.addVariable('file','http://inthekeyofeli.com/Eli_Trailer.flv');
		  so.addVariable('image','http://inthekeyofeli.com/images/trailer_still.jpg');
		  so.addVariable('backcolor','f3bf83');
		  so.write('mediaspace');
		</script>
		<!-- END OF THE PLAYER EMBEDDING -->
	</div>


	<div id="background_home">
<img src="images/back_home01.jpg" width="440" height="576" alt="The Key">

<img src="images/back_home02.jpg" width="440" height="576" alt="Eli">
<img src="images/back_home05.jpg" width="440" height="576" alt="Sydney">
<img src="images/back_home03.jpg" width="440" height="576" alt="Auggie">
<img src="images/back_home04.jpg" width="440" height="576" alt="Joey">

</div><!--End Background Images-->


</div><!--End Home Content Holder-->

</div><!--End Content-->

<div id="footer"><? include("footer.php");?></div>
	

</body>
</html>
