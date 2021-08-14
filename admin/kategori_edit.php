<?php   include 'header.php';

include '../functions.php';

$id = $_GET['id'];
$data = query_ambil("SELECT * FROM kategori where id = $id");
$kategori = $data[0];

if(isset($_POST['submit'])){

  $post_kategori = $_POST['kategori'];

  query("UPDATE kategori set kategori = '".$post_kategori."' where id = $id");

  header('Location:kategori.php');

}

?>


          <div class="section-header">
            <h1>Kategori</h1>
          </div>

          <div class="section-body">

              <div class="row">
                <div class="col-12">

                  <!-- form -->

                  <div class="card">

                    <div class="card-body">
                      <form class="" action="" method="post">

                      <input type="hidden" name="id" value="<?= $id; ?>">

                      <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="kategori" value="<?=$kategori['kategori'];?>">
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
