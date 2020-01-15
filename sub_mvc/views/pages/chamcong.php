<h2>Chấm công</h2>

<div class="list-group">
    <table class="table table-hover">
        <tbody>
            <tr>
                <th>Mã nhân viên</th>
                <th>Ngày chấm công</th>
                <th>Thời gian chấm công</th>
                <th>Thời gian đang nhập</th>
                <th>Trạng thái</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data['chamcong'])) {
                echo '<tr>
                    <td>' . $row["MaNV"] . '</td>
                    <td>' . $row["Ngay_CC"] . '</td>
                    <td>' . $row["Time_log"] . '</td>
                    <td></td>';
            ?>    
            <?php
                if($row['Status'] != 1){
                    echo '<td>Chưa chấm công</td>';
                }else{
                    echo '<td>Đã chấm công</td>';
                };
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>