@extends('Model')
@extends('Layout.master')
@section('Title')

    <title>Add Form</title>
<style>

</style>
    
@endsection

@section('bodycontent')
<div class="container">

    <div class="Welcome">
    <div class="card w-75" style="margin: 2rem;">
            <div class="card-body">
                <h5 class="card-title">Add Form</h5>
                    <form method = "POST" action="/Addform">
                     @csrf
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option value="book">Book</option>
                        <option value="cd">Cds</option>
                    </select>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="title" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Title</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="firstname" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">firstname</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="mainname" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">surname</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="price" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Price</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="playpg" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Pages / Playlength</label>
                        </div>
                        <div class="button">
                        <a href=""
                        ><button type="submit" class="btn btn-dark mb-3 float-right" style="margin-top: 1rem;">Add</button>
                        </a>
                        <a button type="button" class="btn btn-secondary mb-3 float-right" style="margin-top: 1rem;" href="{{ url('/') }}" >Go Back</button></a>
                        
                        </form>
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection

