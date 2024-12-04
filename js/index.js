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

// Checks if fields are empty in form elements
function validateForm() {
  let firstnameForm = document.forms["FirstNameForm"]["fname"].value;
  let lastnameForm = document.forms["LastNameForm"]["lname"].value;
  let phonenumberForm = document.forms["PhoneNumberForm"]["pnumber"].value;
  let emailaddressForm = document.forms["EmailAddressForm"]["emailaddress"].value;
  let subjectForm = document.forms["SubjectForm"]["subject"].value;
  let messageForm = document.forms["MessageForm"]["message"].value;

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
    alert("Not valid");
    return false;
  } else if (emailaddressForm == "") {
    alert("Email Address must be filled out");
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
    alert('Valid')
    event.preventDefault();
  } else
  event.preventDefault();
});

