<footer class="page-footer" style="text-align:left;">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-3">
        <h4>Quick Links</h4>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Programs</a></li>
          <li><a href="#">Campus</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3">
        <h4>Our Campus</h4>
        <ul class="footer-links">
          <li><a href="#">Find our campus</a></li>
          <li><a href="#">Today at FCI</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3">
        <h4>Education</h4>
        <ul class="footer-links">
          <li><a href="#">Undergraduate Programs</a></li>
          <li><a href="#">Postgraduate Programs</a></li>
        </ul>

      </div>
      <div class="col-6 col-md-3">
        <h4>Account</h4>
        <ul class="footer-links">
          <li><a href="#">SMP UMS</a></li>
          <li><a href="#">SmartV3 UMS</a></li>

        </ul>
        <h4>Socials</h4>
        <ul class="footer-links">
          <li><a href="#">Facebook </a></li>
          <li><a href="#">Instagram </a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
      </div>
    </div>
    <p>More ways to reach us: email us at&nbsp;<a href="gmail.com">FCI Official Email</a>,&nbsp;call 05-10008000, or visit <a href="https://goo.gl/maps/PghhTcEvzu9qbK6x9">Universiti Malaysia Sabah</a></p>
    <hr>
    <div class="footer-legal">
      <div class="d-inline-block copyright">
        <p class="d-inline-block">Copyright FCI UMS © 2012. All rights reserved<br></p>
      </div>

    </div>
  </div>
  </div>
</footer>

<script src="<?=base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/script.js"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoic2V2ZXJhbHNuYWtlcyIsImEiOiJjbDFybTVxemswajM4M29xcTVtMzU2bWJ0In0.dIMqQWymkGi47GgQ9CZMUg';
  const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [116.1186, 6.0367], // starting position [lng, lat]
    zoom: 15 // starting zoom
  });
</script>
