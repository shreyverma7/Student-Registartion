<?php
    include_once('config.php'); //db connect
    if(isset($_POST['submitbutton']) && $_POST['submitbutton'] == 'Submit Form')
    {
      $name =  $_POST['textnames'];
      $fname =  $_POST['fathername'];
      $postaddress =  $_POST['paddress'];
      $personaladdress =  $_POST['personaladdress'];
      $gender =  $_POST['sex'];
      $city =  $_POST['City'];
      $course =  $_POST['Course'];
      $district =  $_POST['District'];
      $state =  $_POST['State'];
      $pincode =  $_POST['pincode'];
      $email =  $_POST['emailid'];
      $dob =  $_POST['dob'];
      $mobile =  $_POST['mobileno']; //key value to  post 

      $db_format_dob = date('Y-m-d',strtotime($dob)); //format changed
      // print_r($_POST);
      // exit();

      $sql = mysqli_query($mysqli,"INSERT INTO studentdetails (`name`, `fathername`, `post_address`,`personal_address`,`gender`,`city`,`course`,`district`,`state`,`pincode`,`email`,`date_of_birth`,`mobile`)
VALUES ('$name', '$fname', '$postaddress','$personaladdress','$gender','$city','$course','$district','$state','$pincode','$email','$db_format_dob','$mobile')") or die("unable to insert student detailss :".mysqli_error());

     if($sql){
         echo "record inserted";
     }else{
         echo "record unable to insert";
     }
     
    echo "<script type= 'text/javascript' >window.location ='index.php' </script>"; //reload 



    }
?>

<html>

  <head>

  <script type="text/javascript" src="validate.js"></script>

  </head>

  <body>

  <form action="#" name="StudentRegistration" method="post" onSubmit="return(validate());">

<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"

  cellspacing="2">


<tr>

  <td colspan=2>

  <center><font size=4><b>Student Registration Form</b></font></center>

  </td>

  </tr>


<tr>

  <td>Name</td>

  <td><input type=text name=textnames id="textname" required size="30"></td>

  </tr>


<tr>

  <td>Father Name</td>

  <td><input type="text" name="fathername" id="fathername"

  size="30"></td>

  </tr>

  <tr>

  <td>Postal Address</td>

  <td><input type="text" name="paddress" id="paddress" size="30"></td>

  </tr>


<tr>

  <td>Personal Address</td>

  <td><input type="text" name="personaladdress"

  id="personaladdress" size="30"></td>

  </tr>


<tr>

  <td>Sex</td>

  <td><input type="radio" name="sex" value="male" size="10">Male

  <input type="radio" name="sex" value="Female" size="10">Female</td>

  </tr>


<tr>

  <td>City</td>

  <td><select name="City">

  <option value="-1" selected>select..</option>

  <option value="New Delhi">NEW DELHI</option>

  <option value="Mumbai">MUMBAI</option>

  <option value="Goa">GOA</option>

  <option value="Patna">PATNA</option>

  </select></td>

  </tr>


<tr>

  <td>Course</td>

  <td><select name="Course">

  <option value="-1" selected>select..</option>

  <option value="B.Tech">B.TECH</option>

  <option value="MCA">MCA</option>

  <option value="MBA">MBA</option>

  <option value="BCA">BCA</option>

  </select></td>

  </tr>


<tr>

  <td>District</td>

  <td><select name="District">

  <option value="-1" selected>select..</option>

  <option value="Nalanda">NALANDA</option>

  <option value="UP">UP</option>

  <option value="Goa">GOA</option>

  <option value="Patna">PATNA</option>

  </select></td>


</tr>


<tr>

  <td>State</td>

  <td><select Name="State">

  <option value="-1" selected>select..</option>

  <option value="New Delhi">NEW DELHI</option>

  <option value="Mumbai">MUMBAI</option>

  <option value="Goa">GOA</option>

  <option value="Bihar">BIHAR</option>

  </select></td>

  </tr>

  <tr>

  <td>PinCode</td>

  <td><input type="text" name="pincode" id="pincode" size="30"></td>


</tr>

  <tr>

  <td>EmailId</td>

  <td><input type="text" name="emailid" id="emailid" size="30"></td>

  </tr>


<tr>

  <td>DOB</td>

  <td><input type="text" name="dob" id="dob" size="30"></td>

  </tr>


<tr>

  <td>MobileNo</td>

  <td><input type="text" name="mobileno" id="mobileno" size="30"></td>

  </tr>

  <tr>

  <td><input type="reset"></td>

  <td colspan="2"><input type="submit" name="submitbutton" value="Submit Form" /></td>

  </tr>

  </table>

  </form>
  <script>
      function validate()
{ 
   if( document.StudentRegistration.textnames.value == "" )
   {
     alert( "Please provide your Name!" );
     document.StudentRegistration.textnames.focus() ;
     return false;
   }
   if( document.StudentRegistration.fathername.value == "" )
   {
     alert( "Please provide your Father Name!" );
     document.StudentRegistration.fathername.focus() ;
     return false;
   }
   
   if( document.StudentRegistration.paddress.value == "" )
   {
     alert( "Please provide your Postal Address!" );
     document.StudentRegistration.paddress.focus() ;
     return false;
   }
   if( document.StudentRegistration.personaladdress.value == "" )
   {
     alert( "Please provide your Personal Address!" );
     document.StudentRegistration.personaladdress.focus() ;
     return false;
   }
   if ( ( StudentRegistration.sex[0].checked == false ) && ( StudentRegistration.sex[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }   
   if( document.StudentRegistration.City.value == "-1" )
   {
     alert( "Please provide your City!" );
     document.StudentRegistration.City.focus() ;
     return false;
   }   
   if( document.StudentRegistration.Course.value == "-1" )
   {
     alert( "Please provide your Course!" );
    
     return false;
   }   
   if( document.StudentRegistration.District.value == "-1" )
   {
     alert( "Please provide your Select District!" );
    
     return false;
   }   
   if( document.StudentRegistration.State.value == "-1" )
   {
     alert( "Please provide your Select State!" );
     
     return false;
   }
   if( document.StudentRegistration.pincode.value == "" ||
           isNaN( document.StudentRegistration.pincode.value) ||
           document.StudentRegistration.pincode.value.length != 6 )
   {
     alert( "Please provide a pincode in the format ######." );
     document.StudentRegistration.pincode.focus() ;
     return false;
   }
 var email = document.StudentRegistration.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRegistration.emailid.focus() ;
     return false;
 }
  if( document.StudentRegistration.dob.value == "" )
   {
     alert( "Please provide your DOB!" );
     document.StudentRegistration.dob.focus() ;
     return false;
   }
  if( document.StudentRegistration.mobileno.value == "" ||
           isNaN( document.StudentRegistration.mobileno.value) ||
           document.StudentRegistration.mobileno.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123." );
     document.StudentRegistration.mobileno.focus() ;
     return false;
   }
   return( true );
}
  </script>


  </body>

  </html>