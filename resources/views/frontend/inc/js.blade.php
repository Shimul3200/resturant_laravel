 <!-- ALL JS FILES -->
 <script src="{{asset('frontend/js/all.js')}}"></script>
 <!-- ALL PLUGINS -->
 <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
 <script src="{{asset('frontend/js/custom.js')}}"></script>
 <script src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>
 <script src="{{asset('frontend/js/timeline.min.js')}}"></script>
 <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
 <script>
     $('[data-fancybox="gallery"]').fancybox({
         thumbs : {
             autoStart : true
         }
     });
 </script>
 <script>
     timeline(document.querySelectorAll('.timeline'), {
         forceVerticalMode: 700,
         mode: 'horizontal',
         verticalStartPosition: 'left',
         visibleItems: 4
     });
 </script>
 
         <script>
             // When the user scrolls the page, execute myFunction
         window.onscroll = function() {myFunction()};

         // Get the header
         var header = document.getElementById("myHeader");

         // Get the offset position of the navbar
         var sticky = header.offsetTop;

         // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
         function myFunction() {
         if (window.pageYOffset > sticky) {
             header.classList.add("sticky");
         } else {
             header.classList.remove("sticky");
         }
         }
         </script>
         
         <script>
     $('.owl-carousel').owlCarousel({
         loop:true,
         margin:10,
         nav:true,
         responsive:{
             0:{
                 items:1
             },
             600:{
                 items:2
             },
             1000:{
                 items:3
             }
         }
     })
      $('.carousel').carousel({
		  interval: 2000
		})
         </script>