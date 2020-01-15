<?php
$row = mysqli_fetch_assoc($data['info_user']);
?>

<form action="../Edit_nhansu/<?php echo $row["MaNV"] ?>" method="POST">
    <div class="modal-body mx-3 row">
        <div class="col-md-6">
            <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <label data-error="wrong" data-success="right">Mã nhân sự</label>
                <input type="text" name="MaNV" class="form-control validate" disabled value="<?php echo $row["MaNV"] ?>">
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Tên nhân sự</label>
                <input type="text" name="TenNV" class="form-control validate" value="<?php echo $row["TenNV"] ?>">
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">ngày sinh</label>
                <input type="date" name="Ngaysinh" class="form-control validate" value="<?php echo $row["Ngaysinh"] ?>">
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Quê quán</label>
                <input type="text" name="Quequan" class="form-control validate" value="<?php echo $row["Quequan"] ?>">
            </div>
            <div class="md-form mb-4">
                <label for="">Giới tính</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="Gioitinh" id="input" value="1" <?php
                                                                                    if ($row['Gioitinh'] == 1) { ?> checked="checked" <?php
                                                                                                                                    }
                                                                                                                                        ?>>
                        Nam
                    </label>
                    <label>
                        <input type="radio" name="Gioitinh" id="input" value="0" <?php
                                                                                    if ($row['Gioitinh'] == 0) { ?> checked="checked" <?php
                                                                                                                                    }
                                                                                                                                        ?>>
                        Nữ
                    </label>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Dân tộc</label>
                <input type="text" name="Dantoc" class="form-control validate" value="<?php echo $row["Dantoc"] ?>">
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">SĐT</label>
                <input type="integer" name="SDT" class="form-control validate" value="<?php echo $row["SDT"] ?>">
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Tên phòng ban</label>
                <!-- <input type="text" name="MaPB" class="form-control validate" required> -->
                <select name="MaPB" class="form-control validate">
                    <!-- <option value=""></option> -->
                    <?php
                    while ($row = mysqli_fetch_array($data["phongban"])) {
                        echo "<option value='" . $row['MaPB'] . "'>" . $row['TenPB'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Tên chức vụ</label>
                <!-- <input type="text" name="MaCV" class="form-control validate" required> -->
                <select name="MaCV" class="form-control validate">
                    <!-- <option value=""></option> -->
                    <?php
                    while ($row = mysqli_fetch_array($data["chucvu"])) {
                        echo "<option value='" . $row['MaCV'] . "'>" . $row['TenCV'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Mức lương</label>
                <input type="integer" name="Mucluong" class="form-control validate" value="<?php echo $row["Mucluong"] ?>">
            </div>
        </div>

    </div>
    <div class="modal-footer d-flex justify-content-center">
        <button name="edit_nhansu" class="btn btn-success" onClick="history.go(-1);">Cancel</button>
        <button name="edit_nhansu" class="btn btn-success">Send</button>
    </div>
</form>