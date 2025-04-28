@extends('layouts.appadmin')

@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Ajouter Catégorie</h4>
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
              <form class="cmxform" id="commentForm" method="POST" action={{url("sauvercategorie")}}>
                @csrf
                  <div class="form-group">
                    <label for="cname">Name (required, at least 2 characters)</label>
                    <input id="cname" class="form-control" name="category_name" minlength="2" type="text">
                  </div>
                  <input class="btn btn-primary" type="submit" value="Ajouter">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

  @section('scripts')
  <script src="js/form-validation.js"></script>
  <script src="js/bt-maxLength.js"></script>
  @endsection


