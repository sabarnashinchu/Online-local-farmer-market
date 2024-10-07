@extends('layouts.providerhomelayout')
  @section('form')
  
    <main id="main">
      <section id="about" class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 about-img">
            <img src="../static/img/nissan.jpg" alt="" />
            </div>

            <div class="col-lg-6 content">
              <h4>Welcome to Agri Provider</h4>
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

            <form name="form1" action="{{ route('updatevehiclepost') }}" method="POST" enctype="multipart/form-data">
              @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-4">
                    Equipment Name / Model
                  </div>

                  <div class="col-md-6">
                    <input
                     type="text"
                     name="vehicle" 
                     class="form-control" 
                     placeholder="" 
                     value="{{ $vehicle }}"
                     required 
                     readonly
                     />
                  </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-4">
                      Equipment No.
                    </div>
  
                    <div class="col-md-6">
                      <input
                       type="text"
                       name="vno" 
                       class="form-control" 
                       placeholder="" 
                       required 
                       />
                    </div>
                  </div>
                  <br />
                  <div class="row">
                    <div class="col-md-4">
                      Specification
                    </div>
  
                    <div class="col-md-6">
                      <input 
                      type="text" 
                      name="details" 
                      class="form-control" 
                      placeholder="" 
                      required 
                      />
                    </div>
                  </div>
                  <br />
                  <div class="row">
                    <div class="col-md-4">
                      Rent - Cost Per hour
                    </div>
  
                    <div class="col-md-6">
                      <input 
                      type="text" 
                      name="cost1" 
                      class="form-control" 
                      placeholder="" 
                      required 
                      />
                    </div>
                  </div>
                  <br />
                  <div class="row">
                    <div class="col-md-4">
                      Rent - Cost Per Day
                    </div>
  
                    <div class="col-md-6">
                      <input 
                      type="text" 
                      name="cost2"
                       class="form-control" 
                       placeholder="" 
                       required 
                       />
                    </div>
                  </div>
  
                  <br />
                  <div class="row">
                    <div class="col-md-4">
                      Equipment Photo
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

        <input type="hidden" id="product" name="vehicle" value="{{ $vehicle }}">

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

