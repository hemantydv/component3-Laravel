@extends('Model')
@extends('Layout.master')
@section('Title')

    <title>CD Edited Form</title>
<style>

</style>
    
@endsection

@section('bodycontent')
<div class="container">
    <div class="Welcome">
    <div class="card w-75" style="margin: 2rem;">
            <div class="card-body">
                <h5 class="card-title">CD Edited Form</h5>
                    <form method = "POST" action="{{url ('Bookform/'. $cdproduct->getId()) }}">
                     @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{old('title') ?? $cdproduct->getTitle() }}" name="title" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Title</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{old('title') ?? $cdproduct->getFirstName() }}" name="firstname" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Firstname</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{old('title') ?? $cdproduct->getMainName() }}" name="mainname" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Mainname</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{old('title') ?? $cdproduct->getPrice() }}" name="price" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Price</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" value="{{old('title') ?? $cdproduct->getplayLength() }}" name="playpg" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"> NumberPages </label>
                        </div>
                        <div class="button">
                        <a href=""
                        ><button type="submit" class="btn btn-dark btn-md float-right" style="margin-top: 1rem;">Update</button>
                        </a>
                        <a button type="button" class="btn btn-secondary btn-md float-right" style="margin-top: 1rem;" href="{{ url('/') }}" >Go Back</button></a>
                        </form>
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection