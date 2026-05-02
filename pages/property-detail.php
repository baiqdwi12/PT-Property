<?php
// ======================
// DUMMY DATA (sementara)
// ======================
$properties = [
    [
        "id" => 1,
        "title" => "Rumah Minimalis Modern",
        "location" => "Mataram",
        "description" => "Rumah modern dengan desain minimalis, lingkungan nyaman, dan lokasi strategis dekat pusat kota.",
        "images" => [
            "properti1.jpg",
            "properti1.jpg",
            "properti1.jpg",
        ],
        "specs" => [
            "Luas Tanah" => "120 m²",
            "Luas Bangunan" => "90 m²",
            "Kamar Tidur" => "3",
            "Kamar Mandi" => "2",
            "Garasi" => "1",
            "Listrik" => "2200 Watt"
        ]
    ],
    [
        "id" => 2,
        "title" => "Villa Elegan Pinggir Kota",
        "location" => "Lombok Barat",
        "description" => "Rumah modern dengan desain minimalis, lingkungan nyaman, dan lokasi strategis dekat pusat kota.",
        "images" => [
            "properti1.jpg",
            "properti1.jpg",
            "properti1.jpg",
        ],
        "specs" => [
            "Luas Tanah" => "120 m²",
            "Luas Bangunan" => "90 m²",
            "Kamar Tidur" => "3",
            "Kamar Mandi" => "2",
            "Garasi" => "1",
            "Listrik" => "2200 Watt"
        ]
    ],
    [
        "id" => 3,
        "title" => "Rumah Keluarga Nyaman",
        "location" => "Mataram",
        "description" => "Rumah modern dengan desain minimalis, lingkungan nyaman, dan lokasi strategis dekat pusat kota.",
        "images" => [
            "properti1.jpg",
            "properti1.jpg",
            "properti1.jpg",
        ],
        "specs" => [
            "Luas Tanah" => "120 m²",
            "Luas Bangunan" => "90 m²",
            "Kamar Tidur" => "3",
            "Kamar Mandi" => "2",
            "Garasi" => "1",
            "Listrik" => "2200 Watt"
        ]
    ],
    [
        "id" => 4,
        "title" => "Hunian Asri Dekat Kota",
        "location" => "Mataram",
        "description" => "Rumah modern dengan desain minimalis, lingkungan nyaman, dan lokasi strategis dekat pusat kota.",
        "images" => [
            "properti1.jpg",
            "properti1.jpg",
            "properti1.jpg",
        ],
        "specs" => [
            "Luas Tanah" => "120 m²",
            "Luas Bangunan" => "90 m²",
            "Kamar Tidur" => "3",
            "Kamar Mandi" => "2",
            "Garasi" => "1",
            "Listrik" => "2200 Watt"
        ]
    ],
    [
        "id" => 5,
        "title" => "Villa View Pantai",
        "location" => "Lombok Utara",
        "description" => "Rumah modern dengan desain minimalis, lingkungan nyaman, dan lokasi strategis dekat pusat kota.",
        "images" => [
            "properti1.jpg",
            "properti1.jpg",
            "properti1.jpg",
        ],
        "specs" => [
            "Luas Tanah" => "120 m²",
            "Luas Bangunan" => "90 m²",
            "Kamar Tidur" => "3",
            "Kamar Mandi" => "2",
            "Garasi" => "1",
            "Listrik" => "2200 Watt"
        ]
    ],
    [
        "id" => 6,
        "title" => "Rumah Modern 2 Lantai",
        "location" => "Lombok Barat",
        "description" => "Rumah modern dengan desain minimalis, lingkungan nyaman, dan lokasi strategis dekat pusat kota.",
        "images" => [
            "properti1.jpg",
            "properti1.jpg",
            "properti1.jpg",
        ],
        "specs" => [
            "Luas Tanah" => "120 m²",
            "Luas Bangunan" => "90 m²",
            "Kamar Tidur" => "3",
            "Kamar Mandi" => "2",
            "Garasi" => "1",
            "Listrik" => "2200 Watt"
        ]
    ],
    [
        "id" => 7,
        "title" => "Cluster Minimalis",
        "location" => "Mataram",
        "description" => "Rumah modern dengan desain minimalis, lingkungan nyaman, dan lokasi strategis dekat pusat kota.",
        "images" => [
            "properti1.jpg",
            "properti1.jpg",
            "properti1.jpg",
        ],
        "specs" => [
            "Luas Tanah" => "120 m²",
            "Luas Bangunan" => "90 m²",
            "Kamar Tidur" => "3",
            "Kamar Mandi" => "2",
            "Garasi" => "1",
            "Listrik" => "2200 Watt"
        ]
    ],
    [
        "id" => 8,
        "title" => "Rumah Investasi Strategis",
        "location" => "Mataram",
        "description" => "Rumah modern dengan desain minimalis, lingkungan nyaman, dan lokasi strategis dekat pusat kota.",
        "images" => [
            "properti1.jpg",
            "properti1.jpg",
            "properti1.jpg",
        ],
        "specs" => [
            "Luas Tanah" => "120 m²",
            "Luas Bangunan" => "90 m²",
            "Kamar Tidur" => "3",
            "Kamar Mandi" => "2",
            "Garasi" => "1",
            "Listrik" => "2200 Watt"
        ]
    ],
];

