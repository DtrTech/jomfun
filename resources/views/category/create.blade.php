@extends('layouts.app')

@section('content')
<div class="middle-content container-xxl p-0">
    <div class="secondary-nav">
        <div class="breadcrumbs-container" data-page-heading="Analytics">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </a>
                <div class="d-flex breadcrumb-content">
                    <div class="page-header">
                        <div class="page-title"></div>
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Category</li>
                                <li class="breadcrumb-item">Create</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div id="basic" class="col-lg-10 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Category Details</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area" style="padding: 3px 15px">
                    <div class="row">
                        <form enctype="multipart/form-data" @if (isset($category)) method="post" action="{{ route('category.update',$category->id) }}" @else method="post" action="{{ route('category.store') }}" @endif>
                            @csrf
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Category name</label>
                                    <input type="text" name="category_name" placeholder="category name..." class="form-control" value="{{ $category->category_name ?? '' }}" required>
                                </div>
                            </div>

                            <!-- <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input type="file" name="category_image" class="form-control" accept="image/*" onchange="previewImage(event)">

                                    <div class="mt-2">
                                        @if(!empty($category->category_image))
                                            <div id="currentImageDiv">
                                                <p><strong>Current Image:</strong></p>
                                                <img id="currentImage" 
                                                    src="{{ $category->category_image }}" 
                                                    alt="Current Category Image" 
                                                    width="200" 
                                                    style="border: 1px solid #ddd; margin-bottom: 10px;">
                                            </div>
                                        @endif
                                        
                                        <div id="newImageDiv" style="display:none;">
                                            <p><strong>New Image Preview:</strong></p>
                                            <img id="imagePreview" src="" alt="New Category Image" width="200" style="border: 1px solid #ddd;">
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <button type="submit" class="mt-2 btn btn-primary float-right" style="margin-right:10px">Save</button>
                            <a href="{{ route('category.index') }}" class="mt-2 btn btn-warning float-right" style="margin-right:10px">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
function previewImage(event) {
    const input = event.target;
    const imagePreview = document.getElementById('imagePreview');
    const newImageDiv = document.getElementById('newImageDiv');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            newImageDiv.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        newImageDiv.style.display = 'none';
    }
}
</script>
@endsection
