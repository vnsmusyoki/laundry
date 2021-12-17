@extends('admin.layout')
@section('title', 'Create New Laundry')
@section('content')


    <div class="row">
        <div class="col-md-6">
            <div id="checkout-form-wizard">
                <h3>Billing</h3>
                <section class="card card-body mb-0">
                    <div class="mb-4">
                        <h6 class="card-title mb-3">Billing</h6>
                        <div class="text-muted">Transaction Code - <strong><span style="text-transform: uppercase;color:red;letter-spacing:2px;">{{ $order->transaction_code }}</span></strong></div>
                    </div>
                    <form action="{{ url('collector/payments-verdict/' . $order->id) }}" method="POST" autocomplete="off">
                        @method('PATCH')
                        @csrf
                        <div class="row g-4 mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Order Status</label>
                                <select name="payment_verdict" id="" class="form-control">
                                    <option value="">Select an option</option>
                                    <option value="Accept">Accept</option>
                                    <option value="Deny">Deny/Not Received</option>
                                </select>
                                @error('payment_verdict')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-danger mb-5">Submit Payment Verdict Now</button>
                        </div>
                    </form>

                    <div class="mt-5">
                        <h5><strong>Luggage Description</strong></h5>
                        <p>{{ $order->additional_description }}</p>
                    </div>


                </section>

            </div>
        </div>
        <div class="col-md-6">
            <h5 class="mb-4">Order Summary</h5>
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Luggage</h6>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex px-0">
                            <a href="#" class="me-3">
                                <img src="{{ asset('storage/laundry/' . $order->picture) }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="list-group list-group-flush">
                        <table class="table table-bordered">
                            <thead>
                                <th>#</th>
                                <th>Item</th>
                                <th>Desc</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Category</td>
                                    <td>{{ $order->luggage_category }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Date Uploaded</td>
                                    <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Order ID</td>
                                    <td>{{ $order->laundry_id }}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Owned By</td>
                                    <td>{{ $order->laundryuser->name }}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>CheckPoint Phone Number</td>
                                    <td>{{ $order->laundrycheckpoint->phone_number }}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Number of Pieces</td>
                                    <td>{{ $order->number_of_pieces }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
