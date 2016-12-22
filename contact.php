<?php include 'inc/top.inc';?>


<?php include 'inc/nav.inc';?>

<section id="fourth">
    <div class="container">

    <script type="text/javascript">
        function validate()
        {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus();
            return false;
         }
         
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (document.myForm.email.value == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please provide your correct email!")
            document.myForm.email.focus() ;
            return false;
         }
         
         if( document.myForm.phone.value == "" ||
         isNaN( document.myForm.zip.value ))
         {
            alert( "Please provide a phone number." );
            document.myForm.phone.focus() ;
            return false;
         }
      }
    </script>

    <form name="myForm" method="post" action="database-write.php" onsubmit="return(validate());">
        Name: <input type="text" name="name">
        <br>
        Email: <input type="text" name="email">
        <br>
        Phone: <input type="text" name="phone">
        <br><br>
        Message: <textarea name="message"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
    </div>
    </section>
</body>
</html>