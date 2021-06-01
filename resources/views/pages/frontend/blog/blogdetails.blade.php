@extends('layouts.blog_main')
@section('content')
<section class="blogDPage">
    
  <div class="container">
      <div class="center">
        <h1>{{$blogdata->title}}</h1>
      </div>
    <div class="row">
      
        <div class="col-md-8 col-sm-7 col-xs-12">
          
          <div class="blogDetails">
            <div class="blogDetailsImg"> 
              @if(!is_null($blogdata->image))
               <img src="{{asset('public/uploads/original/'.$blogdata->image) }}" alt="{{ $blogdata->title }}" />
              @endif
 
            </div>
            <div class="blogDetailsTxt">
              <h4><a href="#" class="date">{{ $blogdata->created_at }}</a> </h4>
              <span class="BlogTag">
                @foreach ($blogdata->tags as $postTag)
                    <a href="{{ url('/tag', $postTag->slug ) }}"><i class="fa fa-tags"></i> {{ $postTag->name }}</a>                   
                     @endforeach
              </span>
              
              <p>{!! $blogdata->body !!}</p>
              <ul class="smallPost">
                @foreach ($blogdata->categories as $postCategory)
                <li><a href="{{ url('/category', $postCategory->slug ) }}">#{{ $postCategory->name }}</a> </li>
                 @endforeach
              </ul>
              <!-- Go to www.addthis.com/dashboard to customize your tools --> 
              <span class=" linkImg"> <div class="addthis_inline_share_toolbox"></div>  </span>
                         
            </div>
          </div>
          {{-- <div class="BlogComment">
            <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://cheapinternetserviceproviderjna.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          </div> --}}
        </div>
        <div class="col-md-4 col-sm-5 col-xs-12">
          <div class="BlogsideBar">
            <h3>Related Posts</h3>
            @forelse($relatedPosts as $k => $data)
            <div class="blogBox"> 
              <span class="blogBoxImg"> 
                @if(!is_null($data->image))
                  <a href="{{ $data->slug }}"><img src="{{asset('public/uploads/thumb/'.$data->image) }}" alt="{{ $blogdata->title }}" class="img-responsive"/></a>
                @endif                
              </span> 
              <span class="blogBoxTxt">
                  <h4><a href="#" class="date">{{ $data->created_at }}</a> </h4>
                  <span class="BlogTag">
                    @foreach ($data->tags as $postTag)
                      <a href="{{ url('/tag', $postTag->slug ) }}"><i class="fa fa-tags"></i> {{ $postTag->name }}</a>                   
                    @endforeach
                  </span>
                  <h5><a href="{{ $data->slug }}">{{ $data->title }}</a></h5>
                   <p>{!! Helper::splittext($data->subtitle,500) !!}</p>
              </span> 
            </div>
            @empty
            <p>No records found</p>
            @endforelse
           
          </div>
        </div>

    </div>
  </div>
</section>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
              {{-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab2fb351aaef4e2"></script> 
              <script id="dsq-count-scr" src="//cheapinternetserviceproviderjna.disqus.com/count.js" async></script>  --}}
@endsection