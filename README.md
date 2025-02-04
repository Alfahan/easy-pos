# Point of Sale (POS)

Sistem Point of Sale (POS) berbasis web yang dikembangkan menggunakan **Laravel**, **Inertia.js**, dan **React.js**. Aplikasi ini menyediakan fitur lengkap untuk mengelola transaksi, pengguna, produk, serta laporan penjualan.

## Stack Teknologi
- **Laravel** - Backend framework untuk mengelola data dan logic bisnis.
- **Inertia.js** - Middleware yang menghubungkan Laravel dengan React tanpa perlu API tambahan.
- **React.js** - Frontend framework untuk tampilan interaktif dan responsif.

## Fitur

### Dashboard
Menampilkan ringkasan data transaksi, total penjualan, stok produk, serta aktivitas pengguna.  
![dashboard1](https://github.com/user-attachments/assets/d62c088d-3da6-4456-b35c-71fb8be2f868)  
![dashboard2](https://github.com/user-attachments/assets/cf6352fb-658d-4f49-ad17-37f07114086b)  

### Manajemen Roles
Mengelola peran dan hak akses pengguna dalam sistem.  
- **List & Delete Roles**  
  ![list-roles](https://github.com/user-attachments/assets/57cd8721-852e-4171-a503-4f53407a8d4e)  
- **Tambah Role**  
  ![add-roles](https://github.com/user-attachments/assets/2e173b42-6605-40b5-ab9a-1d99bc05e6c8)  
- **Edit Role**  
  ![edit-roles](https://github.com/user-attachments/assets/e83525ff-576c-4be0-aed3-f8703a3e4b85)  

### Manajemen Pengguna
Mengelola data pengguna yang memiliki akses ke sistem.  
- **List & Delete Users**  
  ![list-users](https://github.com/user-attachments/assets/26ff204c-b9b3-4aae-a52a-f4e9d2b637af)  
- **Tambah Pengguna**  
  ![add-user](https://github.com/user-attachments/assets/94aed5b2-a8aa-4d84-9c59-023c74071772)  
- **Edit Pengguna**  
  ![edit-user](https://github.com/user-attachments/assets/cb32a249-ab06-4d72-bd01-00673f5c6169)  

### Manajemen Supplier
Mengelola data pemasok barang untuk transaksi bisnis.  
- **List & Delete Suppliers**  
  ![list-suppliers](https://github.com/user-attachments/assets/4a215feb-9a7d-4351-bd34-683f97fdaf5a)  
- **Tambah Supplier**  
  ![add-supplier](https://github.com/user-attachments/assets/2939cdbd-aa02-4ce6-b260-bccf324b1ad1)  
- **Edit Supplier**  
  ![edit-supplier](https://github.com/user-attachments/assets/9eb86372-0df2-401c-887c-d5da5ee4ffd4)  

### Manajemen Pelanggan
Mengelola data pelanggan yang melakukan transaksi.  
- **List & Delete Customers**  
  ![list-customers](https://github.com/user-attachments/assets/b61ba1f1-42ca-4ee9-be8d-f77089424759)  
- **Tambah Pelanggan**  
  ![add-supplier](https://github.com/user-attachments/assets/54315f56-2ec4-4332-9a42-fe260f2256ad)  
- **Edit Pelanggan**  
  ![edit-supplier](https://github.com/user-attachments/assets/f8fe9122-8475-4020-875a-c99489f03d6c)  

### Manajemen Kategori
Mengelompokkan produk berdasarkan kategori yang berbeda.  
- **List & Delete Categories**  
  ![list-categories](https://github.com/user-attachments/assets/20aa8252-b69e-428c-acee-e0e801f656a8)  
- **Tambah Kategori**  
  ![add-categories](https://github.com/user-attachments/assets/f09b4a15-eff0-4fb4-b4d9-1f9f2d9a0aab)  
- **Edit Kategori**  
  ![edit-category](https://github.com/user-attachments/assets/877cef36-15b7-4816-90bf-ba5ceaab4d4f)  

### Manajemen Satuan
Menentukan satuan produk seperti pcs, kg, liter, dll.  
- **List & Delete Units**  
  ![list-units](https://github.com/user-attachments/assets/6148daa4-fba6-40bb-bf2f-0762a98be6a0)  
- **Tambah Unit**  
  ![add-unit](https://github.com/user-attachments/assets/efd7bd6e-10a8-42b1-8d6a-7131f2489f8a)  
- **Edit Unit**  
  ![edit-unit](https://github.com/user-attachments/assets/c6f1dc1f-fdf3-4271-a1cd-eb9dbbe3408b)  

### Manajemen Produk
Mengelola daftar produk yang tersedia untuk dijual.  
- **List & Delete Products**  
  ![list-products](https://github.com/user-attachments/assets/f59c897a-341b-4c42-857f-8979b95a13b1)  
- **Tambah Produk**  
  ![add-product](https://github.com/user-attachments/assets/0d292c09-737b-4347-8e15-89b38be9aa80)  
- **Edit Produk**  
  ![edit-product](https://github.com/user-attachments/assets/c082b6a2-cf15-4279-841f-7432e58f0667)  

### Manajemen Stok Masuk
Mencatat stok barang yang masuk ke dalam sistem.  
- **List Stock In**  
  ![list-stock-in](https://github.com/user-attachments/assets/f121730b-bccc-4bb4-86d1-1ee58c12eec4)  
- **Tambah Stock In**  
  ![add-stock-in](https://github.com/user-attachments/assets/c3a79b95-73c8-4739-b15d-488e3ceed952)  

### Halaman Transaksi Penjualan
Menangani transaksi penjualan dan pencatatan pembayaran.  
![page-sales](https://github.com/user-attachments/assets/4a597b9c-2869-40ab-a5a0-3e14d24f7925)  

### Laporan Transaksi
Menampilkan laporan transaksi yang telah dilakukan dalam periode tertentu.  
![report-transactions](https://github.com/user-attachments/assets/d0691644-3412-4b95-b597-b02bec5d36dc)  

### Manajemen Stock Opname
Mencatat dan mengevaluasi ketersediaan stok barang.  
![stock-opnames](https://github.com/user-attachments/assets/b18c36f4-4d58-45f0-80c5-db2666c174d5)  
![add-stock-opname](https://github.com/user-attachments/assets/f8324872-b55b-45a6-a270-aac6b950a25c)  
