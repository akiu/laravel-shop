@extends('layouts.mainAdmin')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Tabel User</h3>
				<div class="panel panel-default">
					<div class="panel-heading">
						<button type="button" class="btn btn-success">Create User</button>
					</div>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Email</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>
									<button type="button" class="btn btn-primary btn-sm">Edit</button>
									<button type="button" class="btn btn-primary btn-sm">Hapus</button>
									<button type="button" class="btn btn-primary btn-sm">Lihat Product</button>
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
