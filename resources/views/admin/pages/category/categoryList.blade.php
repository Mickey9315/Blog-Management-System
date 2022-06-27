@extends('admin.index')
@section('content')
  <!-- cards -->
  <section class="template-cards">
        <!-- Card Columns -->
        <div class="card card_border mb-5">
          <div class="cards__heading">
            <h3>Category List</h3>
            <div class="d-flex justify-content-end">
            <a  type="button" class="btn btn-primary " href="{{route('createCategory')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add category</a>
            </div>
          </div>
          <div class="card-body">
            
           
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $key=>$category)
                        <tr>       
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$category->name}}</td>
                        <td>
                          <img src="{{url('/uploads/'.$category->image)}}" width="100px" alt="Not found">
                        </td>
                        <td>
                            
                              <a class='btn btn-info btn-sm' href="{{route('category.edit',$category->id)}}">Edit</a>
                              <a class='btn btn-danger btn-sm' href="#" onclick="return confirm('Are you sure to Delete??')">Delete</a>

                        </td>
                        </tr>
                        @endforeach 
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