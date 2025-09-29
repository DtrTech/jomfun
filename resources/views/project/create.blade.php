@extends('layouts.app')

<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

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
                                    <label>Page SEO</label>
                                    <textarea id="page_seo" name="page_seo" class="form-control" rows="10" placeholder="Enter page seo...">{{ $project->page_seo ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" 
                                                {{ (isset($project) && $project->category_id == $category->id) ? 'selected' : '' }}>
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Project Image (Recommend 344 X 194px)</label>
                                    <input type="file" name="project_image" class="form-control" accept="image/*" onchange="previewImage(event)">

                                    <div class="mt-2">
                                        <img id="imagePreview" src="{{ $project->project_image ?? '' }}" 
                                            alt="Project Image" 
                                            width="100" 
                                            @if(empty($project->project_image)) style="display:none;" @endif>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Project Title</label>
                                    <textarea id="title" name="title" class="form-control" rows="2" placeholder="Enter project title..." required>{{ $project->title ?? '' }} </textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <textarea id="sub_title" name="sub_title" class="form-control" rows="2" placeholder="Enter sub title..." required>{{ $project->sub_title ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="description" name="description" class="form-control summernote" rows="10" placeholder="Enter description..." required>{{ $project->description ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Author Image</label>
                                    <input type="file" name="author_image" class="form-control" accept="image/*" onchange="previewImage(event)">

                                    <div class="mt-2">
                                        <img id="imagePreview" src="{{ $project->author_image ?? '' }}" 
                                            alt="Author Image" 
                                            width="100" 
                                            @if(empty($project->author_image)) style="display:none;" @endif>
                                    </div>
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
                                    <label>Publish Date & Time</label>
                                    <input type="text" id="publish_time" name="publish_time" class="form-control" placeholder="Select date and time" value="{{ $project->publish_time ?? '' }}" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="active" {{ (isset($project->status) && $project->status === 'active') ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ (isset($project->status) && $project->status === 'inactive') ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>

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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#publish_time", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        defaultDate: "{{ isset($project->publish_time) ? $project->publish_time : '' }}"
    });
</script>

<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            placeholder: 'Write project description here...',
            tabsize: 2,
            height: 500,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['fontsize', 'color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']], 
                ['view', ['fullscreen', 'codeview']]
            ],
            callbacks: {
                onInit: function() {
                    $('.summernote').next().find('.note-editable').css('color', '#009688');
                },
                onImageUpload: function(files) {
                    let data = new FormData();
                    data.append("file", files[0]);
                    data.append("_token", "{{ csrf_token() }}");

                    $.ajax({
                        url: "{{ route('project.summernote.upload') }}",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: data,
                        type: "POST",
                        success: function (response) {
                            if (response.url) {
                                $('.summernote').summernote('insertImage', response.url);
                            }
                        },
                        error: function (xhr) {
                            alert("Upload failed: " + xhr.responseText);
                        }
                    });
                }
            }
        });
    });
</script>
@endsection
