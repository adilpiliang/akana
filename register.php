<!doctype html>
<html lang="en">

<head>
    <title>Pendaftaran</title>
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
                <strong>Registrasi</strong>
            </a>
            </button>
        </div>
    </div>
</header>
<br>

<body class="text-center">
    <div class="container">
        <main class="form-signin">
            <form action="process.php" method="POST" enctype="multipart/form-data">
                <php? csrf_field(); ?>
                    <h1 class="h3 mb-3 fw-normal">Daftar</h1>

                    <div class="form-floating">
                        <input name="email" class="form-control" placeholder="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input name="nama_perusahaan" type="text" class="form-control" placeholder="Nama Perusahaan">
                        <label for="floatingNama Perusahaan">Nama Perusahaan</label>
                    </div>
                    <div class="form-floating">
                        <input name="alamat" type="text" class="form-control" id="floatingAlamat" placeholder="Alamat">
                        <label for="floatingAlaamat">Alamat</label>
                    </div>
                    <div class="form-floating">
                        <input name="no_hp" type="text" class="form-control" placeholder="No. HP">
                        <label for="floatingNo. HP">No. HP</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <label for="floatingReveral">Kode Referral</label>
                    </div>
                    <br>
                    <button class="w-50 btn-lg btn-success " name = "save"type="submit">Daftar</button>
            </form>
        </main>
    </div>


</body>

</html>