<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nama = $_POST["nama"];
//     $email = $_POST["email"];
//     $password = htmlspecialchars($_POST["password"]);
//     $errors = array();

    //validasi nama
    // if (empty($nama)) {
    //     $errors[] = "Email harus diisi.";
    // } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $errors[] = "Format email tidak valid";
    // }

    //jika ada kesalahan validasi
//     if (empty($errors)) {
//         foreach ($errors as $error) {
//             echo $error . "<br>";
//         }
//     }else{
//         echo "Data berhasil dikirim: Nama = $nama, Email = $email";
//     }
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve posted values from HTML form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Initialize error array
    $errors = [];

     //validasi nama
    if (empty($nama)) {
        $errors[] = 'Nama harus diisi.';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] .= 'Format email tidak valid';
    } else {
    }if (strlen(trim($password)) < 8) { // Validate password length (minimal 8 characters)
        $errors[] = 'Password harus minimal 8 karakter.';
    }

    //jika ada kesalahan validasi
    if ($errors) {
        echo nl2br(implode('<br>', $errors)); 
    } else {
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}

?>