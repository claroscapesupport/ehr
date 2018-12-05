@extends('layouts.app')

@section('content')
	<h1>Create Post</h1>

	 <div class="col-md-8 order-md-1">
    <form class="needs-validation" action="/posts" method="post" enctype="multipart/form-data">
    	  
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="" value="" name="title" required >
            <div class="invalid-feedback">
              Title is required
            </div>
          </div>
        </div>

         <div class="mb-3">
          <label for="short_description">Short Description</label>
          <input type="text" class="form-control" id="short_description" placeholder="" name="short_description">
          <div class="invalid-feedback">
            Short description is required
          </div>
        </div>

        <div class="mb-3">
          <label for="body">Body</label>
          <textarea class="form-control" rows="5" id="body" name="body"></textarea>
          <div class="invalid-feedback">
            Body is required
          </div>
        </div>

        <div class="mb-3">
          <div class="custom-file">
            <input type="file" class="form-control-file" id="cover_image" name="cover_image">
            <label class="custom-file-label" for="cover_image">Choose file</label>
          </div>
        </div>
        <hr class="mb-4">
        <input type="submit" class="btn btn-primary" value="Create" name="submit">
    </form> 
	</div>
  
 


@endsection

@section('footer')

@endsection  