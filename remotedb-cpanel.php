<?php
error_reporting(E_ALL);
$db_host='162.250.126.19';
$db_user='user_db';
$db_password='pass_db';
$db_name='name_db';
$db_port='3306'; #port cpanel
$koneksi = new mysqli($db_host, $db_user, $db_password, $db_name, $db_port);

if (!empty($koneksi->connect_errno)) {
die('<b>Gagal Menghubungkan Ke DataBase!</b>
');
}
?>

