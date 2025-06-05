 var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "5",
      coverflowEffect: {
        rotate: 15,
        stretch: 0,
        depth: 500,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
    });
    
            function myFunction(x) {
          if (x.matches) { 
              var swiper = new Swiper(".mySwiper", {
                          effect: "coverflow",
                          grabCursor: true,
                          centeredSlides: true,
                          slidesPerView: "6",
                          coverflowEffect: {
                            rotate: 15,
                            stretch: 0,
                            depth: 300,
                            modifier: 1,
                            slideShadows: true,
                          },
                          loop: true,
                        });
        }}
        
        var x = window.matchMedia("(max-width: 700px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction)
        
            // SWIPER 2 //
            
 var swiper2 = new Swiper(".mySwiper2", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 15,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      loop: false,
    });
    
            function myFunction2(x) {
          if (x.matches) { 
              var swiper = new Swiper2(".mySwiper2", {
                          effect: "coverflow",
                          grabCursor: true,
                          centeredSlides: true,
                          slidesPerView: "6",
                          coverflowEffect: {
                            rotate: 15,
                            stretch: 0,
                            depth: 300,
                            modifier: 1,
                            slideShadows: false,
                          },
                          loop: false,
                        });
        }}
        
        var x = window.matchMedia("(max-width: 700px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction)