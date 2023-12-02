<?php 
include 'inc/connection.php';
?>

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Check Certificate</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Check Certificate</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h3 class="column-title">Input your certificate number here</h3>   
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form" name="pencarian" id="pencarian">
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control form-control-search" name="search" id="search" placeholder="Certificate Number" type="text" required>
              </div>
            </div>
          </div>
          <div class="text-center"><br>
            <input type="submit" class="btn btn-primary solid blank" name="submit" id="submit" value="Search">
          </div> 
        </form>
      </div>

      <div class="col-md-12">
        <div class="table-responsive">
          <?php
            if ((isset($_POST['submit'])) AND ($_POST['search'] <> "")) {
              $search = $_POST['search'];
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_client WHERE certificate_code LIKE '%$search%'") or die(mysqli_error());
              $jumlah = mysqli_num_rows($sql);        
          ?>
            <table class="table">
              <thead style=" background-color: #031631; color: white;"> 
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Certificate Code</th>
                  <th scope="col">Training Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Accreditation Name</th>
                  <th scope="col">Participant Training</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if ($jumlah >= 1) {
                    echo '<h3 class="column-title-small">Data Found</h3>';
                    $nomer=1;
                    while ($hasil = @mysqli_fetch_array ($sql)) 
                    {
                ?>
                <tr>
                  <td scope="row"><?php echo "$nomer"; ?></td>
                  <td><?php echo $hasil['certificate_code'] ;?></td>
                  <td><?php echo $hasil['training_name'] ;?></td>
                  <td><?php echo $hasil['date'] ;?></td>
                  <td><?php echo $hasil['acc_name'] ;?></td>
                  <td><a href="client/id=<?php echo $hasil['id'] ;?>.php" target="_blank">See Participant</a></td>
                </tr>
              </tbody>
            <?php
                   $nomer++;
                   };
            }
            else {
              echo '<h3 class="column-title-small">Data Not Found!</h3>';
            }
            ?>
            </table>
            <?php
            }
            ?>
        </div><!-- Col end -->
      </div>
    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->