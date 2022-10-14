function Redirect() {
   window.open("https://thebakerninja.com/");
}



const body = document.body;



$(document).ready(function(){

   // Add smooth scrolling to all links

   


   $("a").on('click', function(event) {
 
     // Make sure this.hash has a value before overriding default behavior
     if (this.hash !== "") {
       // Prevent default anchor click behavior
       event.preventDefault();

 
       // Store hash
       var hash = this.hash;
     
       console.log(typeof(hash))
 
       // Using jQuery's animate() method to add smooth page scroll
       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
       $('html, body').animate({
         scrollTop: $(hash).offset().top
         
       }, 800, function(){
 
         // Add hash (#) to URL when done scrolling (default click behavior)
         if (hash != "#bottle") {
            body.classList.remove("scroll-up");
            body.classList.add("scroll-down");
            window.location.hash = hash;
         } else {
            window.location.hash = hash;
         }
         
       });
     } // End if
   });

   $("#shop").on('click', function(event) {
      var hash = '#menu'
      $('html, body').animate({
         scrollTop: $(hash).offset().top
         
       }, 800, function(){
         window.location.hash = hash;
      });
   });

   $(".button-arrow").on('click', function(event) {
      var hash = '#menu'
      $('html, body').animate({
         scrollTop: $(hash).offset().top
         
       }, 800, function(){
         window.location.hash = hash;
      });
      $(".on").removeClass("on");
      if ($(this).attr("id") == "f") {
         $(".menu-card").slice(0, 9).removeClass("open")
         $(".menu-card").slice(0, 9).addClass("hidden")
         $(".menu-card").slice(0, 3).addClass("open")
         $(".menu-card").slice(0, 3).removeClass("hidden")
         $('#f.switch').addClass('on')
      }

      if ($(this).attr("id") == "s") {
         $(".menu-card").slice(0, 9).removeClass("open")
         $(".menu-card").slice(0, 9).addClass("hidden")
         $(".menu-card").slice(3, 6).addClass("open")
         $(".menu-card").slice(3, 6).removeClass("hidden")
         $('#s.switch').addClass('on')
      }

      if ($(this).attr("id") == "t") {
         $(".menu-card").slice(0, 9).removeClass("open")
         $(".menu-card").slice(0, 9).addClass("hidden")
         $(".menu-card").slice(6, 9).addClass("open")
         $(".menu-card").slice(6, 9).removeClass("hidden")
         $('#t.switch').addClass('on')
      }
   });


   let lastScroll = 0;

   window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset;
      if (currentScroll <= 0) {
         body.classList.remove("scroll-up");
         return;
      }

      if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
         body.classList.remove("scroll-up");
         body.classList.add("scroll-down");
      } else if (
         currentScroll < lastScroll &&
         body.classList.contains("scroll-down")
      ) {
         body.classList.remove("scroll-down");
         body.classList.add("scroll-up");
      }
      lastScroll = currentScroll;
   });

   // $("#plus").click(function() {
   //    var a = $(this).parent().attr('id');
   //    alert(a)
   // })

   $(".plus").on('click', function() {
      var a =  $(this).prev().val();
      a++
      $(this).prev().val(a)

      
   });

   $(".minus").on('click', function() {
      var a =  $(this).next().val();
      a--
      if (a >= 0) {
         $(this).next().val(a)
      }

      
   });

   $(".switch").on('click', function() {
      if ($(this).attr("class") == 'switch on') {

      } else {
         $(".on").removeClass("on");
         $(this).addClass("on");
         if ($(this).attr("id") == "f") {
            $(".menu-card").slice(0, 9).removeClass("open")
            $(".menu-card").slice(0, 9).addClass("hidden")
            $(".menu-card").slice(0, 3).addClass("open")
            $(".menu-card").slice(0, 3).removeClass("hidden")
         }

         if ($(this).attr("id") == "s") {
            $(".menu-card").slice(0, 9).removeClass("open")
            $(".menu-card").slice(0, 9).addClass("hidden")
            $(".menu-card").slice(3, 6).addClass("open")
            $(".menu-card").slice(3, 6).removeClass("hidden")
         }

         if ($(this).attr("id") == "t") {
            $(".menu-card").slice(0, 9).removeClass("open")
            $(".menu-card").slice(0, 9).addClass("hidden")
            $(".menu-card").slice(6, 9).addClass("open")
            $(".menu-card").slice(6, 9).removeClass("hidden")

         }
      }
   })


   var $cards = $(".cards")

   $cards.waypoint(function() {
      $('.list').addClass('js-list-animate')
      $cards.addClass('js-cards-animate')
      
   }, {offset:'50%', trigerOnce:true})
   

 });