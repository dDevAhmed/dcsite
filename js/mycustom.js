/*******************
sticky side nav on services page
*******************/

// When the user scrolls the page, execute myFunction
window.onscroll = function () { myFunction() };

// Get the navbar
var navbar = document.getElementById("sticky-side");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


/*******************
copy to click board button on service page
*******************/
const clickToCopyBtn = document.querySelector('.click-to-copy-btn');
clickToCopyBtn.onclick = () => {
  navigator.clipboard.writeText(window.location.href);
}
// stop scrolling to top
document.getElementById('#show-copied').addEventListener('click', function (e) {
  e.preventDefault();
  // doSomething();
})