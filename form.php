<html>
<body>

<!-- create a simple form for testing -->  
<form action="test.php" method="post" name="emailform">
  Name: <input type="text" name="name" placeholder="John Smith"> <br>
  Your Email: <input type="text" name="email" placeholder="example@example.com" /> <br>
  Message:<br> <textarea name="message" rows="4" cols="50" /> </textarea> <br>
<input type="submit" value="Send" />
</form>

<!-- Inform user of invalid entries -->
<h5>
  <i>Please note: </i>
  <ul>
  <li>Names can only contain letters and periods</li>
  <li>Emails can only contain letters, numbers, and the following symbols: @ . + _ -</li>
  <li>Messages must not contain the following: < > \ { }</li>
  </ul>
  <i>Forms that do not follow this trend will not be mailed.</i>
</h5>

</body>
</html>
