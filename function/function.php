<?php
// connect to db
$conn = mysqli_connect('localhost', 'root', '', 'loginandregister');

if (!$conn) {
    echo "
        <script>
            alert('database bermasalah')
        </script>
    
    ";
}

// function registration
function registration($data)
{
    // make $conn is global
    global $conn;

    // take data from input user
    $name = htmlspecialchars($data["username"]);
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // make username to lower and remove '
    $name = strtolower(stripslashes(str_replace("'",'',$name)));

    // make sure no username is the same
    $sqlUser = "SELECT * FROM user where nama = '$name' ";
    $result = mysqli_query($conn, $sqlUser);
    $final = mysqli_fetch_assoc($result);
    if ($final) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> Username has been used, please use a different username
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
        return false;
    }

    // compare passwords
    if ($password1 != $password2) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Something Wrong!</strong> Confirm password does not match
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        ';

        return false;
    }

    // password encryption
    $password = password_hash($password2, PASSWORD_DEFAULT);

    // insert data to database
    $sql = "INSERT INTO user
        VALUES
        ('', '$name', '$password', 'user')
    ";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
