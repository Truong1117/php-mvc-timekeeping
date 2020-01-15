<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="Add_chucvu" method="POST">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Mã chức vụ</label>
                        <input name="macv" type="text" class="form-control validate" required>
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Tên chức vụ</label>
                        <input type="text" name="tencv" class="form-control validate" required>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button name="add_chucvu" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="page-header" style="padding:0px">
    <div class="row">
        <div class="col-md-9">
            <h2>Chức vụ</h2>
        </div>
        <div class="col-md-3 text-center">
            <a href="" class="btn btn-success btn-rounded mt-2" data-toggle="modal" data-target="#modalLoginForm">
                Add</a>
        </div>
    </div>
</div>

<div class="list-group">
    <table class="table table-hover">
        <tbody>
            <tr>
                <th>Mã chức vụ</th>
                <th>Tên chức vụ</th>
                <th>Delete</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data['chucvu'])) {
                echo '<tr>
                    <td>' . $row["MaCV"] . '</td>
                    <td>' . $row["TenCV"] . '</td>
                    <td>
                        <button class="btn btn-danger" onclick="deleteme(' . $row["id"] . ')" name="Delete" value="Delete">Delete</button>
                    </td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</div>
<?php

?>