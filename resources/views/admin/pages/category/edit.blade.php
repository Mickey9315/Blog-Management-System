@extends('admin.index')
@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

<div class="card card_border py-2 mb-4">
                <div class="card-body">
                <div class="cards__heading">
                     <h3>Update Category</h3>
                </div>
                    <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                    @method('put')
                     @csrf
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Name</label>
                            <input value="{{$category->name}}" name="name" type="text" class="form-control input-style" id="inputAddress"
                                placeholder=" Category name">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" class="input__label">Image</label>
                            
                                    <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile"></label>
                                            <img class="p-4" style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/'.$category->image)}}" alt="product">
                                        </div>    
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Save</button>
                        <a href="{{route('category.list')}}" class="btn btn-danger btn-style mt-4">Back</a>
                    </form>
                </div>
            </div>
@endsection