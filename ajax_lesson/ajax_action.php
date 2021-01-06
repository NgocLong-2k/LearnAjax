<?php
require_once 'db.php';
if (isset($_POST['hovaten'])){
    $hovaten = $_POST['hovaten'];
    $sophone = $_POST['sophone'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $ghichu = $_POST['ghichu'];
    global $conn;
    connect_db();
    if (isset($conn)) {
        $result = mysqli_query($conn,"insert into tbl_khachhang (hovaten,sophone,diachi,email,ghichu)
        values('$hovaten','$sophone','$diachi','$email','$ghichu')");
    }
}
