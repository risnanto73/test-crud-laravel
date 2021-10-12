@extends ('user.template')

@section('content')
<div class="col-md-12" style="margin-top: 80px;" >
	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h4 class="card-title">Add Row</h4>
				<a class="btn btn-primary btn-round ml-auto" type="button" href="{{route('produk.create')}}">
					<i class="fa fa-plus"></i>
					Add Row
				</a>
			</div>
		</div>
		<div class="card-body">
			<!-- Modal -->
			

			<div class="table-responsive">
				<table id="add-row" class="display table table-striped table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>NAMA PRODUK</th>
							<th>HARGA</th>
							<th>SEDIA</th>
							<th>BERAT</th>
							<th>GAMBAR</th>
							<th style="width: 10%">Action</th>
						</tr>
					</thead>
					
					<tbody>
						@foreach ($produk as $isi)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$isi->nama_produk}}</td>
							<td>Rp. {{$isi->harga}}</td>
							<td>{{$isi->sedia}}</td>
							<td>{{$isi->berat}}</td>
							<td><img src="{{url('storage/'.$isi->gambar)}}" style="max-width: 100px" class="img-thumbnail" alt=""></td>
							<td>
								<div class="form-button-action">
									<form action="{{route('produk.update', $isi->gambar)}}" method="post">
										@csrf
										@method('PASSWORD_DEFAULT')									
											<button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
												<i class="fa fa-edit"></i>
											</button>
									</form>
									<form action="{{route('produk.destroy', $isi->id)}}" method="post">
									@csrf
									@method('DELETE')
									<button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
										<i class="fa fa-times"></i>
									</button>
									</form>
									
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection