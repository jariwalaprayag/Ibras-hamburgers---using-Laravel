<?php
	session_start();
	if(!isset($_SESSION['userid']))
	{
		header("location:Inicio.php?hmsg=Please Login First");
	} 
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="ciudad.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Sobre_Nostoros</title>
</head>
<body bgcolor="black" text="white">
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
		<label class="logo"><img src="proyecto3correct/5.png" height="60px" width="120px">&emsp;&emsp;</label>
		<ul>
            <li><a href="http://localhost:8000/Inicio">INICIO</a></li>
            <li><a href="http://localhost:8000/Sobre_Nosotros"><font color='red'>SOBRE_NOSOTROS</a></font></li>
            <li><a href="http://localhost:8000/Menu">MENU</a></li>
            <li><a href="http://paj9373.uta.cloud/">BLOG</a></li>
            <li><a href="http://localhost:8000/Contacto">CONTACTO</a></li>
            <?php
                if(isset($_SESSION['userid'])){
                  $name = $_SESSION['userid'];
                  if(isset($_SESSION['role'])){
              $role=$_SESSION['role'];
              if($role=="admin"){
                echo"<li><a href='http://localhost:8000/Admin'>ADMIN</a></li>";
                echo "<li><a href='http://localhost:8000/logout'>LOGOUT</a></li>";
              }
              else{
              	echo"<li><a href='http://localhost:8000/order'>Orders &nbsp</a></li>";
                echo"<li><a href='http://localhost:8000/logout'>LOGOUT &nbsp</a></li>";
                echo"<li><a href='http://localhost:8000/Inicio'> &nbsp; Hello!! &nbsp;".$name."</a></li>";
              }
            }
                }
                else{
                  echo"<li><a href='#modal1' class='modal1-open'>REGISTRO</a></li>";
                  echo"<li><a href='#modal' class='modal-open'>INICIAR_SESSION</a></li>";
                }
              ?>
		</ul>
		<div class="zigzag-header"></div>
	</nav>

	<div class="back2-image">
		<br><br><br><br><br><br><br><br>	
		<center>LAS MEJORES DE LA CIUDAD</center><br>
		<center><h1>Sobre nuestras Hamburguesas</h1></center>
		<br><br><br><br>
		<div class="zigzag-inverted"></div>
		<br><br>
		<center>
			<img src="proyecto3correct/hamburguesa1.jpg" height="300px" width="400px">&emsp;
			<img src="proyecto3correct/hamburguesa2.jpg" height="300px" width="400px"><br><br>
			<h1>Somos Ibra</h1>
			Al comenzar el dia, cada mañana estamos más que preparándonos para dar lo mejor de nosotros mismos.<br>
			Porque cada uno de nuestros clientes nos inspira a trabajar en pro del mejor servicio, las mejores entregas y, sobre todo, las<br>
			mejores Hamburguesas..<br><br>	
			<table width="70%">
				<tr>
					<td style="padding:0 5px 0 5px;">
						Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la pizzería <b>DomiPizza's</b>, con una inversión inicial de 950 dólares. El local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.
					</td>
					<td style="padding:0 5px 0 5px;">
						A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como <b>Ibra's Burger Grill.</b>
					</td>
				</tr>
			</table><br><br>
			<button class="b1" onclick="window.location.href='http://localhost:8000/Menu'">VER EL MENÚ HOY</button>&emsp;
			<button class="b2" onclick="window.location.href='http://localhost:8000/Menu'">PEDIR AHORA</button><br><br><br><br>
			<div class="back3-image">
				<br><br>
				<center>
					<center><img src="proyecto3correct/Burguer.png" height="30px" width="30px"></center>
				<h1>Lo que dicen los clientes</h1><br>
				<div>
				<center>
					<div>
						<font size="5">Las Mejores Hamburguesas</font><hr><br><br>
								<font class="p1">Me gustan sus Hamburguesas, siempre seran mi lugar de encuetros y buenos recuerdas acompañados de la mejor Hamburguesa<br><br><b><font color="red">Daiane Smith</font>,Cliente</b></font><br><br><br>
					</div>
					<div>
						<font size="5">Que Hamburguesa mas Increible</font><hr><br><br>
								<font class="p1">Voy con mi familia a compertir de la buena comida y servicio que prestan, los recomiendo a mis amigos, los felicito<br><br><b><font color="red">Daiane Smith</font>,Cliente</b></font><br><br><br>
					</div>
					<div>
						<font size="5">La mejor hamburguesa de la ciudad</font><hr><br><br>
								<font class="p1">Soy amante de la buena hamburguesa y puedo decir que me gusta lo bien que la preparan, el hambiente es como y muy familiar, cada ves que tengo la oportunidad de darme un gusto lo visito porque se que sere bien atendido y comere una excelente hamburguesa<br><br><b><font color="red">Michael Williams</font>,Cliente</b></font><br>
					</div>
					</div></center><br><br>
				     <div class="zigzag-inverted"></div>
				     <br>
					<div>
						<center>
						<h1 style="font-size: 50px; width: 69%;">
					      Nos esforzamos por brindar un buen servicio para su disfrute.
					    </h1>
						</center>
					</div>
					<div class="backfooter-image">
					<div class="zigzag"></div>
						<footer>
							<br><br>
				           <center><img src="proyecto3correct/5.png" height="180" width="250"></center> 
				            <center>
					            <h3>Habla a:</h3>
					            Av. Intercomunal, sector la Mora, calle 8
					            <h3>Telefono:</h3>
					            +58 251 261 00 01
					            <h3>Correo:</h3>
					            yourmail@gmail.com
					            <br/><br>
					            <div style="align-items: center; width: 20%;">
					            <a href="#" class="fa fa-pinterest"></a>
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-dribbble"></a>
								<a href="#" class="fa fa-linkedin"></a>
								<a href="#" class="fa fa-vimeo"></a>
					            <br/>
					        	</div>
					        	<br>
					            copyright &copy;2020 Todos los derechos reservados | Este sitio esta hecho con por DiazApp 
				        	</center>
						</footer>
				</div>	
				</div>
				<br>
				
			</center>
	</div>

	<div class="modal" id="modal">
    <div class="modal__content">
      <a href="#" class="modal__close" style="visibility: visible; color: black;">X</a>
      <h3 class="modal__heading"><img src="proyecto3correct/Burguer.png" height="30px" width="30px">         Iniciar Sesion</h3>
      <hr>
      <div align="left">
      	<form action='/login' method="post">
          @csrf 
        &nbsp;&nbsp;Usuario:<br>
        <center><input type="text" name="userid" class="t3" required></center>
        &nbsp;&nbsp;Contrasena:<br>
        <center><input type="Password" name="pwd" class="t3" required></center>
        <div style="text-align: right; padding-right: 10px;">
        <br><hr><br>
        <input type="submit" name="login" value="Entrar" class="b1" align="Right">
        </div>
      </form>
 </div>
    </div>
 </div>

 <div class="modal1" id="modal1">
    <div class="modal1__content">
      <a href="#" class="modal1__close" style="visibility: visible; color: black;">X</a>
      <h2 class="modal1__heading"><img src="proyecto3correct/Burguer.png" height="20px" width="20px">         Registro de Usuario</h2><br>
      <hr>
      <div align="left">
      <form name="form" action="/register" method="post">
      @csrf
      &nbsp;&nbsp;Nombre y apellido:<br>
      <center><input type="text" name="userid" class="t3" required></center>
      &nbsp;&nbsp;Correo:<br>
      <center><input type="email" name="mail" class="t3" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" title="email is not in a correct format" required></center>
      &nbsp;&nbsp;Contrasena:<br>
      <center><input type="password" name="pwd" class="t3" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></center>
      &nbsp;&nbsp;Repetir Contrasena:<br>
      <center><input type="password" name="repwd" class="t3" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></center>
      &nbsp;&nbsp;Direccion:<br>
      <center><input type="text" name="address" class="t3" required></center>
      <br><hr><br>
      <div style="text-align: right; padding-right: 10px;">
      <input type="submit" name="register" value="Cargar" onclick="ValidateEmail(document.form1.mail)" class="b1" align="Right">
      </div>
      </form>
      <script>
          function ValidateEmail(inputText)
            {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(inputText.value.match(mailformat))
            {
            document.form.mail.focus();
            return true;
            }
            else
            {
            alert("You have entered an invalid email address!");
            document.form.mail.focus();
            return false;
            }
            }
      </script>
 </div>
</div>
</div>
</body>
</html>