
@extends('layouts/main')

@section('content')
<div id="form-container">
    <h1>{{$comic->title, $comic->id}}</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="edit title" name="title" value="{{$comic->title}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Thumb</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="edit thumb link" name="thumb" value="{{$comic->thumb}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="edit price" name="price" value="{{$comic->price}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Series</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="edit series name" name="series" value="{{$comic->series}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Sale date</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="edit sale date" name="sale_date" value="{{$comic->sale_date}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Type</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="edit type" name="type" value="{{$comic->type}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Writers</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="edit writers" name="writers" value="{{$comic->writers}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Artists</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="edit artists" name="artists" value="{{$comic->artists}}">
          </div>


       
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$comic->description}}</textarea>
        </div>

      <button class="btn btn-primary" type="submit">save</button>

    
      </form>


      <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
          delete
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This will delete the file permanently. Do you want to continue?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
        
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Yes</button>
              </div>
            </div>
          </div>
        </div>
      </form>

</div>
@endsection