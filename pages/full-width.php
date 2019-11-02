<!DOCTYPE html>

<html lang="">

<head>
<title>PERPUSTAKAAN PANCA BHAKTI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

   
    
    <script src="./library/aframe.min.js"></script>
	<script src="./library/aframe-ar.js"></script>
</head>
<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 

   <article id="pageintro1" class="hoc clear">
    <div class="hoc clear"> 
    
      <h2 class="heading">PERPUSTAKAAN PANCA BHAKTI</h2>
      
      
      </article>
   
  </div>
  </header>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.php">LAYANAN INFORMASI PERPUSTAKAAN</a></h1>
    </div>
    
    <!-- ################################################################################################ -->
  </header>
</div>

<!-- Top Background Image Wrapper -->
<div class="bgded"> 
  <!-- ################################################################################################ -->
  <div class="row2">
    <nav id="mainav" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="../index.php">Home</a></li>
        <li class="active"><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="#">Gallery</a></li>
            <li class="#"><a href="full-width.php">Full Width</a></li>
            <li><a href="#">Sidebar Left</a></li>
            <li><a href="#">Sidebar Right</a></li>
            <li><a href="#">Basic Grid</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Long Link Text</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  
</div>
<!-- End Top Background Image Wrapper -->


    <!-- main body -->
    
	
	<div>
    <article id="pageintro2"> 
      <!-- ################################################################################################ -->
    
    <a-scene embedded vr-mode-ui="enabled: false" arjs="detectionMode: mono_and_matrix; matrixCodeType: 4x4; debugUIEnabled:false;">
        <a-assets>
		
			<video id="profil" autoplay loop="true" src="./assets/video/profil.mp4" webkit-playsinline/>
            <image id="gedungperpustakaan" autoplay loop="true" src="./assets/perpus.jpeg" webkit-playsinline/>
            <image id="layanansirkulasi" autoplay loop="true" src="./assets/Sirkulasi.jpeg" webkit-playsinline/>
            <image id="layananreferensi" autoplay loop="true" src="./assets/Referensi.jpeg" webkit-playsinline/>
            <image id="layananbimbinganbelajar" autoplay loop="true" src="./assets/BimbinganBelajar.jpeg" webkit-playsinline/>
            <image id="OPAC" autoplay loop="true" src="./assets/OPAC.jpeg" webkit-playsinline/>
			<image id="poster" autoplay loop="true" src="./assets/poster.png" webkit-playsinline/>
            
     
        </a-assets>
        <a-camera static/>
        <a-marker type="barcode" value="0">
            <a-entity position="0 0 -2.65" rotation="-90 0 0">
                <a-plane width="8" height="1" position='0 -2.75 -0' rotation="0 0 0" color="#f4992e"></a-plane>
                <a-text value="Profil UPT Perpustakaan" color="black" position="0 -2.5 0.4" align="center" width="8"></a-text>
                <a-video src="#profil" width="8" height="4.5" position="0 0 0"></a-video>
            </a-entity>
        </a-marker>

        <a-marker type="barcode" value="1">
            <a-entity position="-3.4 0 -2.65" rotation="-90 0 0">
                <a-plane width="8" height="1" position='0 -2.75 -0' rotation="0 0 0" color="#f4992e"></a-plane>
                <a-text value="Gedung Perpustakaan" color="black" position="0 -2.5 0.4" align="center" width="8"></a-text>
                <a-image src="#gedungperpustakaan" width="8" height="4.5" position="0 0 0"></a-image>
            </a-entity>
        </a-marker>

        <a-marker type="barcode" value="2">
            <a-entity position="-3.4 0 -2.65" rotation="-90 0 0">
                <a-entity width="20" height="30" geo>
                    <a-plane width="8" height="1" position='0 -2.75 -0' rotation="0 0 0" color="#f4992e"></a-plane>
                    <a-text value="Layanan Sirkulasi" color="black" position="0 -2.5 0.4" align="center" width="8"></a-text>
                    <a-image src="#layanansirkulasi" width="8" height="4.5" position="0 0 0"></a-image>
                </a-entity>
            </a-entity>
        </a-marker>

        <a-marker type="barcode" value="3">
            <a-entity position="-3.4 0 -2.65" rotation="-90 0 0">
                <a-plane width="8" height="1" position='0 -2.75 -0' rotation="0 0 0" color="#f4992e"></a-plane>
                <a-text value="Layanan Referensi" color="black" position="0 -2.5 0.4" align="center" width="8"></a-text>
                <a-image src="#layananreferensi" width="8" height="4.5" position="0 0 0"></a-image>
            </a-entity>
        </a-marker>

        <a-marker type="barcode" value="4">
            <a-entity position="-3.4 0 -2.65" rotation="-90 0 0">
                <a-plane width="8" height="1" position='0 -2.75 -0' rotation="0 0 0" color="#f4992e"></a-plane>
                <a-text value="Layanan Bimbingan Belajar" color="black" position="0 -2.5 0.4" align="center" width="8"></a-text>
                <a-image src="#layananbimbinganbelajar" width="8" height="4.5" position="0 0 0"></a-image>
            </a-entity>
        </a-marker>

        <a-marker type="barcode" value="5">
            <a-entity position="-3.4 0 -2.65" rotation="-90 0 0">
                <a-plane width="8" height="1" position='0 -2.75 -0' rotation="0 0 0" color="#f4992e"></a-plane>
                <a-text value="Pengenalan OPAC Kepada Mahasiswa Baru" color="black" position="0 -2.5 0.4" align="center" width="8"></a-text>
                <a-image src="#OPAC" width="8" height="4.5" position="0 0 0"></a-image>
            </a-entity>
        </a-marker>
		
		<a-marker type="barcode" value="6">
            <a-entity position="-3.4 0 -2.65" rotation="-90 0 0">
                <a-plane width="8" height="1" position='0 -2.75 -0' rotation="0 0 0" color="#f4992e"></a-plane>
                <a-text value="Poster" color="black" position="0 -2.5 0.4" align="center" width="8"></a-text>
                <a-image src="#poster" width="8" height="4.5" position="0 0 0"></a-image>
            </a-entity>
        </a-marker>

       
    </a-scene>

	  
      
      <!-- ################################################################################################ -->
    </article>
  </div>
	
    
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
   <p>1. Siapkan Matrix QR code 4x4 yang sudah di siapkan beserta keterangannya.</p>
   <p>2. Hadapkan Matrik tersebut di depan kamera/webcam.</p>
   <p>3. Pastikan anda tidak bergerak-gerak supaya QR code terbaca dengan sempurna</p>
   <p>4. Perhatikan QR code yang anda pegang pada layar monitor</p>
    
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
   
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>