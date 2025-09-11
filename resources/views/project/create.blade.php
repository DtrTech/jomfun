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
                                <li class="breadcrumb-item">Project</li>
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
                            <h4>Project Details</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area" style="padding: 3px 15px">
                    <div class="row">
                        <form enctype="multipart/form-data" @if (isset($project)) method="post" action="{{ route('project.update',$project->id) }}" @else method="post" action="{{ route('project.store') }}" @endif>
                            @csrf
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Project Title</label>
                                    <textarea id="title" name="title" class="form-control" rows="2" placeholder="Enter project title...">{{ $project->title ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <textarea id="sub_title" name="sub_title" class="form-control" rows="2" placeholder="Enter sub title...">{{ $project->sub_title ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="10" placeholder="Enter description...">{{ $project->description ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" placeholder="author..." class="form-control" value="{{ $project->author ?? '' }}" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Publish Date</label>
                                    <input type="text" name="publish_date" placeholder="publish date..." class="form-control" value="{{ $project->publish_date ?? '' }}" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="active" {{ (isset($product->status) && $product->status === 'active') ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ (isset($product->status) && $product->status === 'inactive') ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Project Image</label>
                                    <input type="file" name="project_image" class="form-control" accept="image/*" onchange="previewImage(event)">

                                    <div class="mt-2">
                                        @if(!empty($project->project_image))
                                            <div id="currentImageDiv">
                                                <p><strong>Current Image:</strong></p>
                                                <img id="currentImage" 
                                                    src="{{ $project->project_image }}" 
                                                    alt="Current Project Image" 
                                                    width="200" 
                                                    style="border: 1px solid #ddd; margin-bottom: 10px;">
                                            </div>
                                        @endif
                                        
                                        <div id="newImageDiv" style="display:none;">
                                            <p><strong>New Image Preview:</strong></p>
                                            <img id="imagePreview" src="" alt="New Project Image" width="200" style="border: 1px solid #ddd;">
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <button type="submit" class="mt-2 btn btn-primary float-right" style="margin-right:10px">Save</button>
                            <a href="{{ route('project.index') }}" class="mt-2 btn btn-warning float-right" style="margin-right:10px">Back</a>
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
