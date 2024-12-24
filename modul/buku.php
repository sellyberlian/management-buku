
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Buku</h1>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Buku</h3>
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
      <!-- Form Filter -->
      <form method="GET" action="">
        <div class="row mb-3">
          <!-- Filter teks -->
          <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Cari Judul, Pengarang, atau Penerbit..." 
                   value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
          </div>
          <!-- Filter kategori -->
          <div class="col-md-3">
            <select name="kategori" class="form-control">
              <option value="">-- Pilih Kategori --</option>
              <?php
              $categories = $db->query("SELECT DISTINCT kategori FROM buku")->fetchAll();
              foreach ($categories as $category) {
                $selected = isset($_GET['kategori']) && $_GET['kategori'] == $category['kategori'] ? 'selected' : '';
                echo "<option value='{$category['kategori']}' {$selected}>{$category['kategori']}</option>";
              }
              ?>
            </select>
          </div>
          <!-- Filter tanggal penerbitan -->
          <div class="col-md-2">
            <input type="date" name="tgl_terbit" class="form-control"
                   value="<?php echo isset($_GET['tgl_terbit']) ? $_GET['tgl_terbit'] : ''; ?>">
          </div>
          <div class="col-md-3 text-right">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Cari</button>
            
            <a class="btn btn-info" href="<?php echo baseurl("?p=buku.form") ?>" role="button">
              <i class="fa fa-plus"></i> Tambah Buku
            </a>
          </div>
        </div>
      </form>

      <?php if (!empty($_SESSION["notif"])) { ?>
      <div class="alert alert-info mb-2" role="alert">
        <?php echo $_SESSION["notif"]; unset($_SESSION["notif"]); ?>
      </div>
      <?php } ?>

      <!-- Tabel Data Buku -->
      <table class="table table-bordered table-striped">
        <thead>
          <tr class="thead-dark text-center">
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Kategori</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tanggal Terbit</th>
            <th scope="col">Jumlah Halaman</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php
          // Ambil parameter filter
          $search = isset($_GET['search']) ? "%{$_GET['search']}%" : '%';
          $kategori = isset($_GET['kategori']) && !empty($_GET['kategori']) ? $_GET['kategori'] : '%';
          $tgl_terbit = isset($_GET['tgl_terbit']) && !empty($_GET['tgl_terbit']) ? $_GET['tgl_terbit'] : null;

          // Query untuk filter data
          $query = "SELECT * FROM buku WHERE 
                    (judul LIKE ? OR pengarang LIKE ? OR penerbit LIKE ?) 
                    AND kategori LIKE ?";
          $params = [$search, $search, $search, $kategori];

          if ($tgl_terbit) {
              $query .= " AND tgl_terbit = ?";
              $params[] = $tgl_terbit;
          }

          $query .= " ORDER BY id_buku DESC";


          $q = $db->prepare($query);
          $q->execute($params);

          $no = 0;
          while ($r = $q->fetch()) { $no++;
          ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $r["judul"]; ?></td>
            <td><?php echo $r["kategori"]; ?></td>
            <td><?php echo $r["pengarang"]; ?></td>
            <td><?php echo $r["penerbit"]; ?></td>
            <td><?php echo $r["tgl_terbit"]; ?></td>
            <td><?php echo $r["jmlh_halaman"]; ?></td>
            <td>
              <a class="btn btn-danger float-right btn-sm" 
                 href="<?php echo baseurl("?p=buku.action&action=hapus&id=" . $r["id_buku"]); ?>" 
                 role="button" 
                 onclick="return confirm('Are you sure want to delete this?');">Hapus</a>
              <a class="btn btn-success float-right btn-sm mr-2" 
                 href="<?php echo baseurl("?p=buku.form&id=" . $r["id_buku"]); ?>" 
                 role="button">Edit</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <i>Last update: <?php echo date("d-m-Y H:i:s"); ?></i>
    </div>
  </div>
</section>
