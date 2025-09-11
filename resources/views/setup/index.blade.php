@extends('layouts.app')

@section('content')
<div class="middle-content container-xxl p-0">

    <!--  BEGIN BREADCRUMBS  -->
    <div class="secondary-nav">
        <div class="breadcrumbs-container" data-page-heading="Analytics">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </a>
                <div class="d-flex breadcrumb-content">
                    <div class="page-header">
                        <div class="page-title">
                        </div>
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Setup</li>
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
            <div class="">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Setup Details</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area" style="padding: 3px 15px">

                    <div class="row" >
                        <form enctype="multipart/form-data" @if (isset($setup)) method="post" action="{{ route('setup.update',$setup->id) }}" @else method="post" action="{{ route('setup.store') }}" @endif>
                        @csrf 
                        <div class="col-lg-12 col-12 ">
                            <div class="form-group">
                                <label for="seo_header">Header SEO</label>
                                <textarea id="seo_header" name="seo_header" class="form-control" rows="10" placeholder="Enter head script...">{{ $setup->seo_header ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 ">
                            <div class="form-group">
                                <label for="script">Script</label>
                                <textarea id="script" name="script" class="form-control" rows="10" placeholder="Enter head script...">{{ $setup->script ?? '' }}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="mt-2  btn btn-primary float-right" style="margin-right:10px">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection
@section('scripts')
@endsection
