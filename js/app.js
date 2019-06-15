window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 95 || document.documentElement.scrollTop > 95) {
        document.getElementById("header").style.boxShadow = "10px 4px 26px -12px rgba(0, 0, 0, 0.75)";
       document.getElementById("header").style.backgroundColor="white";
      //  document.getElementsByClassName("navlink").style.color="black";
      } else {
        document.getElementById("header").style.boxShadow = "0 0 0";
      // document.getElementById('header').style.backgroundColor = 'transparent';
      }
}
