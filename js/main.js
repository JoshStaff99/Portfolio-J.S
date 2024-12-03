// ==========================================================================
// JavaScript
// ==========================================================================

var i = 0;
var txt = 'Lorem ipsum typing effect test test test!'; /* The text */
var speed = 2000; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
