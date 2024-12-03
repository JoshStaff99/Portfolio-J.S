// ==========================================================================
// JavaScript
// ==========================================================================

var i = 0;
var txt = 'My name is Joshua Stafford'; /* The text */
var speed = 200; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
Window.onload = typeWriter( );