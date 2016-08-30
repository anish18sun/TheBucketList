<!DOCTYPE html>
<html>
<head>
    <title>Movie Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="src/page.css" rel="stylesheet" />
    <link href="demos/demo1/super-panel.css" rel="stylesheet" />
    <script src="demos/demo1/super-panel.js"></script>
    <style>ul li {padding:10px 0;}</style>
</head>
<body>
    <header>
        <span data-panel="panel1" class="panel-button"></span>
        <a class="logo" href="index.php">TheBucketList</a>
        <span id="top-nav">
          <!--  <a href="demo1.html" class="active">DEMO 1</a> -->
        </span>
    </header>        
    <div style="width:600px;margin:0 auto;padding:80px;background:white;">
        <h1>Demo 1: Super Panel</h1>
        <p>&nbsp;</p>
        <p>Click on the button at the top left corner of the screen to see the Super Panel.</p>
        <p>&nbsp;</p>
        <p>The panel has been set to <b class="cn">slideInFrom: "left"</b> in the <em>super-panel.js</em>.</p>
        <p>&nbsp;</p>
        <h3>slideInFrom</h3>
        <p>The slide direction when the panel is opening. Its value can be:</p>
        <p>"left", "right", "top", "bottom", or "none"</p>
        <p><b>"none"</b> means no slide direction. Then the panel will fade in from its default position.</p>
        <ul>
            <li>You can also add an offset value to the direction.
            <br />For example, <b>"top, 10%"</b> (demo 3 has this setting), then the panel will slide in from 10% of its top position.</li>
            <li>
                Usually the style of #panel1 is set to:
                <ul>
                    <li>
                        When <span class="cn">{ slideInFrom: left }</span>:<br />
                        <code>#panel1 {left:0; right:auto;}</code>
                    </li>
                    <li>
                        When <span class="cn">{ slideInFrom: right }</span>:<br />
                        <code>#panel1 {left:auto; right:0;}</code>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="panel1">
		</br></br>
        <!--<div style="text-align:center;margin:20px 0 10px;">
            <img src="src/socials.png" />
        </div>-->
        <div id="vertical-nav">
            <a href="demo1.html" class="active">DEMO 1</a>
            <a href="demo2.html">DEMO 2</a>
            <a href="demo3.html">DEMO 3</a>
            <a href="demo4.html">DEMO 4</a>
        </div>
        <br /><br />
        <p style="text-align:center;font-size:smaller;font-style:italic;">
            It was the best of times, It was the worst of times, It was life.<br />
        </p>
    </div>
</body>
</html>
