<?php
//no.3 
function tahun__kabisat($tahunlahir) {
    if ($tahunlahir % 4 == 0) {
        return true;
    } else {
        return false;
    }
}
 
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

foreach ($data as $item) {
    if (tahun__kabisat($item['tahun'])) {
        echo $item['nama'] . " lahir pada tahun kabisat." . $item['tahun'] . "<br>";
    } else {
        echo $item['nama'] . " tidak lahir pada tahun kabisat." . $item['tahun'] . "<br>";
    }
}

?>