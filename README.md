## Langkah 2, Membuat Route Sederhana
Edit file `routes/web.php`
```php
Route::get('/', function () {
    return "Selamat Datang di Laravel!";
});

Route::get('/profil', function () {
    return "Ini adalah halaman profil";
});
```
Coba akses : http://localhost:8000/profil
!['Screenshot'](images/01.png)
!['Screenshot'](images/02.png)

## Langkah 3, Membuat View
Buat file `resources/views/home.blade.php`
```html
<!DOCTYPE html>
    <html>
        <head>
            <title>Halaman Home</title>
        </head>
        <body>
            <h1>Selamat Datang di Halaman Home</h1>
        </body>
</html>
```
Tambahkan route :
```php
Route::get('/home', function () {
    return view('home');
});
```
Coba akses : http://localhost:8000/home
!['Screenshot'](images/03.png)
!['Screenshot'](images/04.png)
!['Screenshot'](images/05.png)

## Langkah 4, Mengirim Data ke View
Buat route dengan data :
```php
Route::get('/mahasiswa', function () {
    $nama = "Fury Dr";
    return view('mahasiswa', compact('nama'));
});
```
Buat file `resources/views/mahasiswa.blade.php`
```html
<h1>Halo, {{ $nama }}</h1>
```
Coba akses : http://localhost:8000/mahasiswa
!['Screenshot'](images/06.png)
!['Screenshot'](images/07.png)
!['Screenshot'](images/08.png)

## Langkah 5, Menghubungkan Route, Controller, dan View
Buat controller :
`php artisan make::controller MahasiswaController`

Isi controller (`app/Http/Controllers/MahasiswaController.php`) :
```php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    public function index() {
        $nama = "Budi";
        return view('mahasiswa', compact('nama'));
    }
}
```
Ubah atau ubah juga route :
```php
Route::get('/mahasiswa', [\App\Http\Controllers\MahasiswaController::class, 'index']);
```
!['Screenshot'](images/09.png)
!['Screenshot'](images/10.png)
!['Screenshot'](images/11.png)
!['Screenshot'](images/12.png)