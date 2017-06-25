$(document).ready(main);/*cuando el documento este listo se ejecuta la funcion main*/


var menu_aside = $('#accordian');

function main(){
	var var_visible=1;
	/*alert(var_visible)*/
	$('#bt_menu').click(function(){/*cuando el usuario de click haga algo*/
		/*alert("click");*/
		if (var_visible == 1) {			
			menu_aside.animate({opacity:1},200,setVisible);
			var_visible=0;		
		}else{			
			menu_aside.animate({opacity:0.0},200,setInvisible);
			var_visible=1;
		}
			
		function setInvisible(){
					menu_aside.css('display','none');
					$('#wrap').css('width','100%');	
					$('#wrap').css(	{
						"-moz-border-radius":"2rem 2rem  2rem 2rem",
						"-webkit-border-radius":"2rem 2rem  2rem 2rem",
						"border-radius":"2rem 2rem  2rem 2rem"
					});			
		}
		function setVisible(){
					menu_aside.css('display','block');
					$('#wrap').css('width','80%');

					$('#wrap').css(	{
						"-moz-border-radius":"2rem 0  0 2rem",
						"-webkit-border-radius":"2rem 0  0 2rem",
						"border-radius":"2rem 0  0 2rem"
					});
					$('#wrap header').css(	{
						"-moz-border-radius":"2rem 0  0 0",
						"-webkit-border-radius":"2rem 0  0 0",
						"border-radius":"2rem 0  0 0"
					});			
		}				

	});

	$("#accordian h3").click(function(){
               //slide up all the link lists
               $("#accordian ul ul").slideUp();
               //slide down the link list below the h3 clicked - only if its closed
               if(!$(this).next().is(":visible"))
               {
                       $(this).next().slideDown();
               }
       });

};