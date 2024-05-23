@extends('admin.adminDashboard')

@section('admin')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-sm-6">
		    <h1 class="m-0">Starter Page</h1>
		  </div><!-- /.col -->
		  <div class="col-sm-6">
		    <ol class="breadcrumb float-sm-right">
		      <li class="breadcrumb-item"><a href="#">Home</a></li>
		      <li class="breadcrumb-item active">Starter Page</li>
		    </ol>
		  </div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<div class="row">

		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h3 class="card-title">DataTable with default features</h3>
	</div>
	  <!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
		  <thead>
		  <tr>
		    <th>ID</th>
		    <th>first Name</th>
		    <th>Last Name</th>
		    <th>Email</th>
		    <th>Action</th>
		  </tr>
		  </thead>
		  <tbody>
		<!-- @foreach ($dataClient as $item)
		  	<tr>
		  		<td>{{ $item->id }}</td>
		  	</tr>
		  	<tr>
		  		<td>{{ $item->first_name }}</td>
		  	</tr>
		  	<tr>
		  		<td>{{ $item->last_name }}</td>

		  	</tr>
		  	<tr>
		  		<td>{{ $item->email }}</td>
		  	</tr>
		  	<tr>

		  	</tr>
		 @endforeach -->
		  </tbody>
		</table>
	</div>
</div>


@endsection