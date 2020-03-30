@extends('mytemplate')
@section('body')

<div class="jumbotron jumbotron-fluid" id="banner1">
  <div class="container">
    <h1 class="display-6" id="bannertxt">Create a brand new book.</h1>
    <p class="lead">Use the form below to add a new book to Belfast Books.</p>
    <p class="lead"></p>
  </div>
</div>

<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3"></h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form method="post" action="{{ route('books.store') }}">
      @csrf
      <div class="form-group">
        <label for="first_name">Book Title</label>
        <input type="text" class="form-control" name="book_title" required autocomplete="off" value="{{ old('book_title') }}">
      </div>

      <div class="form-group">
        <label for="last_name">Book Description</label>
        <input type="text" class="form-control" name="book_desc" required>
      </div>

      <div class="form-group">
        <label for="email">Book Body:</label>
        <textarea type="text" class="form-control" name="book_body" rows="15" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
  </div>
</div>
@endsection


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
