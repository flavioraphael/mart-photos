	<section class="dzsparallaxer auto-init height-is-based-on-content use-loading" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
		<address class="g-bg-no-repeat g-font-size-12 mb-0" style=" background-image: url(assets/img/banner.jpg);">
		<div class="container text-center g-py-100--md g-py-80">
			<form class="" action="home">
				<div class="col-md-12" style="margin-left: 68px">
					<div class="row">
						<div class="form-group col-md-12">
							<h2 class="h1 text-uppercase g-font-weight-300 g-mb-30 text-white" style="margin-right: 132px;">MARS PICTURE GALLERY</h2>
						</div>
						<div class="form-group col-md-9">
							<select name="cam_filter" class="form-control form-control g-font-size-4 g-py-15 g-px-20" >
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
						</div>
						<div class="form-group col-md-2">
							<button class="btn btn-success g-font-size-4 g-py-15 g-px-20 pull-left" id="search" type="submit" >
								<i class="fa fa-search"> Pesquisar</i>
							</button>
						</div>
						<?php if($term_open):?>
							<div class="form-group col-md-1">
								<a href="#" style="margin-left: -60px" class="btn btn-secondary g-font-size-4 g-py-15 g-px-20 pull-left"><i class="fa fa-trash"> </i></a>
							</div>
						<?php endif;?>
					</div>
				</div>
			</form>
	</section>
	<!-- Page Title -->

	<section class="g-pt-50 g-pb-90">
		<div class="container">
			<!-- Search Info -->
			<div class="d-md-flex justify-content-between g-mb-30">
				<h3 class="h6 text-uppercase g-mb-10 g-mb--lg">Total of : <span class="g-color-gray-dark-v1"> <b><?= count($pictures)?></b></span> results</h3>
				<ul class="list-inline">
					<li class="list-inline-item g-mr-30">
						<a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover tipe_list" id="tipe_grid"  href="#">
							<i class="icon-grid g-pos-rel g-top-1 g-mr-5"></i> Grid View
						</a>
					</li>
					<li class="list-inline-item">
						<a class="u-link-v5 g-color-gray-dark-v5 g-color-gray-dark-v5--hover tipe_list" id="tipe_list"  href="#">
							<i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> List View
						</a>
					</li>
				</ul>
			</div>
			<!-- End Search Info -->

			<div class="row list_grid" >
				<?php if(@$pictures):?>
					<?php for ($i = $start;$i <= $end;$i++):?>
							<?php if(@$pictures[$i]):?>
								<div class="col-lg-4 g-mb-30">
									<article class="g-pa-25 u-shadow-v11 rounded">
										<h2 class="h4 g-mb-15 text-center">
											<a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#"><?= $pictures[$i]['camera']['full_name']?></a>
										</h2>

										<ul class="list-inline d-flex justify-content-between g-mb-20">
											<li class="list-inline-item g-mr-10">
												<?= $pictures[$i]['rover']['name']?>
											</li>
											<li class="list-inline-item">
												Launch Date: <?= data($pictures[$i]['rover']['launch_date'])?>
												<br>
												<span class="g-color-gray-dark-v5 pull-right">Landing Date: <?= data($pictures[$i]['rover']['landing_date'])?></span>

											</li>
										</ul>
										<a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" target="_blank" href="<?=$pictures[$i]['img_src']?>" ">
											<img class="card-img-top" src="<?=$pictures[$i]['img_src']?>" alt="Card image cap">
										</a>
									</article>
								</div>
						<?php endif;?>
					<?php endfor;?>
				<?php else:?>
				<div class="col-lg-12 g-mb-120 text-center">
					<h3 style="color: #dd3333;"><b>No records found for this search</b></h3>
				</div>
				<?php endif;?>
			</div>

			<div class="col-md-12" style="margin-left: 68px">
				<div class="row">

				</div>
			</div>

			<div class="col-md-12 row list_list hidden" style="margin-left: 68px">
				<div class="row">
					<?php if(@$pictures):?>
						<?php for ($i = $start;$i <= $end;$i++):?>
							<?php if(@$pictures[$i]):?>
								<div class="form-group col-md-6">
									<div class="d-lg-flex justify-content-between align-items-center">
										<ul class="list-inline g-mb-10 g-mb-0--lg">
											<li class="list-inline-item g-mr-30">
												<h4 class="text-center">
													<?= $pictures[$i]['camera']['full_name']?>
												</h4>
											</li>
											<br>
											<li class="list-inline-item g-mr-30">
												<a class="u-link-v5 g-color-main g-color-primary--hover" target="_blank" href="<?=$pictures[$i]['img_src']?>"><img class="g-height-50 g-width-50 rounded-circle g-mr-5" src="<?=$pictures[$i]['img_src']?>" alt="Image Description"> <?= $pictures[$i]['rover']['name']?></a>
											</li>
											<li class="list-inline-item g-mr-30 pull-right">
												<i class="icon-calendar g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i>
												Launch Date: <?= data($pictures[$i]['rover']['launch_date'])?><br>
												<i class="icon-calendar g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> Landing Date: <?= data($pictures[$i]['rover']['landing_date'])?>
											</li>
										</ul>
									</div>
									<hr size="1" style="border:1px dashed #ddd;">
								</div>
							<?php endif;?>
						<?php endfor;?>
					<?php else:?>
						<div class="col-lg-12 g-mb-120 text-center">
							<h3 style="color: #dd3333;"><b>No records found for this search</b></h3>
						</div>
					<?php endif;?>
				</div>
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
						<span class="u-pagination-v1__item-info g-pa-4-11" ><?= (25 * ($page - 1) + ($end - $start))	?> Pictures of <?= $total_photos?></span>
					</li>
				</ul>
			</nav>
			<a href="#spy5" class="btn  btn-info btn-sm pull-right btn-return-top"  title="Back to the top"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>
			<!-- End Pagination -->
		</div>
	</section>
</main>
<script src="assets/js/jquery-1.9.1.js"></script>
