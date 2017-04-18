@layout('layouts/backend')

@section('content')
	<div class="row row-padding">
		<div class="col-sm-12"> {{-- Menu --}}
			<span class="pull-left">
				<form class="form-inline" action="">
					<input placeholder="De naam of email adres" class="form-control" type="text" name="term">
					<button type="submit" class="btn btn-danger">Zoek</button>
				</form>
			</span>

			<span class="pull-right">
				<a href="#" class="btn btn-default">Nieuwe gebruiker</a>
			</span>
		</div> {{-- Menu --}}
	</div>

    <div class="row">
		<div class="col-md-12"> {{-- Main content --}}
			<div class="panel panel-default">
				<div class="panel-body"> {{-- Data --}}
					@if ((int) count($users) === 0)
						<div class="alert alert-info" role="alert">
							Er zijn geen gebruikers gevonden in het systeem.
						</div>
					@else
						<div class="table-responsive">
							<table class="table table-hover table-condensed table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Naam:</th>
										<th>Gebruikersnaam:</th>
										<th>Email:</th>
										<th>Opties:</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($users as $user)
										<tr>
											<td>#{{ $user->id }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->username }}</td>
											<td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>

											<td> {{-- /Options --}}

											</td> {{-- /Options --}}
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					@endif
				</div> {{-- /Data --}}
			</div>
		</div> {{-- />Main content --}}
    </div>
@endsection
