<?php 
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['register'])) {
                                            $nama = $_POST['nama']; 
                                            $username = $_POST['username'];     
                                            $password = md5($_POST['password']);
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $no_tlp = $_POST['no_tlp'];
                                            $level = $_POST['level'];
                                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,username,password,email,alamat,no_tlp,level)
                                            VALUES('$nama ','$username ','$password ','$email ','$alamat ','$no_tlp ','$level')");  
                                            if ($insert){
                                                echo '<script>alert("Selamat, register berhasil, Silahkan login!!"); location.href="login.php"</script>';
                                            }else{
                                                echo '<script>alert("Register gagal, silahkan ulangi kembali!!")</script>';
                                                }
                                            }
                                        ?>
                                        <form method= "post">
                                            <div class="form-group">
                                            <label class="small mb-1">Nama Lengkap</label>
                                                <input class="form-control"  type="text" name="nama" placeholder="Masukan Nama Lengkap" />
                                            </div>
                                            <br>
                                            <div class="form-group">
                                            <label class="small mb-1">Email</label>
                                                <input class="form-control"  type="text" name="email" placeholder="Masukan Email" />
                                            </div>
                                            <br>
                                            <div class="form-group">
                                            <label class="small mb-1">No.Telepon</label>
                                                <input class="form-control"  type="text" name="no_tlp" placeholder="Masukan No.Telepon" />
                                            </div>
                                            <br>
                                            <div class="form-group">
                                            <label class="small mb-1">Alamat</label>
                                                <textarea name="alamat" rows="5" class="form-control py-4"></textarea>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                            <label class="small mb-1">Username</label>
                                                <input class="form-control"  type="text" name="username" placeholder="Masukan Username" />
                                            </div>
                                            <br>
                                            <div class="form-group">
                                            <label class="small mb-1"for="inputpassword">Password</label>
                                                <input class="form-control" id="inputpassword" type="text" name="password" placeholder="Masukan Password" />
                                            </div>
                                            <br>
                                            <div class="form-group">
                                            <label class="small mb-1">Level</label>
                                                <select name="level" class="form-select mb-1">
                                                    <option value="Admin">Admin</option>
                                                    <option value="Petugas">Petugas</option>
                                                    <option value="Peminjam">Peminjam</option>
                                                </select>
                                            </div>
                                            <br>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type ="submit" name="register" value="register ">register</button>
                                                <a class="btn btn-danger" href="Login.php ">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital Smk Sariwangi.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
                    
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>