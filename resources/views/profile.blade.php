<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 200px;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px solid #ccc;
            background: url('https://cdn-icons-png.flaticon.com/512/847/847969.png') no-repeat center;
            background-size: cover;
            margin: 0 auto 20px auto;
        }

        .profile-box {
            width: 250px;
            margin: 10px auto;
            padding: 10px;
            background: #e0e0e0;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="profile-img"></div>

    <div class="profile-box">Nama : {{ $nama }}</div>

    <div class="profile-box">Kelas : {{ $kelas }}</div>

    <div class="profile-box">NPM : {{ $nim }}</div>
</body>
</html>
