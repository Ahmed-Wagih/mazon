@extends('app')

@section('content')
<section class="m-5">

    <div class="container">
        <div class="row">
            <div class="col-lg">
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Total</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">#{{ $invoice->id }}</th>
                            <td>{{ $invoice->product_name }}</td>
                            <td>{{ $invoice->price }}</td>
                            <td>{{ $invoice->quantity }}</td>
                            <td>{{ $invoice->customer_name }}</td>
                            <td>{{ $invoice->customer_phone }}</td>
                            <td>{{ $invoice->total }}</td>
                            <td>
                                <a class="btn btn-success col-md-4" href=" {{ route('invoices.edit', $invoice->id) }} ">Edit</a>
                                <form  class="col-lg-4" action="{{ route('invoices.destroy', $invoice->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
@endsection