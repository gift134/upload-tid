@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Cms
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>     
        <li><a href="{{ url('/admin/cms') }}"><i class="fa fa-database"></i> <span>Cms</span></a></li>         
        <li class="active"><span>Edit Cms</span></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Cms</h3>

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
                <form action="{{ route('cms.update',$cmsdata->id) }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" pjax-container>
                     {{ method_field('PATCH') }}
                     {{ csrf_field() }}
                    <div class="box-body ">

                        <div class="fields-group">
                            <div class="form-group">
                                <label for="page_name" class="col-sm-2 control-label">page Name</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="page_name" id="page_name" placeholder="page Name" value="{{ $cmsdata->heading }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content" class="col-sm-2 control-label">Content</label>
                                <div class="col-sm-8">
                                    <div class="">
                                        <textarea class="textarea ckeditor" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="content" name="content">{{ $cmsdata->content }}</textarea>
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
                                <label for="subtitle" class="col-sm-2 control-label"></label>
                                <div class="col-sm-8">
                                    <div class="input-group">                                        
                                        @if(!is_null($cmsdata->image))
                                             <img src="{{asset('public/uploads/cms/thumb/'.$cmsdata->image) }}" alt="{{ $cmsdata->heading }}" class="img-thumbnail"> 
                                        @endif
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
