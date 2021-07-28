## Jawaban Soal UAS Nomor 1
### a. Single Responsible Principle
<p>
    Prinsip pemrograman komputer yang setiap modul, class atau fungsi dalam suatu program harus dan hanya memiliki tanggung jawab atas satu bagian dari fungsi program tersebut. Semua layanan modul, class, atau fungsi itu harus diselaraskan dengan tanggung jawab tersebut. Oleh karena itu, setiap class harus memiliki satu, dan hanya satu, alasan untuk berubah/tugas yang dikerjakan.

    Keuntungan :
    - Class lebih mudah dipahami
    Ketika class hanya melakukan "satu hal", maka penggambaran, code program, dan metode yang digunakan akan cukup jelas. Sehingga, akan lebih mudah dalam memahami tugas dari class tersebut
    
    - Class lebih mudah dipelihara
    Karena strukturnya yang cukup jelas dan sederhana, maka saat ada perubahan pada code program baik maintenance, upgrade ataupun memperbaiki kesalahan akan lebih mudah untuk ditangani. 
    
    - Class lebih dapat digunakan kembali
    Karena sebuah class hanya memiliki satu tanggungjawab, maka class tersebut akan dapat digunakan Kembali tanpa modifikasi. Karena jika sebuah kelas memiliki banyak tanggung jawab, dan hanya satu yang diperlukan di software, maka tanggung jawab lain yang tidak perlu akan menghalangi penggunaan Kembali class tersebut.

</p>

### b. Open/Closed Principle
<p>
    Prinsip pemrograman yang setiap atribut software (class, function, modul) hanya dapat dilakukan/terbuka penambahan code tetapi tidak dapat/tertutup untuk modifikasi atau perubahan. Intitnya, code program yang sebelumnya sudah ada, tidak dapat diganti lagi hanya dapat dilakukan penambahan-penambahan class yang nantinya tetap memiliki tujuan yang sama.

    Keuntungan :
    - Dapat diperluas
    Ketika ada satu perubahan pada sebuah program, maka akan ada penambahan kode baru, bukan dengan mengubah kode lama yang sudah berfungsi. Sehingga, suatu program dapat diperluas tetapi masih memiliki tujuan yang sama.

    - Pemeliharaan/Maintenance mudah
    Karena stukturnya yang berbasis objek, dan denga nada interface pada program, maka setiap class hanya perlu mengimplementasikan interface tersebut, tanpa perlu berbagi kode apapun dengan class lain. Sehingga, pemeliharaan/pengecekan program akan lebih mudah untuk dilakukan.

</p>
