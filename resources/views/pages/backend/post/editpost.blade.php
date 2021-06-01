@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Blog 
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-blogger-b"></i> <span>Blog</span></a></li>
        <li><a href="{{ url('/admin/post') }}"><i class="fa fa-bars"></i> <span>Post</span></a></li>
        <li class="active"><i class="fa fa-bars"></i><span>Edit Post</span></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Post</h3>

                    <div class="box-tools">            
                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a class="btn btn-sm btn-info  form-history-back"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
               
               
                <!-- Display Validation Errors -->
                @include('includes.admin.flash-message')
                 <!-- form start -->
                <form action="{{ route('post.update',$post->id) }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" pjax-container>

                    {{ method_field('PATCH') }}

                    <div class="box-body">
                        <div class="col-lg-6">
                            <div class="fields-group">
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="title" id="title" placeholder="Post Title" value="{{ $post->title }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subtitle" class="col-sm-2 control-label">Sub Title</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="subtitle" id="subtitle" placeholder="Post Sub Title" value="{{ $post->subtitle }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Meta Keyword</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="keyword" id="keyword" placeholder="Post Keyword" value="{{ $post->keyword }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="page_name" class="col-sm-2 control-label">Permalink</label>
                                <div class="col-sm-8">
                                    <div class="input-group">    
                                    <span class="input-group-addon">{{ URL::to('/blogdetails') }}/</span>                                    
                                        <input type="text" class="form-control name" name="permalink" id="permalink" placeholder="Permalink" value="{{ str_replace('/','',str_replace(URL::to('/blogdetails'),'',$post->slug)) }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="subtitle" class="col-sm-2 control-label">Featured Image</label>
                                <div class="col-sm-8">
                                    <div class="input-group">                                        
                                        <input type="file" class="form-control file" name="image" id="image" placeholder="Select Featured Image" />                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="subtitle" class="col-sm-2 control-label">Publish</label>
                                <div class="col-sm-8">
                                    <div class="input-group">                                       
                                        <input type="checkbox" name="status" id="status" value="1" @if ($post->status == 1)
                        {{'checked'}}
                      @endif /> 
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        </div>
                        <div class="col-lg-6">
                                <div class="fields-group ">
                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Category</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select" name="categories[]" multiple>
                                                <option value=""></option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" 
                                                        @foreach ($post->categories as $postCategory)
                      @if ($postCategory->id == $category->id)
                        selected
                      @endif
                    @endforeach
                                                        >{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Tags</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select" name="tags[]" multiple>                                                
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}"
                                                        @foreach ($post->tags as $postTag)
                        @if ($postTag->id == $tag->id)
                          selected
                        @endif
                      @endforeach

                                                        >{{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-12">
                         <div class="form-group">
                                <label for="content" class="col-sm-2 control-label">Content</label>
                                <div class="col-sm-8">
                                    <div class="">
                                        <textarea class="textarea ckeditor" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="body" name="body" >{!! $post->body !!}</textarea>
                                    </div>
                                    
                                </div>
                            </div> 

                    </div>
                </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        {{ csrf_field() }}
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <div class="btn-group pull-right">
                                <button type="submit" class="btn btn-info pull-right" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Submit">Submit</button>
                            </div>
                            <div class="btn-group pull-left">
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>

                    </div>

                    <!-- /.box-footer -->
                </form>
            </div>

        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
@endsection
