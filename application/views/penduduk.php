

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- Judul -->
            <h1>Penduduk</h1>
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
                <h3 class="card-title">Data Penduduk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <button type="button" class="btn btn-sm btn-primary float-left" data-toggle="modal" data-target="#add">Tambah Penduduk</button>
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
                    <th>Status Perkawinan</th>
                    <th>TTL</th>
                    <th>Pekerjaan</th>
                    <th>Nomor Telepon</th>
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
                    <td><?=$hasil->status_perkawinan?></td>
                    <td><?=$hasil->tempat_lahir?>, <?=$hasil->tanggal_lahir?></td>
                    <td><?=$hasil->pekerjaan?></td>
                    <td><?=$hasil->nomor_telepon?></td>
                    <td>
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#update<?php echo $hasil->id_penduduk ?>"><i class="nav-icon fas fa-edit"></i></button>
                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete<?php echo $hasil->id_penduduk ?>"><i class="fa fa-trash"></i></button>
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
              <form method="post" action="<?php echo site_url('Admin/proses_add_penduduk/') ?>" enctype="multipart/form-data">
           
              <div class="row">
              <div class="col col-sm-12">
                 <div class="form-group">
                  <label>NIK</label>
                  <input type="number" name="nik" required="true" class="form-control" placeholder="Nik" required="true">
                </div>
                  <div class="form-group">
                  <label>NO.KK</label>
                  <input type="number" name="kk" required="true" class="form-control" placeholder="NO. KK" required="true">
                </div>
                  <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" required="true" class="form-control" placeholder="Nama Lengkap" required="true">
                </div>
                 <div class="form-group">
                  <label>Jenis Kelamin</label>
                    <select id="inputState" name="jenis_kelamin" class="form-control" required="true">
                    <option  selected="" disabled="">Pilih..</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status Perkawinan</label>
                    <select id="inputState" name="status_perkawinan" class="form-control" required="true">
                    <option  selected="" disabled="">Pilih..</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" required="true" class="form-control" placeholder="Alamat" required="true">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" required="true" class="form-control" placeholder="Tempat Lahir" required="true">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" required="true" class="form-control" placeholder="Tanggal Lahir" required="true">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="pekerjaan" required="true" class="form-control" placeholder="Pekerjaan" required="true">
                </div>
                <div class="form-group">
                  <label>No.Telepon</label>
                  <input type="text" name="nohp" required="true" class="form-control" placeholder="No. Telepon" required="true">
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
    foreach ($isi as $key) {
      ?>
      <div class="modal fade" id="update<?php echo $key->id_penduduk ?>" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <div class="modal-body">
              <form method="post" action="<?php echo site_url('Admin/proses_update_user/'.$key->id_penduduk) ?>" enctype="multipart/form-data">
           
              <div class="row">
              <div class="col col-sm-12">
                 <div class="form-group">
                  <label>NIK</label>
                  <input type="number" name="nik" value="<?php echo $key->nik ?>"required="true" class="form-control" placeholder="Nik" required="true">
                </div>
                  <div class="form-group">
                  <label>NO.KK</label>
                  <input type="number" name="kk" value="<?php echo $key->kk ?>"required="true" class="form-control" placeholder="NO. KK" required="true">
                </div>
                  <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?php echo $key->nama_lengkap ?>" required="true" class="form-control" placeholder="Nama Lengkap" required="true">
                </div>
                 <div class="form-group">
                  <label>Jenis Kelamin</label>
                    <select id="inputState" name="jenis_kelamin" class="form-control" required="true">
                    <option value="<?php echo $key->jenis_kelamin ?>"><?php echo $key->jenis_kelamin ?></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status Perkawinan</label>
                    <select id="inputState" name="status_perkawinan" class="form-control" required="true">
                    <option value="<?php echo $key->status_perkawinan ?>"><?php echo $key->status_perkawinan ?></option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $key->alamat ?>" required="true" class="form-control" placeholder="Alamat" required="true">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" value="<?php echo $key->tempat_lahir ?>" required="true" class="form-control" placeholder="Tempat Lahir" required="true">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" value="<?php echo $key->tanggal_lahir ?>" required="true" class="form-control" placeholder="Tanggal Lahir" required="true">
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="pekerjaan" value="<?php echo $key->pekerjaan ?>" required="true" class="form-control" placeholder="Pekerjaan" required="true">
                </div>
                <div class="form-group">
                  <label>No.Telepon</label>
                  <input type="text" name="nohp"  value="<?php echo $key->nomor_telepon ?>"required="true" class="form-control" placeholder="No. Telepon" required="true">
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
foreach ($isi as $key) {
  ?>

<!-- Modal -->
<div class="modal fade" id="delete<?php echo $key->id_penduduk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Modal body-->
             <form method="post" action="<?php echo site_url('Admin/proses_hapus_penduduk/'.$key->id_penduduk) ?>" enctype="multipart/form-data">
           
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



  