@extends('layouts.appadmin')

@section('title')
    Commandes
@endsection

@section('contenu')
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Commandes</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Nom du client</th>
                        <th>Adresse</th>
                        <th>Panier</th>
                        <th>Payment id</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>10</td>
                        <td>2003/12/26</td>
                        <td>2003/12/26</td>
                        <td>2003/12/26</td>
                        <td>2003/12/26</td>
                        <td>
                            <button class="btn btn-outline-primary">Edit</button>
                          </td>
                    </tr>
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