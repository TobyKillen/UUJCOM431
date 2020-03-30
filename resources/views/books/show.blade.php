@extends('mytemplate')
@section('body')

<div class="jumbotron jumbotron-fluid" id="banner1">
  <div class="container">
    <h1 class="display-6" id="bannertxt">Book information: </h1>
    <p class="lead">You are currently reading: {{ $book->book_title }}</p>
    <p class="lead"></p>
  </div>
</div>


<div class="container-fluid">
<div class="row">
  <div class="col-sm-12">
    <h1>Book Details</h1>

    <strong>Book Title</strong>
    <p>{{ $book->book_title }}</p>

    <strong>Book Description:</strong>
    <p>{{ $book->book_desc }}</p>

    <strong>Book Body:</strong>
    <p>{{ $book->book_body }}</p>

    <div>
      <a class="btn btn-primary" href="/books">Back</a>
    </div>

 </div>
</div>
@endsection
</div>

<style media="screen">
#banner1, .banner1 {
  background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
  height: 250px;
  color: white;
  font-weight:bold;
  background-repeat: no-repeat;
}


#footer {
  color: black;
  text-align: center;
  align-content: center;
  background-color: white;
}

#footertxt {
  font-size: 15px;
}
</style>
