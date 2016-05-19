
<!DOCTYPE html>
<html>
<head>
    <title>EaselJS demo: Simple animation</title>
    <link href="../_shared/demo.css" rel="stylesheet" type="text/css">
    <script src="JS/Animation/easeljs-0.8.2.min.js" type="text/javascript"></script>
    <script>

		var stage, circle;

		function init() {
			stage = new createjs.Stage("demoCanvas");

			circle = new createjs.Shape();
			circle.graphics.beginFill("red").drawCircle(0, 0, 40);
			circle.y = 50;
			stage.addChild(circle);
			circle.addEventListener("click", function (event) { alert("1") })
            
	
			circle2 = new createjs.Shape();
			circle2.graphics.beginFill("blue").drawCircle(0, 50, 40);
			circle2.y = 50;
			stage.addChild(circle2);
            circle2.addEventListener("click",function(event){stage.removeChild(circle2)})

             

			createjs.Ticker.on("tick", tick);
			createjs.Ticker.setFPS(30);


			
		}

		function tick(event) {
            
			circle.x = circle.x + 5;
			if (circle.x > stage.canvas.width) { circle.x = 0; }

			circle2.x = circle2.x + 10;
			if (circle2.x > stage.canvas.width) { circle2.x = 0; }


			circle.alpha = 0.1;
			var pt = circle2.localToLocal(10, 0, circle);
			if (circle.hitTest(pt.x, pt.y)) { circle.alpha = 1; }


			stage.update(event); // important!!
		}
    </script>
</head>
<body onload="init();">
    <canvas id="demoCanvas" width="500" height="300">
        alternate content
    </canvas>
</body>
</html>