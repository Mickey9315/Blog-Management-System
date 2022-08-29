@extends('admin.index')
@section('content')
<div class="card card_border py-2 mb-4">
                <div class="card-body">
                <div class="cards__heading">
                     <h3>Create Category</h3>
                </div>
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                     @csrf
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Name</label>
                            <input name="name" type="text" class="form-control input-style" id="inputAddress"
                                placeholder=" Category name">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Slug</label>
                            <input name="slug" type="text" class="form-control input-style" id="inputAddress"
                                placeholder=" Slug">
                        </div>

                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Description</label>
                            <textarea name="description" class="form-control input-style" id="inputAddress" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" class="input__label">Image</label>
                            
                                    <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>    
                        </div>

                        <h4>SEO Tag</h4> <hr>
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Meta Title</label>
                            <input name="meta_title" type="text" class="form-control input-style" id="inputAddress"
                                placeholder=" Meta Title">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Meta Description</label>
                            <textarea name="meta_description" class="form-control input-style" id="inputAddress" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Meta Keyword</label>
                            <textarea name="meta_keyword" class="form-control input-style" id="inputAddress" cols="30" rows="5"></textarea>
                        </div>

                        <h4>Status Mode</h4><hr>
                        <div class="form-group">
                            <label for="inputAddress" class="input__label ">Navbar Status</label>
                            <input name="navbar_status" type="checkbox" class="ml-3" id="inputAddress">
                            
                            <label for="inputAddress" class="input__label ml-3">Status</label>
                            <input name="status" type="checkbox" class="ml-3" id="inputAddress">
                        </div>

                        <button type="submit" class="btn btn-primary btn-style mt-4">Save</button>
                        <a href="{{route('category.list')}}" class="btn btn-danger btn-style mt-4">Back</a>
                    </form>
                </div>
            </div>
@endsection