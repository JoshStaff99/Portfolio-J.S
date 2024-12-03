// ==========================================================================
// JavaScript
// ==========================================================================

// Typing Effect
// var i = 0;
// var txt = 'My name is Joshua Stafford';  // The text 
// var speed = 200; // The speed/duration of the effect in milliseconds

// function typeWriter() {
//   if (i < txt.length ) {
//     document.getElementById("demo").innerHTML += txt.charAt(i);
//     i++;
//     setTimeout(typeWriter, speed);
//   }
// }
// Window.onload = typeWriter( );


// Typing Effect
var typed = new Typed('#banner-typing-1', {
    strings: ['Hello my name Joshua Stafford'],
    typeSpeed: 50,
  });
var typed = new Typed('#banner-typing-2', {
    strings: ['I am a Web Developer'],
    typeSpeed: 50,
  }); 


// Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu
function burgermenuClick() {
    var x = document.getElementById("dropdown-menu-container");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }