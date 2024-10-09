<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form action="proses_validasi.php" method="post" id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }else{
                    $("#nama-error").text("");
                }
                
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                }else{
                    $("#email-error").text("");
                }

                if (!valid) {
                    event.preventDefault();
                }
            });
        });
    </script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form action="proses_validasi.php" method="post" id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Prevent default form submission
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Clear previous error messages
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                }

                // Password validation
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                }

                if (valid) {
                    // Send form data using AJAX
                    $.ajax({
                        url: 'proses_validasi.php',
                        type: 'POST',
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            // Handle success response
                            alert("Data submitted successfully: " + response);
                        },
                        error: function(xhr, status, error) {
                            // Handle error response
                            alert("An error occurred: " + error);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>