@import url('reset.css');
@import url('fuentes.css');





/*------- Estilos generales-----------------*/

body{
	background: #FAFAFA;
	font-family: Arial,Helvetica,Sans-serif;
}

a{ text-decoration: none; color:#787878;}

a:hover{text-decoration: underline;}

/*------- header-----------------*/

header{
	width: 100%;
	float:left;
	/*fondo gradiente*/
	background: #ffffff; /* Old browsers */
	background: -moz-linear-gradient(top,  #ffffff 0%, #e4e0e0 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e4e0e0)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #ffffff 0%,#e4e0e0 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ffffff 0%,#e4e0e0 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ffffff 0%,#e4e0e0 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #ffffff 0%,#e4e0e0 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e4e0e0',GradientType=0 ); /* IE6-9 */
	/*fondo sombra*/
	box-shadow: 0px 3px 5px #000;
	-moz-box-shadow: 0px 3px 5px #000;
	-webkit-box-shadow: 0px 3px 5px #000;
}
.menu_bar{
	display: none;
}



#subheader{
	width: 90%;
	margin: auto;
}

#logotipo, .menu_bar{
	float: left;
	width: 20%;
	padding: 10px 0px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}



#logotipo a img, .menu_bar a img{
	width: 100%;
	max-width: 150px;
	height: auto;

}


/*----menu-----*/

header #subheader nav{
	float:right;
	width: 70%;
	/*max-width: 660px;*/
	padding: 30px 0px;
	text-align: center
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;	
}

header #subheader nav ul{
	overflow: hidden;
}

header #subheader nav ul li{
	display:inline;
	font-family: sourcesans;
}


header #subheader nav ul li a{
	color:##787878;
	font-size: 25px;
	padding: 10px;
	border-radius:5px;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;


}


header #subheader nav ul li a:hover, header #subheader nav ul li.app a:hover{
	color:#fff;
	background: #1798af;
	text-decoration: none;

}

header #subheader nav ul li.app{
	float:right;
	color:#00A8FF; 
}


header #subheader nav ul li.app{
	float:right;
	 
}

header #subheader nav ul li.app a{
	color:#00A8FF;
	 
}


@media screen and (max-width: 800px){/*si la pantalla tiene menos de 800px entonces haga algo*/
		
		.menu_bar{
		display: block;
		width: 100%;
		/*fondo gradiente*/
		background: #ffffff; /* Old browsers */
		background: -moz-linear-gradient(top,  #ffffff 0%, #e4e0e0 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e4e0e0)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #ffffff 0%,#e4e0e0 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #ffffff 0%,#e4e0e0 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #ffffff 0%,#e4e0e0 100%); /* IE10+ */
		background: linear-gradient(to bottom,  #ffffff 0%,#e4e0e0 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e4e0e0',GradientType=0 ); /* IE6-9 */
		
		}

		#logotipo{
			display: none;
		}


		header #subheader{
			display: block;
			background: gray;
			width: 80%;
			/*height: 100%;*/
			/*left: -100%;*/
			margin:0;
			position: fixed;
		}


		header #subheader nav ul li, header #subheader nav ul li.app {
		display: block;
		float: none;
		border-bottom: 1px solid rgba(255,255,255,0.3);
		margin:0;
	}	
}



****************************************

<header>
				
			<div class="menu_bar">
				<a href="#"class="bt_menu"><span class="icon-list5"></span><img src="imagenes/mdo.png" alt="logo de mdo"></a>
			</div>

			<div id="subheader">
				<div id="logotipo">
					<a href="#"><img src="imagenes/mdo.png" alt="logo de mdo"></a>
				</div>
				<nav>
					<ul>
						<li><a href="#"><span class="icon-house"></span></a></li>
						<li><a href="#"><span ></span>Beneficios</a></li>
						<li><a href="#"><span ></span>Producto</a></li>
						<li><a href="#"><span ></span>Quienes somos</a></li>
						<li><a href="#"><span class="icon-cart4"></span> Comprar</a></li>
						<li><a href="#"><span class="icon-search4"></span></a></li>
						<li class="app"><a href="#"><span class="icon-screen3"> App</span></a></li>
					</ul>
				</nav>				
			</div>	
		</header>




		% fondo del header aplicativo azul

			/*fondo gradiente*/
	background: #0084cc; /* Old browsers */
	background: -moz-linear-gradient(top,  #0084cc 0%, #77cfff 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0084cc), color-stop(100%,#77cfff)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #0084cc 0%,#77cfff 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #0084cc 0%,#77cfff 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #0084cc 0%,#77cfff 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #0084cc 0%,#77cfff 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0084cc', endColorstr='#77cfff',GradientType=0 ); /* IE6-9 */
	