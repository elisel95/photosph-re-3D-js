(function(){

	//récupération des variables du DOM
  var canvas = document.getElementById("panorama");
    
    //////////////////////////////////
    //     BABYLONJS/PANORAMA      //
    ////////////////////////////////

		//insertion du babylon js:
    var engine = new BABYLON.Engine(canvas, true);

        //création de la scene
            var createScene = function() {
        
                //Déclaration des Variables
                var scene = new BABYLON.Scene(engine);
        
        
                //création de la caméra. ArcRotateCamera pour qu'elle soit fixe.
                var camera = new BABYLON.ArcRotateCamera('camera',2, Math.PI/2, 10, BABYLON.Vector3.Zero(), scene);
        
                //permet de controler la caméra
                camera.attachControl(canvas, true);
                //empèche le zoom et dezoom de la scene avec la molette
                camera.lowerRadiusLimit = camera.radius;
                camera.upperRadiusLimit = camera.radius;
        
                // creation de l'objet, ici une sphère pour y intégrer le panorama
                var sphere = BABYLON.Mesh.CreateSphere('sphere', 100, 100, scene);
        
                // creation de la texture
                var texture = new BABYLON.Texture("./img/giant.jpg", scene);
        
                var material = new BABYLON.StandardMaterial("texture", scene);
                material.diffuseTexture = texture;
        
                //animation rotate.
                var earthAxis = new BABYLON.Vector3(Math.sin(20 * Math.PI/10), Math.cos(1 * Math.PI/10), 0);
    
				//vitesse de rotation
                var angle = 0.001;

                //permet l'affichage à l'intérieur
                material.backFaceCulling = false;
                material.emissiveColor = new BABYLON.Color3(1.0, 1.0, 1.0);

                // rotation de la texture
                texture.wAng = Math.PI/1;

                // asigne la photo à la sphère
                sphere.material = material;                
				scene.registerBeforeRender(function() {
                sphere.rotate(earthAxis, angle, BABYLON.Space.WORLD);        

	});
  
  ///////////////////////
  // PLAY/PAUSE       //
  /////////////////////
       
	   //par defaut
	   
		if(angle = 0.001) {
		$('.play').hide();
		$('.pause').show();

		}else{
		$('.pause').hide();
		$('.play').show();
		};
	 
     //bouton pause
     // création de la function
		$('.pause').click(function() {
		// changement du btn
		$('.pause').hide();
    $('.play').show();
    //met pause a la rotation:
   angle = 0.000;
});
      //bouton play
     // création de la function
		$('.play').click(function() {
		// changement du btn
		$('.play').hide();
    $('.pause').show();
    //remet en route la rotation:
   angle = 0.001;
});

	///////////////////////////
    //bouton camera controle//
    /////////////////////////
    
			//bouton gauche
       $(".gauche").click(function() {
            sphere.rotation.y += 0.1;
});

		//bouton droit
     $(".droite").click(function() {
            sphere.rotation.y -= 0.1;
});
 
			 return scene;
       
 }
        
        var scene = createScene()

        engine.runRenderLoop(function () {
            scene.render();
        });

        // Resize
        window.addEventListener("resize", function () {
            engine.resize();
        });
    
    
  





}());
