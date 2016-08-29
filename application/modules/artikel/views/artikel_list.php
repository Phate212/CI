<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GoBlog - Not affiliate with Go-Jek nor Go-Massage</title>
  <link rel="stylesheet" type="text/stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/stylesheet" href="<?php echo base_url(); ?>assets/css/custom-css.css">
<!--  <link rel="stylesheet" type="text/stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#">Portfolio</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron">
    <div class="container text-center">
      <h1>My Portfolio</h1>
      <p>Some text that represents "Me"...</p>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav">
        <br>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Blog..">
          <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          </span>
        </div>
        <h4>John's Blog</h4>
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#section1">Home</a></li>
          <li><a href="#section2">Friends</a></li>
          <li><a href="#section3">Family</a></li>
          <li><a href="#section3">Photos</a></li>
        </ul>
      </div>

      <div class="col-sm-9">
        <div class="container">
          <h2>Daftar Artikel</h2>
          
          <!-- Begin Modal Tambah Artikel -->
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info" role="button" data-toggle="modal" data-target="#modal-tambah"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Buat Artikel</button>

          <!-- Modal -->
          <div class="modal fade" id="modal-tambah" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <?php echo validation_errors(); ?>
                  <h4 class="modal-title">Tambah Artikel</h4>
                </div>
                <div class="modal-body">
                  <?php echo form_open('artikel/add'); ?>
                  <div class="form-group">
                    <div class="form-group">Judul : <input type="text" class="form-control" name="judul" value="<?php echo $this->input->post('judul'); ?>" required="required" autofocus /></div>
                    <div class="form-group">Penulis : <input type="text" class="form-control" name="penulis" value="<?php echo $this->input->post('penulis'); ?>" required="required"  /></div>
                    <div class="form-group">Tanggal : <input type="date" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" required="required"  /></div>
                    <div class="form-group">Isi : <textarea name="isi" rows="5" class="form-control"  required="required" ><?php echo $this->input->post('isi'); ?></textarea></div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="submit" class="btn btn-info">Simpan</button>
                </div>
                <?php echo form_close(); ?>
              </div>

            </div>
          </div>
        </div>
<!-- End Modal Tambah Artikel -->

        <table class="table table-hover">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Tanggal</th>
              <th>Isi</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($artikel as $a){ ?>
            <tr>
              <td>
                <?php echo $a['judul']; ?>
              </td>
              <td>
                <?php echo $a['penulis']; ?>
              </td>
              <td>
                <?php echo $a['tanggal']; ?>
              </td>
              <td>
                <?php echo $a['isi']; ?>
              </td>
              <td>
                <!-- Begin Edit Artikel -->
                <button type="button" class="btn btn-info" role="button" data-toggle="modal" data-target="#modal-edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Ubah</button>
                 <!-- Modal -->
                <div class="modal fade" id="modal-edit" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <?php echo validation_errors(); ?>
                          <h4 class="modal-title">Tambah Artikel</h4>
                        </div>
                        <div class="modal-body">
                          <?php echo form_open('artikel/edit/'.$a['id_artikel']); ?>
                          <div class="form-group">Judul : <input type="text" class="form-control" name="judul" value="<?php echo $a['judul']; ?>" required="required" autofocus /></div>
                          <div class="form-group">Penulis : <input type="text" class="form-control" name="penulis" value="<?php echo $a['penulis']; ?>" required="required" /></div>
                          <div class="form-group">Tanggal : <input type="date" class="form-control" name="tanggal" value="<?php echo $a['tanggal']; ?>" required="required" /></div>
                          <div class="form-group">Isi : <textarea name="isi" class="form-control" required="required" rows="5"><?php echo $a['isi']; ?></textarea></div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-info">Simpan</button>
                      </div>
                      <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
                  <!-- End Edit Artikel -->
                
                <a href="<?php echo site_url('artikel/remove/'.$a['id_artikel']); ?>" class="btn btn-info" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Hapus</a>
              </td>
            </tr>
            <?php } ?>
        </table>
      </div>
    </div>
  </div>
  <footer class="container-fluid">
    <p>Footer Text</p>
  </footer>


  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>

</html>