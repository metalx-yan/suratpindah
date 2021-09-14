

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- Judul -->
            <h1>Dashboard</h1>
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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
                foreach ($isi_pengajuan as $key) {
                  ?>
              <h3> <?php echo $key->jumlah ?></h3>
              <?php
                }
                  ?>
                <p>Pengajuan</p>
              </div>
              <div class="icon">
                <i class="ion ion-document"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php 
                foreach ($isi_penduduks as $key) {
                  ?>
              <h3><?php echo $key->jumlah ?> </h3>
              <?php
                }
                  ?>
                <p>Total Penduduk</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
						
					<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php 
                foreach ($perempuan as $key) {
                  ?>
              <h3><?php echo $key->jumlah ?> </h3>
              <?php
                }
                  ?>
                <p>Perempuan</p>
              </div>
              <div class="icon">
                <i class="ion ion-female"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

					<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php 
                foreach ($laki as $key) {
                  ?>
              <h3><?php echo $key->jumlah ?> </h3>
              <?php
                }
                  ?>
                <p>Laki Laki</p>
              </div>
              <div class="icon">
                <i class="ion ion-male"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>






        </div>

				<div class="row">
				<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
              <?php 
                foreach ($pindah as $key) {
                  ?>
              <h3><?php echo $key->jumlah ?> </h3>
              <?php
                }
                  ?>
                <p>Penduduk Pindah</p>
              </div>
              <div class="icon">
                <i class="ion ion-people"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
					<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
              <?php 
                foreach ($masuk as $key) {
                  ?>
              <h3><?php echo $key->jumlah ?> </h3>
              <?php
                }
                  ?>
                <p>Penduduk Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-people"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
				</div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  