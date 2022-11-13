## Deploy Project Menggunakan Github

<b>Membuat Repository Github</b>
- Pastikan sudah memiliki akun github, jika belum silahkan buat akun github terlebih dahulu di https://github.com/
- Setelah itu klik new pada repository github kalian
- Buat nama repository yang kalian kehendaki
- Untuk status bisa dipilih jika public maka akan terlihat ke semua orang, jika data bersifat rahasia maka pilihlah privat.
- Klik Create repository 
- Repository telah berhasil dibuat

<b>Menambahkan Isi ke Repository Github</b>
- Buka software Visual Studio code/Git Bash ketikkan kode seperti ini :
- git init
- git add .
- git commit -m "first" (first dalam tanda "" bisa di custom sesuai keinginan)
- git branch -M main
- git remote add origin (disini nantinya akan tertera link yang akan muncul di github kalian)
- git push -u origin main
- Buka kembali github kalian project kalian akan ada di github


## Cloning file dari Github

- Jika mendownload file zip ekstrak terlebih dahulu dan letakkan folder yang diekstrak tadi ke dalam file C:xampp/htdocs
- Jika dari link buka terminal ketikkan kode ini : git clone (tuliskan linknya)
- Setelah itu instal composer : composer install
- cp .env.example .env (untuk mencopy file .env)
- php artisan config:cache
- php artisan key:generate
- Buat nama database dan ganti DB_DATABASE dengan nama database yang telah dibuat. 
- <b>php artisan migrate</b>
- <b>php artisan db:seed</b>






