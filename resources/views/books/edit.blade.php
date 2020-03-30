@extends('mytemplate')
@section('body')


<div class="jumbotron jumbotron-fluid" id="banner1">
  <div class="container">
    <h1 class="display-6" id="bannertxt">Edit an Existing Book</h1>
    <p class="lead">Currently Editing: {{ $book->book_title }}</p>
  </div>
</div>


<div class="container-fluid">


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

    <form method="post" action="{{ route('books.update', $book->id) }}">
      @method('PATCH')
      @csrf
      <div class="form-group">
        <label for="first_name">Book Title</label>
        <input type="text" class="form-control" name="book_title" required autocomplete="off" value="{{ $book->book_title }}">
      </div>

      <div class="form-group">
        <label for="last_name">Book Description</label>
        <input type="text" class="form-control" name="book_desc" value="{{ $book->book_desc }}" required>
      </div>

      <div class="form-group">
        <label for="email">Book Body:</label>
        <textarea type="text" class="form-control" name="book_body" rows="15" required>{{ $book->book_body }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
  </div>
</div>
@endsection
</div>

<style media="screen">
#banner1, .banner1 {
  background-color: #FFE53B;
  background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
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
