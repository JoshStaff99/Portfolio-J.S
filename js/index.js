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

// Removes the banner placeholder HTML content if JavaScript is active on the page
document.querySelector(".banner-content-nojs").remove();

// // Email validator 
// const validateEmail = (email) => {
//   return email.match(
//     /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//   );
// };

// const validate = () => {
//   const $result = $('#result');
//   const email = $('#email').val();
//   $result.text('');

//   if(validateEmail(email)){
//     $result.text(email + ' is valid.');
//     $result.css('color', 'green');
//   } else{
//     $result.text(email + ' is invalid.');
//     $result.css('color', 'red');
//   }
//   return false;
// }

// $('#email').on('input', validate);

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
  } if (lastnameForm == "") {
    alert("Last name must be filled out");
   return false;
  } if (phonenumberForm == "") {
    alert("Phone number must be filled out");
   return false;
  } if (emailaddressForm == "") {
    alert("Email Address must be filled out");
   return false;
  } if (subjectForm == "") {
    alert("Subject must be filled out");
   return false;
  } if (messageForm == "") {
    alert("Message must be filled out");
   return false;
  } 
}

// Prevents the page from refreshing when you click on the submit button
 document.getElementClassName("btn-submit").addEventListener('click', function(event){event.preventDefault();});

 //Get form element
 var form=document.getElementById("formId");
 function submitForm(event){

    //Preventing page refresh
    event.preventDefault();
 }

 //Calling a function during form submission.
 form.addEventListener('submit', submitForm);

