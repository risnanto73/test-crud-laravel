@extends('user.template')

@section('content')
<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Create Produk</h4>
			<ul class="breadcrumbs">
				<li class="nav-home">
					<a href="#">
						<i class="flaticon-home"></i>
					</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Create Produk</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Produk</div>
					</div>
					<form action="#" method="post" enctype="multipart/form-data">
						@csrf
						<div class="card-body">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-6">
									<div class="form">
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>NAMA PRODUK :</label>
											</div>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" name="nama_produk" class="form-control input-fixed" id="exampleInputPassword1">
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>HARGA :</label>
											</div>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" name="harga" class="form-control input-fixed" id="exampleInputPassword1">
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>SEDIA :</label>
											</div>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" name="sedia" class="form-control input-fixed" id="exampleInputPassword1">
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>BERAT :</label>
											</div>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" name="berat" class="form-control input-fixed" id="exampleInputPassword1">
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Photo :</label>
											</div>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<img src="https://ui-avatars.com/api/?name={{Auth::user()-> username}}" alt="..." class="avatar-img rounded">
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label> Gambar :</label>
											</div>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="file" name="gambar">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="card card-dark bg-secondary-gradient">
										<div class="card-body skew-shadow">
											<!-- <img src="../assets/img/visa.svg" height="12.5" alt="Visa Logo"> -->
											<h2 style="font-weight: bold; font-style: italic; font-size: medium;">MEMBER</h2>
											<h2 class="py-4 mb-0">aaaa</h2>
											<div class="row">
												<div class="col-8 pr-0">
													<h3 class="fw-bold mb-1">aaaaa</h3>
													<div class="text-small text-uppercase fw-bold op-8">Since</div>
												</div>
												<div class="col-4 pl-0 text-right">
													<h3 class="fw-bold mb-1">4/26</h3>
													<div class="text-small text-uppercase fw-bold op-8"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-1"></div>
							</div>
							<div class="form">
								<div class="form-group from-show-notify row">
									<div class="col-lg-3 col-md-3 col-sm-12">
									</div>
									<div class="col-lg-4 col-md-9 col-sm-12">
										<button id="displayNotif" type="submit" class="btn btn-success">Add Produk</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection