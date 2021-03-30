<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>daftar</title>
</head>
<body>
    <form action="{{ route('daftars.create') }}" method="get">
        @csrf
        <label for="nis">
            <input type="text" name="nis">
        </label>
        <label for="nama">
            <input type="text" name="nama">
        </label>
        <label for="jenis_kelamin">
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </label>
        <label for="tempat_lahir">
            <input type="text" name="tempat_lahir">
        </label>
        <label for="tanggal_lahir">
            <input type="date" name="tanggal_lahir">
        </label>
        <label for="alamat">
            <input type="text" name="alamat">
        </label>
        <label for="asal_sekolah">
            <input type="text" name="asal_sekolah">
        </label>
        <label for="kelas">
            <input type="text" name="kelas">
        </label>
        <label for="jurusan">
            <select name="jurusan" id="jurusan">
                <option value="MMD">MMD</option>
                <option value="HTL">HTL</option>
                <option value="BDP">BDP</option>
                <option value="TKJ">TKJ</option>
                <option value="TBG">TBG</option>
                <option value="OTKP">OTKP</option>
                <option value="RPL">RPL</option>
            </select>
        </label>
        <button>Daftar</button>
    </form>
</body>
</html>