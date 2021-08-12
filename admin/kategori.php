<?php   include 'header.php'; ?>


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

                        <form>

                            <div class="form-row">
                              <div class="form-group col-auto">
                                <input type="text" class="form-control" placeholder="Tambah Kategori Baru">
                              </div>


                              <div class="col">
                              <button class="btn btn-primary" type="button" name="button">Simpan</button>
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
                            <tr>
                              <td>1</td>
                              <td>
                                  Facebook
                                  <div class="text text-small text-muted">
                                    <a href="edit.php?id=3">Edit</a> | <a href="../page.php?id=3">Show</a> | <a href="delete.php?id=3">Delete</a>
                                  </div>
                              </td>
                              <td>4</td>
                              <td><a href="#" class="btn btn-success btn-sm">Show</a></td>
                            </tr>


                            <tr>
                              <td>2</td>
                              <td>
                                Google Ads
                                <div class="text text-small text-muted">
                                  Edit | Show | Delete
                                </div>
                              </td>
                              <td>7</td>
                              <td><a href="#" class="btn btn-success btn-sm">Show</a></td>
                            </tr>
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
