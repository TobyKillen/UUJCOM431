@extends('mytemplate')
@section('body')

<div class="jumbotron jumbotron-fluid" id="banner1">
  <div class="container">
    <h1 class="display-6" id="bannertxt">BELFAST BOOKS</h1>
    <p class="lead">All books avaiable on Belfast Books</p>
    <p class="lead"></p>
  </div>
</div>



<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
  <br />
  <div class="col-sm-12">
  @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
  </div>

    <h1 class="display-6">All Books</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Book ID</td>
          <td>Book Title</td>
          <td>Book Description</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td><a href="/books/{{ $book->id }}">{{$book->book_title}}</a></td>
            <td>{{$book->book_desc}}</td>
            <td>
                <a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a>
                <br>
                <br>
                <form action="{{ route('books.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td>

            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <br />
  <br />
  <br />

    <a class="btn btn-primary" href="/books/create">Submit book</a>
</div>
</div>

<br />
<br />
<br />
@endsection
</div>

<style media="screen">
#banner1, .banner1 {
  background-color: #21D4FD;
  background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);

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
