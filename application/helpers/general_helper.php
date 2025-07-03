<?php

function ruang($id)
{
    $ci = get_instance();
    $ci->db->where('id', $id);
    $data = $ci->db->get('ruangmeeting')->result_array();
    foreach ($data as $d) {
        return $d['nama'];
    }
}
function tampilJam($id)
{
    $ci = get_instance();
    $dataJam = explode(',', $id);
    for ($i = 0; $i < count($dataJam); $i++) {
        $ci->db->or_where('id', $dataJam[$i]);
    }
    $data = $ci->db->get('jammeeting')->result_array();

    foreach ($data as $dt) {
        return $dt['jam'] . "<br>";
    }
}
function tampilNama($id)
{
    $ci = get_instance();
    $ci->db->where('id', $id);
    $data =  $ci->db->get('pengguna')->result_array();
    foreach ($data as $nama) {
        return $nama['nama'];
    }
}
