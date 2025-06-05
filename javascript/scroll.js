
    window.onload = function() {scrollFunction()};

function scrollFunction() {
    
  if (document.body.scrollTop > 240||document.documentElement.scrollTop > 240) {
    document.getElementById("navbar").style.background = "rgba(255,255,255, 1)";
    document.getElementById("navbar").style.transition = "all 0.5s";
  } 
  else {
    document.getElementById("navbar").style.background = "rgba(255,255,255, 0.5)";
  }
}
