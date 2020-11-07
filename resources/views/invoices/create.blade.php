@extends('app')

@section('content')
<section class="m-5">

    <div class="container">
        <div class="row">
            <div class="col-lg">
                <form action="{{ route('invoices.store') }}" method="POST">
                    @csrf
                    {{-- Product Name --}}
                    <div class="form-group">
                      <label for="productName">Product Name</label>
                      <input type="text" name="product_name" class="form-control" id="productName" placeholder="Product Name">
                    </div>

                    {{-- Price --}}
                    <div class="form-group">
                      <label for="Price">Price</label>
                      <input type="number" name="price" class="form-control" id="Price" placeholder="price">
                    </div>

                    {{-- Quintity --}}
                    <div class="form-group">
                        <label for="quantity">Quintity</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="quantity">
                    </div>

                    {{-- Customer Name --}}
                    <div class="form-group">
                        <label for="customer_name">Customer Name</label>
                        <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Customer Name">
                    </div>

                    {{-- Phone Number --}}
                    <div class="form-group">
                        <label for="customer_phone">Phone Number</label>
                        <input type="text" name="customer_phone" class="form-control" id="customer_phone" placeholder="Phone Number">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Invoice</button>
                  </form>
            </div>
        </div>
    </div>

</section>
@endsection