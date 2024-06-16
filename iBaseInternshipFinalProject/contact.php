<?php
  if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];

   $conn=mysqli_connect("localhost","root","mysql123","ibase");
   $q="insert into contact values('$name','$email','$subject','$message')";
   mysqli_query($conn,$q);

?>
<script>
alert("Success! We'll reach out soon to address and resolve any concerns you may have. Thank you!");
window.location="index.html";
</script>
<?php
}
?>
