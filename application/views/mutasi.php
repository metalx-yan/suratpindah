

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- Judul -->
            <h1>Mutasi Data Penduduk</h1>
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
                <h3 class="card-title">Permintaan Mutasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!--    <button type="button" class="btn btn-sm btn-primary float-left" data-toggle="modal" data-target="#add">Tambah</button>
              <br>
              <br> -->
              <?= $this->session->set_flashdata('msg');?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                   <!--  <th>Jenis Kelamin</th> -->
                    <th>Tanggal mutasi</th>
                    <th>Alamat mutasi</th>
                    <th>Keterangan</th>
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
                   <!--  <td><?=$hasil->jenis_kelamin?></td> -->
                    <td><?=$hasil->tanggal_mutasi?></td>
                    <td><?=$hasil->alamat_mutasi?></td>
                    <td><?=$hasil->keterangan?></td>
                    <td>
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#update<?php echo $hasil->id_mutasi ?>"><i class="nav-icon fas fa-edit"></i></button>
                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete<?php echo $hasil->id_mutasi ?>"><i class="fa fa-trash"></i></button>
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
         <div class="col-6">

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Penduduk Masuk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <button type="button" class="btn btn-sm btn-primary float-left" data-toggle="modal" data-target="#add1">Tambah</button>
              <br>
              <br>
              <?= $this->session->set_flashdata('msg');?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <!-- <th>NIK</th> -->
                    <th>Nama Lengkap</th>
                   <!--  <th>Jenis Kelamin</th> -->
                    <th>Tanggal Mutasi</th>
                    <th>Asal Mutasi</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php 
                    foreach ($mutasiMasuk as $hasil) {
                    ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <!-- <td><?=$hasil->nik?></td> -->
                    <td><?=$hasil->nama_lengkap?></td>
                   <!--  <td><?=$hasil->jenis_kelamin?></td> -->
                    <td><?=$hasil->tanggal_mutasi?></td>
                    <td><?=$hasil->alamat_mutasi?></td>
                    <td><?=$hasil->keterangan?></td>
                    <td>
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#update<?php echo $hasil->id_mutasi ?>"><i class="nav-icon fas fa-edit"></i></button>
                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete<?php echo $hasil->id_mutasi ?>"><i class="fa fa-trash"></i></button>
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
         <div class="col-6">

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Penduduk Pindah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <button type="button" class="btn btn-sm btn-primary float-left" data-toggle="modal" data-target="#add2">Tambah</button>
              <br>
              <br>
              <?= $this->session->set_flashdata('msg');?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <!-- <th>NIK</th> -->
                    <th>Nama Lengkap</th>
                    <!-- <th>Jenis Kelamin</th> -->
                    <th>Tanggal Mutasi</th>
                    <th>Tujuan Mutasi</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php 
                    foreach ($mutasiKeluar as $hasil) {
                    ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <!-- <td><?=$hasil->nik?></td> -->
                    <td><?=$hasil->nama_lengkap?></td>
                   <!--  <td><?=$hasil->jenis_kelamin?></td> -->
                    <td><?=$hasil->tanggal_mutasi?></td>
                    <td><?=$hasil->alamat_mutasi?></td>
                    <td><?=$hasil->keterangan?></td>
                    <td>
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#update<?php echo $hasil->id_mutasi ?>"><i class="nav-icon fas fa-edit"></i></button>
                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete<?php echo $hasil->id_mutasi ?>"><i class="fa fa-trash"></i></button>
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

  <div class="modal fade" id="add1" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Penduduk Masuk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo site_url('Admin/proses_add_mutasi_masuk/') ?>" enctype="multipart/form-data">
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
                  <label>Tanggal Mutasi</label>
                  <input type="date" name="tanggal_mutasi" required="true" class="form-control" placeholder="Tanggal Mutasi" required="true">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat_mutasi"  required="true" class="form-control" placeholder="Alamat Mutasi" required="true">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan"  required="true" class="form-control" placeholder="Keterangan" required="true">
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
    </div>



    <div class="modal fade" id="add2" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Penduduk Pindah</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo site_url('Admin/proses_add_mutasi_keluar/') ?>" enctype="multipart/form-data">
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
                  <label>Tanggal Mutasi</label>
                  <input type="date" name="tanggal_mutasi" required="true" class="form-control" placeholder="Tanggal Mutasi" required="true">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat_mutasi"  required="true" class="form-control" placeholder="Alamat Mutasi" required="true">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan"  required="true" class="form-control" placeholder="Keterangan" required="true">
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
    </div>



    <?php 
    foreach ($del as $key) {
      ?>
      <div class="modal fade" id="update<?php echo $key->id_mutasi ?>" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <div class="modal-body">
					 <form method="post" action="<?php echo site_url('Admin/proses_update_mutasi/'.$key->id_mutasi.'/'.$key->status_mutasi) ?>" enctype="multipart/form-data">
              <div class="row">
              <div class="col col-sm-12">
              <div class="form-group">
                  <label>Nama Penduduk</label>
                  
                    <select id="inputState" name="nik" class="form-control" required="true">
                    <option  selected="" disabled="">Pilih..</option>
                    <?php
                  foreach ($getPenduduk as $keyii) {
                    ?>
                    <option value="<?php echo $keyii->nik ?>" <?php echo $key->nik === $keyii->nik ? 'selected': ''; ?>><?php echo $keyii->nama_lengkap ?></option>
                    <?php
                    }
                    ?>
                  </select>
                  
                </div>

                <div class="form-group">
                  <label>Tanggal Mutasi</label>
                  <input type="date" name="tanggal_mutasi" required="true" value="<?php echo $key->tanggal_mutasi ?>" class="form-control" placeholder="Tanggal Mutasi" required="true">
                </div>
								
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat_mutasi" value="<?php echo $key->alamat_mutasi ?>" required="true" class="form-control" placeholder="Alamat Mutasi" required="true">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" value="<?php echo $key->keterangan ?>" required="true" class="form-control" placeholder="Keterangan" required="true">
                </div>
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

      <?php
    }
    ?>


    
    <?php
foreach ($del as $key) {
  ?>

<!-- Modal -->
<div class="modal fade" id="delete<?php echo $key->id_mutasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Modal body-->
             <form method="post" action="<?php echo site_url('Admin/proses_hapus_mutasi/'.$key->id_mutasi) ?>" enctype="multipart/form-data">
           
            <div class="modal-body">
                <center><h5>Apakah anda yakin untuk menghapus data ini ?</h5></center>
            </div>
            <!--Modal footer-->
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
               <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>
    </div>
  </div>
</div>
<?php } ?>



  