@extends('layouts.appuser')

@section('content')
 <div class="container">
 <div class="row" style="margin-top:15px;">

     @foreach($data_blog as $blog)
      <div class="col-md-3">
        <div class="card h-100 shadow p-3 bg-white rounded">
          <img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded mx-auto d-block card-img-top" alt="..." style="width: 200px;">
          <div class="card-body">
            <h5 class="card-title">
              {{$blog->title}}
            </h5>
            <p class="card-text">
              {!! $blog->content !!}
            </p>
          </div>
          <div class="footer text-center d-grid gap-2 ">
            <a class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop" role="button">Order</a>
          </div>
        </div>
      </div>
       @endforeach

    </div>


    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Details Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <main>


    <div class="row">
      <div class="row">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="firstName" class="form-label">Nama pembeli</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-8">
              <label for="country" class="form-label">Ekspedisi</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>JNE</option>
                <option>J&T</option>
                <option>Si Cepat</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            

            <div class="col-md-4">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr>

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Transfer Bank</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Virtual Account</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Cash On Delivery</label>
            </div>
          </div>

          
          <hr>

          <button class="w-100 btn btn-primary btn-lg" herf="#" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>
      </div>
      
    </div>
  </div>
</div>


</div>
@endsection
