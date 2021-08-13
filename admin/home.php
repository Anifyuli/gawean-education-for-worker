<?php

include 'header.php';
include '../functions.php';

$materi = query_ambil("SELECT materi.*, kategori.kategori FROM materi join kategori on kategori_id = kategori.id");

?>


          <div class="section-header">
            <h1>Halaman Post</h1>
          </div>

          <div class="section-body">

              <div class="row">

                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <!-- <h4>Simple Table</h4> -->
                        <a class="btn btn-primary" href="create.php" type="button" name="button">Tambah Materi Baru</a>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-md">
                            <tr>
                              <th>#</th>
                              <th>Judul</th>
                              <th>Created At</th>
                              <th>Kategori</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>

                            <?php
                              foreach($materi as $row){

                             ?>
                            <tr>
                              <td>1</td>
                              <td>
                                  <?= $row['judul']; ?>
                                  <div class="text text-small text-muted">
                                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | <a href="../page.php?id=3">Show</a> | <a href="delete.php?id=<?= $row['id']; ?>">Delete</a> | Created 2017-01-09
                                  </div>


                              </td>
                              <td><?= $row['tanggal_post']; ?></td>
                              <td><?= $row['kategori']; ?></td>
                              <td><div class="badge badge-secondary"><?= $row['status']; ?></div></td>
                              <td><a href="#" class="btn btn-success btn-sm">Show</a></td>
                            </tr>

                            <?php } ?>

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
