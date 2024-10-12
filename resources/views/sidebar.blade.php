<!-- Sidebar -->
<div class="sidebar">
    <!-- Beranda -->
    <div class="sidebar-item" id="beranda">
        <div class="rectangle">
            <img src="assets/img/icon house.png" alt="Beranda Icon">
        </div>
        <div class="description">Beranda: Halaman utama.</div>
    </div>

    <!-- Artikel -->
    <div class="sidebar-item" id="artikel">
        <div class="rectangle">
            <img src="assets/img/icon artikel.png" alt="Artikel Icon">
        </div>
        <div class="description">Artikel: Baca berbagai artikel.</div>
    </div>

    <!-- Kontak Darurat -->
    <div class="sidebar-item" id="kontak-darurat">
        <div class="rectangle">
            <img src="assets/img/icon chat.png" alt="Chatting Icon">
        </div>
        <div class="description">Chatting: Mulai chat dengan dokter hewan.</div>
    </div>
    
    <!-- Puskeswan -->
    <div class="sidebar-item" id="puskeswan">
        <div class="rectangle">
            <img src="assets/img/hospital icon.png" alt="Puskeswan Icon">
        </div>
        <div class="description">Puskeswan: Temukan puskeswan terdekat.</div>
    </div>
</div>



<!--<script>
function toggleDescription(id) {
    var description = document.getElementById(id);
    var descriptions = document.querySelectorAll('.description');
    
    // Sembunyikan semua deskripsi
    descriptions.forEach(function(desc) {
        desc.style.display = 'none';
    });

    // Tampilkan deskripsi yang diklik
    description.style.display = (description.style.display === 'block') ? 'none' : 'block';
}
</script>-->
<!--Java Script-->
<script>
function toggleDescription(id) {
    var item = document.getElementById(id);
    var items = document.getElementsByClassName('sidebar-item');
    
    // Hide descriptions of all items
    for (var i = 0; i < items.length; i++) {
        items[i].classList.remove('active');
    }

    // Show the description of the clicked item
    item.classList.toggle('active');
}
</script>


    <!-- CSS -->
<style>
    /* Sidebar Container */
    .sidebar {
        position: fixed;
        top: 100px;
        left: 10px;
        width: 100px;
        background-color: transparent;
        padding-top: 20px;
        z-index: 1000;
        margin-left: 20px;
    }

    /* Sidebar Items */
    .sidebar-item {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
        cursor: pointer;
    }

    /* Rectangle (Box) styling */
    .sidebar-item .rectangle {
        width: 60px;
        height: 50px;
        background-color: #FFFFFF;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        position: relative;
        transition: transform 0.3s ease-in-out, background-color 0.3s;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Hover effect */
    .sidebar-item:hover .rectangle {
        transform: scale(1.1);
        background-color: rgba(126, 190, 241, 0.5); /* Warna #7EBEF1 dengan intensitas 50% */
        color: #FFFFFF;
    }

    /* Active state */
    .sidebar-item.active .rectangle {
        background-color: rgba(126, 190, 241, 0.5); /* Warna #7EBEF1 dengan intensitas 50% */
        color: #FFFFFF;
    }

    /* Icon styling */
    .sidebar-item img {
        width: 30px;
        height: 30px;
    }

    /* Description styling */
    .sidebar-item .description {
        display: none;
        font-size: 14px;
        background-color: #FFFFFF;
        padding: 5px;
        border-radius: 5px;
        position: absolute;
        margin-left: 0px;
        white-space: nowrap;
        top: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Show the description on hover */
    .sidebar-item:hover .description {
        display: block;
        transform: scale(1.1);
        background-color: rgba(126, 190, 241, 0.5); /* Warna #7EBEF1 dengan intensitas 50% */
        color: #FFFFFF;
    }

    /* Responsive */
    @media screen and (max-width: 768px) {
        .sidebar {
            width: 80px;
        }

        .sidebar-item .rectangle {
            width: 80px;
            height: 60px;
        }

        .sidebar-item img {
            width: 30px;
            height: 30px;
        }

        .sidebar-item .description {
            top: 15px;
            left: 90px;
        }
    }
    </style>