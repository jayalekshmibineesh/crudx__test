@extends('index1')
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {!!session('success')!!}
</div>
@endif
          <div class="card" style="background-color:skyblue; with:50%;border-radius: 15px; margin-top:20%;">
    
              <h3 class="text-uppercase text-center mb-5">Add Appartments</h3>
              <form action="{{route('add_apmt')}}" method="POST">
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id=""name="appartment_name"  placeholder="Enter name"class="form-control form-control-sm" />
                  <input type="text" id=""name="location" placeholder=" Enterlocation "class="form-control form-control-sm mt-2" />
                  <input type="number"name="no_of_flats" id=""placeholder="Enter Number of flats" class="form-control form-control-sm mt-2" />

                 <button type="submit" class="btn btn-primary"name="submit" value="AddAppartment">Add appartment</button>
            </div>
              </form>

            
          </div>
         

@endsection