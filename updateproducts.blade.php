@extends('layouts.farmerhomelayout')
  @section('form')
  <section id="innerBanner">
    <div class="inner-content">
      <h2><span>Farmer</span><br />We provide high-quality Products</h2>
      <div></div>
    </div>
  </section>

    <main id="main">
      <section id="about" class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 about-img">
            <img src="../static/img/nissan.jpg" alt="" />
            </div>

            <div class="col-lg-6 content">
              <h4>Welcome to Agri Farmer</h4>
                          @if(Session::has('success'))
                <div style="color: green;">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if(Session::has('error'))
                <div style="color: red;">
                    {{ Session::get('error') }}
                </div>
            @endif

            <form name="form1" action="{{ route('updateproductpost') }}" method="POST" enctype="multipart/form-data">
              @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-4">
                    Agri Product Name 
                  </div>

                  <div class="col-md-6">
                    <input
                     type="text"
                     name="product" 
                     class="form-control" 
                     placeholder="" 
                     value="{{ $product }}"
                     required 
                     readonly
                     />
                  </div>
                </div>
                <br />
                <div class="row">
                  <div class="col-md-4">
                    Quantity
                  </div>

                  <div class="col-md-6">
                    <input
                     type="text"
                     name="qty" 
                     class="form-control" 
                     placeholder="" 
                     required 
                     />
                  </div>
                </div>
                <br />
                <div class="row">
                  <div class="col-md-4">
                    Price
                  </div>

                  <div class="col-md-6">
                    <input 
                    type="text" 
                    name="price" 
                    class="form-control" 
                    placeholder="" 
                    required 
                    />
                  </div>
                </div>
                <br />
                

                <div class="row">
                  <div class="col-md-4">
                    Product Image
                  </div>

                  <div class="col-md-6">
                    <input
                     type="file"
                     name="file" 
                     class="form-control" 
                     placeholder="" 
                     required 
                     />
                  </div>
                </div>

                <br />
        <input type="hidden" id="id" name="id" value="{{ $id }}" readonly>

        <br>

        <input type="hidden" id="product" name="product" value="{{ $product }}">

        <br>
                <div class="row">
                  <div class="col-md-4"></div>

                  <div class="col-md-6 text-center"> 
                    <input type="submit" name="btn" class="btn" value="Add" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

      
@endsection

