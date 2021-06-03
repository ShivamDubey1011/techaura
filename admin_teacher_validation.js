
function validate()
{ 
   if( document.StudentRegistration.fname.value == "" )
   {
     alert( "Please provide your First Name!" );
     document.StudentRegistration.fname.focus() ;
     return false;
   }
   if( document.StudentRegistration.lname.value == "" )
   {
     alert( "Please provide your Last Name!" );
     document.StudentRegistration.lname.focus() ;
     return false;
   }
   
   
 var email = document.StudentRegistration.email.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRegistration.email.focus() ;
     return false;
 }
  
  if( document.StudentRegistration.contact.value == "" ||
           isNaN( document.StudentRegistration.contact.value) ||
           document.StudentRegistration.contact.value.length != 10 )
   {
     alert( "Please provide correct Phone Number." );
     document.StudentRegistration.contact.focus() ;
     return false;
   }
   if( document.StudentRegistration.user_id.value == "" )
   {
     alert( "Please provide your Use_id " );
     document.StudentRegistration.user_id.focus() ;
     return false;
   }
   if( document.StudentRegistration.pass.value == "" )
   {
     alert( "Please enter password " );
     document.StudentRegistration.pass.focus() ;
     return false;
   }
   if (document.StudentRegistration.pass.value != document.StudentRegistration.pass1.value)
  {
          alert('Passwords did not match!');
          document.StudentRegistration.pass1.focus() ;
          return false;
      }

   return( true );
}