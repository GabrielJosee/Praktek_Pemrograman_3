<?php
include("koneksi.php");
$res = $conn->query("SELECT skill, nilai FROM about ORDER BY urutan ASC");
$hasil = ['labels' => [], 'data' => []];

while ($row = $res->fetch_assoc()) {
    $hasil['labels'][] = $row['skill'];
    $hasil['data'][] = (int) $row['nilai'];
}
echo json_encode($hasil);
?>