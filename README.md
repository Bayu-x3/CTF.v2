# CTF.v2
CaptureTheFlag template website

# Description
Template untuk website ini sudah lumayan lengkap karena sudah memakai database, Kalian bebas menggunakan template ini, dan kalian juga bisa menambahkan banyak challenge, banyak level dan tentunya mengubah isi Flag, Template ini juga sudah di berikan Pencegahan bug seperti xss dan bypass admin, lalu session pada setiap halaman nya, jadi ya agar users yang tidak login tidak bisa mengakses halaman itu, dia harus login terlebih dahulu.

# List
- Halaman utama
- Scoreboard ( melihat peringkat user )
- Tentang website
- Login users
- Register Users ( sudah auto encrypt password, di tambah dengan validasi nama username agar tidak double )
- Page Admin ( bisa melihat User dan password user dan menghapus data user )
- Footer untuk styling bagian bawah
- Header untuk bagian styling
- Style.css untuk styling bagian login admin, login users, dan register users
- Folder challenge untuk menyimpan isi dari tipe challenge
- Folder berisi tipe challenge yang terdapat di dalam folder challenge

# Cara Menjalankan
- Kalian bisa menjalankan ini di localhost, tetapi harus menginstall xampp terlebih dahulu di 
- Jika xampp sudah ter-install maka kalian ke cmd, buka folder di mana file nya tersimpan dan jangan lupa untuk meng-extractnya
- Kalau sudah, ketikan di cmd kalian " php -S localhost:8080" ( port bebas )
- Kemudian ketik di browser " localhost:8080 " ( harus 8080 karena yang di input port nya adalah 8080, kecuali yang kalian input tadi bukan 8080 )
- Jika memiliki VPS / bahkan hosting sendiri tidak usah menggunakan xampp
- Kalian harus mengubah konfigurasi sesuai dengan database milik kalian
