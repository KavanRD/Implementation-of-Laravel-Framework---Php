<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta   http-equiv="refresh"
content="2; url = ./inicio_de_sesion.html">
    <title>Success Page</title>
    <link rel="stylesheet" href="../css/ciudad.css">
  </head>
  
  <header>
    <nav>
      <!-- <div class="width pos_relative">
        <div class="inline sub_div_nav">
          <img src='../Images/i.jpg' alt="logo" title="Genteociudad" class="logo">
        </div>
        <div class="inline pos_absolute page">
          <p class="page_name">
			<a href="./HomePage.html">Home Page</a>/
            <a href="./Inicio.html">Inicio</a>/
            <a  href="./Nosotros.html">Nosotros</a>/
			<a href="./Equipos.html">Equipos</a>/
			<a href="http://kxm4460.uta.cloud/blog">Blog</a>/
			<a href="./Contacto.html">Contacto</a>/
			<a href="./Inicio_de_sesion.html">Inicio de Sesion</a>/
			<a href="./Register.html">Registration</a>/
			<a class="active-page" href="./EventRegister.html">Event Registration</a>
          </p>
        </div>
      </div> -->
      <div class="class_banner txt-cntr width">
        <h1>Registration</h1>
        <p>
          <span>HOME</span> &#62;
          <span>Success</span>
        </p>
      </div>
    </nav>
  </header>
  
   <body>
	
	<center>
	<p>
		<span> Welcome <?php echo $_GET['name']; ?><br><br>You have successfully registered Now go to your mailbox and check for the username.</span><br><br><br>
	</p>
	</center>
</body>
  
<footer>
    <span style="clear:both"></span>
        <div class="f">
            <div class="f_search">
                <h2>
                    <span>Contactate con</span>
                    &nbsp;<span class="active">Nosotros</span>
                    
                    <input type="text" placeholder="Email" class="ip_f">
                    <button class="f_button">ENVAR</button>
                </h2>
            </div>
        </div>
      <div class="hex-dark">
          <div class= "f_sub">
          <div  class="f_icons">
        <img src="../assests/images/mail.png" title="Mail">
        </div>
        <div   class="f_icons">
            <img src="../assests/images/twitter.png" title="Twitter">
            </div>
            <div   class="f_icons">
                <img src="../assests/images/instagram.png" title="Instagram">
                </div>
    </div>
      </div>
    <div class="f_bottom">
        <span class="active">DiazApps</span> &copy;&nbsp;
        <span style="opacity: 0.6;">2020 All Rights Reserved</span>
    </div>
    </footer>
    <!-- footer ends -->
    <div class="scroll_top"> 
      <a href="#top">&and;</a>
    </div>
</html>

