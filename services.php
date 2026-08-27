<section id="Services" class="section-padding">
    <div class="container text-center">
        <div class="row mb-5">
            <div class="col">
                <h2 class="fw-bold display-5">Services</h2>
            </div>
        </div>
        <div class="row g-4">
            <?php
            include("koneksi.php");
            $sql = "SELECT judul, keterangan, icon FROM layanan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    echo '<div class="col-12 col-md-6 col-lg-4">';
                    echo '<div class="card service-card h-100 border-0 shadow-sm">';
                    echo '<div class="card-body p-4 text-center">';
                    $iconClass = !empty($row['icon']) ? $row['icon'] : 'bi bi-code-slash';
                    echo '<i class="' . $iconClass . ' display-4 mb-3 d-block"></i>';
                    echo '<h5 class="card-title fw-bold">' . htmlspecialchars($row["judul"]) . '</h5>';
                    echo '<p class="card-text text-muted">' . htmlspecialchars($row['keterangan']) . '</p>';
                    echo '</div></div></div>';
                }
            } else {
                echo '<div class="col-12"><p class="text-muted">Belum ada layanan yang tersedia.</p></div>';
            }

            $conn->close();
            ?>
        </div>
    </div>
</section>