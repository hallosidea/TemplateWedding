<?php

    function showOutput($output = [])
    {
        echo json_encode($output);
        die();
    }

    $output = ['success' =>  false, 'message' => 'Input tidak valid.'];

    $nama = $_POST['nama'] ?? null;
    $alamat = $_POST['alamat'] ?? null;
    $ucapan_selamat = $_POST['ucapan_selamat'] ?? null;

    if (empty($nama)) {
        $output['message'] = 'Nama tidak boleh kosong.';
        showOutput($output);
    }

    if (empty($alamat)) {
        $output['message'] = 'Alamat tidak boleh kosong.';
        showOutput($output);
    }

    if (empty($ucapan_selamat)) {
        $output['message'] = 'Ucapan Selamat tidak boleh kosong.';
        showOutput($output);
    }

    require_once "config.php";

    $queryInsert = "INSERT INTO t_kirimucapan(nama,alamat,ucapan_selamat) VALUES('%s','%s','%s')";

    $result = mysqli_query($mysqli, sprintf($queryInsert, $nama, $alamat, $ucapan_selamat));

    $output['success'] = true;
    $output['message'] = 'Ucapan kamu berhasil dimasukan. :)';

    showOutput($output);
?>