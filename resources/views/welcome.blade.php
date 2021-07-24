@extends('Model')
@extends('Layout.master')
@section('Title')
    <title>Perform CRUD Operation</title>
@endsection

@section('bodycontent')
<div class="container">
    <div class="Welcome" >
    <div class="card w-75" style="margin: 2rem;">
    
            <div class="card-body">
                <h5 class="card-title">Books</h5>
                    <table class="table table-dark table-hover">
                       
                            <thead>
                                <tr>
                                <th scope="col">Title</th>
                                <th scope="col">FullName</th>
                                <th scope="col">Price</th>
                                <th scope="col">NumberofPages</th>
                                @if (session('role')==1)
                                <th class="text-left">Actions</th>
                                @endif
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($books as $product)
                                <tr>
                                 <td>{{$product[1]}}</td>
                                <td>{{$product[2]." ".$product[3]}}</td>
                                <td> £ {{$product[4]}}</td>
                                <td>{{$product[5]}}</td>
                                @if((session('role'))==1)
                                <td class="text-right">
                                <a href="{{url ('UpdateForm/'. $product[0]) }}"> <button class = "btn btn-success ">Edit </button></a>
                                <a href="{{url ('Deleteform/'. $product[0]) }}"> <button class = "btn btn-danger ">Delete </button></a>
                                </td>
                                @endif
                                </tr>
                                @endforeach
                            </tbody>
                        
                    </table>
                
            </div>
        </div>

        <div class="card w-75" style="margin: 2rem;">
            <div class="card-body">
                <h5 class="card-title">CDs</h5>
                <table class="table table-dark table-hover">
                       
                       <thead>
                           <tr>
                           <th scope="col">Title</th>
                                <th scope="col">FullName</th>
                                <th scope="col">Price</th>
                                <th scope="col">PlayLength</th>
                                @if (session('role')==1)
                                <th class="text-left">Actions</th>
                                @endif
                           </tr>
                       </thead>
                       <tbody>
                       @foreach ($cds as $product)
                                <tr>
                                 <td>{{$product[1]}}</td>
                                <td>{{$product[2]." ".$product[3]}}</td>
                                <td> £ {{$product[4]}}</td>
                                <td>{{$product[5]}}</td>
                                @if((session('role'))==1)
                                <td class="text-right">
                                <a href="{{url ('UpdateForm/'. $product[0]) }}"> <button class = "btn btn-success ">Edit </button></a>
                                <a href="{{url ('Deleteform/'. $product[0]) }}"> <button class = "btn btn-danger ">Delete </button></a>
                                </td>
                                @endif
                                </tr>
                                @endforeach
                                
                       </tbody>
                   
               </table>
                
            </div>
        </div>

    </div>
@if((session('role'))==1)
    <div class="mx-auto" style="width: 200px;">
    <a href="/Addform"><button type="button" class="btn btn-info" style="margin-top: 0rem;">Add </button></a>
</div>
@endif
</div>
</div>
@endsection


