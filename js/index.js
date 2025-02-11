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

//// New form code

// const $form_TelNo = $('#telephone'); 
// const $form_EmailAddress = $('#email');

// // Checks if fields are empty in form elements
// function validateForm() {
//   let isValid = true;

//   // Get the form fields
//   let nameForm = document.forms["contactForm"]["name"];
//   let phonenumberForm = document.forms["contactForm"]["telephone"];
//   let emailaddressForm = document.forms["contactForm"]["email"];
//   let messageForm = document.forms["contactForm"]["message"];

//   // Reset all previous errors
//   $('.form-control').removeClass('has-error');

//   // Validate Name
//   if (nameForm.value == "") {
//     $(nameForm).addClass('has-error');
//     isValid = false;
//   }

//   // Validate Phone Number
//   if (phonenumberForm.value == "") {
//     $(phonenumberForm).addClass('has-error');
//     isValid = false;
//   }

//   // Validate Email Address
//   if (emailaddressForm.value == "") {
//     $(emailaddressForm).addClass('has-error');
//     isValid = false;
//   }

//   // Validate Message
//   if (messageForm.value == "") {
//     $(messageForm).addClass('has-error');
//     isValid = false;
//   }

//   // Return if the form is valid or not
//   return isValid;
// }

// // Listen for the submit button click
// const $submitBtn = $('#submitBtn');

// $submitBtn.on('click', function(event) {
//   // First, run JavaScript form validation
//   if (validateForm()) {
//     // If the form is valid, prevent the default form submission
//     event.preventDefault();

//     // Gather the form data
//     const formData = $('#contact-form').serialize(); // Serializes the form fields into a query string

//     $.ajax({
//         url: 'inc/contactform.php', // Make sure this path is correct
//         type: 'POST',
//         data: formData, // Send the serialized form data
//         success: function(response) {
//           // Log the response for debugging
//           console.log(response);
      
//           // Check if the response was successful (PHP validation passed)
//           if (response.success) {
//             // Display a success message in the alert container
//             displaySuccessMessage('Your message has been sent successfully!');

//             // Reset the form fields
//             $('#contact-form')[0].reset(); 
//           } else {
//             // If there are errors, display them using the displayErrors function
//             displayErrors(response.errors);
//           }
//         },
//         error: function(xhr, status, error) {
//           // Handle any errors that occur during the AJAX request
//           console.error('Error occurred:', error);
//           alert('An error occurred while submitting the form.');
//         }
//       });
//   } else {
//     // If JS validation fails, prevent form submission
//     event.preventDefault();
//   }

// });

// // Function to display errors returned by PHP
// function displayErrors(errors) {
//   $('#alert').hide(); // Hide previous error messages

//   $('.form-control').removeClass('has-error'); // Reset previous errors

//   // Check if errors are returned for each field and add the 'has-error' class
//   if (errors.name) {
//     $('#name').addClass('has-error');
//   }
//   if (errors.email) {
//     $('#email').addClass('has-error');
//   }
//   if (errors.telephone) {
//     $('#telephone').addClass('has-error');
//   }
//   if (errors.message) {
//     $('#message').addClass('has-error');
//   }

//   // Create HTML to display the error messages
//   let errorHtml = '';
//   for (const field in errors) {
//     errorHtml += `<p class="alert-danger-active">${errors[field]}</p>`;
//   }

//   // Display the errors in the alert-danger div
//   $('#alert').html(errorHtml).show();
// }

// // Function to display a success message
// function displaySuccessMessage(message) {
//   // Hide any previous messages
//   $('.alert.alert-danger-hidden').hide();

//   // Show the success message in the alert-danger div
//   $('.alert.alert-danger-hidden').removeClass('alert-danger-hidden').addClass('alert alert-success').html(message).show();
// }