# 🎮 Game Developer Portfolio

![Project Status](https://img.shields.io/badge/status-active-success)
![License](https://img.shields.io/badge/license-MIT-blue)
![Theme](https://img.shields.io/badge/theme-Cyberpunk%20%2F%20Dark-purple)

Sebuah website portofolio responsif dengan tema **Dark/Cyberpunk** yang dirancang khusus untuk Game Developer. Dibangun dengan struktur kode yang modular agar mudah dikelola dan dikembangkan.

## ✨ Fitur Utama

* **Modular Architecture:** Pemisahan logika data (`projects.php`), komponen (`header/footer`), dan tampilan (`index.php`).
* **Game-Ready Design:** Menggunakan nuansa warna gelap, font monospaced, dan elemen visual khas gaming (timeline level, stats).
* **Fully Responsive:** Tampilan optimal di Desktop, Tablet, dan Mobile.
* **Dynamic Data:** Menambah projek atau pengalaman baru cukup dengan mengedit file array PHP, tidak perlu menyentuh HTML.
* **Vercel Ready:** Dikonfigurasi untuk dapat di-hosting secara gratis menggunakan Vercel.

## 🛠️ Teknologi yang Digunakan

* **Backend/Logic:** PHP (Native)
* **Styling:** Tailwind CSS (via CDN) & Vanilla CSS
* **Interactivity:** Vanilla JavaScript
* **Icons:** Devicon & FontAwesome (Optional)

## 📂 Struktur Folder

```text
/portfolio-gamedev
│
├── assets
│   ├── css/        # Custom CSS (Scrollbar, animations)
│   ├── js/         # Logic untuk navbar & smooth scroll
│   └── images/     # Aset gambar logo & project
│
├── data
│   └── projects.php # Database sederhana berbasis Array
│
├── includes
│   ├── header.php   # Navbar & Meta tags
│   └── footer.php   # Footer & Script Loader
│
├── index.php        # Halaman Utama
├── vercel.json      # Konfigurasi deployment Vercel
└── README.md        # Dokumentasi
