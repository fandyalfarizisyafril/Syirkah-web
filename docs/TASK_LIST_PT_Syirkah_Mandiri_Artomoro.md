# Task List Website PT. Syirkah Mandiri Artomoro

Dokumen ini mengikuti `docs/PRD_PT_Syirkah_Mandiri_Artomoro.md` dan diperbarui setiap kali fitur selesai dikerjakan.

## Sudah Ada Saat Audit Awal

- [x] Laravel 12 project scaffold tersedia.
- [x] Route homepage `/` tersedia.
- [x] Homepage company profile tersedia.
- [x] Hero section dengan positioning perusahaan tersedia.
- [x] Company introduction tersedia di homepage.
- [x] 5 fokus utama perusahaan tersedia di homepage.
- [x] Product category showcase tersedia di homepage.
- [x] Brand/principal showcase dasar tersedia di homepage.
- [x] Industrial solutions/sector section tersedia di homepage.
- [x] CTA RFQ tersedia di homepage.
- [x] Responsive CSS dasar tersedia.
- [x] Aset visual hero tersedia di `public/images/industrial-hero.png`.

## Must Have

- [x] Homepage sesuai PRD.
- [x] Redesign homepage landing page mengikuti referensi visual beranda awal.
- [x] About Company section di homepage.
- [x] About Company page dengan profil, fokus, value, dan legal.
- [x] Products & Solutions section di homepage.
- [x] Products & Solutions page.
- [x] Product Detail page.
- [x] Brands / Principals section di homepage.
- [x] Brands / Principals page.
- [x] Brand Detail page.
- [x] Industries / Solutions section di homepage.
- [x] Industries / Solutions page.
- [x] Contact page dengan alamat, phone, dan email resmi.
- [x] Legal Information section dengan NPWP, SK Kemenkumham, dan NIB.
- [x] Responsive design.

## Should Have

- [x] Product Inquiry route dan form tervalidasi.
- [x] Product search.
- [x] Product category filter.
- [x] Data produk/perusahaan mudah diperbarui tanpa edit Blade langsung.
- [x] Basic SEO metadata per halaman.
- [x] Download product datasheet placeholder/support.
- [ ] Admin CMS.

## Could Have

- [ ] WhatsApp CTA.
- [ ] Product comparison.
- [ ] Industry-based product recommendation.
- [ ] News / Articles.
- [ ] Project / Portfolio.
- [ ] Multilingual website.

## Verifikasi

- [x] `php -l` untuk file PHP/Blade yang relevan.
- [x] `php artisan route:list`.
- [x] `npm run build`.
- [x] `php artisan test`.
- [x] HTTP smoke test route utama: `/`, `/about`, `/products`, `/products/{slug}`, `/brands`, `/brands/{slug}`, `/industries`, `/contact`, `/inquiry`.

## Catatan Implementasi

- Nilai legal NPWP, SK Kemenkumham, dan NIB belum tersedia di PRD, sehingga struktur legal sudah tampil dengan status `Menunggu konfirmasi owner`.
- Inquiry sudah tervalidasi dan disimpan sebagai JSON di storage lokal. Integrasi email, WhatsApp, atau Admin CMS masih masuk tahap berikutnya.
- Admin CMS masih pending karena termasuk rekomendasi pengembangan besar pada PRD.
- Homepage landing page sudah disusun ulang dari hero sampai RFQ dengan visual industrial, kartu bidang keahlian, trust section, katalog, sektor industri, dan tim sesuai arah desain terbaru.
- Kartu bidang utama nomor 05 sudah diseragamkan menjadi satu card gambar dan teks seperti nomor 01 sampai 04.
- Navbar sudah ditambahkan menu Beranda dan penanda menu aktif untuk membantu orientasi pengguna.
- Responsive homepage dan navbar sudah dipoles untuk desktop sempit, tablet, mobile, dan layar sangat kecil, serta divalidasi dengan screenshot headless 390px.
