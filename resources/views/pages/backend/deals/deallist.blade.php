@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Deals 
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-bar-chart"></i> <span>Dashboard</span></a></li>      
        <li class="active"><i class="fa fa-bars"></i><span>Deals</span></li>
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
                            {!! Form::open(array('route' => 'deals.index','method'=>'GET','id'=>'srchfrm')) !!}
                            <input class="form-control" style="float: right; width: 200px;" type="text" name="seacrhby" placeholder="Search" value="{{ $seacrhby }}">
                            {!! Form::close() !!}
                        </div>

                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a href="{{ route('deals.create') }}" class="btn btn-sm btn-success">
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
                                <th>Name</th>
                                <th>Deal</th>
                                <th>Information</th>                                                           
                                <th>Status</th>  
                                <th>Action</th>                             
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($dealsdata as $k => $data)
                            <tr>                                
                                <td>{{ $k + 1 }}</td>
                                
                                <td>{{ $data->name }}</td>
                                <td><span>
                    <img src="{{asset('public/logos/'.$data->provideA->logo_file_name) }}" alt="{{ $data->provideA->name }}" style="max-width: 110px;
height: auto;"/ >
                </span> 
                <span class="vs">VS</span> 
                <span>
                    <img src="{{asset('public/logos/'.$data->provideB->logo_file_name) }}" alt="{{ $data->provideB->name }}" style="max-width: 110px;
height: auto;"/ >
                </span> </td>
                                 <td>{!! Helper::splittext($data->information,100) !!} </td>
                                <td><span class="label label-{{ $data->status == '1' ? 'success' : 'danger' }}">{{ $data->status == '1' ? 'Active' : 'Inactive' }}</span></td>      
                                <td>
                                    <a href="{{ route('deals.edit',$data->id) }}"> <i class="fa fa-edit"></i></a>  
                                   
                                    <form id="delete-form-{{ $data->id }}" method="post" action="{{ route('deals.destroy',$data->id) }}" style="display: none">
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

                    @if(!$dealsdata->isEmpty())
                    Showing <b>{{ $dealsdata->firstItem() }}</b> to <b>{{ $dealsdata->lastItem() }}</b> of <b>{{ $dealsdata->total() }}</b> entries
                    {{ $dealsdata->links() }}
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