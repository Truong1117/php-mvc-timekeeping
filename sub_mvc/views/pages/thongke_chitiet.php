<h2>Thống kê chi tiết</h2>
<div class="list-group">
    <table class="table table-hover">
        <tbody>
            <tr>
                <th>Mã nhân viên</th>
                <th>Tổng chấm công</th>
                <th>Tháng thống kê</th>
                <th>Năm thống kê</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($data['thongke'])) {
                echo '<tr>
                    <td>' . $row["MaNV"] . '</td>
                    <td>' . $row["Tong_CC"] . '</td>
                    <td>' . $row["Month"] . '</td>
                    <td>' . $row["Year"] . '</td>';
            }
            ?>         
        </tbody>
    </table>
</div>