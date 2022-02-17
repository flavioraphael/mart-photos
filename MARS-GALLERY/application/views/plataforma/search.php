<style>
	.card-img-top{
		background: url(blah.jpg) 50% 50% no-repeat; /* 50% 50% centers image in div */
		width: 300px;
		height: 250px;
	}
</style>

	<!-- Page Title -->
	<section class="dzsparallaxer auto-init height-is-based-on-content use-loading" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
		<address class="g-bg-no-repeat g-font-size-12 mb-0" style=" background-image: url(assets/img/banner.jpg);">
		<div class="container text-center g-py-100--md g-py-80">
			<h2 class="h1 text-uppercase g-font-weight-300 g-mb-30 text-white">MARS PICTURE GALLERY</h2>

			<!-- Search Form -->
			<form class="g-width-60x--md mx-auto" action="home">

				<div class="form-group g-mb-20">
					<div class="input-group u-shadow-v21 rounded g-mb-15">
						<button class="btn u-btn-secondary " type="button" style="background-color: #3a3a3a;color: white">
							<i class="fa fa-filter"></i>
						</button>
						<select name="cam_filter" class="form-control">
							<option value="" class="text-muted">Select a camera to search..</option>
							<option value="" >All</option>
							<option value="FHAZ" <?= @$cam_filter  == 'FHAZ'  ? 'selected="selected"' : ''?>>FHAZ</option>
							<option value="RHAZ" <?= @$cam_filter  == 'RHAZ'  ? 'selected="selected"' : ''?>>RHAZ</option>
							<option value="MAST" <?= @$cam_filter  == 'MAST'  ? 'selected="selected"' : ''?>>MAST</option>
							<option value="CHEMCAM" <?= @$cam_filter  == 'CHEMCAM'  ? 'selected="selected"' : ''?>>CHEMCAM</option>
							<option value="MAHLI" <?= @$cam_filter  == 'MAHLI'  ? 'selected="selected"' : ''?>>MAHLI</option>
							<option value="MARDI" <?= @$cam_filter  == 'MARDI'  ? 'selected="selected"' : ''?>>MARDI</option>
							<option value="NAVCAM" <?= @$cam_filter  == 'NAVCAM'  ? 'selected="selected"' : ''?>>NAVCAM</option>
							<option value="PANCAM" <?= @$cam_filter  == 'PANCAM'  ? 'selected="selected"' : ''?>>PANCAM</option>
							<option value="MINITES" <?= @$cam_filter  == 'MINITES'  ? 'selected="selected"' : ''?>>MINITES</option>
						</select>
						<div class="input-group-addon d-flex align-items-center g-bg-white g-brd-white g-color-gray-light-v1 g-pa-2">
							<button class="btn u-btn-primary g-font-size-16 g-py-15 g-px-20" id="search" type="submit">
								<i class="fa fa-search"></i> Pesquisar
							</button>
						</div>
					</div>
				</div>
			</form>
			<!-- End Search Form -->
		</div>
	</section>
	<!-- Page Title -->

	<section class="g-pt-50 g-pb-90">
		<div class="container">
			<!-- Search Info -->
			<div class="d-md-flex justify-content-between g-mb-30">
				<h3 class="h6 text-uppercase g-mb-10 g-mb--lg">Total of : <span class="g-color-gray-dark-v1"> <b><?= count($pictures)?></b></span> results</h3>
				<ul class="list-inline">
					<li class="list-inline-item g-mr-30">
						<a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">
							<i class="icon-grid g-pos-rel g-top-1 g-mr-5"></i> Grid View
						</a>
					</li>
					<li class="list-inline-item">
						<a class="u-link-v5 g-color-gray-dark-v5 g-color-gray-dark-v5--hover" href="#">
							<i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> List View
						</a>
					</li>
				</ul>
			</div>
			<!-- End Search Info -->

			<div class="row">
				<?php foreach ($pictures as  $picture):?>
						<div class="col-lg-4 g-mb-30">
							<article class="g-pa-25 u-shadow-v11 rounded">
								<h2 class="h4 g-mb-15 text-center">
									<a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#"><?= $picture['camera']['full_name']?></a>
								</h2>

								<ul class="list-inline d-flex justify-content-between g-mb-20">
									<li class="list-inline-item g-mr-10">
										<?= $picture['rover']['name']?>
									</li>
									<li class="list-inline-item">
										launch_date: <?= data($picture['rover']['launch_date'])?>
										<br>
										<span class="g-color-gray-dark-v5 pull-right">landing_date: <?= data($picture['rover']['landing_date'])?></span>

									</li>
								</ul>
								<a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" target="_blank" href="<?=$picture['img_src']?>" ">
									<img class="card-img-top" src="<?=$picture['img_src']?>" alt="Card image cap">
								</a>
<!--								<br>&nbsp;-->
<!--								<ul class="list-inline mb-0">-->
<!--									<li class="list-inline-item g-mr-20">-->
<!--										<a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#" onClick="copiarTexto()">-->
<!--											<i class="icon-eye g-pos-rel g-top-1 g-mr-5"></i> View-->
<!--										</a>-->
<!--									</li>-->
<!--									<li class="list-inline-item g-mr-20">-->
<!--										<a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover d-print"  href="#">-->
<!--											<i class="icon-printer g-pos-rel g-top-1 g-mr-5"></i> Print-->
<!--										</a>-->
<!--									</li>-->
<!--								</ul>-->
							</article>
						</div>
				<?php endforeach;?>
			</div>

			<hr class="g-brd-gray-light-v4 g-mt-10 g-mb-40">

			<!-- Pagination -->
			<nav class="g-mb-50" aria-label="Page Navigation">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#" aria-label="Previous">
							<span aria-hidden="true">
							  <i class="fa fa-angle-left"></i>
							</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
					<?= @$pagination ?>
					<li class="list-inline-item float-right">
						<span class="u-pagination-v1__item-info g-pa-4-11"><?= (25 * ($page - 1) + (count($pictures)))?> Pictures of <?= $total_fotos?></span>
					</li>
				</ul>
			</nav>
			<!-- End Pagination -->
		</div>
	</section>
</main>
<script src="assets/js/jquery-1.9.1.js"></script>

