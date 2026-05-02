<?php

// ======================
// DUMMY DATA
// ======================
$properties = [
    ["id" => 1, "title" => "Rumah Minimalis Modern", "location" => "Mataram", "image" => "properti1.jpg"],
    ["id" => 2, "title" => "Villa Elegan Pinggir Kota", "location" => "Lombok Barat", "image" => "properti1.jpg"],
    ["id" => 3, "title" => "Rumah Keluarga Nyaman", "location" => "Mataram", "image" => "properti1.jpg"],
    ["id" => 4, "title" => "Hunian Asri Dekat Kota", "location" => "Mataram", "image" => "properti1.jpg"],
    ["id" => 5, "title" => "Villa View Pantai", "location" => "Lombok Utara", "image" => "properti1.jpg"],
    ["id" => 6, "title" => "Rumah Modern 2 Lantai", "location" => "Lombok Barat", "image" => "properti1.jpg"],
    ["id" => 7, "title" => "Cluster Minimalis", "location" => "Mataram", "image" => "properti1.jpg"],
    ["id" => 8, "title" => "Rumah Investasi Strategis", "location" => "Mataram", "image" => "properti1.jpg"],
];

// ======================
// FILTER
// ======================
$locationFilter = $_GET['location'] ?? '';
$priceFilter    = $_GET['price'] ?? '';

$filtered = array_filter($properties, function($p) use ($locationFilter, $priceFilter) {

    if ($locationFilter && $p['location'] != $locationFilter) return false;

    return true;
});

// ======================
// PAGINATION
// ======================
$perPage = 6;
$totalData = count($filtered);
$totalPages = ceil($totalData / $perPage);

$page = $_GET['p'] ?? 1;
$page = max(1, min($totalPages, $page));

$start = ($page - 1) * $perPage;
$dataToShow = array_slice($filtered, $start, $perPage);

?>

<div class="container py-5">

    <!-- TITLE -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Daftar Properti</h2>
        <p class="text-muted">Temukan properti sesuai kebutuhan Anda</p>
    </div>

    <!-- FILTER -->
    <form method="GET" class="row g-3 mb-4 justify-content-center">

        <input type="hidden" name="page" value="properties">

        <div class="col-md-4">
            <select name="location" class="form-select">
                <option value="">Semua Lokasi</option>
                <option value="Mataram">Mataram</option>
                <option value="Lombok Barat">Lombok Barat</option>
                <option value="Lombok Utara">Lombok Utara</option>
            </select>
        </div>

        <div class="col-md-4">
            <button class="btn btn-dark w-100">Filter</button>
        </div>

    </form>

    <!-- GRID -->
    <div class="row g-4">

        <?php foreach ($dataToShow as $p): ?>
            <div class="col-md-4">
                <div class="card property-card border-0 shadow-sm">

                    <img src="assets/images/properties/<?php echo $p['image']; ?>" class="card-img-top">

                    <div class="card-body">
                        <h5 class="fw-semibold"><?php echo $p['title']; ?></h5>
                        <p class="text-muted mb-1"><?php echo $p['location']; ?></p>

                        <a href="index.php?page=detail&id=<?php echo $p['id']; ?>" class="btn btn-outline-dark w-100 mt-3">
                            Lihat Detail
                        </a>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

        <?php if (empty($dataToShow)): ?>
            <p class="text-center">Properti tidak ditemukan</p>
        <?php endif; ?>

    </div>

    <!-- PAGINATION -->
    <nav class="mt-5">
        <ul class="pagination justify-content-center">

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                    <a class="page-link"
                       href="index.php?page=properties&p=<?php echo $i; ?>&location=<?php echo $locationFilter; ?>&price=<?php echo $priceFilter; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>

        </ul>
    </nav>

</div>