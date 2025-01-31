# EventPro - Platform Penjualan Tiket Online

EventPro adalah platform penjualan tiket online yang dibangun menggunakan Laravel 11. Platform ini menyediakan fitur utama seperti registrasi pengguna, daftar acara, pembelian tiket, dan pembayaran online.

## Fitur Utama
1. **Portal Pengguna**
   - Registrasi dan login pengguna
   - Profil pengguna
   - Riwayat pemesanan tiket
2. **Manajemen Acara**
   - Penambahan, edit, dan hapus acara
   - Kategori acara (konser, bioskop, teater, dll.)
   - Filter dan pencarian acara
3. **Pembelian Tiket**
   - Daftar acara tersedia
   - Pembelian tiket
   - Ringkasan pesanan
4. **Pembayaran**
   - Integrasi dengan gateway pembayaran (Midtrans, PayPal)
   - Konfirmasi pembayaran
5. **Admin Panel**
   - Manajemen acara, pengguna, dan pesanan tiket
   - Statistik penjualan tiket

## Instalasi

### Prerequisites
- PHP 8.x
- Laravel 11.x
- MySQL atau PostgreSQL

### Langkah-langkah Instalasi
1. Clone repository:
    ```bash
    git clone https://github.com/username/eventpro.git
    cd eventpro
    ```
2. Install dependencies:
    ```bash
    composer install
    npm install
    ```
3. Copy .env file dan sesuaikan
    ```bash
    cp .env.example .env
    ```
4. Generate application key:
    ```bash
    php artisan key:generate
    ```
5. Setup database
    ```bash
    php artisan migrate
    php artisan db:seed
    ```
6. Run the application
    ```bash
    npm run dev
    php artisan serve
    ```

## Testing
- Run unit tests:
    ```bash
    php artisan test
    ```

## Deployment
- Ensure all ENV variables are set correctly
- Push the project to your production server
- Run the migrations and seed the database
- Enjoy the live application 🚀

## Kontribusi
Jika ingin berkontribusi, silakan buat pull request atau laporan bug. Kami menghargai setiap kontribusi untuk membuat platform ini lebih baik.

## Lisensi
EventPro dilisensi di bawah [MIT license](LICENSE).

