Halo Riyanti di sini,

Program Cuti ini dibuat menggunakan framework Laravel dan database MySQL,
Tampilan program hanya berupa tampilan dashboard dan menggunakan template StartBootsrap Admin

Berikut merupakan pandukan menjalankan program:

1. Melakukan update composer
composer update

2. Melakukan copy file .env.example(jika file .env belum ada)
   Dapat dilakukan dengan cara copy & paste lalu mengganti nama file menjadi .env
   atau dapat juga dilakukan melalui terminal dengan cara
   php artisan key:generate

3. Mengatur database dan table (migration)
   Untuk menjalankan program, silahkan buat database dengan nama submission-1
   Data sendiri sudah dimasukkan sebanyak masing masing 3 data (seeder)
   Setelah membuat database, sila melakukan migration

php artisan migrate --seed
atau
php artisan migrate -s

4. Program dapat dijalankan
php artisan serve


Selamat menjalankan program dan saya harap,
program ini sesuai dengan submission 
yang telah diberikan

-- Terima Kasih --
Salam hangat,
Riyanti Maulya