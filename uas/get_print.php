<?php
include('koneksi.php');
if($_POST["query"] != '') {
    $search_array = explode(",", $_POST["query"]); 
    $search_text = "'" . implode("', '", $search_array) . "'";
    $query = $conn->query("SELECT * FROM item WHERE nama IN (".$search_text.") ORDER BY id DESC");
}else{
    $query = $conn->query("SELECT * FROM item ORDER BY nama DESC");
}
$total_row = mysqli_num_rows($query);
$output = '';
if($total_row > 0)
{

    while ($row = $query ->fetch_object()) {    
    $output.= '<div class="col-4"><div class="card mt-3"><div class="card-body">'.$row->nama.'<center><h2>'.$row->harga.'</h2></center><div>'.$row->satuan.' | '.$row->barcode.'</div></div></div></div><br>';
    }
    
}else{
    $output .= '
    <tr>
        <td colspan="5" align="center">No Data Found</td>
    </tr>
    ';
}
echo $output;
?>