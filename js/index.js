// ==========================================================================
// Index JavaScript
// ==========================================================================

// Typing Effect for the banner section of the landing page
var typed = new Typed('#banner-typing-1', {
    strings: ['Hello, My name is Joshua Stafford'],
    typeSpeed: 50,
  });
var typed = new Typed('#banner-typing-2', {
    strings: ['I am a Web Developer'],
    typeSpeed: 50,
  }); 
// Removes the banner HTML content if JavaScript is active on the page
document.querySelector(".banner-content-nojs").remove();
