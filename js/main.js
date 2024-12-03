// ==========================================================================
// JavaScript
// ==========================================================================

// Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu
function burgermenuClick() {
    var x = document.getElementById("dropdown-menu-container");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }