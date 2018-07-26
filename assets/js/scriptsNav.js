   $(document).ready(function() {
$(window).scroll(function(){
if (screen.width > 768) {
        console.log('entró pc');
         if ($(this).scrollTop() > 625) {
          $('nav').addClass('rosa');
         } else {
          $('nav').removeClass('rosa');
         }
          }
  else{
          console.log("entró Responsive");
          if ($(this).scrollTop() > 200) {
          $('nav').addClass('rosa');
         } else {
          $('nav').removeClass('rosa');
        
         }

        }

         });
      });


    