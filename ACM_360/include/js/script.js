		//fonction animation flèche qui descend parallax
	$(document).ready(function() {
		$('.fleche-5').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 700; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); 
			return false;
		});
		resizePage();
	});
	
	
	//responsiv /changement taille fenetre
	//creation de la fonction
	function resizePage()
{
	//inferieur à 1024px
    var Largeur = $(window).width();
    if(Largeur < 1024) {
        $('.extend').hide();
    }else {
		$('.extend').show();
	};
	
	//inferieur à 750px
	var Largeur = $(window).width();
    if(Largeur < 750) {
        $('.resp').show();	
		
		//menu hamburger
		$('.hamenu').hide();
		$('.ham').click(function() {
		$('.hamenu').show();
			$('.hamenu').click(function() {
			$('.hamenu').hide();
			})
})

    }else{		
		$('.resp').hide();
	}
};

// Appel de la fonction à l'affichage de la page.
$(window).resize(resizePage);
resizePage(); 





