@extends('layouts.appadmin')

@section('contenu')
      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Ajouter Produit</h4>
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
              <form class="cmxform" id="commentForm" method="POST" action={{url("modifierproduit",[$product->id])}} enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="form-group">
                    <label for="cname">Nom du produit (required, at least 2 characters)</label>
                    <input id="cname" class="form-control" name="product_name" minlength="2" type="text" value="{{$product->product_name}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="cname">Prix du produit (required, at least 2 characters)</label>
                    <input id="cname" class="form-control" name="product_price" minlength="2" type="number" value="{{$product->product_price}}">
                  </div>

                  <div class="form-group">
                    <label for="category">Catégorie du produit (required, at least 2 characters)</label>
                    <select id="category" class="form-control" name="product_category">
                      @foreach ($categories as $category_name)
                      <option value="{{$category_name}}" {{($product->product_category == $category_name)?'selected':''}}>{{$category_name}}</option>
                      @endforeach  
                    </select>
                  </div> 
                  <div class="form-group">
                    <label for="cname">Image (required, at least 2 characters)</label>
                    <input id="cname" class="form-control" name="product_image" minlength="2" type="file">
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


