<?php

// Deklarasi variabel untuk menyimpan data formulir
  $username = "";
  $password = "";
  $submit = "";

// Deklarasi variabel untuk menampung pesan error
$error = ""; 

// Memproses data formulir jika tombol submit ditekan
if (isset($_POST['submit'])) {
  // Menangkap data dari formulir
// Menangkap data dari formulir
$username = trim($_POST['username']);
$password = trim($_POST['password']);
  
  if (empty($error)) {
    // Simulasi login dengan membandingkan username dan password dengan data yang disimpan
    $logins = array('admin' => 'admin123', 'user' => 'user123');

    if (isset($logins[$username]) && password_verify($password, $logins[$username])) {
      echo "Login berhasil!<br>";
      echo "Selamat datang, $username<br>";
    } else {
      $error .= "Username atau password salah!<br>";
    }
  }
  if (!empty($error)) {
    echo "<p style='color: red;'>Ada beberapa kesalahan:</p>";
    echo "<ul>";
      echo $error;
    echo "</ul>";
  }


  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formulir Sederhana</title>
</head>
<body>
  <div class="container">
  <h1>Formulir Login</h1>
  <form  method="post">
    <label class="label" for="username">Username:</label>
    <input class="input"  type="text" required id="username" name="username" value="<?php echo $username; ?>">

    <label class="label" for="password">Password:</label>
    <input class="input" required type="password" id="password" name="password" value="<?php echo $password; ?>">
  <br>
    <button type="submit" name="submit">Submit</button>
  </form>
  </div>
</body>
</html>

