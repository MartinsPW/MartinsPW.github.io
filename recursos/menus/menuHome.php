
<div class="menu">
	<div class="container">
		<img class="logo" src="./recursos/imagens/logo3.png" height="80" width="75" class="logotipo"><font color="gold" size="3"><b><a href=<?php echo $BASE_URL; ?>><font color="gold">| TrainEnergy - Store</font></a></b></font>
		<nav>
			<ul>
				<li><a href=<?php echo $BASE_URL; ?>>Home</a></li>
				<li><a href="#">Sobre</a></li>
				<li><a href="#">Preço</a></li>
					
			</ul>
			<ul>
				<li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
				<li><a href="#">Registar</a></li>
			</ul>
		</nav>
	</div>
</div>
<script>

</script>
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #F25C29; color: white;">
        <h5 class="modal-title" id="login">TrainEnergy - Iniciar sessão </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<div class="container">
			 <form class="form-signin" onsubmit="return login();">
					<img class="logo" src="./recursos/imagens/logo3.png" height="80" width="75" class="logotipo"><font color="gold" size="3"><b><font color="#4A5F75">| TrainEnergy - Store</font></b></font>
					<input type="email" id="inputEmail" class="form-control" placeholder="Introduzir email" value="">
					<input type="password" id="inputPassword" class="form-control" placeholder="Introduzir password" value="">
					<button class="btn-block btnLogin" type="submit">Entrar</button>
					<div class="erroLogin"></div>
			</form>
			

			</div>
      </div>
      <div class="modal-footer" style="background-color: #F25C29; color: white;">
	  <button class=" btnLogin" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<script>
function login(){
	var email = $("#inputEmail").val();
	  $.ajax({  
                url:"./ficheiro.php",  
                method:"POST",  
                data:{email: email},  
                dataType:"text",  
                success:function(data){  
						alert(data);
                },
				error:function(){
						alert("n foi");
				}
          });  
return false;

}
</script>