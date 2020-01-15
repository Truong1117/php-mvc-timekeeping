<?php
class UserModel extends db
{
    public function InserNewUser($username, $password, $role)
    {
        $qr = "INSERT INTO users VALUES(null,'$username','$password','$role');";
        $rs = false;
        if (mysqli_query($this->conn, $qr)) {
            $rs = true;
        }

        return json_encode($rs);
    }

    public function checkUsername($username)
    {
        $qr = "SELECT id FROM users 
        WHERE username = '$username'";
        $rows = mysqli_query($this->conn, $qr);
        $result = false;
        if (mysqli_num_rows($rows) > 0) {
            $result = true;
        }
        return json_encode($result);
    }

    public function checkLogin($username, $password)
    {
        $msg = null;
        $isLogged = False;
        $login_model = array();
        if ($username == null && $password == null) {
            $msg = "You must fill in the form!";
            $isLogged = False;
        } else if (mysqli_num_rows(mysqli_query($this->conn, "SELECT * FROM users WHERE username='$username' and password='$password'")) >0) {
            //how would i create a session in the model so it can be used by other views and functions in the model class?
            $row = mysqli_fetch_assoc(mysqli_query($this->conn, "SELECT * FROM users WHERE username='$username'"));
            $_SESSION['role'] = $row['role'];
            $_SESSION['username'] = $username;
            $msg = "Logged in succesfully!";
            $isLogged = True;
        } else {
            $msg = "Wrong username or password!";
            $isLogged = False;
        }
        $login_model = array('msg' => $msg, 'status' => $isLogged);
        return $login_model;
    }
}
