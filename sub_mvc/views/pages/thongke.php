<h2>Thống kê</h2>
<form action="Thongke" method="POST"><button name="thongke" class="btn btn-primary m-2">Thống kê</button></form>
<div class="list-group">
    <table class="table table-hover">
        <tbody>
            <tr>
                <th>Mã thống kê</th>
                <th>Tháng thống kê</th>
                <th>Năm thống kê</th>
                <th>Tổng nhân viên</th>
                <th>Tổng_KCC</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data['thongke'])) {
                echo '<tr>
                    <td>' . $row["MaTK"] . '</td>
                    <td>' . $row["ThangTK"] . '</td>
                    <td>' . $row["NamTK"] . '</td>
                    <td>' . $row["Tong_NV"] . '</td>
                    <td>' . $row["Tong_KCC"] . '</td>';
            }
            ?>

        </tbody>
    </table>
</div>