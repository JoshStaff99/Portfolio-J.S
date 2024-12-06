// ==========================================================================
// Index JavaScript
// ==========================================================================

// Typing Effect for the banner section of the landing page
var typed = new Typed('#banner-typing-1', {
    strings: ['Hello, my name is Joshua Stafford'],
    typeSpeed: 50,
  });
var typed = new Typed('#banner-typing-2', {
    strings: ['I am a Web Developer'],
    typeSpeed: 50,
}); 

// Removes the banner placeholder HTML content if JavaScript is active on the page
document.querySelector(".banner-content-nojs").remove();

// Email validator 
const $form_TelNo = $('#telNo'); 
let isValidTelNo = ()=> /^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test($form_TelNo.val());
const $form_EmailAddress = $('#emailAd');
let isValidEmailAddress = ()=> /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($form_EmailAddress.val());

// Checks if fields are empty in form elements
function validateForm() {
  let firstnameForm = document.forms["contactForm"]["fname"].value;
  let lastnameForm = document.forms["contactForm"]["lname"].value;
  let phonenumberForm = document.forms["contactForm"]["pnumber"].value;
  let emailaddressForm = document.forms["contactForm"]["emailaddress"].value;
  let subjectForm = document.forms["contactForm"]["subject"].value;
  let messageForm = document.forms["contactForm"]["message"].value;

  if (firstnameForm == "") {
    alert("First Name must be filled out");
    return false;
  } else if (lastnameForm == "") {
    alert("Last name must be filled out");
   return false;
  } else if (phonenumberForm == "") {
    alert("Phone number must be filled out");
   return false;
  } else if (!isValidTelNo()) {
    alert("Not a valid telephone number");
    return false;
  } else if (emailaddressForm == "") {
    alert("Email Address must be filled out");
   return false; 
  } else if (!isValidEmailAddress()) {
    alert("Not a valid email address");
    return false;
  } else if (subjectForm == "") {
    alert("Subject must be filled out");
   return false;
  } else if (messageForm == "") {
    alert("Message must be filled out");
   return false;
  } else {
    return true;
  }
}

// Prevents the page from refreshing when you click on the submit button
const $submitBtn = $('.btn-submit');

$submitBtn.on('click', function(event){
  if (validateForm() ) {
    alert('Form Submitted')
    $('#contactFormSubmit')[0].reset();
    //document.getElementsByClassName(".form").reset();
  } else
  event.preventDefault();
});
