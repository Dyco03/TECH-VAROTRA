@extends('layouts.appadmin')

@section('contenu')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Slider</h4>
              @if (Session::has('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
            @endif
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif
              <form class="cmxform" id="commentForm" method="POST" action={{url("modifierslider",[$slider->id])}} enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="cname">Description one (required, at least 2 characters)</label>
                    <input id="cname" class="form-control" name="description1" minlength="2" type="text" value="{{$slider->description1}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="cname">Description two (required, at least 2 characters)</label>
                    <input id="cname" class="form-control" name="description2" minlength="2" type="text" value="{{$slider->description2}}">
                  </div>

                  <div class="form-group">
                    <label for="cname">Image (required, at least 2 characters)</label>
                    <input id="cname" class="form-control" name="slider_image" minlength="2" type="file">
                  </div>

                  <input class="btn btn-primary" type="submit" value="Modifier">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection

  @section('scripts')
  <script src="js/form-validation.js"></script>
  <script src="js/bt-maxLength.js"></script>
  @endsection


