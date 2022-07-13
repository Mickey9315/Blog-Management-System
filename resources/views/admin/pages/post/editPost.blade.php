 <!-- include libraries(jQuery, bootstrap) -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@extends('admin.index')
@section('content')

@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif
    <!-- forms -->
    <section class="forms">
            <!-- horizontal forms-->
            <!-- forms 3 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Update Post <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label input__label">Title</label>
                            <div class="col-sm-10">
                                <input value="{{$post->title}}" name="title" type="text" class="form-control input-style" id="inputEmail3"
                                    placeholder="Post Title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">Category</label>
                            <div class="col-sm-10">
                            <select value="{{$post->category}}" name="category" class="custom-select input-style" required>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">Description</label>
                      
                            <div class="col-sm-10">
                                     <textarea value="{{$post->description}}" name="description" class="form-control"  id="summernote">{!! $post->description !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">Image</label>
                            <div class="col-sm-10">
                                    <div class="custom-file">
                                            
                                            <input name='image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                                        </div>
                                        <img class="mt-4" style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$post->image)}}" alt="Not found">
                             </div>
                         </div>

                                    
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-style">Save</button>
                                <a href="{{route('post.list')}}" class="btn btn-danger btn-style">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>     
          </div>
     </div>
            <!-- // -->
            <!-- supported elements -->

        </section>
        <!-- //forms -->
        </section>

<!-- summernote css/js -->
<script type="text/javascript">
    $('#summernote').summernote({
        height: 200     
    });
   
</script>

@endsection