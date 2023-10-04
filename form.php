<!doctype html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
</head>
<body>
<style>
    form{
        margin-top: 100px;
        max-width: 500px;
        border: 1px solid #999999;
        border-radius: 5px;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
    }
    h2{
        text-align: center;
    }
</style>
<div class="container">
    <form action="post.php" method="post">
        <h2>Add new student</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name student</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label class="form-label">Age</label>
            <input name="age" type="number" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input name="address" type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Telephone</label>
            <input name="telephone" type="text" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>