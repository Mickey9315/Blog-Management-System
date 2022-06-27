@extends('admin.index')
@section('content')
  <!-- cards -->
  <section class="template-cards">
        <!-- Card Columns -->
        <div class="card card_border mb-5">
          <div class="cards__heading">
            <h3>Posts List</h3>
            <div class="d-flex justify-content-end">
            <a  type="button" class="btn btn-primary " href="{{route('post.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add Post</a>
            </div>
          </div>
          <div class="card-body">
            
           
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tital</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($posts as $key=>$post)
                        <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->category->name}}</td>
                        <td>{{(strip_tags($post->description))}}</td>
                        <td>
                         <img src="{{url('/uploads/'.$post->image)}}" width="100px" alt="File not found">
                        
                        </td>
                        <td>
                              <a class='btn btn-info btn-sm m-2' href="#">Edit</a>
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