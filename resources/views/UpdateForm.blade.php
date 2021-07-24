@extends('Model')
@extends('Layout.master')
@section('Title')

    <title>Edit Book Form</title>
<style>

</style>
    
@endsection

@section('bodycontent')
<div class="container">
    <div class="Welcome">
    <div class="card w-75" style="margin: 2rem;">
            <div class="card-body">
                <h5 class="card-title">Edit Form</h5>
                    <form method = "POST" action="{{url ('Bookform/'. $products->id)}}">
                     @csrf
                     <select class="form-select" aria-label="Default select example" name="type">
                        <option value="book">Book</option>
                        <option value="cd">Cds</option>
                    </select>
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{$products->title}}" name="title" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Title</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{$products->firstname }}" name="firstname" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Firstname</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{$products->mainname }}" name="mainname" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Mainname</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{$products->price }}" name="price" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Price</label>
                        </div>
                        @if(($products->type)=="cd")
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{$products->playlength }}" name="playpg" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Playlength</label>
                        </div>
                        @elseif(($products->type)=="book")
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{$products->numberofpages }}" name="playpg" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"> NumberPages </label>
                        </div>
                        @endif
                        <div class="button">
                        <a href=""
                        ><button type="submit" class="btn btn-dark btn-md float-right" style="margin-top: 1rem;">Update</button>
                        <a button type="button" class="btn btn-secondary btn-md float-right" style="margin-top: 1rem;" href="{{ url('/') }}" >Go Back</button></a>
                        </a>
                        </form>
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection