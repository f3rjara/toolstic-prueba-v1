<!DOCTYPE html>
<html>
	<head>
	  <?php include "cabecera.html" ?>
		<!-- hoja de estilos personal -->
        <link rel="stylesheet" href="css/estilos%20_toolstic.css">
        
	</head>

	<body>
	
	 <!--CABECERA PRINCIPAL - INCLUSION DE MENU index-->
      
      	 <?php include "php/menu_principal.php" ?>
    
      <!--CONTENIDO-->
              
  <div class="video-container">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/i07qz_6Mk7g?rel=0&&autoplay=1;controls=0" frameborder="0" allowfullscreen></iframe>
 </div>
      
  <div class="section">
    <div class="row">
      <div class="col s12 m4 l6"> 
       	<div class="card-panel teal z-depth-5">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores doloribus labore quas aperiam, porro laudantium. Nihil sed voluptatum eligendi, mollitia qui doloribus cum repellendus recusandae rem odit maxime molestias.</span>
          <span>Culpa expedita vero, architecto, nihil odio veritatis ea doloremque, quod aliquam eius, tempore exercitationem a accusamus. Modi deserunt ut alias, eaque quaerat nostrum sapiente eligendi facere, distinctio est maiores quisquam.</span>
          <span>Qui dicta totam non nulla. Laboriosam odit veniam sunt quidem error quasi accusantium eaque quis consequuntur similique sed, cupiditate dolorum. Totam repellendus ratione et laudantium qui debitis impedit nam consequatur.</span>
          <span>Nesciunt tempora obcaecati nobis fugit omnis asperiores eveniet voluptate recusandae distinctio atque qui, non praesentium est nisi similique veritatis minima? Dicta obcaecati, officiis amet repudiandae nesciunt exercitationem assumenda nihil iusto.</span>
          <span>Aliquid eos vero reiciendis earum totam ducimus enim doloremque laudantium suscipit ratione qui architecto deserunt porro velit dignissimos explicabo nisi et, ad blanditiis consequuntur tempore, at. Repellat dicta voluptas pariatur.</span>
          <span>Dolorum tempore odit laborum architecto optio nam repudiandae dignissimos placeat quos esse voluptas voluptates minima sed deserunt vitae aperiam odio aut repellat minus voluptatibus reprehenderit, ut. Reprehenderit cumque, error vel!</span>
          <span>Voluptatibus sint, at fugit. Explicabo blanditiis aperiam rem animi reiciendis optio ea dignissimos eum molestiae atque vel harum numquam deleniti natus fuga ex consequatur tenetur nam, inventore facere error laudantium.</span>
          <span>Ad a similique est quidem ratione animi ipsa odit aliquid quas ea necessitatibus neque eligendi quasi commodi, optio cumque dignissimos iure natus ut quibusdam. Provident, illum eius ducimus qui aspernatur?</span>
          <span>Eveniet ullam praesentium mollitia odio atque, odit sit id in quaerat architecto vitae, laboriosam, vero nostrum debitis quia? Impedit culpa expedita eius labore reiciendis est asperiores harum obcaecati quae sint.</span>
          <span>Praesentium odit natus, beatae? Quas error debitis consequatur maiores reiciendis repellendus architecto, facilis repudiandae a voluptas ab perspiciatis eaque, aliquam, neque dolor, expedita. Rerum ducimus, molestiae. Accusantium quia dolorem corporis.</span>
          </span>
        </div>

      </div>
		<!-- DISEÑO DE PAGINA contenido derecha -->
      <div class="col s12 m8 l6 "> 
        	<div class="card-panel teal z-depth-5">
          <span class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At maxime eaque incidunt quod, distinctio ipsa fugiat enim molestias iure dignissimos quam ducimus laudantium facere nulla, reprehenderit unde dolorum, quisquam eligendi.
          </span>
        </div>

      </div>
    </div>
  </div>
   
   

	<!--PIE DE PAGINA PRINCIPAL - INCLUSION DE MENU -->
      
      	 <?php include "php/footer.php" ?>
	
	
	
	
	
	
	
	
	
	
	
	<!--*********************** JQUERY ***********************-->
	  <!--Import jQuery before materialize.js-->
	  <script type="text/javascript" src="js/efectos-materialize.js"></script>
	  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	  <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  <script>
	//BOTON MENU MOBIL
		 $(document).ready(function(){$(".button-collapse").sideNav();  
									  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: false // Choose whether you can drag to open on touch screens
	});});
		  
	 //parallax
	      $(document).ready(function(){
      $('.parallax').parallax();
    });
		  
	</script>
	<!--*********************** JQUERY ***********************-->
	</body>
</html>
		