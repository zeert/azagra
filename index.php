<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'contacto@azagrasolar.cl'; 
    $to = 'contacto@azagrasolar.cl,reinaldo.c.zurita@gmail.com'; 
    $subject = 'Mensaje de Contacto desde el Sitio Web de Azagra Solar';
    $human = $_POST['human'];
			
    $body = "De: $name\n E-Mail: $email\n Mensaje:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) {  
        echo "<script>alert('Mensaje Enviado Correctamente!');</script>"; 
        header('location:index.html');
	}
	 
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Azagra Solar - Equipos de Calefaccion y Generacion Electrica</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Equipos de Calefaccion Solar y Generacion electrica" />
        <meta name="keywords" content="Calefaccion, calefacción solar, energía, electricidad, medio ambiente, sistemas naturales, innovación, tecnologia"/>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="./js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
         <script src="//code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.fullbg.js"></script>
   		<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Liberation_Sans.font.js" type="text/javascript"></script>
<!--[if gte IE 9]>
	<script type="text/javascript">
		Cufon.set('engine', 'canvas');
	</script>
<![endif]-->

<script type="text/javascript">
$(window).load(function() {
	$("#background").fullBg();
});
</script>
		<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

				$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'titlePosition' 	: 'outside',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			
			
			$("#modal1").fancybox();

			$("#modal2").fancybox();

			$("#modal3").fancybox();
			
			$("#modal4").fancybox();

			$("#modal5").fancybox();

			$("#modal6").fancybox();

			$("#modal7").fancybox();



	$("a#iluminacion").fancybox({
				'transitionIn'	: 'fade',
				'transitionOut'	: 'fade'	
			});


		});
	</script>
				
		<script type="text/javascript">
			Cufon.replace('span');
			Cufon.replace('li');
			Cufon.replace('h1');
			Cufon.replace('p');
			Cufon.replace('label');
			Cufon.replace('#colectores');
			Cufon.replace('#coil');
			Cufon.replace('#heatpipe');
			Cufon.replace('#planos');			
		</script>
		
        <style>
        .fullBg {
	position: fixed;
	top: 0;
	left: 0;
	overflow: hidden;
	opacity: .75;
}

        :valid {border: 1px solid green;background-color: #e1f2b8;}
        :invalid{
		border: 1px red solid;
				}
			body{
				margin:0;
				padding:0;
			}
			span.reference{
				font-family:Arial;
				text-transform:uppercase;
				position:fixed;
				right:95px;
				bottom:10px;
				font-size:11px;
				text-shadow:1px 1px 1px #000;
			}
			span.reference a{
				color:#e6e1e0;
				text-decoration:none;
				margin-right:20px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			.title{
				position:absolute;
				right:80px;
				top:10px;
				width:91px;
				height:600px;
				background:transparent url(images/title.png) no-repeat top left;
			}
		</style>
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27476023-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>    </head>

    <body>
    	<img src="images/bg1.png" alt="" id="background" />
		<div class="title"></div>
		<div id="wrap">
		<div id="cc_menu" class="cc_menu">
			<div class="cc_item" id="nosotros" style="z-index:5;">
				<img src="images/1.jpg" alt="image" />
				<span class="cc_title">Nosotros</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_1">Empresa</li>
						<li class="cc_content_2">Filosofia</li>
					</ul>
				</div>
			</div>
			<div class="cc_item" id="sistemas" style="z-index:4;">
				<img src="images/2.jpg" alt="image" />
				<span class="cc_title">Sistemas</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_3">Calefaccion</li>
						<li class="cc_content_4">Electricidad</li>
					</ul>
				</div>
			</div>
			<div class="cc_item" id="equipos" style="z-index:3;">
				<img src="images/3.jpg" alt="image" />
				<span class="cc_title">Equipos</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_7">Nuestros equipos</li>
						<li class="cc_content_8">Descripciones</li>						
					</ul>
				</div>
			</div>
			<div class="cc_item" id="contacto" style="z-index:1;">
				<img src="images/5.jpg" alt="image" />
				<span class="cc_title">Contacto</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_11">Contactenos</li>
					</ul>
				</div>
			</div>
			<div id="cc_content" class="cc_content">
				<span id="cc_back" class="cc_back">&lt;&lt; Volver</span>
				<div class="cc_content_1">
					<h1>Nuestra Empresa</h1>
					<p> Azagra Solar nace de la necesidad de apoyar a los hogares Chilenos en la economia familiar ahorrando energia en el calentamiento de agua sanitaria a traves del uso de la energia solar, permitiendo un ahorro efectivo para la familia de un 70 a 80 % por este concepto.</p>
				</div>
				<div class="cc_content_2">
					<h1>Filosofia</h1>
					<p>Confiando en la importancia de cuidar nuestro planeta y la economía familiar pretendemos en un mediano plazo liderar la confianza en el uso de la energia solar y toda aquella alternativa ecologica capaz de dar beneficios a las personas y la naturaleza.</p>
				</div>
				<div class="cc_content_3">
					<h1>Calefaccion</h1>
					<p>El aprovechamiento de la energia solar para usos termicos  de agua caliente sanitaria (a.c.s.), calefaccion y climatizacion de piscinas es la mejor alternativa frente a los sistemas clasicos de calentamiento.</p>
<p> Una instalacion de energia solar termica permite reducir el gasto de una vivienda ya que puede cubrir las necesidades de a.c.s entre un 50%-70%.
</p>
<p><a rel="example_group" href="./images/galeria/1.png" title="Sistemas de Calefaccion"><img alt="" class="marco" src="./images/galeria/1_s.png" /></a>&nbsp;&nbsp;<a rel="example_group" href="./images/galeria/2.png" title="Sistemas de Calefaccion"><img alt="" class="marco" src="./images/galeria/2_s.png" /></a>&nbsp;&nbsp;<a rel="example_group" href="./images/galeria/3.png" title="Sistemas de Calefaccion"><img alt="" class="marco" src="./images/galeria/3_s.png" /></a>&nbsp;&nbsp;<a rel="example_group" href="./images/galeria/4.png" title="Sistemas de Calefaccion"><img alt="" class="marco" src="./images/galeria/4_s.png" /></a></p>
				</div>
				<div class="cc_content_4">
					<h1>Electricidad</h1>
					<p>Desarrollamos proyectos especiales de iluminacion Solar para la Mineria e Industria, disminuyendo los costos y mejorando la calidad de vida.</p>
					<p><p><a id="iluminacion" href="./images/galeria/5.png" title="Sistemas de Iluminacion Minera e Industrial"><img alt="" class="marco" src="./images/galeria/5_s.png" /></a></p>
				</div>
				
				<div class="cc_content_7">
					<h1>Nuestros Equipos</h1>
					<p>Algunos de los equipos que utilizamos, son los siguientes:</p>
					<ul>
						<li><a  id="modal1" title="Colectores de tubos al vacio Atmosfericos" href="#colectores">Colectores de tubos al vacio Atmosfericos</a></li>
						<li><a  id="modal2" title="Colectores de tubos al vacio presurizados Coil" href="#coil">Colectores de tubos al vacio presurizados Coil</a></li>
						<li><a  id="modal3" title="Colectores de tubos al vacio Presurizados Heat Pipe" href="#heatpipe">Colectores de tubos al vacio Presurizados Heat Pipe</a></li>
						<li><a  id="modal4" title="Colectores de Placa Plana" href="#planos">Colectores de Placa Plana</a></li>
					</ul>
					
	<div style="display: none;">
		<img id="colectores" alt="" src="images/galeria/calefactores.png"/>
	</div>

	<div style="display: none;"> 
 		<img id="coil" alt="" src="images/galeria/coil.png"/>
	</div>


	<div style="display: none;">
		<img id="heatpipe" alt="" src="images/galeria/heatpipe.png"/>
	</div>
	
	<div style="display: none;">
 		<img id="planos" alt="" src="images/galeria/planos.png"/>
 	</div>



				</div>
				<div class="cc_content_8">
					<h1>Caracteristicas de Equipos</h1>
					<p>Las características mas destacadas de nuestros equipos de ultima generacion, pueden resumirse en las siguentes</p>
					<ul>
						<li><a  id="modal5" title="Diagrama explicativo proceso calentamiento del agua" href="#colectores_desc">Componentes de un equipo atmosferico</a></li>
						<li><a  id="modal6" title="Diagrama explicativo proceso calentamiento del agua" href="#coil_desc">Tecnologia de funcionamiento Colectores de tubos al vacio Presurizado Coil</a></li>
						<li><a  id="modal7" title="Diagrama explicativo proceso calentamiento del agua" href="#heatpipe_desc">Tecnologia de funcionamiento Colectores de tubos al vacío Presurizados Heat Pipe</a></li>
					</ul>
					
					
						<div style="display: none;">
			<img id="colectores_desc" src="images/galeria/atmosferico_desc.png"/>
			</div>

		<div style="display: none;">
			<img id="coil_desc" src="images/galeria/coil_desc.png"/>
			</div>
	
	<div style="display: none;">
			<img id="heatpipe_desc" alt="" src="images/galeria/heatpipe_desc.png"/>

	</div>				

				</div>
				<div class="cc_content_11">
					<h1>Contactenos</h1>
					<style>

.body {
	width:576px;
	margin:0 auto;
	display:block;
}


form {
	width:459px;
	margin:0 auto;
}

label {
	display:block;
	margin-top:20px;
	letter-spacing:2px;
}

input, textarea {
	width:439px;
	background:#efefef;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:1px solid #dedede;
	padding:10px;
	margin-top:3px;
	font-size:0.9em;
	color:#3a3a3a;
}

	input:focus, textarea:focus {
		border:1px solid #97d6eb;
	}

textarea {
	height:110px;
}

#submit {
	background:url(images/submit.jpg);
	width:127px;
	height:38px;
	text-indent:-9999px;
	border:none;
	margin-top:20px;
	cursor:pointer;
}

	#submit:hover {
		opacity:0.9;
	}
					</style>
					<!-- Formulario de Contacto -->
				
				<section class="body">
    
    	    
        <form method="post" action="index.php" onsubmit="$.jGrowl('A message with a header', { header: 'Important' });">
        
            <label>Nombre</label>
            <input name="name" placeholder="Escriba su Nombre Aqu&iacute;" required>
            
            <label>Email</label>
            <input name="email" type="email" placeholder="Escriba su E-Mail Aqu&iacute;" required>
            
            <label>Mensaje</label>
            <textarea name="message" placeholder="Escriba su Mensaje Aqu&iacute;" required></textarea>
            
            <label>* Cuanto es 2+2? (Anti-spam)</label>
            <input name="human" placeholder="Ecriba el Resultado Aqu&iacute;" required>
            
            <input id="submit" name="submit" type="submit" value="Submit">
        
        </form>
        
    </section>

									
					<!-- Formulario de Contacto -->
				</div>
				</div>
		</div>
        <div>
        </div>
            <span class="reference">
                <a href="mailto:reinaldo@doctor-pc.cl" class="left">Creado por: <span>Reinaldo Zurita &copy; 2011</span></a>
				<a href="http://www.doctor-pc.cl" class="right">Doctor Pc &copy; 2011</a>
				<a href="http://www.azagrasolar.cl" class="center"><img src="images/firefox-logo.png" style="width:32px;height:32px;position:fixed;top:91%;left:36%;"><img src="images/html5badge.png" style="position:fixed;top:89%;left:39%;"> Derechos: &copy;Azagra Solar 2011<img src="images/chrome-logo.png" style="width:32px;height:32px;position:fixed;top:91%;left:63%;"></a>
            </span>
		</div>

        <!-- The JavaScript -->


        <script type="text/javascript">
            $(function() {
				//all the menu items
				var $items 		= $('#cc_menu .cc_item');
				//number of menu items
				var cnt_items	= $items.length;
				//if menu is expanded then folded is true
				var folded		= false;
				//timeout to trigger the mouseenter event on the menu items
				var menu_time;
				/**
				bind the mouseenter, mouseleave to each item:
				- shows / hides image and submenu
				bind the click event to the list elements (submenu):
				- hides all items except the clicked one, 
				and shows the content for that item
				*/
				$items.unbind('mouseenter')
					  .bind('mouseenter',m_enter)
				      .unbind('mouseleave')
					  .bind('mouseleave',m_leave)
					  .find('.cc_submenu > ul > li')
					  .bind('click',function(){
					var $li_e = $(this);
						  //if the menu is already folded,
						  //just replace the content
					if(folded){
						hideContent();
						showContent($li_e.attr('class'));
					}	
					      else //fold and show the content
						fold($li_e);
				});
				
				/**
				mouseenter function for the items
				the timeout is used to prevent this event 
				to trigger if the user moves the mouse with 
				a considerable speed through the menu items
				*/
				function m_enter(){
					var $this 	= $(this);
					clearTimeout(menu_time);
					menu_time 	= setTimeout(function(){
					//img
					$this.find('img').stop().animate({'top':'0px'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'200px'},400);
					},200);
				}
				
				//mouseleave function for the items
				function m_leave(){
					var $this = $(this);
					clearTimeout(menu_time);
					//img
					$this.find('img').stop().animate({'top':'-600px'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'0px'},400);
				}
				
				//back to menu button - unfolds the menu
				$('#cc_back').bind('click',unfold);
				
				/**
				hides all the menu items except the clicked one
				after that, the content is shown
				*/
				function fold($li_e){
					var $item		= $li_e.closest('.cc_item');
					
					var d = 100;
					var step = 0;
					$items.unbind('mouseenter mouseleave');
					$items.not($item).each(function(){
						var $item = $(this);
						$item.stop().animate({
							'marginLeft':'-140px'
						},d += 200,function(){
							++step;
							if(step == cnt_items-1){
								folded = true;
								showContent($li_e.attr('class'));
							}	
						});
					});
				}
				
				/**
				shows all the menu items 
				also hides any item's image / submenu 
				that might be displayed
				*/
				function unfold(){
					$('#cc_content').stop().animate({'left':'-700px'},600,function(){
						var d = 100;
						var step = 0;
					$items.each(function(){
							var $item = $(this);
							
							$item.find('img')
								 .stop()
								 .animate({'top':'-600px'},200)
								 .andSelf()
								 .find('.cc_submenu > ul')
								 .stop()
								 .animate({'height':'0px'},200);
								 
							$item.stop().animate({
							'marginLeft':'0px'
							},d += 200,function(){
								++step;
								if(step == cnt_items-1){
									folded = false;
									$items.unbind('mouseenter')
										  .bind('mouseenter',m_enter)
										  .unbind('mouseleave')
										  .bind('mouseleave',m_leave);
									
									hideContent();
								}		  
							});
						});
					});
				}
				
				//function to show the content
				function showContent(idx){
					$('#cc_content').stop().animate({'left':'140px'},200,function(){
						$(this).find('.'+idx).fadeIn();
					});
				}
				
				//function to hide the content
				function hideContent(){
					$('#cc_content').find('div').hide();
				}
            });
        </script>
        <script type="text/javascript"> Cufon.now(); </script>
        <!--ShareSidebar.com BEGINS-->
