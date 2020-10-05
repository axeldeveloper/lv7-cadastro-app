@extends('products.layout')
@section('content')
<div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Show Product
            </p>         
        </header>
        <div class="card-content">              
            
            

                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                            {{ $product->name }}
                    </div>
                </div>

                <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                        {{ $product->detail }}
                    </div>
                </div>

                <div class="field is-grouped">
                    
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
                    
            

        </div>
</div>

@endsection