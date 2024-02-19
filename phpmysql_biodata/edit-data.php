<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_biodata WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
              <form action="update-data.php" method="POST">
              
              <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id" value="<?php echo $row['id'] ?>" placeholder="Masukkan ID Anda" class="form-control”>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="Masukkan Alamat" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'] ?>" placeholder="Masukkan Kota Lahir" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Tgl. Lahir</label>
                  <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>" placeholder="Masukkan Tgl. Lahir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Agama</label>
                  <input type="text" name="agama" value="<?php echo $row['agama'] ?>" placeholder="Masukkan Agama" class="form-control">
                </div>

                <div class="form-group">
                  <label>No. HP</label>
                  <input type="text" name="no_hp" value="<?php echo $row['no_hp'] ?>" placeholder="Masukkan No. HP" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Masukkan Email" class="form-control">
                </div>

                <div class="form-group">
                  <label>Sekolah</label>
                  <input type="text" name="sekolah" value="<?php echo $row['sekolah'] ?>" placeholder="Masukkan Tgl. Lahir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" name="kelas" value="<?php echo $row['kelas'] ?>" placeholder="Masukkan Kelas" class="form-control">
                </div>

                <div class="form-group">
                  <label>Blog</label>
                  <input type="text" name="blog" value="<?php echo $row['blog'] ?>" placeholder="Masukkan Blog" class="form-control">
                </div>

                <div class="form-group">
                  <label>Peminatan</label>
                  <input type="text" name="karir" value="<?php echo $row['karir'] ?>" placeholder="Masukkan Peminatan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Motto</label>
                  <input type="text" name="motto" value="<?php echo $row['motto'] ?>" placeholder="Masukkan Motto" class="form-control">
                </div>
                                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>