<style>
.FBConnectButton_Small{background-position:-5px -232px !important;border-left:1px solid #1A356E}.FBConnectButton_Text{margin-left:12px !important;padding:2px 3px 3px !important}#ShareSidebar{top: 15%;width:69px;Right: 0 !important;overflow:hidden;position: fixed;z-index: 100000;text-align:center;line-height:normal;_position: absolute;font-size:9px;}#ShareSidebar a,#ShareSidebar a:hover,#ShareSidebar a:visited{text-decoration:none;font-size:9px;}</style><div id="ShareSidebar">
<iframe style="float:left; margin:10px 0 0 12px; height:61px;" src="http://www.facebook.com/plugins/like.php?app_id=141440452603597&href=http://www.azagrasolar.cl&send=false&layout=box_count&show_faces=false&action=like&colorscheme=light&locale=en_US" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
<div style="float:left; margin:10px 0 0 10px;"><a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></div>
<div style="float:left; margin:10px 0 0 10px;"><script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script><g:plusone size="tall"></g:plusone></div>
<div style="float:left; margin:10px 0 0 10px;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></script></div>
	
<div style="float:left; margin:10px 0 0 7px;"><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-counter="top"></script></div>
		
<div style="float:left; margin:10px 0 0 7px;"><script src="http://orkut-share.googlecode.com/svn/trunk/delicious.js"></script></div>
		
<div style="float:left; margin:10px 0 0 5px; color:#000000; font-family:Arial, Helvetica, sans-serif; background-color:#F4295C; padding:2px 3px;"><a href="http://sharesidebar.com" target="_blank"><font color="#ffffff">Share</font><font color="#000000">Sidebar</font></a></div></div>
<!--ShareSidebar.com ENDS-->

    </body>
</html>