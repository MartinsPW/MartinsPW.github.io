<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');
body{
	font-family: 'Open Sans', sans-serif;
		min-height: 100%;
		min-height: 100vh;
		display: flex;
		flex-direction: column;
		flex-wrap: nowrap;
}
body > main{
	flex-grow: 1;
	height: 100%;
}

.barra{
	color: 	#e1e1e1;
	background-color: #1c1c1c;
	padding:20px;
	border-bottom: 5px solid #ab1323;
	border-radius:5px;
	text-height:30px;
	display: none;
	z-index:300;
}
button{
	-o-transition:.5s;
	-ms-transition:.5s;
	-moz-transition:.5s;
	-webkit-transition:.5s;
	transition-property: width;
	transition:.3s;
	margin-top:10px;
	background-color: #1c96c5;
	color: #fff;
	border: 2px solid #62c1e5;
	padding:10px;
	width:200px;
	border-radius:5px;
	font-size:17px;
	margin-bottom:10px;
}

button:hover{
	background-color: #2B5E76;
}
span{
	display: inline-block;
}
</style>
<html>
<head>

		<script src="./recursos/js/jquery-3.2.1.min.js"></script>
</head>


<body>
<header>
</header>


<main>

<div class="barra" onclick="ativa2();">Ativou notificação pelo botão:&nbsp&nbsp&nbsp&nbsp<code><b id="bt2"></b></code></div>
<center><button id="bt1" onclick="ativa();">Ativar notificação</button></center>

</main>

<footer>
</footer>



</body>
</html>

<script>
function ativa2(){
	$( ".barra" ).slideUp(200);
  return;
}
function ativa(){
	$("#bt2").text($("#bt1").text());
	$( ".barra" ).slideToggle(200);
	setTimeout(function() {
            $( ".barra" ).slideUp(300);
        }, 2800);
}
</script>
