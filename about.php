
 <html>

   <head>
      <meta charset="utf-8"/>   
      <title>Título de la web</title>
      <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
      <script type="text/javascript" src="js/index.js"></script>
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
       <script src="//code.jquery.com/jquery-1.10.2.js"></script>
   </head>


    <script>
        $( ".fondoNegro" ).click(function() {
          $( ".fondoNegro" ).fadeOut();  
          $( "#contenido" ).fadeOut();
          $( "#contenido" ).html('');
        });
    </script>


   <body>


   	<header class="contenedor">
   		
      <div class="name">
        <a href="./index.php">
          <img src="./images/titulo.png">
        </a>
      </div>

      <div class="uno">
        <div class="reel">
           <a href="./index.php">
            <img src="./images/reel.png">
          </a>
        </div>

        <div class="about">
          <a href="./about.php">
            <img src="./images/about.png">
          </a>
        </div>
      </div>
      <div class="linkdn">
         <a href="http://es.linkedin.com/in/jorgebm/en" target="_BLANK">
          <img src="./images/linkdn.png">
        </a>
      </div>

      <div class="contactar">
         <a href="./contactar.php">
          CONTACTAR
        </a>
      </div>
   	</header>

   		<div id="container" class="contenedor">
   			<div class="spanish">
          Licenciado en Comunicación audiovisual y especializado
          en post-producción.
          He trabajado para televisiones reginales, productoras
          y estudios de post-producción desde que empece la 
          carrera (primero cómo becario y posteriormente como 
          trabajador). Actualmente editor en Serena Digital,
          estudio con sedes en Madrid y Dubái, centrado en la 
          publicidad a nivel internacional.
          <br>
          Trabajando para marcas cómo:

          Y agencias entre las que se cuentan:
        </div>
        <div class="english">
          Graduated in Mass Media and specialiced in
          post-production.

          I’ve worked for regional televisions, production 
          companies and post-production studios since I started 
          the grade (first with scholarships and later as 
          worker). Actually I’m editor in Serena Digital, a 
          studio present in Madrid and Dubai, and focused in 
          international advertisement.
           <br>
          Working with brands as:

          And agencies as:
        </div>

        <div class="marca">
          <img src="./images/marcas/pampers.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/pantene.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/vodafone.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/magnum.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/cornetto.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/ariel.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/renault.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/jazztel.png">
        </div>

        <p class="spanish2">Y agencias entre las que se cuentan:</p>
        <p class="english2">And agencies as:</p>

        <div class="marca">
          <img src="./images/marcas/contrapunto.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/lola.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/saatchi.png">
        </div>

        <div class="marca">
          <img src="./images/marcas/grey.png">
        </div>

   		</div>
      
      <!--
    <footer class="contenedor">
    	Footer
    </footer>
    -->

   </body>

 </html>