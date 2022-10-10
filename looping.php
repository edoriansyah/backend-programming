<?php
for ($i = 0; $i <= 10; $i++) {
    echo "looping ke $i<br>";
}

$animals = ["cat", "dog", "fish"];
foreach ($animals as $animal) {
    echo $animal . '<br>';
}

# membuat array asosiatif
$data_user = [
    'nama' => "Edo Riansyah",
    'jurusan' => "Informatika",
    'ipk' => 3.74,
];

foreach ($data_user as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
