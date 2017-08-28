## Menulis Dokumentasi kamu

Bonfire membuat dokumentasi termasuk dengan aplikasi Anda, atau bahkan hanya satu modul kustom Anda, sesederhana termasuk beberapa file text.

### Lokasi Docs

Untuk membuat dokumentasi aplikasi khusus yang dapat dengan mudah berversi dan dikirim keluar dengan aplikasi Anda, cukup tempatkan [markdown] (http://daringfireball.net/projects/markdown/)-file berformat teks dalam <tt> aplikasi / docs </ tt> folder. (Secara teknis, kita menggunakan [Markdown Extra](http://michelf.ca/projects/php-markdown/extra/) untuk kemungkinan format bahkan lebih).

Untuk setiap modul yang Anda buat dan ingin membuat dokumentasi untuk, hanya tempat docs Markdown-formatted sama dalam folder modul, di bawah folder baru bernama <tt>docs</tt>.

    my_module/
        css/
        docs/
        . . .

File harus memiliki ekstensi file dari<tt>.md</tt> agar dapat diakui oleh sistem. Ketika sebuah halaman bantuan ditampilkan, Daftar Isi di sidebar otomatis akan menemukan dokumen Anda dan menampilkan mereka dalam urutan yang ditemukan.

### Kustom Daftar Isi

Jika Anda membutuhkan lebih banyak organisasi untuk docs Anda, Anda dapat menentukan TOC kustom yang akan digunakan. Hal ini memungkinkan untuk menentukan nama kustom untuk file-file, serta file memisahkan doc ke dalam kelompok logis yang Anda tentukan, tetapi hanya satu tingkat dalam.

Untuk menggunakan TOC kustom, buat file bernama <tt>_toc.ini</tt> dalam folder docs Anda.Jika file ini hadir, akan digunakan untuk menampilkan link, bukan otomatis menghasilkan link dari file yang ada. File ini adalah standar file ini PHP.. "Pilihan" dalam file adalah nama file dan nama tampilan. Nama file ini terdaftar di sebelah kiri '=' dengan teks yang digunakan untuk menampilkan link yang tercantum di sebelah kanan.

    my_page = My Great Paket Dokumentasi Baru

Untuk kelompok file dan memberikan header, Anda akan menggunakan sintaks bagian inisial itu..

<pre>
[Section 1]
my_page = My Paket Dokumentasi Baru
</pre>

Nama file harus menyertakan di dalamnya "path" daerah dokumentasi berasal, baik 'application', 'bonfire', atau nama folder modul Anda.

    application/my_page = My New Documentation Package
    my_module/my_page   = My New Module Docs