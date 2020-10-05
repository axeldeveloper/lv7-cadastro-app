@extends('products.layout')
   
@section('content')
<div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Edit Product
            </p>         
        </header>
        <div class="card-content">              
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
  
        <form action="{{ route('products.update',$product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="field">
            <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" value="{{ $product->name }}" placeholder="Text input">
                </div>
            </div>

            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="detail">{{ $product->detail }}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Submit</button>
                </div>
                <div class="control">
                    <a class="button is-primary" href="{{ route('products.index') }}"> 
                        Back
                    </a>
                </div>
                <div class="control">
                    <a class="button is-primary" href="{{ route('products.create') }}"> 
                        Create New Product
                    </a>
                </div>


            </div>
                
        </form>


        </div>
    </div>






   
    


@endsection