<?php
// $arr_year = array();
date_default_timezone_set("Asia/Ho_Chi_Minh");

//     while($row = mysqli_fetch_assoc($data["thongke"])){
//         if($row["NamTK"] == date("Y")){
//             $arr_year[] += $row["Tong_KCC"];
//         }else if($row["NamTK"] == date("Y")-1){
//             $arr_old[] += $row["Tong_KCC"];
//         }
//     }
// //Get Values of Month in Year
// $Jan_year = $arr_year[0];
// echo $Jan_year;

?>
<canvas id="myChart" width="300" height="120">
</canvas>

<script>
    var json_year = <?php echo $data["thongke_year"];?>;
    var json_year_old = <?php echo $data["thongke_year_old"];?>;
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        labels: 'Tổng số ngày nghỉ',
        type: 'bar',
        data: {
            labels: ["Jan", "Feb ", "Mar ", "Apr ", "May ", "Jun ", "Jul ", "Aug ", "Sep ", "Oct ", "Nov ", "Dec "],
            datasets: [{
                label: 'Last Year',
                backgroundColor: "rgba(255,99,132,0.5)",
                data: [json_year_old[0],json_year_old[1],json_year_old[2],json_year_old[3],json_year_old[4],json_year_old[5],json_year_old[6],json_year_old[7],json_year_old[8],json_year_old[9],json_year_old[10],json_year_old[11]]
            }, {
                label: 'Year',
                backgroundColor: "rgba(99, 255, 172,0.5)",
                data: [json_year[0],json_year[1],json_year[2],json_year[3],json_year[4],json_year[5],json_year[6],json_year[7],json_year[8],json_year[9],json_year[10],json_year[11]]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>