
@extends('layouts/main')

@section('content')
<div id="form-container">
    <h1>{{$comic->title, $comic->id}}</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="edit title" name="title" value="{{old('title')}}">
          @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="exampleFormControlInput1" placeholder="edit thumb link" name="thumb" value="{{old('thumb')}}">
            @error('thumb')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="exampleFormControlInput1" placeholder="edit price" name="price" value="{{old('price')}}">
            @error('price')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="exampleFormControlInput1" placeholder="edit series name" name="series" value="{{old('series')}}">
            @error('series')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Sale date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="exampleFormControlInput1" placeholder="edit sale date" name="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="exampleFormControlInput1" placeholder="edit type" name="type" value="{{old('type')}}">
            @error('type')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Writers</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="exampleFormControlInput1" placeholder="edit writers" name="writers" value="{{old('writers')}}">
            @error('writers')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Artists</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="exampleFormControlInput1" placeholder="edit artists" name="artists" value="{{old('artists')}}">
            @error('artists')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>


       
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="description">
            {{old('description')}}
          </textarea>
          @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

      <button class="btn btn-primary my-button" type="submit">save</button>

    
      </form>


      <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
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