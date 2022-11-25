<?php
    session_start();
    if(isset($_SESSION['username']))  {
    header('location:index.php'); }
    require_once("koneksi.php");
?>

<title>Form Login</title>
<div align='center' bgcolor="blue">
    <form action="proseslogin.php" method="post">
        <h1>Masuk</h1>
        <table bgcolor="blue">
        <tbody>
            <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
        <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
        <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
        <tr><td colspan="2" align="center">Belum punya akun? <a href="daftar.php"><b>Daftar</b></a></td></tr>
    </tbody>
    </table>
    </form>
</div>