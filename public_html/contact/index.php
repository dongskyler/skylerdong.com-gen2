<?php
include_once '../common/config.php';
define("MASTHEAD_SIZE", 'SM');
define("BG_IMG_MD", 'photography/SD__A6T0512_Edit_Web.jpg');
define("BG_IMG_LG", 'large/SD__A6T0512_Edit_Web_Large.jpg');
define("SITE_TITLE", 'Contact');
define("SITE_SUBTITLE", '<p>I&#39;m an aspiring&nbsp;<a href="https://app.skylerdong.com/">web developer</a> and&nbsp;an&nbsp;<a href="'.PATH.'/photography/">amateur photographer</a></p><p>Read <a href="'.PATH.'/blog/">my blogs here</a></p>');
define("FADE_IN", 'no');
define("OG_IMAGE", PATH.'/images/other/SD-IMG_4854-Edit-Web.jpg');
?>
<!doctype html>
<?php
include_once '../common/config.php';
include_once '../common/htmlTag.php';
?>
<head>
  <?php include '../common/head.php'; ?>
  <title>Contact - Skyler Dong</title>
</head>
<body>
  <?php
  include_once '../common/navbar.php';
  include_once '../common/header.php';
  ?>
  <!-- Main Content -->
  <div class="container maincontent">
    <div class="row">
      <div class="col-12 mx-auto mb-3 col-md-10">
        <div class="mb-3">
          <p>Thank you for your interest in contacting me.</p>
        </div>
        <div class="hanging-indent">
          <p><a href="mailto:skyler@skylerdong.com"><i class="far fa-envelope fa-icon hvr-buzz-out"></i></a>Email: <a href="mailto:dongskyler@gmail.com">dongskyler@gmail.com</a></p>
          <p><a href="mailto:skylerdong.studio@gmail.com"><i class="fas fa-camera fa-icon hvr-buzz-out"></i></a>Photography&nbsp;inquiries: <a href="mailto:skylerdong.studio@gmail.com">skylerdong.studio@gmail.com</a></p>
          <p><a href="https://www.linkedin.com/in/skylerdong/" target="_blank" rel=”noreferrer”><i class="fab fa-linkedin-in fa-icon hvr-buzz-out"></i></a>LinkedIn: <a href="https://www.linkedin.com/in/skylerdong/" target="_blank" rel=”noreferrer”>Tiannong&nbsp;"Skyler"&nbsp;Dong</a></p>
          <p><a href="https://github.com/dongskyler" target="_blank" rel=”noreferrer”><i class="fab fa-github fa-icon hvr-buzz-out"></i></a>GitHub: <a href="https://github.com/dongskyler" target="_blank" rel=”noreferrer”>Skyler&nbsp;Dong</a></p>
          <p><a href="https://www.instagram.com/skylerdong.studio/" target="_blank" rel=”noreferrer”><i class="fab fa-instagram fa-icon hvr-buzz-out"></i></a>Instagram: <a href="https://www.instagram.com/skylerdong.studio/" target="_blank" rel=”noreferrer”>@skylerdong.studio</a></p>
        </div>
        <div class="mb-3">
          <p>If you have any comments or suggestions about my website, please feel free to contact me.</p>
        </div>
      </div>
    </div>
  </div>
  <!--maincontent-->
  <?php include '../common/footer.php'; ?>
</body>
</html>
