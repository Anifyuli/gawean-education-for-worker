<?php
include 'header.php';
include '../functions.php';

if(isset($_POST['submit'])){
   $kategori = $_POST['kategori'];

   query("INSERT INTO kategori (kategori) VALUES ('$kategori')");
}

$kategori = query_ambil("SELECT * FROM kategori");

$materi = query_ambil("SELECT count(*) as qty, kategori_id FROM materi group by kategori_id");




?>


          <div class="section-header">
            <h1>Kategori</h1>
          </div>

          <div class="section-body">

              <div class="row">

                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <!-- <h4>Simple Table</h4> -->
                        <!-- <a class="btn btn-primary" href="kategori_add.php" type="button" name="button">Tambah Kategori</a> -->

                        <form action="" method="post">

                            <div class="form-row">
                              <div class="form-group col-auto">
                                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Tambah Kategori Baru">
                              </div>

                              <div class="col">
                              <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                              </div>
                            </div>

                        </form>


                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-md">
                            <tr>
                              <th style="width:3px;">No</th>
                              <th>Kategori</th>
                              <th>Materi</th>
                              <th>Action</th>
                            </tr>
                            <?php
                            $i = 1;
                            foreach($kategori as $row){ ?>
                            <tr>
                              <td><?= $i; ?></td>
                              <td>
                                  <?= $row['kategori'] ;?>
                                  <div class="text text-small text-muted">
                                    <a class="edit" href="kategori_edit.php?id=3" >Edit</a> | <a href="delete.php?id=<?= $row['id'] ;?>&page=kategori">Delete</a>
                                  </div>
                              </td>
                              <td>
                                <?php
                                  foreach($materi as $data){
                                      if($data['kategori_id'] == $row['id']){
                                        echo $data['qty'];
                                      }
                                  }

                                  ?>
                             </td>
                              <td><a href="#" class="btn btn-success btn-sm">Show</a></td>
                            </tr>

                          <?php
                            $i++;
                         } ?>
                          </table>
                        </div>
                      </div>
                      <div class="card-footer text-right">
                        <nav class="d-inline-block">
                          <ul class="pagination mb-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                              <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                    </div>


              </div>
              <!-- akhir row -->
          </div>





<?php   include 'footer.php'; ?>
