@extends('admin.index')
@section('content')
  <!-- cards -->
  <section class="template-cards">
        <!-- Card Columns -->
        <div class="card card_border mb-5">
          <div class="cards__heading">
            <h3>Category List</h3>
            <div class="d-flex justify-content-end">
            <a  type="button" class="btn btn-primary " href="{{route('category.list')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add category</a>
            </div>
          </div>
          <div class="card-body">
            
           
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
              </div>
              
              </div>
            </div>
          </div>
        </div>
        <!-- /Card Columns -->

      

      </section>
      <!-- //cards -->
@endsection