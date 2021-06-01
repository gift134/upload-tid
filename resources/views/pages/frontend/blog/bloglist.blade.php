@extends('layouts.main')
@section('content')
<section class="blogPage">

  <div class="container">
       <div class="section-title">
        <h1>{{$page_title}}</h1>
      </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
      <!--<div class="BlogListWrap">-->
        @forelse($blogdata as $k => $data)
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="blogBox">
            @if(!is_null($data->image))
            <span class="blogBoxImg">
              <a href="{{ $data->slug }}"><img src="{{asset('public/uploads/thumb/'.$data->image) }}" alt="{{ $data->title }}" class="img-responsive"> </a>
            </span>
            @endif
              <span class="blogBoxTxt">
                  <label class="date">{{ Carbon\Carbon::parse($data->updated_at)->toDayDateTimeString() }}</label>
                  <span class="BlogTag">
                    @foreach ($data->tags as $postTag)
                    <a href="{{ url('/tag', $postTag->slug ) }}"><i class="fa fa-tags"></i> #{{ $postTag->name }}</a>
                     @endforeach
                  </span>
                  <span class="BlogCat">
                    @foreach ($data->categories as $postCategory)
                      <a href="{{ url('/category', $postCategory->slug ) }}">{{ $postCategory->name }}</a>
                     @endforeach
                  </span>
                  <h5><a href="{{ $data->slug }}">{{ $data->title }}</a></h5>
                   <p>{!! Helper::splittext($data->subtitle,120) !!}</p>
            </span>
          </div>
        </div>
        @empty
        @endforelse
        </div>
        </div>
        <div class="col-sm-12">
      <!--</div>-->
      <div class="clearfix"></div>
       @if(!$blogdata->isEmpty())
         {{ $blogdata->links() }}
       @endif
       </div>
    </div>
  </div>
</section>
@endsection
