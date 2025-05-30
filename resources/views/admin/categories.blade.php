@extends('layouts.appadmin')

@section('title')
    Catégories
@endsection

@section('contenu')
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Catégories</h4>
          @if (Session::has('status'))
          <div class="alert alert-success">
            {{Session::get('status')}}
          </div>
          @endif
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Nom de la catégorie</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $counter = 1; @endphp
                    @foreach ($categories as $category)
                    <tr>
                      <td>{{$counter}}</td>
                      <td>{{$category->category_name}}</td>
                      {{-- <td>
                        <label class="badge badge-danger">Pending</label>
                      </td> --}}
                      <td>
                        <button class="btn btn-outline-primary" onclick="window.
                        location ='{{url('/edit_categorie',[$category->id])}}'">Edit</button>
                        <a href="{{url('/supprimercategorie',[$category
                        ->id])}}" id="delete" class="btn btn-outline-danger">Delete</a>
                      </td>
                  </tr>  
                      @php $counter++ @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
    <script src="backend/js/data-table.js"></script>
@endsection