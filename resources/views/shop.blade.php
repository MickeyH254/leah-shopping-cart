@extends("layouts.front")

@section("page")
<div class="container">
    <div class="row pt120">

    <div class="books-grid">
    
    <div class="row mb30">
   
    @foreach($products as $product)

        @include('shop.menu')
    
    @endforeach
    
        
    </div>

    <div class="row pb120">

        <div class="col-lg-12">{{ $products->links() }}</div>

    </div>
</div>

@endsection