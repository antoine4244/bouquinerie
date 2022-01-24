

 /* Script to have an up-icon when scroll */

   document.addEventListener('DOMContentLoaded', function () {
     window.onscroll = function (ev) {
       document.getElementById("cRetour").className = (window.pageYOffset > 200) ? "cVisible" : "cInvisible";
     };
   });
 

 
   jQuery(document).ready(function () {
     var duration = 500;
     jQuery(window).scroll(function () {
       if (jQuery(this).scrollTop() > 200) {
         // Si un défillement de 200 pixels ou plus.
         // Ajoute le bouton
         jQuery('.cRetour').fadeIn(duration);
       } else {
         // Sinon enlève le bouton
         jQuery('.cRetour').fadeOut(duration);
       }
     });
     jQuery('.cRetour').click(function (event) {
       // Un clic provoque le retour en haut animé.
       event.preventDefault();
       jQuery('html, body').animate({ scrollTop: 0 }, duration);
       return false;
     })
   });



/* Script to show horaires */

  var todayDate = new Date();  
  var dateMonth = todayDate.getMonth();    

  var monday = document.getElementById("monday");
  var tuesday = document.getElementById("tuesday");
  var wednesday = document.getElementById("wednesday");
  var thursday = document.getElementById("thursday");
  var friday = document.getElementById("friday");
  var saturday = document.getElementById("saturday");

  if (dateMonth == 3 || dateMonth == 4 || dateMonth == 5 || dateMonth == 8 || dateMonth == 9){
  monday.innerHTML = "16h à 19h";
  tuesday.innerHTML = "16h à 19h";
  wednesday.innerHTML = "10h30 à 12h30 ~ 16h à 19h";
  thursday.innerHTML = "16h à 19h";
  friday.innerHTML = "16h à 19h";
  saturday.innerHTML = "10h30 à 12h30 ~ 16h à 19h";
}else if (dateMonth == 6 || dateMonth == 7){
  monday.innerHTML = "10h30 à 12h30 ~ 15h à 19h";
  tuesday.innerHTML = "10h30 à 12h30 ~ 15h à 19h";
  wednesday.innerHTML = "10h30 à 12h30 ~ 15h à 19h";
  thursday.innerHTML = "10h30 à 12h30 ~ 15h à 19h";
  friday.innerHTML = "10h30 à 12h30 ~ 15h à 19h";
  saturday.innerHTML = "10h30 à 12h30 ~ 15h à 19h";
}; 

/* Script to choose easteregg page by month */

  var todayDate = new Date();  
  var dateMonth = todayDate.getMonth();
  var dateDay = todayDate.getDate();

  var image = document.getElementById("image");   

  var easteregg = document.getElementById("easteregg");   

  if (dateMonth == 0) {
  image.src = '../img/mountain.jpg';
  easteregg.href = "easteregg_newyear.html";
} else if (dateMonth == 3) {
  image.src = '../img/oeuf.png';
  easteregg.href = "easteregg_easter.html";
} else if (dateMonth == 9 && dateDay == 31) {
  image.src = '../img/halloween.jpg';
  easteregg.href = "easteregg_halloween.html";
} else if (dateMonth == 11) {
  image.src = '../img/sapin.png';
  easteregg.href = 'easteregg_xmas.html';
};  






