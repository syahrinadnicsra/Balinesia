<!DOCTYPE html>

<head lang="en" dir="ltr">
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/signin.css">
    <title>Formulir Pendaftaran</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Sign Up
        </div>
        <form action="proses.php" method="POST">
            <div class="field">
                <input type="text" name="nama" required>
                <label>Masukkan Username</label>
            </div>
            <div class="field">
                <input type="email" name="email" required>
                <label>Masukkan Email</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Masukkan Password</label>
            </div>
            <div class="field">
                <input type="password" required>
                <label>Ulangi Password</label>
            </div>
            <div class="field">
                <div class="submit">
                    <input type="submit" value="Daftar" name="proses">
                </div>
            </div>
            <div class="signup-link">
                Sudah Menjadi Anggota?<a href="signin.html">Masuk Sekarang</a>
            </div>
        </form>
    </div>

</body>

</html>