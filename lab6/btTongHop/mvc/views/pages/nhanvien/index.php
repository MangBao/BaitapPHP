<style>
    table {
        margin-top: 25px;
        font-size: 1rem;
    }

    table th,
    table td {
        text-align: center;
    }

    .row_head,
    .row_body {
        vertical-align: middle !important;
    }

    table tr:nth-child(even) {
        background-color: aqua;
    }

    .pagination-container {
        margin-top: 40px;
    }

    .pagination li:hover {
        cursor: pointer;
    }

    .pagination {
        display: inline-block;
    }

    .pagination li.active {
        background-color: darkseagreen;
        color: white;
        border-radius: 5px;
    }

    .pagination li {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination li:hover:not(.active) {
        background-color: #ddd;
        border-radius: 5px;
    }

    #searchInput{
        outline: none;
        border: none;
        border-radius: 4px;
        line-height: 32px;
        background-color: #ddd;
    }
</style>
<div class="main_content_iner ">
    <div class="container-fluid p-0 ">
        <div class="row ">
            <div class="col-lg-12">
                <div class="white_card_body">
                    <div class="QA_table table-responsive ">
                        <div class="white_card_header">
                            <h3 style="line-height: 1.6; text-align: center;">DANH SÁCH NHÂN VIÊN</h3>
                            <div class="box_header m-0">
                                <button class="btn btn-primary">
                                    <a href="NhanVien/Create" style="color: #ddd;">Thêm nhân viên</a>
                                </button>
                                <input type="text" id="searchInput" onkeyup="searchFunc()" placeholder="Tìm theo họ tên..." title="Tìm theo họ tên">
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_table table-responsive">
                                
                                <table class="table pt-0" id="myTable">
                                    <thead>
                                        <tr>
                                            <th class="row_head">STT</th>
                                            <th class="row_head">Avatar</th>
                                            <th class="row_head">Họ tên</th>
                                            <th class="row_head">Địa chỉ</th>
                                            <th class="row_head">Chức năng</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $stt = 1;
                                        foreach ($data['listnv'] as $item) {
                                            // $date = str_replace('-', '/', $item["NgayLap"]);
                                            echo "
                                                <tr>
                                                    <td class='row_body'>" . ($stt++) . "</td>
                                                    <td class='row_body'>
                                                        <img style='width: 52px; height: 52px; border-radius: 30px' src='public/home/img/staf/" . $item['anh'] . "' alt=''>
                                                    </td>                                                    
                                                    <td class='row_body'>" . $item['honv'] . " " . $item['tennv'] . "</td>
                                                    <td class='row_body'>" . $item['diachi'] . "</td>
                                                ";


                                            echo "
                                                    <td class='row_body'>
                                                        <a href='NhanVien/Edit/" . $item["manv"] . "'><i class='fa fa-edit'></i></a>&nbsp;|&nbsp;
                                                        <a href='NhanVien/Details/" . $item["manv"] . "'><i class='fa fa-info-circle'></i></a>&nbsp;|&nbsp;
                                                        <a href='NhanVien/Delete/" . $item["manv"] . "'><i class='fa fa-trash'></i></a>
                                                    </td>
                                                </tr>
                                                ";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function searchFunc() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }            
        }
    }
</script>