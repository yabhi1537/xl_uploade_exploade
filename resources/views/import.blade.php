
<form method="POST" action="{{route('import')}}" enctype="multipart/form-data">
	@csrf

	<input type="file" name="file">
	<br><br>
	<button>Import User Data</button>


</form>
<br><br>
<a href="{{route('export')}}">Export User Data</a>