<!DOCTYPE html>
<html>
<head>
	<title>CıvıltılıİşlerDünyam</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery-3.6.0.min.js" ></script> 
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/stillerim.css">
 	<script>
		
	</script>
	<!--  -->
</head>
<body >
	<div class="container-fluid">
		<div class="row"> <!-- üst menü -->
			<div class="col-12 p-1">
				<nav class="navbar navbar-expand-md navbar-dark arkaPlanRenk rounded">
				  <div class="container-fluid">
				    <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="menu">
				      <ul class="navbar-nav me-auto mb-2 mb-md-0">
				        <li class="nav-item">
				          <a class="nav-link active text-dark fw-bold" aria-current="page" href="anasayfa.html">Anasayfa</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link text-dark" href="#">Hakkımızda</a>
				        </li>
				        <li class="nav-item dropdown ">
				          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				            Kategoriler
				          </a>
				          <ul class="dropdown-menu text-light" aria-labelledby="navbarScrollingDropdown">
				            <li><a class="dropdown-item text-dark" href="#">Bileklik</a></li>
				            <li><a class="dropdown-item text-dark" href="#">Çanta</a></li>
				            <li><a class="dropdown-item text-dark" href="#">Makrome Duvar Süsleri</a></li>
				          </ul>
				        </li>
				         <li class="nav-item">
				          <a class="nav-link text-dark" href="#">Kampanyalar</a>
				        </li>
				         <li class="nav-item">
				          <a class="nav-link text-dark" href="#">İletişim</a>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
		<div class="row">	<!-- banner -->
        <?php
                $db=new mysqli("localhost","root","","webproje3");
                mysqli_set_charset($db,"utf8");

                $sorgu="select * from anabolum";

                $sonuc=$db->query($sorgu);
                $kayit=$sonuc->fetch_assoc();   
			echo '<div class="col-12 p-1 my-1 text-center">';					
				echo '<img src="'.$kayit["anaBolumResim"].'" class="img-fluid" alt="...">';
			echo '</div>';
        ?>
		</div>
		<div class="row"><!-- yazı -->
        <?php
                $db=new mysqli("localhost","root","","webproje3");
                mysqli_set_charset($db,"utf8");
                
                $sorgu="select * from anabolum";
                
                $sonuc=$db->query($sorgu);
                $kayitSayisi=$sonuc->num_rows;
                for($i=0; $i<$kayitSayisi; $i++) {
                    $kayit=$sonuc->fetch_assoc();  

			echo '<div class="col-12 my-1 p-3 border border-light">';
				echo '<figure class="text-center">';
					echo '<blockquote class="blockquote">';
							echo '	<h3>'.$kayit["anaBolumBaslik"].'</h3>';
				  	echo '</blockquote>';
				  	echo '<blockquote class="blockquote">';
				    	echo '<p>'.$kayit["anaBolumAcıklama"].'</p>';
				  echo '	</blockquote>';
				  echo '	<figcaption class="blockquote-footer">';
				    	echo '<cite title="Source Title">'.$kayit["anaBolumYazar"].'</cite>';
				  	echo '</figcaption>';
				echo '</figure>';
			echo '</div>';
            }  
            ?>    
		</div>
		<div class="row">	<!-- yuvarlak foto -->
			<div class="col-12">
				<figure class="text-center">
				  	<blockquote class="blockquote">
				  		<h2 class="text-dark arkaPlanRenk p-2">- Kategoriler -</h2>
				  	</blockquote>
				</figure>
			</div>
			<div class="col-12 my-1 ">
				<div class="row justify-content-center">
                    <?php
                    $db=new mysqli("localhost","root","","webproje3");
                    mysqli_set_charset($db,"utf8");
                    
                    $sorgu="select * from yuvarlakresim";
                    
                    $sonuc=$db->query($sorgu);
                    $kayitSayisi=$sonuc->num_rows;
                    for($i=0; $i<$kayitSayisi; $i++) {
                        $kayit=$sonuc->fetch_assoc(); 
					   echo '<div class="col-auto col-md-6 col-xl-3 mt-3">';
		               echo ' <a href="sablon2.html"><img src="'.$kayit["yuvarlakResim"].'" class="rounded-circle img-fluid border"></a>';
		               echo ' <h5 class="text-center mt-3 mb-3">'.$kayit["yuvarlakAcıklama"].'</h5>';
		               echo ' <p class="text-center"><a href="sablon2.html" class="btn btn-success">Ürünleri Gör</a></p>';
		               echo '</div>';
		            
                       }
                    ?>
				</div>
			</div>
		</div>
		<div class="row">	<!-- fotoğraflar -->
			<div class="col-12">
				<figure class="text-center">
				  	<blockquote class="blockquote">
				  		<h2 class="text-dark arkaPlanRenk p-2">- Fotoğraflar -</h2>
				  	</blockquote>
				</figure>
			</div>
			<div class="col-12 my-1 ">
				<nav>
				  	<div class="nav nav-tabs" id="nav-tab" role="tablist">
				  		<button class="nav-link active text-dark" id="nav-hepsi-tab" data-bs-toggle="tab" data-bs-target="#nav-hepsi" type="button" role="tab" aria-controls="nav-hepsi" aria-selected="true">Genel</button>
				  		<button class="nav-link text-dark" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Bileklik</button>				    	
				    	<button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Çanta</button>
				    	<button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Makrome Duvar Süsleri</button>
				    	<button class="nav-link text-dark" id="nav-tas-tab" data-bs-toggle="tab" data-bs-target="#nav-tas" type="button" role="tab" aria-controls="nav-tas" aria-selected="false">Kokulu Taş</button>
				  	</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-hepsi" role="tabpanel" aria-labelledby="nav-hepsi-tab">	<!-- genel -->
						<div class="row justify-content-center">
                                <?php
                            $db=new mysqli("localhost","root","","webproje3");
                            mysqli_set_charset($db,"utf8");
                            
                            $sorgu="select * from genelresim";
                            
                            $sonuc=$db->query($sorgu);
                            $kayitSayisi=$sonuc->num_rows;
                            for($i=0; $i<$kayitSayisi; $i++) {
                                $kayit=$sonuc->fetch_assoc(); 
							echo'<div class="col-auto col-xs-12 col-md-6 col-xl-3 my-1">';
								echo'<img src="'.$kayit["genelResim"].'" class="img-fluid">';
							echo'</div>';
                            }
							?>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">	<!-- Bileklik -->
						<div class="row justify-content-center">
                        <?php
                            $db=new mysqli("localhost","root","","webproje3");
                            mysqli_set_charset($db,"utf8");
                            
                            $sorgu="select * from bileklikResim";
                            
                            $sonuc=$db->query($sorgu);
                            $kayitSayisi=$sonuc->num_rows;
                            for($i=0; $i<$kayitSayisi; $i++) {
                                $kayit=$sonuc->fetch_assoc(); 
							echo '<div class="col-auto col-xs-12 col-md-6 col-xl-3 my-1">';
								echo '<img src="'.$kayit["bileklikResim"].'" class="img-fluid">';
							echo '</div>';
                            }
                            ?>        
						</div>
					</div>
				  	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">	<!-- çanta -->
				  		<div class="row justify-content-center">
							<div class="col-auto col-xs-12 col-md-6 col-xl-3 my-1">
								<img src="_resimler/canta/canta2.jpg" class="img-fluid">
							</div>
							<div class="col-auto col-xs-12 col-md-6 col-xl-3 my-1">
								<img src="_resimler/canta/canta1.jpg" class="img-fluid">
							</div>
							<div class="col-auto col-xs-12 col-md-6 col-xl-3 my-1">
								<img src="_resimler/canta/canta3.jpg" class="img-fluid">
							</div>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">	<!-- makrome -->
				  		<div class="row justify-content-center">
                          <?php
                            $db=new mysqli("localhost","root","","webproje3");
                            mysqli_set_charset($db,"utf8");
                            
                            $sorgu="select * from makromeresim";
                            
                            $sonuc=$db->query($sorgu);
                            $kayitSayisi=$sonuc->num_rows;
                            for($i=0; $i<$kayitSayisi; $i++) {
                                $kayit=$sonuc->fetch_assoc(); 
							echo '<div class="col-auto col-xs-12 col-md-6 col-xl-3 my-1">';
								echo '<img src="'.$kayit["makromeResim"].'" class="img-fluid">';
							echo '</div>';
                            }
							?>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="nav-tas" role="tabpanel" aria-labelledby="nav-tas-tab">	<!-- kokulu taş -->
						<div class="row justify-content-center">
                        <?php
                            $db=new mysqli("localhost","root","","webproje3");
                            mysqli_set_charset($db,"utf8");
                            
                            $sorgu="select * from kokulutasresim";
                            
                            $sonuc=$db->query($sorgu);
                            $kayitSayisi=$sonuc->num_rows;
                            for($i=0; $i<$kayitSayisi; $i++) {
                                $kayit=$sonuc->fetch_assoc(); 
							echo '<div class="col-auto col-xs-12 col-md-6 col-xl-3 my-1">';
								echo '<img src="'.$kayit["kokulutasResim"].'" class="img-fluid">';
							echo '</div>';
                              }
                            ?>
				    	</div>
				</div>
			</div>
		</div>
		<div class="row ">	<!-- alt bölüm -->
			<div class="col-12 card my-3">
				<div class="row">
					<br><hr><br>
					<div class="col-auto col-md-6 col-xl-3 text-center">
						<div class="row">
							<h4>Kurumsal</h4>
							<div class="col-12">
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      Hakkımızda
									    </a>
									</div>
								</nav>
							</div>
							<div class="col-12">
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      Gizlilik Politikası
									    </a>
									</div>
								</nav>
							</div>
							<div class="col-12">
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      Kullanıcı Sözleşmesi
									    </a>
									</div>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-auto col-md-6 col-xl-3 text-center">
						<div class="row">
							<h4>İletişim</h4>
							<div class="col-12">
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      <img src="_resimler/icon/whatsapp.png" alt="" width="" height="" class="d-inline-block align-text-top">
									      0535 892 3980
									    </a>
									</div>
								</nav>
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      <img src="_resimler/icon/mail.png" alt="" width="" height="" class="d-inline-block align-text-top">
									      sedabaykal0@gmail.com
									    </a>
									</div>
								</nav>
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      <img src="_resimler/icon/adres.png" alt="" width="" height="" class="d-inline-block align-text-top">
									      İzmir/Bornova
									    </a>
									</div>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-auto col-md-6 col-xl-3 text-center">
						<div class="row">
							<h4>Sosyal Medya</h4>
							<div class="col-12">
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      <img src="_resimler/icon/instagram.png" alt="" width="" height="" class="d-inline-block align-text-top">
									      civiltiliislerdunyam_
									    </a>
									</div>
								</nav>
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      <img src="_resimler/icon/facebook.png" alt="" width="" height="" class="d-inline-block align-text-top">
									      civiltiliislerdunyam_
									    </a>
									</div>
								</nav>
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      <img src="_resimler/icon/youtube.jpg" alt="" width="" height="" class="d-inline-block align-text-top">
									      civiltiliislerdunyam_
									    </a>
									</div>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-auto col-md-6 col-xl-3 text-center">
						<div class="row">
							<h4>Mobil Alışveriş</h4>
							<div class="col-12">
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      <img src="_resimler/icon/googlePlay.jpg" alt="" width="" height="" class="d-inline-block align-text-top">
									      GoogLe Play
									    </a>
									</div>
								</nav>
								<nav class="navbar navbar-light ">
									<div class="container-fluid">
									    <a class="navbar-brand" href="#">
									      <img src="_resimler/icon/appStore.jpg" alt="" width="" height="" class="d-inline-block align-text-top">
									      App Store
									    </a>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</div>	
</body>
</html>