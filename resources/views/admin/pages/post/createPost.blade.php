 <!-- include libraries(jQuery, bootstrap) -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@extends('admin.index')
@section('content')
    <!-- forms -->
    <section class="forms">
            <!-- horizontal forms-->
            <!-- forms 3 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Create Post <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label input__label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control input-style" id="inputEmail3"
                                    placeholder="Post Title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">Category</label>
                            <div class="col-sm-10">
                            <select class="custom-select input-style" required>
                                <option value="">Select Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">Description</label>
                            <div class="col-sm-10">
                                     <textarea class="form-control" name="summernote" id="summernote"></textarea>                       
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">Image</label>
                            <div class="col-sm-10">
                                    <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                             </div>
                         </div>

                                    
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-style">Sign in</button>
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
        height: 400
    });
</script>

@endsection