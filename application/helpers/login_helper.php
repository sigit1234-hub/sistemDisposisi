<?php


function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('id')) {
        redirect('Login');
    } else {
        // $role_id = $ci->session->userdata('role_id');
        // $menu = $ci->uri->segment(1);
        // $queryMenu = $ci->db->get_where('user_menu', ['nama_menu' => $menu])->row_array();
        // $menu_id = $queryMenu['id'];
        // $userAccess = $ci->db->get_where('user_access_menu', [
        //     'role_id' => $role_id,
        //     'menu_id' => $menu_id
        // ]);
        // if ($userAccess->num_rows() < 1) {
        //     $ci->session->set_userdata('link', current_url());
        //     redirect('Auth/blocked');
        // }
    }
}

function check_access($role_id, $menu_id) //function yang isinya ngambil dari $role_id dan $menu_id
{
    $ci = get_instance();
    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');
    // $result = $ci->db->get_where('user_access_menu', [
    //     'role_id' => $role_id,
    //     'menu_id' => $menu_id
    // ]);
    //jadi intinya untuk mengecek apakah role id yang sedang berjalan sesuai dengan menu yang dapat dibuka
    if ($result->num_rows() > 0) { //jika $result yang diatas menghitung row dan ternyata hasil nya lebihdari 0
        return "checked = 'checked' "; //maka centang yang di role_access.php berupa name inputnya kedalam checked
    }
}
