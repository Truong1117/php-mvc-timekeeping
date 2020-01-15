<?php
    if($data["stt"] == 'false'){
        echo "Hôm nay bạn chưa chấm công";
    }else
    {
        echo "Hôm nay bạn đã chấm công";
    }
?>
<h2>Hello World</h2>
<?php 
    echo $_SESSION['username'];
    echo "<br/>";
    echo $_SESSION['role'];
?>