$(document).ready(main);/*cuando el documento este listo se ejecuta la funcion main*/

var menu_aside = $('.accordian');

function main(){
	var var_visible=1; 
  $('#bt_menu').click(function(){/*cuando el usuario de click haga algo*/
      // alert("click");
          menu_aside.toggleClass('col-xs-4').toggleClass('col-sm-3').toggleClass('col-md-2').toggleClass('col-lg-2')           
          menu_aside.toggleClass('accordian_show')         
          $('.wrap').toggleClass('col-xs-8').toggleClass('col-sm-9').toggleClass('col-md-10').toggleClass('col-lg-10')
          $('.wrap').toggleClass('col-xs-12').toggleClass('col-sm-12').toggleClass(' col-md-12')
          // organizando bordes
          $('.wrap').toggleClass('wrap_estrecho') 
          $('.barra').toggleClass('barra_estrecho')  

  });


	$(".accordian h3").click(function(){
           //slide up all the link lists
           $(".accordian ul ul").slideUp();
           //slide down the link list below the h3 clicked - only if its closed
           if(!$(this).next().is(":visible"))
           {
                   $(this).next().slideDown();
           }
   });

};

