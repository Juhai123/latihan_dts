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
- <b>git init</b>
- <b>git add .</b>
- <b>git commit -m "first" </b> (first dalam tanda "" bisa di custom sesuai keinginan)
- <b>git branch -M main</b>
- <b>git remote add origin</b>(disini nantinya akan tertera link yang akan muncul di github kalian)
- <b>git push -u origin main</b>
- Buka kembali github kalian project kalian akan ada di github


## Cloning file dari Github

- Jika mendownload file zip ekstrak terlebih dahulu dan letakkan folder yang diekstrak tadi ke dalam file C:xampp/htdocs
- Jika dari link buka terminal ketikkan kode ini : <b>git clone (tuliskan linknya)</b>
- Setelah itu instal composer : <b>composer install</b>
- <b>cp .env.example .env</b> (untuk mencopy file .env)
- <b>php artisan config:cache</b>
- <b>php artisan key:generate</b>
- Buat nama database dan ganti DB_DATABASE dengan nama database yang telah dibuat. 
- <b>php artisan migrate</b>
- <b>php artisan db:seed</b>






