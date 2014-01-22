<html>
	<head>
		<title>prueba animate</title>
	</head>

    <!-- <link href="../../view/style/bootstrap-responsive.min.css" rel="stylesheet"> -->
	<style>
		.frame{
			overflow: hidden;
			background-color: #333;
			width: 100px;
			height: 20px;
		}
        .container{
			background-color: #666;
			height: 20px;
			display: inline;
			position: relative;			
            white-space: nowrap;
		}
        .container a{
		}
		.container p{
		}
	</style>

	<body>
		<div id="frame" class="frame">
		  <div id="container" class="container">
		     <a href="#">contenido del contenedor</a>
		  </div>
		</div>
		<div id="frame2" class="frame">
		  <div id="container2" class="container">
		     <a href="#">contenido del contenedor mas largo que el otro por lejos</a>
		  </div>
		</div>
		<br/>
		<br/>
		<br/>
		<input type="button" value="Animate" onclick="slide_into_loop($('#frame'), $('#container'));" />
		<input type="button" value="Animate2" onclick="slide_into_loop($('#frame2'), $('#container2'));" />
		
		<div id="log"></div>
	</body>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>
       
        function slide_into_loop(bundle, content){
        	var overflow = $(content).width() - $(bundle).width();
        	var slide = function(){ slide_into(bundle, content, overflow)};
        	setTimeout(slide, 0);
        	var handler = self.setInterval(slide , overflow * 80);
        }
        

        function slide_into(bundle, content, overflow){
        	log('left ');
            $( content ).animate(
                {left: "-=" + overflow},
                overflow * 40,
                function() {
        	        log('right ');
	                $( content ).animate(
		                {left: "+=" + overflow},
		                overflow * 5,
		                function() {
		                // Animation complete.
				        }
				    );
			    }
            );
		}


		function log(text){
			$('#log').html += text;
		} 
	</script>
	
</html>