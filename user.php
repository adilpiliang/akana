<!doctype html>
<html lang="en">

<head>
    <title>User</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center">
                </svg>
                <strong>Users</strong>
            </a>
            </button>
        </div>
    </div>x
</header>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">no</th>
            <th scope="col">email</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">alamat</th>
        </tr>
    </thead>
    <tbody>
                 <tr>
                <th scope="row"><?= $data['id'] ?></th>
                <td><?= $data['email'] ?></td>
                <td><?= $data['company_name'] ?></td>
                <td><?= $data['address'] ?></td>
            </tr>
            <php? endwhile;?>
    </tbody>
</table>