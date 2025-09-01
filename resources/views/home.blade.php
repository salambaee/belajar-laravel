<!--Membuat view
Buat file pada resources/views/home.blade.php
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Home</title>
    </head>
    <body>
        <h1>Selamat Datang di Halaman Home</h1>
    </body>
</html>

<!--Tambahkan kode ke dalam file routes/web.php
Route::get('/home', function () {
    return view('home');
});
-->