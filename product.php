

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<?php include "menuloja.php"; ?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			Mulheres

		</h2>
		<p class="m-text13 t-center">
			Recém-chegados mulheres coleção 2018
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->



						<form method="GET">
						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filtros
						</h4>
						<a href="product.php">Ver tudo</a>

						<div class="filter-price p-t-22 p-b-50 bo3">
							

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<input value="Filter" type="submit" name="" class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
										
									</button>
								</div>

								
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Cor

							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
				<!-- 			<script type="text/javascript">
						function Espera() {
      						setInterval("Atualiza()",500);
    					}
    				function Atualiza() {
    				var Nome = getElementsById("procura");
      				$("#data").load("regarregar.php?a=1&nome"+Nome);

      				
      			}
							</script> -->
							
							
							<input list="data" id="procura" class="s-text7 size6 p-l-23 p-r-50" type="text" name="search" placeholder="Search Products...">
							
						

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								
								<select class="selection-2" name="tipo">
									
									<option value="1">Popularity</option>
									<option value="2">Price: low to high</option>
									<option value="3">Price: high to low</option>
								</select>
							</div>
							
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								
								<select class="selection-2" name="preco">
									
									<option value="1">$0.00 - $50.00</option>
									<option value="2">$50.00 - $100.00</option>
									<option value="3">$100.00 - $150.00</option>
									<option value="4">$150.00 - $200.00</option>
									<option value="5">$200.00+</option>
	
								</select>
							</div>
							
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								
								<select class="selection-2" name="id">
									
							<?php
							include "conexao.inc";
							$sql = "SELECT * FROM categoria";
							$query = mysqli_query($con,$sql);
							while ($r = mysqli_fetch_assoc($query)) {
								echo '
								<option value="'.$r['id'].'"">'.$r['nome'].'</option>
							';
							}
							?>
						


	
								</select>
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Mostrando 1–12 de 16 resultados
						</span>
					</div>
					</form>
					<div class="row"> 
					<?php


							include "conexao.inc";
							if(isset($_GET['id']) && isset($_GET['tipo']) && isset($_GET['preco']) && isset($_GET['search'])){
							if ($_GET['search'] == "") {
								$valI = '';
								$valF = '';
								echo '<script type="text/javascript">
								alert("Procurando");
								</script>';

								if ($_GET['preco'] == '1') {
									$valI = '0';
									$valF = '50';
								}elseif ($_GET['preco'] == '2') {
									$valI = '50';
									$valF = '100';
								}elseif ($_GET['preco'] == '3') {
									$valI = '100';
									$valF = '150';
								}elseif ($_GET['preco'] == '4') {
									$valI = '150';
									$valF = '200';
								}else{
									$valI = '200';
									$valF = '1000';
								}

							$sql = "SELECT * FROM produtos WHERE id_cat = '".$_GET['id']."' AND preco BETWEEN ".$valI." AND ".$valF. " ORDER BY preco ASC";
							$query = mysqli_query($con,$sql);
							while ($r = mysqli_fetch_assoc($query)) {
								$sqll = "SELECT * FROM foto WHERE id_produto = '".$r['id']."'";
								$queryy = mysqli_query($con,$sqll);
								while ($rr = mysqli_fetch_assoc($queryy)) {
									echo '
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="admin/imgs/'.$rr['img1'].'" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											
											<a class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" href="?id_pro='.$r['id'].'">+Carrinho</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.php?id='.$r['id'].'" class="block2-name dis-block s-text3 p-b-5">
										'.$r['nome'].'
									</a>

									<span class="block2-price m-text6 p-r-5">
										$'.$r['preco'].'
									</span>
								</div>
							</div>
						</div>

									';
								}
							}


	
							}else{
								$valI = '';
								$valF = '';
								echo '<script type="text/javascript">
								alert("Procurando");
								</script>';

								if ($_GET['preco'] == '1') {
									$valI = '0';
									$valF = '50';
								}elseif ($_GET['preco'] == '2') {
									$valI = '50';
									$valF = '100';
								}elseif ($_GET['preco'] == '3') {
									$valI = '100';
									$valF = '150';
								}elseif ($_GET['preco'] == '4') {
									$valI = '150';
									$valF = '200';
								}else{
									$valI = '200';
									$valF = '1000';
								}
								
							$sql = "SELECT * FROM produtos WHERE id_cat = '".$_GET['id']."' AND preco BETWEEN ".$valI." AND ".$valF. " AND nome LIKE '%".$_GET['search']."%' ORDER BY nome ASC";
							$query = mysqli_query($con,$sql);
							while ($r = mysqli_fetch_assoc($query)) {
								$sqll = "SELECT * FROM foto WHERE id_produto = '".$r['id']."'";
								$queryy = mysqli_query($con,$sqll);
								while ($rr = mysqli_fetch_assoc($queryy)) {
									echo '
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="admin/imgs/'.$rr['img1'].'" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.php?id='.$r['id'].'" class="block2-name dis-block s-text3 p-b-5">
										'.$r['nome'].'
									</a>

									<span class="block2-price m-text6 p-r-5">
										$'.$r['preco'].'
									</span>
								</div>
							</div>
						</div>

									';
								}
							}
							}



							}else{
							$sql = "SELECT * FROM produtos ORDER BY nome ASC";
							$query = mysqli_query($con,$sql);
							while ($r = mysqli_fetch_assoc($query)) {
								$sqll = "SELECT * FROM foto WHERE id_produto = '".$r['id']."'  ";
								$queryy = mysqli_query($con,$sqll);
								while ($rr = mysqli_fetch_assoc($queryy)) {
									echo '
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="admin/imgs/'.$rr['img1'].'" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
										<a class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" href="?id_pro='.$r['id'].'">+Carrinho</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.php?id='.$r['id'].'" class="block2-name dis-block s-text3 p-b-5">
										'.$r['nome'].'
									</a>

									<span class="block2-price m-text6 p-r-5">
										$'.$r['preco'].'
									</span>
								</div>
							</div>
						</div>

									';
								}

							}
							}
							
							?>
							</div>
									
		

						

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php include "footer.php" ?>


<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
