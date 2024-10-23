<?php
if (isset($_FILES['files'])) {
    $errors = [];
    $totalfile = count($_FILES['files']['name']);

    // Loop through each file
    for ($i = 0; $i < $totalfile; $i++) {
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp_name = $_FILES['files']['tmp_name'][$i];
        $file_name = $_FILES['files']['name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions = ["jpg", "jpeg", "png", "gif"];

        // Validate file type and size
        if (!in_array($file_ext, $extensions)) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF untuk file: $file_name.";
        }
        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh melebihi dari 2 MB untuk file: $file_name.";
        }

        // If no errors, move the uploaded file
        if (empty($errors)) {
            $targetFile = "images/" . basename($file_name);
            if (move_uploaded_file($file_tmp_name, $targetFile)) {
                echo "File $file_name berhasil diunggah.<br>";
            } else {
                echo "Terjadi kesalahan saat mengunggah file $file_name.<br>";
            }
        } else {
            echo implode("<br>", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
