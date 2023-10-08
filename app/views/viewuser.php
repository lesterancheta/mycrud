<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">User Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                       <a href="insert"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">Insert</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<table class="table table-dark table-striped table-sm">
        <thead>
        <tr>
            <th>Username</th>
            <th>Age</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $datas):?>
            <tr>
            <td><?=$datas['username'];?></td>
            <td><?=$datas['age'];?></td>
            <td><?=$datas['email'];?></td>
            <td><?=$datas['password'];?></td>
            <td><a href="<?=site_url('4/delete/'. $datas['id'].'' );?>"> <button type="button" class="btn btn-danger">Delete</button></a>
            <a href="<?=site_url('4/edit/'. $datas['id'].'' );?>"><button type="button" class="btn btn-success">Edit</button></a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<!--Model updating-->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your form for editing user information goes here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-..."></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-..."></script>
</body>
</html>