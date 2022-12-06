<?php 
require 'koneksi.php';
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$pesan = [];
$no = $data['no'];
$nama = $data['nama'];
$no_tlp = $data['no_tlp'];

$query = mysqli_query($con,"update kontak set nama='$nama', no_tlp='$no_tlp' where no='$no'");
// if ($query) {
// 	http_response_code(201);
// 	$pesan['status'] = 'sukses';
// }else{
// 	http_response_code(422);
// 	$pesan['status'] = 'gagal';

// }

echo json_encode($pesan);
echo mysqli_error($con);


?>