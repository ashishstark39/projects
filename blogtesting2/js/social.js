 $(document).ready(function(){
        $(".ffix").hide();
         $(".tfix").hide();
         $(".gfix").hide();
         $(".lfix").hide();
         $(".yfix").hide();
         $(".close").hide();



        $(".facebook").click(function(){
         $(".ffix").fadeToggle();
         $(".tfix").hide();
         $(".gfix").hide();
         $(".lfix").hide();
         $(".yfix").hide();
         $(".close").hide();

        });
         $(".twitter").click(function(){
            $(".ffix").hide();
         $(".tfix").fadeToggle();
         $(".gfix").hide();
         $(".lfix").hide();
         $(".yfix").hide();
         $(".close").show();

         });
         $(".google").click(function(){
         $(".ffix").hide();
         $(".tfix").hide();
         $(".gfix").fadeToggle();
         $(".lfix").hide();
         $(".yfix").hide();
         $(".close").show();

        });
         $(".linkedin").click(function(){
            $(".ffix").hide();
         $(".tfix").hide();
         $(".gfix").hide();
         $(".lfix").fadeToggle();
         $(".yfix").hide();
         $(".close").show();

         });
         $(".youtube").click(function(){
            $(".ffix").hide();
         $(".tfix").hide();
         $(".gfix").hide();
         $(".lfix").hide();
         $(".yfix").fadeToggle();
         $(".close").show();
         

         });
         
         


    });
    $(document).ready(function(){
   
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 50) {
	    $(".tab").css({"background" :"#484849",'color' : 'white'});
        $(".tab").find(".imgh").attr("src", "logo-white.png");
        $(".top").show();
      }

	  else{
		  $(".tab").css({"background" :"#BFBFC0",'color' : '#355995'});  	
          $(".tab").find(".imgh").attr("src", "logo.png");
          $(".top").hide();
      }
  })
})
