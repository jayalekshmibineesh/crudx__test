@extends('index1')
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {!!session('success')!!}
</div>
@endif
          <div class="card" style="background-color:skyblue; with:50%;border-radius: 15px; margin-top:20%;">
    
              <h3 class="text-uppercase text-center mb-5"> Appartments</h3>
              <form action="" method="POST">
                @csrfgit

                <div class="form-outline mb-4">
                  <input type="text" id=""name="appartment_name" value="{{$data->appartment_name}}"class="form-control form-control-sm" />
                  <input type="text" id=""name="location"  value="{{ $data->location }}"class="form-control form-control-sm mt-2" />
                  <input type="number"name="no_of_flats" id="" value="{{$data->no_of_flats}}" class="form-control form-control-sm mt-2" />
                 <button type="submit" class="btn btn-primary"name="submit" value="update">edit</button>
            </div>
              </form>

            
          </div>
         

@endsection