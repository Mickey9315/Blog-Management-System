@extends('admin.index')
@section('content')
<div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                     @csrf
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Name</label>
                            <input name="name" type="text" class="form-control input-style" id="inputAddress"
                                placeholder=" Category name">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" class="input__label">Image</label>
                            
                                    <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>    
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Save</button>
                    </form>
                </div>
            </div>
@endsection