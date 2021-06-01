@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Blog 
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li> 
        <li><i class="fa fa-blogger-b"></i><span>Blog</span></li>      
        <li class="active"><i class="fa fa-bars"></i><span>Post</span></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">

                    <h3 class="box-title"></h3>

                    <div class="pull-right">
                        <div class="btn-group pull-right" style="margin-right: 10px">                           
                            {!! Form::open(array('route' => 'post.index','method'=>'GET','id'=>'srchfrm')) !!}
                            <input class="form-control" style="float: right; width: 200px;" type="text" name="seacrhby" placeholder="Search" value="{{ $seacrhby }}">
                            {!! Form::close() !!}
                        </div>

                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a href="{{ route('post.create') }}" class="btn btn-sm btn-success">
                                <i class="fa fa-save"></i>&nbsp;&nbsp;New
                            </a>
                        </div>

                    </div>

                    <span>
                        <a class="btn btn-sm btn-primary grid-refresh"><i class="fa fa-refresh"></i> Refresh</a>
                    </span>

                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <!-- Display Validation Errors -->
                    @include('includes.admin.flash-message')
                    <table class="table table-hover">
                        
                        <thead>
                             <tr>                                
                                <th>ID</th>
                                <th>Featured Image</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Meta Keyword</th>
                                <th>Post Date</th>                                
                                <th>Status</th>  
                                <th>Action</th>                             
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($postdata as $k => $data)
                            <tr>                                
                                <td>{{ $k + 1 }}</td>
                                <td><img src="{{asset('public/uploads/thumb/'.$data->image) }}" alt="{{ $data->title }}" style="height: 100px; width:100px;"></td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->subtitle }}</td>
                                <td>{{ $data->keyword }}</td>
                                 <td>{{ $data->created_at }}</td>
                                <td><span class="label label-{{ $data->status == '1' ? 'success' : 'danger' }}">{{ $data->status == '1' ? 'Published' : 'Unpublished' }}</span></td>      
                                <td>
                                    <a href="{{ route('post.edit',$data->id) }}"> <i class="fa fa-edit"></i></a>  
                                   
                                    <form id="delete-form-{{ $data->id }}" method="post" action="{{ route('post.destroy',$data->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                </form>
                                <a href="javascript:void(0);" class="grid-row-delet" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $data->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" ><i class="fa fa-trash"></i></a>                                
                                </td>                          
                            </tr>
                            @empty
                            <tr class="odd">
                                <td valign="top" colspan="4" class="dataTables_empty">No matching records found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="box-footer clearfix">                   

                    @if(!$postdata->isEmpty())
                    Showing <b>{{ $postdata->firstItem() }}</b> to <b>{{ $postdata->lastItem() }}</b> of <b>{{ $postdata->total() }}</b> entries
                    {{ $postdata->links() }}
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
@endsection