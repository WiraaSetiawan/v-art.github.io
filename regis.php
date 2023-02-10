<?php
    include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inputop.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body>

    <div class="flex items-center justify-center min-h-screen" style="background-image: url(7eb1a70d9a62124838fa3eb50b2b5b11.jpg); background-size: cover; position: absolute; width: 100%; height: 100%">
        <div class="rounded-lg px-8 py-6 mt-4 text-left bg-white shadow-lg">
            <h3 class="text-2xl font-bold text-center">Register</h3>
            <form action="" method="post">
                <div class="mt-4">
                    <div>
                        <label class="block" for="email">Username<label>
                        <input type="text" name="uname" placeholder="Username" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="mt-4">
                        <label class="block">Password<label>
                        <input type="password" name="pass" placeholder="Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="flex items-baseline justify-between">
                        <input class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" type="submit" value="Register" name="proses">
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
    if(isset($_POST['proses'])){
        mysqli_query($conn,"insert into users set
        username = '$_POST[uname]',
        password = '$_POST[pass]',
        nama = '$_POST[name]'");

        echo "New user has Added";
        echo "<meta http-equiv=refresh content=1;URL='index.php'>";
    }
?>
</body>
</html>