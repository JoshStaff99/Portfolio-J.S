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

// Removes id with hover effect for drop down menu if JavaScript is loaded on the page
document.getElementById("nav-top-burgermenu-nojs").removeAttribute("id");
