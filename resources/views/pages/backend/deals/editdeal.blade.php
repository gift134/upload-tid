@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Deals 
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>        
        <li><a href="{{ url('/admin/deals') }}"><i class="fa fa-bars"></i> <span>Deals</span></a></li>
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
                    <h3 class="box-title">Edit Deal</h3>

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
                <form action="{{ route('deals.update',$data->id) }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal" pjax-container>

                    {{ method_field('PATCH') }}

                    <div class="box-body">
                        <div class="col-lg-12">
                             <div class="fields-group">
                                  <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Deal Name</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="name" id="name" placeholder="Deal name" value="{{$data->name }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="page_name" class="col-sm-2 control-label">Permalink</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{ URL::to('/deals') }}/</span>
                                        <input type="text" class="form-control name" name="permalink" id="permalink" placeholder="Permalink" value="{{ $data->slug }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Deal Information</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" required="" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="information" name="information" >{!! $data->information !!}</textarea>
                                </div>
                            </div>
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fields-group">
                           

                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Provider A</label>
                                <div class="col-sm-8">
                                    <select class="form-control select" name="providera" required="">

                                                                                             
                                        @foreach ($providers as $sdata)
                                            <option value="{{ $sdata->id }}" {{ $sdata->id == $data->provider_1 ? 'selected' :'' }}>{{ $sdata->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Price range</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="price_range_a" id="price_range_a" placeholder="Price range Provider A" value="{{ $data->price_range_1 }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Technology</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="tech_a" id="tech_a" placeholder="Technology Provider A" value="{{ $data->technology_1 }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Download Speed</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="downspeed_a" id="downspeed_a" placeholder="Download Speed Provider A" value="{{ $data->download_1 }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Upload Speed</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="uploadpeed_a" id="uploadpeed_a" placeholder="Upload Speed Provider A" value="{{ $data->upload_1 }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Rating</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="rating_a" id="rating_a" placeholder="Review & Rating Provider A" value="{{ $data->rating_1 }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Review</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="review_a" id="review_a" placeholder="Review & Rating Provider A" value="{{ $data->review_1 }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Overview</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" required="" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="overview_a" name="overview_a" >{!! $data->overview_a !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Technology Information</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" required="" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="techinfo_a" name="techinfo_a" >{!! $data->description_1 !!}</textarea>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">First Header</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="first_header" id="first_header" placeholder="First Heading" value="{{ $data->first_header }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">First Content</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" required="" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="first_content" name="first_content" >{!! $data->first_content !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subtitle" class="col-sm-2 control-label">Featured Image(1)</label>
                                <div class="col-sm-8">
                                    <div class="input-group">                                        
                                        <input type="file" class="form-control file" name="first_image" id="first_image" placeholder="Select Featured Image" />
                                        
                                    </div>
                                     @if($data->first_image !== null)
                                        <img src="{{asset('public/uploads/deal/thumb/1/'.$data->first_image) }}" style="width: 200px; height:200px;" alt="">
                                      @endif
                                </div>
                            </div>
                        
                        </div>
                        </div>
                            <div class="col-lg-6">
                                <div class="fields-group ">                                 
                                      
                                   
                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Provider B</label>
                                            <div class="col-sm-8">
                                                <select class="form-control select" name="providerb" required="">
                                                 
                                                    @foreach ($providers as $rdata)
                                                        <option value="{{ $rdata->id }}" {{ $rdata->id == $data->provider_2 ? 'selected' :'' }}>{{ $rdata->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Price range</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="price_range_b" id="price_range_b" placeholder="Price range Provider B" value="{{ $data->price_range_2 }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Technology</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="tech_b" id="tech_b" placeholder="Technology Provider B" value="{{ $data->technology_2 }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Download Speed</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="downspeed_b" id="downspeed_b" placeholder="Download Speed Provider B" value="{{ $data->download_2 }}" required />
                                        
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Upload Speed</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="uploadpeed_b" id="uploadpeed_b" placeholder="Upload Speed Provider B" value="{{ $data->upload_2 }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Rating</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="rating_b" id="rating_b" placeholder="Rating Provider A" value="{{ $data->rating_2 }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                              <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Review</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="review_b" id="review_b" placeholder="Review Provider B" value="{{ $data->review_2 }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Overview</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" required="" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="overview_b" name="overview_b" >{!! $data->overview_b !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Technology Information</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" required="" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="techinfo_b" name="techinfo_b" >{{ $data->description_2 }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Second Header</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input type="text" class="form-control name" name="second_header" id="second_header" placeholder="Second Heading" value="{{ $data->second_header }}" required />
                                        
                                    </div>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Second Content</label>
                                <div class="col-sm-8">
                                    <textarea class="textarea ckeditor" required="" placeholder="Content " style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="second_content" name="second_content" >{!! $data->second_content !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subtitle" class="col-sm-2 control-label">Featured Image(2)</label>
                                <div class="col-sm-8">
                                    <div class="input-group">                                        
                                        <input type="file" class="form-control file" name="second_image" id="second_image" placeholder="Select Featured Image" />
                                        
                                    </div>
                                     @if($data->second_image !== null)
                                        <img src="{{asset('public/uploads/deal/thumb/2/'.$data->second_image) }}" style="width: 200px; height:200px;"  alt="">
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
