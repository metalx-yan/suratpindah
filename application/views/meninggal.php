

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- Judul -->
            <h1>Meninggal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
     <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         <div class="col-12">

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Meninggal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <button type="button" class="btn btn-sm btn-primary float-left" data-toggle="modal" data-target="#add">Tambah Data</button>
              <br>
              <br>
              <?= $this->session->set_flashdata('msg');?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Meninggal</th>
                    <th>Penyebab</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php 
                    foreach ($isi as $hasil) {
                    ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?=$hasil->nik?></td>
                    <td><?=$hasil->nama_lengkap?></td>
                    <td><?=$hasil->jenis_kelamin?></td>
                    <td><?=$hasil->tanggal_lahir?></td>
                    <td><?=$hasil->tanggal_meninggal?></td>
                    <td><?=$hasil->penyebab?></td>
                    <td>
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#update<?php echo $hasil->id_meninggal ?>"><i class="nav-icon fas fa-edit"></i></button>
                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete<?php echo $hasil->id_meninggal ?>"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                  <?php $no++; ?>
                  <?php } ?>
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


         </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<div class="modal fade" id="add" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo site_url('Admin/proses_add_meninggal/') ?>" enctype="multipart/form-data">
           
              <div class="row">
              <div class="col col-sm-12">
                
                  
                <div class="form-group">
                  <label>Nama Penduduk</label>
                  
                    <select id="inputState" name="nik" class="form-control" required="true">
                    <option  selected="" disabled="">Pilih..</option>
                    <?php
                  foreach ($getPenduduk as $key) {
                    ?>
                    <option value="<?php echo $key->nik ?>"><?php echo $key->nama_lengkap ?></option>
                    <?php
                    }
                    ?>
                  </select>
                  
                </div>

                <div class="form-group">
                  <label>Tanggal Meninggal</label>
                  <input type="date" name="tanggal_meninggal" required="true" class="form-control" placeholder="Tanggal Lahir" required="true">
                </div>

                <div class="form-group">
                  <label>Penyebab</label>
                  <input type="text" name="penyebab"  required="true" class="form-control" placeholder="Penyebab" required="true">
                </div>
             
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
              </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </div>




  