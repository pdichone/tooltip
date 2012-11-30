



<!DOCTYPE html>

<html>

<!--
	This is a jQuery Tools standalone demo. Feel free to copy/paste.
	                                                         
	http://flowplayer.org/tools/demos/
	
	Do *not* reference CSS files and images from flowplayer.org when in production  

	Enjoy!
-->

<head>
	<title>jQuery Tools standalone demo</title>

	<!-- include the Tools -->
	<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>

	<!-- standalone page styling (can be removed) -->
	<link rel="stylesheet" type="text/css" href="http://static.flowplayer.org/tools/css/standalone.css"/>	


<style>

body {
	margin:200px;
}	



/* trigger button */
#download_now {
	background:transparent url(/img/home/download.png) no-repeat scroll 0 0;
	display:block;
	height:44px;
	margin-bottom:30px;
	overflow:hidden;
	text-indent:-999em;
	width:159px;
	cursor:pointer;
}

/* mouseover state */
#download_now:hover {
	background-position:0 -44px ;		
}

/* clicked state */
#download_now:focus {
	background-position:0 -88px;
}

/* tooltip styling */
.tooltip {
	display:none;
	background:url(http://static.flowplayer.org/tools/img/tooltip/black_arrow_big.png);
	height:163px;
	padding:40px 30px 10px 30px;
	width:310px;
	font-size:11px;
	color:#fff;
}

/* a .label element inside tooltip */
.tooltip .label {
	color:yellow;
	width:35px;
}

.tooltip a {
	color:#ad4;
	font-size:11px;
	font-weight:bold;
}
</style>
</head>

<body>



<!-- trigger element. a regular workable link -->
<a id="download_now">Download now</a>

<!-- tooltip element -->
<div class="tooltip">

	<img src="http://static.flowplayer.org/img/title/eye.png" alt="Flying screens" 
		style="float:left;margin:0 15px 20px 0" />

	<table style="margin:0">
		<tr>
			<td class="label">File</td>
			<td>flowplayer-3.2.7.zip</td>
		</tr>
		<tr>
			<td class="label">Date</td>
			<td>2011-03-03</td>
		</tr>
		<tr>
			<td class="label">Size</td>
			<td>112 kB</td>
		</tr>
		<tr>
			<td class="label">OS</td>
			<td>all</td>
		</tr>		
	</table>

	<a href="/3.2/">What's new in 3.2</a>
</div>

<script>
// What is $(document).ready ? See: http://flowplayer.org/tools/documentation/basics.html#document_ready
$(document).ready(function() {

$("#download_now").tooltip({ effect: 'slide'});
});
</script>
</body>

</html>
