
@extends('layouts/main')

@section('content')
<div id="form-container">
    <h1>Insert a new Comic</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="insert title" name="title" value="{{old('title') ? : '' }}">
          @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="exampleFormControlInput1" placeholder="insert thumb link" name="thumb" value="{{old('thumb') ? : '' }}">
            @error('thumb')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="exampleFormControlInput1" placeholder="insert price" name="price" value="{{old('price') ? : '' }}">
            @error('price')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="exampleFormControlInput1" placeholder="insert series name" name="series" value="{{old('series') ? : '' }}">
            @error('series')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Sale date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="exampleFormControlInput1" placeholder="insert sale date" name="sale_date" value="{{old('sale_date') ? : '' }}">
            @error('sale_date')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="exampleFormControlInput1" placeholder="insert type" name="type" value="{{old('type') ? : '' }}">
            @error('type')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Writers</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="exampleFormControlInput1" placeholder="insert writers" name="writers" value="{{old('writers') ? : '' }}">
            @error('writers')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Artists</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="exampleFormControlInput1" placeholder="insert artists" name="artists" value="{{old('artists') ? : '' }}">
            @error('artists')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>


       
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="description" >
            {{old('description') ? : '' }}
          </textarea>
          @error('description')
          {{$message}}
          @enderror
        </div>

      <button class="btn btn-primary" type="submit">Add</button>

      </form>

</div>
@endsection