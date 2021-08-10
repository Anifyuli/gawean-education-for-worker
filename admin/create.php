<?php   include 'header.php'; ?>


          <div class="section-header">
            <h1>Halaman Post</h1>
          </div>

          <div class="section-body">

              <div class="row">
                <div class="col-12">

                  <!-- form -->

                  <div class="card">
                    <div class="card-header">
                      <h4>Tambah Materi Baru</h4>
                    </div>
                    <div class="card-body">

                    <form class="" action="add.php" method="post">

                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control">
                      </div>

                      <div class="form-group">

                        <textarea id="summernote" name="content"></textarea>

                      </div>


                      <div class="form-group">
                        <label>Kategory</label>
                        <select class="form-control" name="kategori">
                          <option value="">Facebook Ads</option>
                          <option value="">Google Ads</option>
                          <option value="">Whatsapp Marketing</option>

                        </optgroup>
                      </select>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-primary" type="submit" name="submit">Publish</button>
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
