<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Pendaftaran</h1>
    <a href="/">Kembali</a>

    <form action="/home" method="POST">
        @csrf
        <label >Nama Lengkap</label> <br>
        <input type="text" name="fullname"> <br> <br>
        <label >Bio</label> <br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea> <br> <br>

    <input type="submit" value="kirim">
    </form>
</body>
</html>