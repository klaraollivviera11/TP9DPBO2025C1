# Janji
Saya Klara Ollivviera Augustine Gunawan dengan NIM 2306205 mengerjakan soal Tugas Praktikum 9 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

# Desain Program
Program ini merupakan implementasi dari pola Model-View-Presenter (MVP), yang digunakan untuk mengelola data mahasiswa dan universitas. Program ini memisahkan logika aplikasi, tampilan pengguna, dan data yang disimpan dalam basis data sehingga memudahkan dalam pemeliharaan dan pengelolaan.

## Fitur Utama:
### 1. Manajemen Mahasiswa:
- Menambahkan, mengedit, dan menghapus data mahasiswa.
- Menampilkan informasi mahasiswa, seperti NIM, nama, tempat lahir, tanggal lahir, gender, email, dan telepon.
- Tampilkan data mahasiswa dalam bentuk tabel dengan fitur aksi untuk edit dan hapus data.

## Arsitektur MVP:
- Model: Bertanggung jawab untuk pengelolaan data mahasiswa dan interaksi dengan basis data. Model mengelola operasi CRUD untuk mahasiswa.
- View: Bertanggung jawab untuk menampilkan data kepada pengguna, seperti tabel data mahasiswa dan form input.
- Presenter: Bertanggung jawab untuk mengambil data dari model dan mengirimnya ke view. Presenter juga menangani logika bisnis aplikasi, seperti menambah, mengedit, dan menghapus data mahasiswa.

## Tabel Utama:
### Tabel Mahasiswa (Student)
- Menyimpan data mahasiswa yang meliputi ID, NIM, nama, tempat lahir, tanggal lahir, gender, email, dan telepon.

## Struktur Program:
### Controllers:
1. ProsesMahasiswa: Bertanggung jawab untuk menangani logika terkait mahasiswa, seperti mengambil data mahasiswa, menambah, mengedit, dan menghapus data mahasiswa.

### Models:
1. DB: Kelas dasar untuk pengelolaan koneksi ke database.
2. Mahasiswa: Kelas untuk mengelola data mahasiswa (mengambil, menambah, mengedit, dan menghapus data mahasiswa).
3. TabelMahasiswa: Kelas untuk mengelola query terkait mahasiswa (ambil, tambah, edit, hapus data mahasiswa).
4. Template: Kelas untuk menggantikan placeholder dalam file HTML dengan data yang sesuai.

### Views:
1. TampilMahasiswa: Kelas untuk menampilkan data mahasiswa dalam tabel, serta menyediakan form untuk menambah atau mengedit data mahasiswa.

# Alur Program
## 1. Menambahkan Mahasiswa:
- Gunakan form untuk menambah mahasiswa baru.
- Isi data mahasiswa dan tekan submit untuk menambah mahasiswa baru.
## 2. Mengedit Mahasiswa:
- Pilih mahasiswa yang ingin diedit pada tabel mahasiswa dan klik tombol "Edit".
- Sesuaikan data mahasiswa dan tekan submit untuk memperbarui informasi mahasiswa.
## 3. Menghapus Mahasiswa:
- Pilih mahasiswa yang ingin dihapus pada tabel mahasiswa dan klik tombol "Hapus".
## 4. Tampilan Mahasiswa:
- Menampilkan daftar mahasiswa dalam bentuk tabel dengan informasi seperti NIM, nama, tempat lahir, tanggal lahir, gender, email, dan telepon.

# Dokumentasi
https://drive.google.com/file/d/1hN_sVKm_MjSSjMaSH3ZoXlRybnKPonXa/view?usp=sharing
