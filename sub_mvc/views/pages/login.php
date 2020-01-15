<h2>Form login</h2>
<form action="<?php echo $data['url']?>Login/login_user" method="POST">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
        <div id="messageUS"></div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
    </div>
    <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
</form>
<a href="./Register">Create a account</a>

<?php if (isset($data["result"])) {
?>
    <h3><?php
        if ($data["result"] == 'true') {
            echo "Dang ki thanh cong";
        } else {
            echo "Dang ki that bai";
        }
        ?></h3>
<?php
} ?>