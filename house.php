<?php
if (!isset($_SESSION['auth'])) {
  header('Location: index.php');
}
include('includes/header.php');
?>
  <!-- sale section -->

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          House For Sale
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the
        </p>
      </div>
      <div class="sale_container">
        <div class="box">
          <div class="img-box">
            <img src="images/s-1.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              apertments house
            </h6>
            <p>
              There are many variations of passages of Lorem Ipsum available, but
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-2.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              apertments house
            </h6>
            <p>
              There are many variations of passages of Lorem Ipsum available, but
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-3.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              apertments house
            </h6>
            <p>
              There are many variations of passages of Lorem Ipsum available, but
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-4.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              apertments house
            </h6>
            <p>
              There are many variations of passages of Lorem Ipsum available, but
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-5.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              apertments house
            </h6>
            <p>
              There are many variations of passages of Lorem Ipsum available, but
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-6.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              apertments house
            </h6>
            <p>
              There are many variations of passages of Lorem Ipsum available, but
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Find More
        </a>
      </div>
    </div>
  </section>

  <!-- end sale section -->



  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Apartment
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/phone.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/mail.png" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="">
                  There are many
                </a>
              </li>
              <li>
                <a href="">
                  variations of
                </a>
              </li>
              <li>
                <a href="">
                  passages of
                </a>
              </li>
              <li>
                <a href="">
                  Lorem Ipsum
                </a>
              </li>
              <li>
                <a href="">
                  available, but
                </a>
              </li>
              <li>
                <a href="">
                  the i
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include('includes/footer.php');
?>