<?php 
  include 'header.php';
  include 'navbar.php';

  include '../../setting.php';
  $data = mysqli_query($koneksi,"select * from login join user on user.id_user = login.id_login where username='$_SESSION[username]'");
  while($d = mysqli_fetch_array($data)){
?>

    <div class="page-content-wrapper py-3">
      <div class="container">
        <!-- Cart Wrapper -->
        <div class="cart-wrapper-area">
          <div class="cart-table card mb-3">
            <div class="table-responsive card-body">
              <table class="table mb-0 text-center">
                <thead>
                  <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Link</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><img src="img/bg-img/p1.jpg" alt=""></th>
                    <td>
                      <h6 class="mb-1">Guru 1</h6><span>attr...</span>
                    </td>
                    <td>
                      <div class="quantity">
                        <a class="btn m-1 btn-round btn-outline-info" href="https://docs.google.com/forms/d/e/1FAIpQLSf2QIo3MWAamcVFurQkRc_E1oLIcsoA5PTdu1Oyqb14l4cpXA/viewform?usp=pp_url&entry.1364859546=Guru 1&entry.1223500353=<?php echo $d['nama']; } ?>" target="_blank">Link</a>
                      </div>
                    </td>
                    <td><a class="remove-product" href="#"><i class="bi bi-x-lg"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="img/bg-img/p3.jpg" alt=""></th>
                    <td>
                      <h6 class="mb-1">Guru 2</h6><span>attr...</span>
                    </td>
                    <td>
                      <div class="quantity">
                        <a class="btn m-1 btn-round btn-outline-info" href="#">Link</a>
                      </div>
                    </td>
                    <td><a class="remove-product" href="#"><i class="bi bi-x-lg"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="img/bg-img/p5.jpg" alt=""></th>
                    <td>
                      <h6 class="mb-1">Guru 3</h6><span>attr...</span>
                    </td>
                    <td>
                      <div class="quantity">
                        <a class="btn m-1 btn-round btn-outline-info" href="#">Link</a>
                      </div>
                    </td>
                    <td><a class="remove-product" href="#"><i class="bi bi-x-lg"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- <div class="card-body border-top">
              <div class="apply-coupon">
                <h6 class="mb-0">Have a coupon?</h6>
                <p class="mb-2">Enter your coupon code here &amp; get awesome discounts!</p>
                <div class="coupon-form">
                  <form action="#">
                    <div class="form-group">
                      <div class="input-group">
                        <input class="form-control input-group-text text-start" type="text" placeholder="OFFER30">
                        <button class="btn btn-primary" type="submit">Apply</button>
                      </div>
                    </div>
                    <a class="btn btn-danger w-100 mt-4" href="page-checkout.html">$38.89 &amp; Pay</a>
                  </form>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>

<?php include 'footer.php'; ?>