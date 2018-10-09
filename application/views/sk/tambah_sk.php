<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/css/favicon.png" />
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">

        <h3>Tambah Data</h3>

        <div style="color:red">
        <?php echo validation_errors(); ?>
        <?php if(isset($error)){print $error;}?>
        </div>

        <?php echo form_open_multipart('sk/simpan');?>


              <div class="form-group">
                <label for="text">Nomor SK</label>
                <input type="text" name="nomor_sk" class="form-control" placeholder="Masukkan Nomor SK" value="<?= set_value('nomor_sk'); ?>">
              </div>

              <div class="form-group">
                <label for="text">Jenis SK</label>
                <input type="text" name="jenis_sk" class="form-control" placeholder="Masukkan Jenis SK" value="<?= set_value('jenis_sk'); ?>">
              </div>

              <div class="form-group">
                <label for="text">Nama SK</label>
                <input type="text" name="nama_sk" class="form-control" placeholder="Masukkan Nama SK" value="<?= set_value('nama_sk'); ?>">
              </div>

              <div class="form-group">
                <label for="text">Tanggal Terbit SK</label>
                <input type="date" name="tgl_terbit_sk" class="form-control" value="<?= set_value('tgl_terbit_sk'); ?>" >
              </div>

              <div class="form-group">
                <label for="text">Tanggal Input</label>
                <input type="date" name="tgl_input" class="form-control" value="<?= set_value('tgl_input'); ?>" >
              </div>

              <div class="form-group">
               <label for="text">Status</label>
                  <select class="form-control" name="status" value="<?= set_value('status'); ?>">
                    <option value="">--Pilihan--</option>
                    <option value=""></option>
                    <option value="Baru">Baru</option>
                    <option value="Diperbarui">Diperbarui</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="text">File SK</label>
                 <input type="file" name="file_url" class="form-control" id="file_url">
              </div>

              <button type="submit" class="btn btn-md btn-primary">Simpan</button>
              <a href="<?php echo base_url() ?>sk/index/" class="btn btn-md btn-primary">Batal</a>


            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>