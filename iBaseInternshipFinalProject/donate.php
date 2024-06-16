<?php
  if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $message=$_POST['message'];

   $conn=mysqli_connect("localhost","root","mysql123","ibase");
   $q="insert into donate values('$name','$email','$message')";
   mysqli_query($conn,$q);

?>
<script>
alert("Success! We'll contact you soon to welcome you aboard!");
window.location="index.html";
</script>
<?php
}
?>
