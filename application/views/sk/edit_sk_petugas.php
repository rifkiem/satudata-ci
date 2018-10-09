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

          <h3>Edit Data</h3>

            <?php echo form_open('sk/update_petugas') ?>

              <div class="form-group">
                <label for="text">Nomor SK</label>
                <input type="hidden" value="<?php echo $data_sk->id_sk ?>" name="id_sk">

                <input type="text" name="nomor_sk" value="<?php echo $data_sk->nomor_sk ?>" class="form-control" placeholder="Masukkan Nomor SK">
              </div>

              <div class="form-group">
                <label for="text">Jenis SK</label>
                <input type="text" name="jenis_sk" value="<?php echo $data_sk->jenis_sk ?>" class="form-control" placeholder="Masukkan Jenis SK">
              </div>

              <div class="form-group">
                <label for="text">Nama SK</label>
                <input type="text" name="nama_sk" value="<?php echo $data_sk->nama_sk ?>" class="form-control" placeholder="Masukkan Nama SK">
              </div>

              <div class="form-group">
                <label for="text">Tanggal Terbit</label>
                <input type="date" name="tgl_terbit_sk" value="<?php echo $data_sk->tgl_terbit_sk ?>" class="form-control" >
              </div>

               <div class="form-group">
               <label for="text">Status</label>
                  <select class="form-control" name="status" value="<?php echo $data_sk->status ?>">
                    <option value="<?php echo $data_sk->status ?>"><?php echo $data_sk->status ?></option>
                    <option value=""></option>
                    <option value="Baru">Baru</option>
                    <option value="Diperbarui">Diperbarui</option>
                  </select>
              </div>

              <button type="submit" class="btn btn-md btn-primary">Update</button>
              <a href="<?php echo base_url() ?>sk/index_petugas/" class="btn btn-md btn-primary">Batal</a>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>