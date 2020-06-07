<form method="post">
<table>
   <tr><td style="color: #003300; font-weight: bold; fontsize: 24px"> Enter Your Message Here:</td> </tr>
   <tr><td><textarea name="message" placeholder="Enter Message Here" class="txt"></textarea></td></tr>
   <tr><td><input type="submit" name="send" value="Send Message"></td></tr>
</table>
</form>
<?php
  if(isset($_POST['send'])){
  include 'includes/config.php';                        
  $message = $_POST['message'];
  $qry = "INSERT INTO message (message,client_id,time,status)
          VALUES('$message','$_SESSION[email]  ',NOW(),'Unread')";     
  $result = $conn->query($qry);
  if($result == TRUE){
    echo "<script type = \"text/javascript\"> 
          alert(\"Message Successfully Send\");
          window.location = (\"success.php\")  	</script>"	}
  else{
    echo "<script type = \"text/javascript\">
          alert(\"Message Not Send. Try Again\");
          window.location = (\"message_admin.php\")	</script>";
}} ?>
