    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Anggota</h1>
          </div>
          <div class="col-sm-6">
          <a class="btn btn-info float-right" href="<?php echo baseurl("?p=anggota.form")?>" role="button"><i class="fa fa-plus"></i> Tambah Anggota</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Anggota</h3>

          

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
        <?php if(!empty($_SESSION["notif"])){?>
  <div class="alert alert-info mb-2" role="alert">
  <?php echo $_SESSION["notif"]; unset($_SESSION["notif"]);?>
  </div>
  <?php } ?>
        <table class="table table-bordered table-striped">
  <thead>
    <tr class="thead-dark text-center">
      <th scope="col">No</th>
      <th scope="col">Id_Anggota</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $q=$db->prepare("select * from anggota order by id_anggota desc");
  $q->execute();
  $no=0;
  while($r=$q->fetch()){ $no++;
  ?>
    <tr>
      <th scope="row"><?php echo $no;?></th>
      <td><?php echo $r["id_anggota"];?></td>
      <td><?php echo $r["nama"];?></td>
      <td><?php echo $r["tmp_lahir"];?></td>
      <td><?php echo $r["tgl_lahir"];?></td>
      <td><?php echo $r["alamat"];?></td>

      <td class="text-center">
    <div class="btn-group">
        <a class="btn btn-danger btn-sm" href="<?php echo baseurl("?p=anggota.action&action=hapus&id=");?><?php echo $r["id_anggota"]; ?>" role="button" onclick="return confirm('Are you sure want to delete this?');">
            <i class="fas fa-trash-alt"></i>
        </a>
        <a class="btn btn-success btn-sm" href="<?php echo baseurl("?p=anggota.form&id=");?><?php echo $r["id_anggota"]; ?>" role="button">
            <i class="fas fa-pen"></i>
        </a>
    </div>
</td>
    </tr>

 <?php } ?>

  </tbody>
</table>
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
