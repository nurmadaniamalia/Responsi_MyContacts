<?php 
require 'koneksi.php';

$input = file_get_contents('php://input');
$data = json_decode($input,true);

$pesan = [];
$nama = trim($data['nama']);
$no_tlp = trim($data['no_tlp']);

if ($nama != '') {
	$query = mysqli_query($con,"insert into kontak(no,nama,no_tlp) values('','$nama','$no_tlp')");

}else{
	$query = mysqli_query($con,"delete from kontak where no='$no'");
}


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