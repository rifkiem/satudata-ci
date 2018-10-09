<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/css/favicon.png" />


    <!-- Fungsi untuk membatasi karakter yang diinputkan -->
    <script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
            };
        // else return false
        return false;
    }
    </script>
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">

        <h3>Tambah Data</h3>

        <div style="color:red">
        <?php echo validation_errors(); ?>
        <?php if(isset($error)){print $error;}?>
        </div>

        <?php echo form_open_multipart('notel/simpan_petugas');?>


              <div class="form-group">
               <label for="text">Direktorat</label>
                  <select class="form-control" name="direktorat" value="<?= set_value('direktorat'); ?>">
                    <option value="">--Pilihan--</option>
                    <option value=""></option>
                    <option value="AMDK">AMDK</option>
                    <option value="BAMS">BAMS</option>
                    <option value="Corporate Hallo">Corporate Hallo</option>
                    <option value="GAS">GAS</option>
                    <option value="PETRA">PETRA</option>
                    <option value="SPBU">SPBU</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="text">Nama Pemilik</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Pemilik" value="<?= set_value('nama'); ?>">
              </div>

              <div class="form-group">
                <label for="text">Nomor Telepon</label>
                <input type="text" name="no_telepon" class="form-control" placeholder="Masukkan Nomor Telepon" value="<?= set_value('no_telepon'); ?>" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)">
              </div>

              <div class="form-group">
                <label for="text">Nomor Handphone</label>
                <input type="text" name="no_handphone" class="form-control" placeholder="Masukkan Nomor Handphone" value="<?= set_value('no_handphone'); ?>" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)">
              </div>

              <button type="submit" class="btn btn-md btn-primary">Simpan</button>
              <a href="<?php echo base_url() ?>notel/index_petugas/" class="btn btn-md btn-primary">Batal</a>


            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>