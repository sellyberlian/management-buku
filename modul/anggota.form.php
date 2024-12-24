<?php

    //Check jika ada id yang dibawa
    if(!empty($_GET["id"])){
      //jika ada, cek idnya di database
      $id = $_GET["id"];
      $q=$db->prepare("select * from anggota where id_anggota=?");
      $q->execute([$id]);

      //jika ditemukan di database, maka tampilkan datanya
      if($q->rowCount()> 0){
        $r= $q->fetch();
        $id_anggota=$r["id_anggota"];
        $nama=$r["nama"];
        $tmp_lahir=$r["tmp_lahir"];
        $tgl_lahir=$r["tgl_lahir"];
        $alamat=$r["alamat"];

        $button="ubah";
      
      //jika tidak ditemukan, maka kembali ke index dg pesan
      }else{
        $_SESSION["notif"]="Maaf, Data tidak ditemukan";
        header("Location: index.php");
        die();
      }
    
    //jika tidak membawa id, berarti itu perintah tambah / simpan
    }else{
      $id_anggota="";
      $nama="";
      $tmp_lahir="";
      $tgl_lahir="";
      $alamat="";
      $button="simpan";
    }
?>
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data anggota</h1>
          </div>
          <div class="col-sm-6">
          <a class="btn btn-info float-right" href="<?php echo baseurl("?p=anggota")?>" role="button"><i class="fa fa-angle-left"></i> Kembali</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form anggota</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <form method="POST" action="<?php echo baseurl("?p=anggota.action") ?>">
      <input type="hidden" name="id_anggota" value="<?php echo $id_anggota;?>">

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Id Anggota</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Id Anggota" name="id_anggota" required value="<?php echo $id_anggota; ?>">
    </div>
  </div>    
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nama anggota" name="nama" required value="<?php echo $nama; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Tempat Lahir" name="tmp_lahir" required value="<?php echo $tmp_lahir; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" name="tgl_lahir" required class="form-control" placeholder="Tanggal lahir" value="<?php echo $tgl_lahir; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" name="alamat" required class="form-control" placeholder="Alamat" value="<?php echo $alamat; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="<?php echo $button; ?>">Simpan Data</button>
    </div>
  </div>
</form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <i>Last Update at <?php echo date("d-m-Y H:i:s") ?></i>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
