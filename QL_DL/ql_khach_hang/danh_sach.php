<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Hàng Hóa</title>
    <link rel="stylesheet" href="../../css//style1.css">
    <link rel="stylesheet" href="../../css//style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="demoValidation.js" type="text/javascript"></script>
</head>
<style>
    .frmcontent {
    padding: 20px 0px;
    margin-top:5% ;
}
    
    .frmdsHH table {
        margin: 0px auto;
        text-align: left;
        width: 100%;
        border-collapse: collapse;
    }
    
    .frmdsHH table th:nth-child(1) {
        width: 1%;
        padding: 20px 20px;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(2) {
        width: 8%;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(3) {
        width: 10%;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(4) {
        width: 5%;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(5) {
        width:5%;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(6) {
        width: 5%;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(7) {
        width: 5%;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(8) {
        width: 3%;
        background-color: #ccc;
    }
    .frmdsHH table th:nth-child(9) {
        width: 5%;
        background-color: #ccc;
    }
    .frmdsHH table th:nth-child(10) {
        width: 5%;
        background-color: #ccc;
    }
    .frmdsHH table th:nth-child(11) {
        width: 5%;
        background-color: #ccc;
    }
    .frmdsHH table th:nth-child(12) {
        width: 5%;
        background-color: #ccc;
    }
    .frmdsHH table th:nth-child(13) {
        width: 5%;
        background-color: #ccc;
    }
    .frmdsHH table th:nth-child(14) {
        width: 5%;
        background-color: #ccc;
    }
    
    .frmdsHH table td {
        padding: 5px 5px;
        border: 1px #ccc solid;
    }

    .khoinut{
        text-align: center;
    }
</style>

<body>
    <div class="boxcenter">
        <div class="row">
            <div class="row frmtitle">
                <h1 class="h1"> DANH SÁCH KHÁCH HÀNG </h1>
            </div>
            <?php
            if(isset($MESSAGE)){
                echo "<br><br>";
                echo "<h5>$MESSAGE</h5>";
            }
            ?>
            <div class="row frmcontent">
                <div class="row mb10 frmdsHH ">
                    <table>
                        <tr>
                            <th>
                                Tài khoản
                            </th>
                            <th>
                                Mật khẩu
                            </th>
                            <th>
                                Họ tên
                            </th>
                            <th>
                                Địa chỉ
                            </th>
                            <th>
                                Số điện thoai
                            </th>
                            <th>
                               Email
                            </th>
                            <th>
                               CMND/CCCD
                            </th>
                            <th>
                               Ngày sinh
                            </th>
                            <th>
                               Giới tính
                            </th>
                            <th>
                               Hình ảnh
                            </th>
                            <th>
                               Vai trò
                            </th>
                            <th>
                               Mã loại_KH
                            </th>
                            <th> Sửa</th>
                            <th> Xóa</th>
                        </tr>

                            <?php
                            require_once '../../model/pdo_khach_hang.php';
                             $layDL = khach_hang_selectall();
                             foreach($layDL as $key){
                            ?>
                        <tr>
                            <td> <?php echo $key[0] ?></td>
                            <td><?php echo $key[1] ?></td>
                            <td><?php echo $key[2] ?></td>
                            <td> <?php echo $key[3] ?></td>
                            <td><?php echo $key[4] ?></td>
                            <td><?php echo $key[5] ?></td>
                            <td><?php echo $key[6] ?></td>
                            <td><?php echo $key[7] ?></td>
                            <td> <?php echo $key[8] ?></td>
                            <td><img src="../../img/<?php echo $key[9] ?>" width="40px"> </td>
                            <td> <?php if($key[10] == 'NV'){
                                echo "Nhân viên";
                            }else{
                                echo "Khách hàng";
                            } 
                            ?></td>
                            <td> <?php if($key[11] == 1){
                                echo "Thường";
                            }else{
                                echo "VIP";
                            } 
                            ?></td>
                            <td>
                                <a href="index.php?act=sua&user=<?php echo $key[0]?>"><input class="nut1" type="button" value="Sửa"></a>
                            </td>
                            <td>
                            <a href="index.php?act=xoa&user=<?php echo $key[0]?>"><input class="nut1" type="button" value="Xóa"></a>
                            </td>
                        </tr>
                                <?php }?>
                        
                    </table>
                </div>
                <div class="row mb10 khoinut">
                    <a href="index.php?act=them"><input class="btn_submit" type="button" value="NHẬP THÊM"></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>