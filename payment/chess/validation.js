
function validate()
{ 
   if( document.GameRegistration.fname.value == "" )
   {
     alert( "Please provide your First Name!" );
     document.GameRegistration.fname.focus() ;
     return false;
   }
   if( document.GameRegistration.lname.value == "" )
   {
     alert( "Please provide your Last Name!" );
     document.GameRegistration.lname.focus() ;
     return false;
   }
   
   if( document.GameRegistration.college.value == "" )
   {
     alert( "Please provide your College " );
     document.GameRegistration.college.focus() ;
     return false;
   }
   
  
  if( document.GameRegistration.contact.value == "" ||
           isNaN( document.GameRegistration.contact.value) ||
           document.GameRegistration.contact.value.length != 10 )
   {
     alert( "Please provide correct Phone Number." );
     document.GameRegistration.contact.focus() ;
     return false;
   }
  

   return( true );
}