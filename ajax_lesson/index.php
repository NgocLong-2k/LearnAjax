<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax Lesson</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="app.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <h3>Insert dữ liệu</h3>
            <form method="POST" action="ajax_action.php" id="insert_data_hoten">
                <label>Họ và tên</label>
                <input type="text" class="form-control" id="hovaten" placeholder="Điền họ và tên">
                <label>Số phone</label>
                <input type="text" class="form-control" id="sophone" placeholder="Số phone">
                <label>Địa chỉ</label>
                <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ">
                <label>Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
                <label>Ghi chú</label>
                <input type="text" class="form-control" id="ghichu" placeholder="Ghi chú">
                <br>
                <input type="button" name="insert_data" value="Insert" id="button_insert" class="btn btn-success">
            </form>
        </div>
    </div>
</body>
</html>
