@extends('admin')
@section('schemahtml')itemscope itemtype="http://schema.org/Article"@endsection
@section('matablock') @endsection
@section('matadescription')<meta content="" name="description" /> @endsection
@section('mataauthor')<meta content="" name="author" /> @endsection
@section('titleblock') <title>$name </title> @endsection
@section('bodyschema') @endsection
@section('pagecss')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->

<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('pagetitleblock')

<ol class="breadcrumb">
  <li> <i class="clip-file"></i> <a href="#"> Pages </a> </li>
  <li class="active"> Blank Page </li>
  <li class="search-box">
    <form class="sidebar-search">
      <div class="form-group"> <input type="text" placeholder="Start Searching..."> <button class="submit"> <i class="clip-search-3"></i> </button> </div>
    </form>
  </li>
</ol>
<div class="page-header">
  <h1>Blank Page <small>blank page</small></h1>
</div>
<!-- end: PAGE TITLE & BREADCRUMB -->

@endsection
@section('main-content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts') @endsection
@section('footer-scripts')
 <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
  @if(Request::url() === 'index')




  @endif
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection
@stop