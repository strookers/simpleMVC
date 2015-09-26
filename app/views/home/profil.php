<<div class="container">
	
<h1>Profil</h1>
<canvas id="ctx" height="500px" width="500px" style="border:1px solid black"></canvas>
<script>
	var ctx = document.getElementById("ctx").getContext("2d");

	ctx.font = '30px Arial';        //Font used
	ctx.fillStyle = 'red';          //Color of the text and forms
	ctx.globalAlpha = 0.5;          //Transparency 0 = invisble, 1 = visible
	 
	//2. Draw something ()
	ctx.fillText('Hello',50,50);          //Clear Canvas ... ctx.fillRect(startX,startY,width,height);
</script>
</div>