// ======================
// AMBIL ID DARI URL
// ======================
$id = $_GET['id'] ?? 1;

// ======================
// CARI DATA SESUAI ID
// ======================
$property = null;

foreach ($properties as $p) {
    if ($p['id'] == $id) {
        $property = $p;
        break;
    }
}

// ======================
// VALIDASI
// ======================
if (!$property) {
    echo "Property tidak ditemukan";
    exit;
}

// ======================
// WHATSAPP MESSAGE
// ======================
$message = "Halo, saya tertarik dengan properti: " . $property['title'] . " di " . $property['location'] . ". Apakah masih tersedia?";
$wa_link = "https://wa.me/6281234567890?text=" . urlencode($message);
?>

<div class="container py-5">

    <div class="row g-4">

        <!-- GALERI -->
        <div class="col-lg-7">

            <!-- MAIN IMAGE -->
            <img id="mainImage"
                src="assets/images/properties/<?php echo $property['images'][0]; ?>"
                class="img-fluid rounded shadow-sm mb-3">

            <!-- THUMBNAILS -->
            <div class="d-flex gap-2">
                <?php foreach ($property['images'] as $img): ?>
                    <img src="assets/images/properties/<?php echo $img; ?>"
                        class="img-thumbnail thumb-img"
                        style="width: 100px; height: 80px; object-fit: cover; cursor:pointer;">
                <?php endforeach; ?>
            </div>

        </div>

        <!-- INFO -->
        <div class="col-lg-5">

            <h2 class="fw-bold"><?php echo $property['title']; ?></h2>
            <p class="text-muted"><?php echo $property['location']; ?></p>

            <!-- SPECS -->
            <div class="mb-4">
                <h5 class="fw-semibold">Spesifikasi</h5>
                <ul class="list-group list-group-flush">
                    <?php foreach ($property['specs'] as $key => $value): ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><?php echo $key; ?></span>
                            <strong><?php echo $value; ?></strong>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- WHATSAPP BUTTON -->
            <a href="<?php echo $wa_link; ?>" target="_blank"
                class="btn btn-success w-100 py-3 fw-semibold">
                Hubungi via WhatsApp
            </a>

        </div>

    </div>

    <!-- DESCRIPTION -->
    <div class="mt-5 fade-in">
        <h4 class="fw-semibold">Deskripsi</h4>
        <p class="text-muted">
            <?php echo $property['description']; ?>
        </p>
    </div>

</div>

<!-- SCRIPT -->
<script>
    const mainImage = document.getElementById("mainImage");
    const thumbs = document.querySelectorAll(".thumb-img");

    thumbs.forEach(img => {
        img.addEventListener("click", () => {
            mainImage.src = img.src;
        });
    });
</script>