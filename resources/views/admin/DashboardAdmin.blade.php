<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layout')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>

    <style>
        .title {
            margin-left: 150px;
            margin-top: 80px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 45px;
            color: #005C7B;
        }

        .artikel-list {
            margin-left: 150px;
            margin-top: 40px;
            
        }

        .artikel-item {
            display: flex;
            margin-bottom: 40px;
        }

        .artikel-item img {
            width: 200px;
            height: 150px;
            border-radius: 13.88px;
            margin-right: 30px;
        }

        .artikel-info {
            font-family: 'Poppins';
        }

        .artikel-title {
            font-weight: 600;
            font-size: 22px;
            color: #005C7B;
        }

        .artikel-description {
            font-weight: 400;
            font-size: 18px;
            color: rgba(6, 17, 19, 0.5);
            margin-top: 10px;
        }

        .read-more {
            color: #007BFF; /* Warna biru untuk tautan */
            text-decoration: none; /* Hapus garis bawah */
            font-weight: bold; /* Buat teks lebih tebal */
        }

        .read-more:hover {
            text-decoration: underline; /* Garis bawah saat hover */
            color: #0056b3; /* Warna lebih gelap saat hover */
        }
    
        .cta-button {
            position: absolute;
            width: 323px;
            height: 82px;
            left: 270px;
            top: 400px;
            border-radius: 10px;
            background: #7EBEF1;
            box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.12);
            border-radius: 10px;
            color: #FFFFFF;
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: 22px;
            line-height: 33px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

        <!-- Title -->
        <div class="title">ARTIKEL</div>

        <!-- Artikel List -->
        <div class="artikel-list">
        <!-- Artikel 1 -->
        <div class="artikel-item">
            <img src="assets/img/image 1.png" alt="Artikel 1 Image">
            <div class="artikel-info">
                <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
                <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a></div>
                
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="artikel-item">
            <img src="assets/img/image 1.png" alt="Artikel 2 Image">
            <div class="artikel-info">
                <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
                <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a></div>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="artikel-item">
            <img src="assets/img/image 1.png" alt="Artikel 3 Image">
            <div class="artikel-info">
                <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
                <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a>.</div>
            </div>
        </div>

        <!-- Artikel 4 -->
        <div class="artikel-item">
            <img src="assets/img/image 1.png" alt="Artikel 4 Image">
            <div class="artikel-info">
                <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
                <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a></div>
            </div>
        </div>

        <!-- Artikel 5 -->
        <div class="artikel-item">
            <img src="assets/img/image 1.png" alt="Artikel 5 Image">
            <div class="artikel-info">
                <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
                <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a></div>
            </div>
        </div>

        <!-- Artikel 6 -->
        <div class="artikel-item">
            <img src="assets/img/image 1.png" alt="Artikel 6 Image">
            <div class="artikel-info">
                <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
                <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a></div>
            </div>
        </div>
    

            </div>
                <div class="cta-button">
                    <a href="#" class="cta-btn">SIMPAN PERUBAHAN</a>
                </div>
            </div>
    </style>
</html>

<header id="header" class="header d-flex flex-column justify-content-center">
    
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/admin/artikel" class="active"><i class="bi bi-newspaper"></i><span>Artikel</span></a></li>
        <li><a href="/admin/daftarkontak" ><i class="bi bi-telephone"></i><span>Kontak Darurat</span></a></li>
        <li><a href="/admin/daftardoktor"><i class="fa fa-user-md"></i><span>Doktor Hewan</span></a></li>
        <li><a href="/admin/daftarpuskeswan" ><i class="bi bi-hospital"></i><span>Puskeswan</span></a></li>
        
      </ul>
    </nav>

  </header>
    
