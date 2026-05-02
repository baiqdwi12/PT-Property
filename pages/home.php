<!-- HERO -->
<section class="hero d-flex align-items-center text-white">
    <div class="container text-center">
        <h1 class="fw-bold display-5">Temukan Rumah Impian Anda</h1>
        <p class="lead mt-3">Properti terbaik dengan lokasi strategis dan harga kompetitif</p>
        
        <a href="index.php?page=properties" class="btn btn-light btn-lg mt-3 px-4">
            Lihat Properti
        </a>
    </div>
</section>


<!-- WHY CHOOSE US -->
<section class="py-5 bg-light">
    <div class="container text-center">

        <h2 class="fw-bold mb-4">Kenapa Memilih Kami?</h2>

        <div class="row g-4 fade-in">

            <div class="col-md-4">
                <div class="p-4">
                    <h5>Lokasi Strategis</h5>
                    <p class="text-muted">Dekat pusat kota dan fasilitas umum.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4">
                    <h5>Harga Kompetitif</h5>
                    <p class="text-muted">Harga terbaik sesuai kualitas properti.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4">
                    <h5>Legalitas Aman</h5>
                    <p class="text-muted">Dokumen lengkap dan terpercaya.</p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- QUICK ABOUT -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center g-4">

            <div class="col-md-6 fade-in">
                <img src="assets/images/banner/about.jpg" 
                     class="img-fluid rounded shadow-sm">
            </div>

            <div class="col-md-6 fade-in">
                <h2 class="fw-bold">Tentang Kami</h2>
                <p class="text-muted">
                    Kami menyediakan berbagai pilihan properti terbaik dengan lokasi strategis 
                    dan harga kompetitif. Komitmen kami adalah membantu Anda menemukan hunian 
                    yang tepat dengan proses yang mudah dan aman.
                </p>

                <a href="index.php?page=about" class="btn btn-dark mt-3">
                    Selengkapnya
                </a>
            </div>

        </div>

    </div>
</section>


<!-- FEATURED PROPERTIES -->
<section class="py-5 bg-light">
    <div class="container">
        
        <div class="text-center mb-5 fade-in">
            <h2 class="fw-bold">Featured Properties</h2>
            <p class="text-muted">Pilihan properti terbaik untuk Anda</p>
        </div>

        <div class="row g-4">

            <!-- CARD -->
            <?php 
            $featured = [
                ["title"=>"Rumah Minimalis Modern","loc"=>"Mataram","img"=>"rumah1.jpg"],
                ["title"=>"Villa Elegan","loc"=>"Lombok Barat","img"=>"rumah2.jpg"],
                ["title"=>"Rumah Nyaman","loc"=>"Mataram","img"=>"rumah3.jpg"]
            ];

            foreach($featured as $p): ?>

            <div class="col-md-4 fade-in">
                <div class="card property-card border-0 shadow-sm">

                    <!-- <img src="assets/images/properties/<?php echo $p['img']; ?>" class="card-img-top"> -->
                    <img src="assets/images/properties/properti1.jpg" class="card-img-top">

                    <div class="card-body">
                        <h5 class="fw-semibold"><?php echo $p['title']; ?></h5>
                        <p class="text-muted mb-1"><?php echo $p['loc']; ?></p>

                        <a href="index.php?page=detail" class="btn btn-outline-dark w-100 mt-3">
                            Lihat Detail
                        </a>
                    </div>

                </div>
            </div>

            <?php endforeach; ?>

        </div>

    </div>
</section>


<!-- CONTACT CTA -->
<section class="py-5 text-white" style="background:#111;">
    <div class="container text-center">

        <h2 class="fw-bold">Butuh Konsultasi Properti?</h2>
        <p class="text-light">Tim kami siap membantu Anda</p>

        <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">

            <a href="index.php?page=contact" class="btn btn-light px-4">
                Hubungi Kami
            </a>

            <a href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20konsultasi"
               target="_blank"
               class="btn btn-success px-4">
                Chat WhatsApp
            </a>

        </div>

    </div>
</section>


<!-- MAPS + CONTACT -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Lokasi Kami</h2>
            <p class="text-muted">Kunjungi kantor kami</p>
        </div>

        <div class="row g-4">

            <!-- MAP -->
            <div class="col-md-7 fade-in">
                <iframe 
                    src="https://www.google.com/maps?q=Mataram&output=embed"
                    width="100%" 
                    height="100%" 
                    style="min-height:300px; border:0; border-radius:12px;"
                    loading="lazy">
                </iframe>
            </div>

            <!-- INFO -->
            <div class="col-md-5 fade-in">
                <div class="p-4 bg-light rounded shadow-sm h-100">

                    <h5 class="fw-semibold mb-3">Kontak Kami</h5>

                    <p><strong>Alamat:</strong><br>Jl. Contoh No.123, Mataram</p>
                    <p><strong>Telepon:</strong><br>0812-3456-7890</p>
                    <p><strong>Email:</strong><br>info@property.com</p>

                    <a href="https://wa.me/6281234567890"
                       class="btn btn-success w-100 mt-3">
                       Chat via WhatsApp
                    </a>

                </div>
            </div>

        </div>

    </div>
</section>