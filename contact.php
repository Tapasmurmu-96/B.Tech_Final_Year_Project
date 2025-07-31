<? php

$con = mysqli_connect('localhost','root','','contactuserdata');
if(!$con){
 ?>
<script type="text/javascript">
    
    alert('Error: Unable to connect to the database');
    
</script>
<? php
}
 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

$query = " insert into contactdata (first_name , last_name ,email , phone , comments)
values ('$first_name', '$last_name' , '$email' , '$phone' ,'$comments')";



$iquery = mysqli_query($con, $query);

if($iquery){ 
?>
}