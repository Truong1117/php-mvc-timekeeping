<form action="Active_change_password/<?php echo $data["username"] ?>" method="POST" role="form">
    <legend>Form change pass</legend>

    <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" name="username" values="" placeholder="<?php echo $data["username"] ?>" disabled>
    </div>

    <div class="form-group">
        <label for="">Password Old</label>
        <input type="password" class="form-control" id="pass_old" name="pass_old" required>
    </div> 

    <div class="form-group">
        <label for="">Password New</label>
        <input type="password" class="form-control" id="pass_new" name="pass_new" required>
    </div> 

    <div class="form-group">
        <label for="">Repeat Password New</label>
        <input type="password" class="form-control" id="pass_new_rp" name="pass_new_rp" required>
    </div>
    <div id="message_pass_rp"></div>
    <button type="change_pass" name="chang_pass" class="btn btn-primary">Change</button>

    <?php
        if(isset($_POST["chang_pass"])){
            if($_SESSION["rs_chang_pass"] == 'true'){
                echo "Đổi mật khẩu thành công";
            }else{
                echo "Đổi mật khẩu thất bại";
            }
        }
    ?>
</form>
