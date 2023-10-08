<html>
<head>
<title>My Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>

<div class="container my-4">
    <form action="http://localhost/LavaLust4/edit/<?=$data['id'];?>" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="hidden" name="id" value="<?=$data['id'];?>">
            <input type="text" class="form-control" id="username" name="username" value="<?=$data['username'];?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?=$data['password'];?>">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?=$data['age'];?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=$data['email'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>