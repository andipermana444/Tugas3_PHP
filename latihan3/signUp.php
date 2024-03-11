

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>

    <body class="container">
        <h1>Sign Up</h1>
        <form action="postPage.php" method="post">
            <div class="row g-2 my-2">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                <br>
                <div class="row g-2 my-2">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                    <br>
                </div>
                <div class="row g-2 my-2">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <br>
                </div>
                <div class="row g-2 my-2">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                    <br>
                </div>
                <div class="row g-2 my-2">
                    <label for="program_studi">Program Studi:</label>
                    <select id="program_studi" name="program_studi">
                        <option value="Bisnis Manajemen">Bisnis Manajemen</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                    </select>
                    <br>
                </div>
                <div class="row g-2 my-2">
                    <label for="alamat">Alamat:</label>
                    <textarea id="alamat" name="alamat" required></textarea>
                    <br>
                </div>
                <div class="row g-2 my-2">
                    <label for="handphone">Handphone:</label>
                    <input type="number" id="handphone" name="handphone" required>
                    <br>
                </div>
                <div class="row g-2 my-2">
                    <div class="col-2">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                    </div>
                    <div class="col-4" class="form-check">
                        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki">
                        <label for="laki-laki">Laki-laki</label>
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div><br>
                <input name="btnSubmit" type="submit" value="Sign up">
                <input name="reset" type="reset" value="Cancel">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>

    </body>

    </html>
  