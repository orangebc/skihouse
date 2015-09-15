(function(){

   // Services
   $(".show-info").click(function(){
        $(".info-displayed").hide();
        $('#' + $(this).attr('data-info')).show("slideDown");
    });
            
    $(".generic__close").click(function(){
        $(".info-displayed").hide("slideUp");
    });
    

    // Promotions

    $("#main__details").click(function(){
    	$main = jQuery(this).parent('main');
    	$(".promo__main--title", $main).hide();
    	$(".promo__main--subtitle", $main).hide();
    	$(".promo__main--details", $main).hide();
    	$($main).css({
    		"padding" : "0px", 
    		"min-height" : "auto"
    	});
    	$("img", $main).show("fade");
    });

    $(".promo__main--details").click(function(){
    	$article = jQuery(this).parent('article');
    	$(".promo__main--title", $article).hide();
    	$(".promo__main--subtitle", $article).hide();
    	$(".promo__main--details", $article).hide();
    	$($article).css({
    		"padding" : "0px", 
    		"min-height" : "auto"
    		}
    	);
    	$("img", $article).show("fade");
    });

    // Form

    $("#formCountry").on('change',function(){
        $("#formCity option").hide();

        if($("#formCountry").val() == "Canadá"){
            $(".canada").show();

        } if ( $("#formCountry").val() == "U.S.A"){
            $(".usa").show(); 

        } if ( $("#formCountry").val() == "Alaska"){
            $(".alaska").show();

        } if ( $("#formCountry").val() == "New Mexico"){
            $(".newMexico").show(); }
    });

    $("#formCity").on('change',function(){
        $("#formResort option").hide();

        if($("#formCity").val() == "British Columbia"){
            $(".british-columbia").show();

        } if ( $("#formCity").val() == "Quebec"){
            $(".quebec").show(); 

        } if ( $("#formCity").val() == "Alaska"){
            $(".alaska").show();

        } if ( $("#formCity").val() == "Alberta"){
            $(".alberta").show(); 

        } if ( $("#formCity").val() == "California"){
            $(".california").show(); 

        } if ( $("#formCity").val() == "Colorado"){
            $(".colorado").show(); 

        } if ( $("#formCity").val() == "Wyoming"){
            $(".wyoming").show(); 

        }if ( $("#formCity").val() == "Colorado"){
            $(".colorado").show(); 

        } if ( $("#formCity").val() == "Wyoming"){
            $(".wyoming").show(); 

        } if ( $("#formCity").val() == "Utah"){
            $(".utah").show(); 

        } if ( $("#formCity").val() == "East Coast"){
            $(".east-coast").show(); 

        } if ( $("#formCity").val() == "Alaska"){
            $(".alaska").show(); 

        } if ( $("#formCity").val() == "New Mexico"){
            $(".new-mexico").show(); 

        }
    });
    
    // Wishlist

    $("#wishAvion").click(function(){
        $("#formWishAvion").prop("checked", true);
        alert("Tu opción ha sido seleccionada correctamente");
    });

    $("#wishTransporte").click(function(){
        $("#formWishTransporte").prop("checked", true);
        alert("Tu opción ha sido seleccionada correctamente");
    });

    $("#wishResorts").click(function(){
        $("#formWishResorts").prop("checked", true);
        alert("Tu opción ha sido seleccionada correctamente");
    });

    $("#wishLiftTicket").click(function(){
        $("#formWishLiftTicket").prop("checked", true);
        alert("Tu opción ha sido seleccionada correctamente");
    });

    $("#wishEquipoSki").click(function(){
        $("#formWishEquipoSki").prop("checked", true);
        alert("Tu opción ha sido seleccionada correctamente");
    });

    $("#wishClasesSki").click(function(){
        $("#formWishClasesSki").prop("checked", true);
        alert("Tu opción ha sido seleccionada correctamente");
    });

    $("#wishSeguro").click(function(){
        $("#formWishSeguro").prop("checked", true);
        alert("Tu opción ha sido seleccionada correctamente");
    });

    $("#wishApresSki").click(function(){
        $("#formWishApresSki").prop("checked", true);
        alert("Tu opción ha sido seleccionada correctamente");
    });


})();
