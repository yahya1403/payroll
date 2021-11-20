<?php
include_once('db/config.php');
if(isset($_POST['login'])){
$sql = "SELECT * FROM admin_user WHERE uname='".$_POST['uname']."' AND pass='".$_POST['pass']."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION['user']=$row['uname'];
  header('Location: admin/');
  exit;
} else {
  echo "<script>alert('invalid user');</script>";
}
}
include_once('header.php');
?>
<div class="login">
<div class="form">
  <form class="login-form" method="post" action="#">
    <span class="material-icons">Login</span>
    <input type="text" name="uname" placeholder="username" required/>
    <input type="password" name="pass" placeholder="password" required />
    <label class="radio-inline col-3"><input type="radio" name="type" value="admin" checked>Admin</label>
    <label class="radio-inline col-3"><input type="radio" name="type" value="user">User</label>
    <button type="submit" name="login">login</button>
  </form>  
</div>
</div>

<?php
include_once('footer.php');
?>