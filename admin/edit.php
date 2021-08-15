<?php   include 'header.php';

include '../functions.php';

$kategori = query_ambil("SELECT * FROM kategori");

$id = $_GET['id'];
$data = query_ambil("SELECT * FROM materi where id = $id");
$materi = $data[0];

?>


          <div class="section-header">
            <h1>Halaman Post</h1>
          </div>

          <div class="section-body">

              <div class="row">
                <div class="col-12">

                  <!-- form -->

                  <div class="card">
                    <div class="card-header">
                      <h4>Edit Materi</h4>
                    </div>
                    <div class="card-body">
                      <form class="" action="update.php" method="post">

                      <input type="hidden" name="id" value="<?= $id; ?>">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?=$materi['judul'];?>">
                      </div>

                      <div class="form-group">

                        <textarea id="summernote" name="content"><?=$materi['content'];?></textarea>

                      </div>


                      <div class="form-group">
                        <label>Kategory</label>
                        <select class="form-control" name="kategori">
                          <?php foreach($kategori as $row) { ?>

                          <option value="<?= $row['id'] ?>"><?= $row['kategori'] ?></option>

                          <?php } ?>

                        </optgroup>
                      </select>
                      </div>

                      <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="submit">Simpan Perubahan</button>
                      </div>
                      </form>
                    </div>
                  </div>
                  <!-- akhir form -->


                </div>
                <!-- akhir col -->
              </div>
              <!-- akhir row -->
          </div>


<?php   include 'footer.php'; ?>
