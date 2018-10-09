<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/css/favicon.png" />
</head>
<body>

    <div class="container" style="margin-top: 80px">

         <h3>Data Surat Keputusan</h3>

        <p align="right">
             <a href="<?php echo base_url() ?>sk/tambah_petugas" class="btn btn-md btn-primary">Tambah</a>
             <a href="<?php echo base_url() ?>page/index" class="btn btn-md btn-primary">Kembali</a>
        </p>
        
        <?php echo $this->session->flashdata('notif') ?>
        <hr>
        <!-- table -->

        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nomor Sk</th>
                    <th>Jenis Sk</th>
                    <th>Nama Sk</th>
                    <th>Tanggal Terbit</th>
                    <th>Status</th>
                    <th>File Sk</th>
                   
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_sk as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nomor_sk ?></td>
                    <td><?php echo $hasil->jenis_sk ?></td>
                    <td><?php echo $hasil->nama_sk ?></td>
                    <td><?php echo $hasil->tgl_terbit_sk ?></td>
                    <td><?php echo $hasil->status ?></td>

                    <td><a href="<?php echo base_url().'/assets/uploads/'.$hasil->file_url;?>" target="_blank"><?php echo $hasil->file_url ?></a></td>
                   
                  </tr>

                <?php } ?>

                </tbody>
              </table>
        </div>

    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>

</body>
</html>