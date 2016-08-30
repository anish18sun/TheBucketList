<!DOCTYPE html>
<html>
<?php 
	$handle = fopen("data/counter.txt", "r");
	if(!$handle){
	echo "could not open the file" ;
	}
	else {
		$counter = ( int ) fread ($handle,20) ;
		fclose ($handle) ;
		$counter++ ;
		//echo" <div class='div1'><h2 align='center'> Hits : ".  $counter ."</h2></div>" ;
		$handle =  fopen("data/counter.txt", "w" ) ;
		fwrite($handle,$counter) ;
		fclose ($handle) ;
	}
?>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/page.css" rel="stylesheet" />
    <link href="css/super-panel.css" rel="stylesheet" />
    <script src="js/super-panel.js"></script>
    <style>ul li {padding:10px 0;}</style>
	<header>
        <span data-panel="panel1" class="panel-button"></span>
        <a class="logo" href="index.php">TheBucketList</a>
		<span id="top-nav">
		  <a style="border-left:1px solid #ccc; font-size:18px; font-family: 'Courier New', Georgia;"><b>Hits : <?php echo $counter."</b>";?></a>
          <img margin-right=5px; id="status" src="images/pause.png" alt="Play Button" width="50" height="50"  style="cursor: pointer;" onclick="playSound()" >
        </span>
    </header>   
    <title>TheBucketList</title>
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="css/generic.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- <audio src="DC/The_Big_Ship.mp3" autoplay>
<p>If you are reading this, it is because your browser does not support the audio element.     </p>
</audio> -->
</br>

<audio id="sound" src="sound/The_Big_Ship.mp3" autoplay loop></audio>
<script type="text/javascript">
var audio = document.getElementById("sound");
	function playSound()
	{
		if (audio.paused == false){
			document.getElementById('status').src='images/play.png';
			audio.pause();
			}
		else{
			document.getElementById('status').src='images/pause.png';
			audio.play();
		}
	}
</script>

   <!-- <div class="div1"><h2>The Bucket List</h2></br></br>-->
   <div class="div2">
       
    </div>
    <div id="sliderFrame">
        <div id="slider">
		
	<!-- 	Append this section to change the images -->
            <a href="http://www.imdb.com/title/tt1049413/"><img src="images/image-slider-1.jpg" alt="Up(2009)"/></a>
            <a href="http://www.imdb.com/title/tt2582496/"><img src="images/image-slider-2.gif" alt="Me and Earl and The Dying Girl(2015)"/></a>
            <a href="http://www.imdb.com/title/tt2370248/"><img src="images/image-slider-3.jpeg" alt="Short Term 12 (2013)"/></a>
            <a href="http://www.imdb.com/title/tt1659337/"><img src="images/image-slider-4.gif" alt="The Perks of Being a Wallflower(2012)"/></a>
       
	   </div>
        <div id="htmlcaption" style="display: none;">
            
        </div>
    </div>
	<div class="div2">
       
    </div>
	<!--<div class="div1"><a href="http://172.22.31.147:81/DC"><h2 align="center">Shared-TheHurtLocker</h2></a>
	<div class="div1"><a href="http://172.22.30.182:81/Shared"><h2 align="center">Shared-Linus</h2></a>-->
    <div class="div2">
       
    </div>
	<div id="panel1">
		</br></br>
        <!--<div style="text-align:center;margin:20px 0 10px;">
            <img src="src/socials.png" />
        </div>-->
        <div id="vertical-nav">
            <a href="DC">TheHurtLocker</a>
            <!--<a href="http://172.22.30.182:81/Shared">Linus</a>-->
            <a href="grid.php">Movies</a>
			<a href="movie_req.php">Movie Request</a>
			<a href="chat_bot.php">Chat Bot</a>
        </div>
        <br /><br />
        <p style="text-align:center;font-size:smaller;font-style:italic;">
            It was the best of times, It was the worst of times, It was life.<br />
        </p>
    </div>
</body>
</html>
