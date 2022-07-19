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


/*******************
validate email entry for newsletter
*******************/
// validateEmailFunc = function () {
//   $(document).on('click', '#subscribe-email-btn', function (event) {
//     event.preventDefault();
//     var email_id = $('#subscribe-email').val();
//     var val_email_id = validateEmail(email_id);
//     if (email_id != "" && val_email_id === true) {
//       var failure_message = 'Whoops, looks like there was a problem. Please try again later.';
//       var memberid = email_id.toLowerCase();
//       var url = memberid;

//       $.ajax({
//         type: 'POST',
//         url: 'php/subscribe-process.php',
//         data: { url: url },
//         dataType: 'json',
//         success: function (data) {
//           $('#msg').html(data);
//         },
//       });
//     } else {
//       $('#msg').html('<p style="color: #EA4335">Enter the E-mail id</p>');
//       return false;
//     }
//     return false;
//   });
//   function validateEmail(email) {
//     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(email);
//   }
// }