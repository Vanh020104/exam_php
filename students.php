<?php
// get products from db
// 1. connect db
$host = "127.0.0.1";
$dbname = "students";
$dbuser = "root";
$dbpass = ""; // Xampp: ""   Mamp: "root"

$conn = new mysqli($host,$dbuser,$dbpass,$dbname); // host user pass dbname
if($conn->connect_error){
    die("Connection refused!");
}
// connection succeed
// 2. query db
$sql = "select * from students";
$result = $conn->query($sql);
$student= [];
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $student[] = $row;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
</head>
<style>
    form{
        max-width: 1000px;
        border: 1px solid rgb(75, 75, 75);
        border-radius: 5px;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
    }
    h1{
        text-align: center;
    }
    .btn-outline-primary {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>

<section>
    <form action="" method="post">

    <div class="container">
            <h1>Students List</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Telephone</th>

                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($student as $item):?>
                <tr>
                    <td><?php echo $item["id"] ?></td>
                    <td><?php echo $item["name"] ?></td>
                    <td><?php echo $item["age"] ?></td>
                    <td><?php echo $item["address"] ?></td>
                    <td><?php echo $item["telephone"] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>

        </table>
        <a href="form.php" class="btn btn-outline-primary">Create a new product</a>
    </div>
    </form>
</section>
</body>
</html>