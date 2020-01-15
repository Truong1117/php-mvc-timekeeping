<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="Add_nhansu" method="POST">
                <div class="modal-body row">
                    <div class="col-md-6">
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Mã nhân sự</label>
                            <input type="text" name="MaNV" id="MaNV_add" class="form-control validate" required>
                            <div id="message_MaNV_add"></div>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Tên nhân sự</label>
                            <input type="text" name="TenNV" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">ngày sinh</label>
                            <input type="date" name="Ngaysinh" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Quê quán</label>
                            <input type="text" name="Quequan" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Giới tính</label>
                            <input type="text" name="Gioitinh" class="form-control validate" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Dân tộc</label>
                            <input type="text" name="Dantoc" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">SĐT</label>
                            <input type="integer" name="SDT" class="form-control validate" required>
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
                            <input type="integer" name="Mucluong" class="form-control validate" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button name="add_nhasu" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="page-header" style="padding:0px">
    <div class="row">
        <div class="col-md-9">
            <h2>Nhân sự</h2>
        </div>
        <div class="col-md-3 text-center">
            <a href="" class="btn btn-success btn-rounded mt-2" data-toggle="modal" data-target="#modalLoginForm">
                Add</a>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="Add_nhansu" method="POST">
                <div class="modal-body row">
                    <div class="col-md-6">
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Mã nhân sự</label>
                            <input type="text" name="MaNV" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Tên nhân sự</label>
                            <input type="text" name="TenNV" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">ngày sinh</label>
                            <input type="date" name="Ngaysinh" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Quê quán</label>
                            <input type="text" name="Quequan" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Giới tính</label>
                            <input type="text" name="Gioitinh" class="form-control validate" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Dân tộc</label>
                            <input type="text" name="Dantoc" class="form-control validate" required>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">SĐT</label>
                            <input type="integer" name="SDT" class="form-control validate" required>
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
                            <input type="integer" name="Mucluong" class="form-control validate" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button name="add_nhasu" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="list-group">
    <table class="table table-hover">
        <tbody>
            <tr>
                <th>Mã nhân sự</th>
                <th>Tên nhân sự</th>
                <th>Ngày sinh</th>
                <th>Quê quán</th>
                <th>Giới tính</th>
                <th>Dân tộc</th>
                <th>SĐT</th>
                <th>MãPB</th>
                <th>MãCV</th>
                <th>Mức lương</th>
                <th>Edit/Delete</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data['nhansu'])) {
                echo '<tr>
                <td>' . $row["MaNV"] . '</td>
                <td>' . $row["TenNV"] . '</td>
                <td>' . $row["Ngaysinh"] . '</td>
                <td>' . $row["Quequan"] . '</td>
                <td>' . $row["Gioitinh"] . '</td>
                <td>' . $row["Dantoc"] . '</td>
                <td>' . $row["SDT"] . '</td>
                <td>' . $row["MaPB"] . '</td>
                <td>' . $row["MaCV"] . '</td>
                <td>' . $row["Mucluong"] . '</td>
                <td>
                        <a href="Get_info_user/' . $row["MaNV"] . '" class="btn btn-success btn-small">Edit</a>
                        <span style="font-size:20px">/</span>
                        <button class="btn btn-danger" onclick="deleteme(' . $row["id"] . ')" name="Delete" value="Delete">Delete</button>
                    </td>
            </tr>';
            }
            ?>
        </tbody>
    </table>
</div>