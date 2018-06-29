window.onload = function(){
    function createParticule(i){
               var pic = img; // image
               var s   = 100 + ( //taille min
                   Math.floor( 
                       (Math.random()*300) + // gen taille
                       ( (Math.random()*10) + 1 ) // coef pour maximisé les différente tailles
                   ) 
               ); // taille, aléatoire
               var x = (-s/2) + Math.floor(Math.random() * W); //x, aléatoire sur la largeur
               var d = Math.random() * mp; //densité, quantité de particule sur la zone
               var o = -5 + Math.floor( (Math.random()*10) + 1 ); // oscillation horyzontale
               var a = 0 + Math.round(s/100) / 20; // Alpha : transparence
   
               if(i == -1){
                   var y = Math.random() * (H + s); //position verticale aleatoire
                   particles.push({
                       pic: pic, 
                       x  : x,
                       y  : y,
                       s  : s,
                       d  : d,
                       o  : o,
                       a  : a
                   });
               }
               else{
                   var y = H + s; //y, hauteur - la taille = départ de tout en bas
                   particles[i] = {         
                       pic: pic,
                       x  : x, 
                       y  : y,
                       s  : s, 
                       d  : d,
                       o  : o,
                       a  : a
                   };
               }
           } // EOF createParticule(i)
       
           //Lets draw the particles
           function draw(){
               ctx.clearRect(0, 0, W, H); //clear canvas
   
               for(var i = 0; i < mp; i++){
                   var p           = particles[i];
                   ctx.globalAlpha = p.a;
                   ctx.drawImage(p.pic, p.x, p.y, p.s, p.s);
               }
   
               update();
           } // EOF draw()
     
           // Move particules
           function update(){
               for(var i = 0; i < mp; i++){
                   var p = particles[i];
   
                   if( (p.y + p.s) < 0 // en haut 
                   ||  (p.x + p.s) < 0 // a gauche
                   ||   p.x > W ){ // a droite
                       //la particule sort du champ, on la remet en bas
                       createParticule(i);       
                   }
                   else{ // sinon on la deplace
                       p.y -= p.s / 100;  //vitesse en fonction de la taille                           
                       p.x += Math.cos( p.o );
   
                       particles[i] = {
                           pic: p.pic,
                           x  : p.x, 
                           y  : p.y, 
                           s  : p.s, 
                           d  : p.d,
                           o  : p.o,
                           a  : p.a
                       };  
                     }
               }
           }
     
       
           
              //canvas init
               var canvas = document.getElementById("canvas");
               var ctx    = canvas.getContext("2d");
           
               //canvas dimensions
               var W         = document.body.offsetWidth;
               var H         = document.body.offsetHeight;
               ctx.canvas.width  = W;
               ctx.canvas.height = H;
   
               //particles
               var mp        = 20; //max particles
               var img       = new Image;
               var particles = [];
   
               img.src = "storage/circles.png";
         
               for(var i = 0; i < mp; i++)
                   createParticule(-1);    
         
             //animation loop
             setInterval(draw, 40); 	
     
     
   }
   