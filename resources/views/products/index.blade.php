@extends('products.layout')
 
@section('content')
   
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Produtos List
            </p>         
        </header>
        <div class="card-content">   
            <a class="button is-primary" href="{{ route('products.create') }}"> 
                Create New Product
            </a>

            <table class="table is-fullwidth is-striped">  
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
        
                            <a class="button is-info" href="{{ route('products.show',$product->id) }}">Show</a>
            
                            <a class="button is-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
        
                            @csrf
                            @method('DELETE')
            
                            <button type="submit" class="button is-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
  
            {!! $products->links() !!}
                                                        
        </div>
    </div>



    
@endsection