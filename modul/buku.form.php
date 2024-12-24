<?php

    //Check jika ada id yang dibawa
    if(!empty($_GET["id"])){
      //jika ada, cek idnya di database
      $id = $_GET["id"];
      $q=$db->prepare("select * from buku where id_buku=?");
      $q->execute([$id]);

      //jika ditemukan di database, maka tampilkan datanya
      if($q->rowCount()> 0){
        $r= $q->fetch();
        $id_buku=$r["id_buku"];
        $judul=$r["judul"];
        $kategori=$r["kategori"];
        $pengarang=$r["pengarang"];
        $penerbit=$r["penerbit"];
        $tgl_terbit=$r["tgl_terbit"];
        $jmlh_halaman=$r["jmlh_halaman"];

        $button="ubah";
      
      //jika tidak ditemukan, maka kembali ke index dg pesan
      }else{
        $_SESSION["notif"]="Maaf, Data tidak ditemukan";
        header("Location: index.php");
        die();
      }
    
    //jika tidak membawa id, berarti itu perintah tambah / simpan
    }else{
      $id_buku="";
      $judul="";
      $kategori="";
      $pengarang="";
      $penerbit="";
      $tgl_terbit="";
      $jmlh_halaman="";
      $button="simpan";
    }
?>
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data buku</h1>
          </div>
          <div class="col-sm-6">
          <a class="btn btn-info float-right" href="<?php echo baseurl("?p=buku")?>" role="button"><i class="fa fa-angle-left"></i> Kembali</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Buku</h3>

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
        <form method="POST" action="<?php echo baseurl("?p=buku.action") ?>">
      <input type="hidden" name="id_buku" value="<?php echo $id_buku;?>">

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Judul buku" name="judul" required value="<?php echo $judul; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Kategori </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Kategori" name="kategori" required value="<?php echo $kategori; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Pengarang </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Pengarang" name="pengarang" required value="<?php echo $pengarang; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Penerbit </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Penerbit" name="penerbit" required value="<?php echo $penerbit; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Terbit</label>
    <div class="col-sm-10">
      <input type="date" name="tgl_terbit" required class="form-control" placeholder="Tanggal terbit" value="<?php echo $tgl_terbit; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Halaman</label>
    <div class="col-sm-10">
      <input type="text" name="jmlh_halaman" required class="form-control" placeholder="Jumlah Halaman" value="<?php echo $jmlh_halaman; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="<?php echo $button; ?>">Simpan</button>
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
