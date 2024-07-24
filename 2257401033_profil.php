<style>
 .form-box {
    border: 1px solid #ccc;
    padding: 8px;
    width: 100%; /*lebar*/
    margin: 0 auto;
    background-color: #f9f9f9;
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
    <label for="nim">NIM</label><br>
    <input type="text" id="nim" name="nim"><br><br>
    <label for="nama">Nama</label><br>
    <input type="text" id="nama" name="nama"><br><br>
    <label for="kelas">Kelas</label><br>
    <input type="text" id="kelas" name="kelas"><br><br>
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email"><br><br>
    <label for="no_hp">Nomor HP</label><br>
    <input type="tel" id="no_hp" name="no_hp"><br><br>
    <input type="submit" value="Simpan" style="background-color: blue; color: white;">
    <a href="indexlama.php" class="button-link">Kembali</a>
  </form>

  <?php
  /**Nim : 2257401033
   * Nama : Idul Fikri
   * Kelas : MI22B
   */
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];

    echo "<table border='1'>";
    echo "<tr><th colspan='2' bgcolor='gren'>Informasi</th></tr>";
    echo "<tr><td bgcolor 'grey'>NIM</td><td>$nim</td></tr>";
    echo "<tr><td bgcolor='grey'>Nama</td><td>$nama</td></tr>";
    echo "<tr><td bgcolor='grey'>Kelas</td><td>$kelas</td></tr>";
    echo "<tr><td bgcolor='grey'>Email</td><td>$email</td></tr>";
    echo "<tr><td bgcolor='grey'>Nomor HP</td><td>$no_hp</td></tr>";
    echo "</table>";
  }
?>
</div>