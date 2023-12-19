
@extends('app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Module 11 Project</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ url('create') }}"> Add Product</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>quantity</th>
            <th>price</th>
            <th width="280px">Action</th>
        </tr>
        </table>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product-> quantity}}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form action="" method="POST">
      
                    <a class="btn btn-info" href="">Show</a>
       
                    <a class="btn btn-primary" href="">Edit</a>
      
                    <!-- @csrf
                    @method('DELETE') -->
         
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    @endsection