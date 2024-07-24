<!-- login form -->
<style>
 .form-box {
    border: 1px solid #ccc;
    padding: 8px;
    width: 100%; /*lebar*/
    margin: 0 auto;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .button-link{
    display: inline-block;
  padding: 2px 2px;
  background-color: blue;
  color: white;
  border: none;
  text-decoration: none;
  text-align: center;
  cursor: pointer;
  }
</style>
<div class="form-box">
<form method="post">
<b><label for="username">Login</label></b><br><br>
  <label for="username">Username</label><br>
  <input type="text" id="username" name="username"><br><br>
  <label for="password">Password</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Login" style="background-color:blue; color: #ffffff;">
  <a href="indexlama.php" class="button-link">kembali</a>
</form>

<?php
/**Nim : 2257401033
 * Nama : Idul Fikri
 * Kelas : MI22B */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // jika username =admin pasword=admin : "login berhasil"
  if ($username == "admin" && $password == "admin") {
    echo "<p class='succes'>Login berhasil !</p>";
  } else {
    echo "<p class='gagal'>Username/password tidak sesuai !</p>";
  }
}
?>
</div>
<style>
    .succes{
        color : green;
    }
    .gagal{
        color : red;
        }
    
</style>