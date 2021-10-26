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

    #searchInput {
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
                            <h3 style="line-height: 1.6; text-align: center;"">DANH SÁCH CHỨC VỤ</h3>
                            <div class=" box_header m-0">
                                <button class="btn btn-primary">
                                    <a href="ChucVu/Create" style="color: #ddd;">Thêm chức vụ mới</a>
                                </button>
                                <input type="text" id="searchInput" onkeyup="searchFunc()" placeholder="Tìm theo tên chức vụ..." title="Tìm theo họ tên">
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_table table-responsive ">
                            <table class="table pt-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="row_head">STT</th>
                                        <th class="row_head">Mã chức vụ</th>
                                        <th class="row_head">Tên chức vụ</th>
                                        <th class="row_head">Chức năng</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $stt = 1;
                                    foreach ($data['listcv'] as $item) {
                                        // $date = str_replace('-', '/', $item["NgayLap"]);
                                        echo "
                                                <tr>
                                                    <td class='row_body'>" . ($stt++) . "</td>
                                                                                                        
                                                    <td class='row_body'>" . $item['maloai'] . "</td>
                                                    <td class='row_body'>" . $item['tenloai'] . "</td>
                                                ";


                                        echo "
                                                    <td class='row_body'>
                                                        <a href='ChucVu/Edit/" . $item["maloai"] . "'><i class='fa fa-edit'></i></a>&nbsp;|&nbsp;
                                                        <a href='ChucVu/Details/" . $item["maloai"] . "'><i class='fa fa-info-circle'></i></a>&nbsp;|&nbsp;
                                                        <a href='ChucVu/Delete/" . $item["maloai"] . "'><i class='fa fa-trash'></i></a>
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