
window.onscroll = function() {upFunction(), scrollFunction()};

function upFunction() {
    
  if (document.body.scrollTop > 600||document.documentElement.scrollTop > 600) {
    document.getElementById("subir").style.display= "flex";
  } 
  else {
    document.getElementById("subir").style.display = "none";
  }
}




    