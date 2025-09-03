<?php

echo "1. Login <br>";
$username = "admin";
$password = "12345";

$inputUser = "admin";
$inputPass = "12345";

if ($inputUser == $username && $inputPass == $password) {
    echo "Login berhasil!<br>";
} else {
    echo "Login gagal!<br>";
}


echo "<br>2. Cek Usia <br>";
$usia = 16;

if ($usia > 0) {
    if ($usia < 12) {
        echo "Kategori: Anak-anak<br>";
    } else {
        if ($usia < 18) {
            echo "Kategori: Remaja<br>";
        } else {
            echo "Kategori: Dewasa<br>";
        }
    }
} else {
    echo "Usia tidak valid<br>";
}


echo "<br>3. Cek Nilai Ujian <br>";
$nilai = 85;

if ($nilai >= 90) {
    echo "Predikat: A<br>";
} elseif ($nilai >= 75) {
    echo "Predikat: B<br>";
} elseif ($nilai >= 60) {
    echo "Predikat: C<br>";
} else {
    echo "Predikat: D (Tidak Lulus)<br>";
}


echo "<br>4. Cek Role User <br>";
$role = "editor";

switch ($role) {
    case "admin":
        echo "Halo Admin, Anda punya semua akses<br>";
        break;
    case "editor":
        echo "Halo Editor, Anda bisa mengedit konten<br>";
        break;
    case "user":
        echo "Halo User, Anda bisa melihat konten<br>";
        break;
    default:
        echo "Role tidak dikenali<br>";
}


echo "<br>5. Cek Diskon Belanja <br>";
$totalBelanja = 250000;

if ($totalBelanja >= 500000) {
    echo "Diskon 20%<br>";
} elseif ($totalBelanja >= 200000) {
    echo "Diskon 10%<br>";
} else {
    echo "Tidak ada diskon<br>";
}

?>