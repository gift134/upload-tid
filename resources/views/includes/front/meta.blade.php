<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>{!! $meta['meta_title']!!}</title>
<meta name="description" content="{!! $meta['meta_desc'] !!}" />
<meta name="keywords" content="{!! $meta['meta_keyword'] !!}" />

<meta name="robots" content="all">
<link rel="canonical" href="{{url()->current()}}"/>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{!! $meta['meta_title'] !!}">
    <meta property="og:description" content="{!! $meta['meta_desc'] !!}">
    <meta property="og:image" content="{{ url('/resources/assets/front_assets/img/home/tvinternetdeals-social-banner.jpg')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{!! $meta['meta_title'] !!}">
    <meta property="twitter:description" content="{!! $meta['meta_desc'] !!}">
    <meta property="twitter:image" content="{{ url('/resources/assets/front_assets/img/home/tvinternetdeals-social-banner.jpg')}}">

{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

<!--<link href="{{ url('resources/assets/front_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">-->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha512-znmTf4HNoF9U6mfB6KlhAShbRvbt4CvCaHoNV0gyssfToNQ/9A0eNdUbvsSwOIUoJdMjFG2ndSvr0Lo3ZpsTqQ==" crossorigin="anonymous" /> --}}
{{-- <link href="{{ url('resources/assets/front_assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet"> --}}
<!--<link href="{{ url('resources/assets/front_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">-->

{{-- <link href="{{ url('resources/assets/front_assets/vendor/aos/aos.css') }}" rel="stylesheet"> --}}



<link rel="stylesheet" href="{{ url('public/css/app_home.css')}}">

<!--<link href="{{ url('resources/assets/front_assets/css/home/style.css') }}" rel="stylesheet">-->

<link rel="shortcut icon" href="{{ asset('https://raw.githubusercontent.com/gift134/jna/master/front_assets/img/favicon.ico.png') }}">

{{-- <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.css" rel="stylesheet"> --}}



<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
<link rel="dns-prefetch" href="https://kit.fontawesome.com">
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com">


<style>
.blogpage {
    margin: 79px 0;
}
.blogDetails .blogDetailsImg img,
.blogDetails .smallPost .smallPostImg img {
    max-width: 100%;
    height: auto;
}
.blogDetails .blogDetailsTxt h2 {
    margin: 5px 0 14px;
    font-size: 22px;
    font-weight: 400;
    color: #617073;
    line-height: 30px;
}
.blog-posts .owl-prev {
    left: -53px;
    top: 40%;
}
.blog-posts {
    width: 100%;
    background: #f4fafd;
    padding: 70px 0;
}
.blog-posts h2 {
    color: #546265;
    font-size: 22px;
    margin: 0 0 30px;
}
.BlogComment,
.BlogsideBar,
.blogDetails,
.blogDetails .blogDetailsImg,
.blogDetails .blogDetailsTxt,
.blogDetails .smallPost,
.blogDetails .smallPost li {
    width: 100%;
    float: left;
}
.pagination > li.active > a {
    color: #25ccfd;
    background-color: transparent;
}
.blogDPage {
    margin-top: 120px;
    padding-bottom: 90px;
}
.BlogsideBar h3 {
    color: #617073;
    font-size: 22px;
    margin-top: 0;
    margin-bottom: 29px;
    font-weight: 400;
    letter-spacing: 1px;
    padding: 0 0 25px;
}
.blogDetails {
    border-bottom: 1px solid #e9eced;
    padding-bottom: 40px;
    margin-bottom: 35px;
}
.blogDetails .BlogTag {
    margin: 17px 0 11px;
}
.blogDetails .blogDetailsImg {
    height: auto;
    overflow: hidden;
}
.blogDetails .blogDetailsTxt {
    margin-top: 30px;
}
.blogDetails .blogDetailsTxt h4 {
    margin: 0;
}
.blogDetails .blogDetailsTxt h4 a {
    font-size: 13px;
    color: #bfcccf;
    line-height: 24px;
    font-weight: 400;
    background: url(../images/line7.jpg) center right no-repeat;
    padding-right: 8px;
}
.blogDetails .blogDetailsTxt h4 a:hover {
    color: #25ccfd;
    border-bottom: 1px solid #25ccfd;
    padding-bottom: 2px;
}
.blogDetails .blogDetailsTxt h4 a:last-child {
    background: 0 0;
}
.blogDetails .blogDetailsTxt h5 {
    margin: 5px 0 14px;
    font-size: 22px;
    font-weight: 400;
    color: #617073;
    line-height: 30px;
}
.blogDetails .blogDetailsTxt p {
    color: #858e90;
    margin: 0 0 30px;
    font-size: 18px;
    line-height: 26px;
    font-family: "Muli", sans-serif;
    font-weight: 300;
}
.blogDetails .blogDetailsTxt p a {
    color: #25ccfd;
}
.blogDetails .blogDetailsTxt p a:hover {
    border-bottom: 1px solid #25ccfd;
}
.blogDetails .smallPost {
    list-style: none;
    padding: 0;
    margin: 0;
}
.blogDetails .smallPost li a {
    color: #25ccfd;
}
.blogDetails .smallPost li a:hover {
    border-bottom: 1px solid #25ccfd;
}
.blogDetails .smallPost .smallPostImg {
    width: 100%;
    float: left;
    margin-left: -15px;
}
.blogDetails .smallPost .smallPostTxt h4 {
    color: #617073;
    font-size: 19px;
    line-height: 26px;
    font-weight: 400;
    margin: 0 0 14px;
}
.blogDetails .smallPost .smallPostTxt p {
    color: #858e90;
    font-size: 18px;
    line-height: 26px;
    font-weight: 300;
    margin: 0;
}
.padding-rightNone {
    padding-right: 0;
}
.linkImg {
    margin: 30px 0 0;
    float: left;
}
.aboutPage .col-md-4 {
    width: 25%;
    padding-right: 0;
}
.aboutPage .col-md-8 {
    width: 75%;
    padding-left: 0;
}
.blogPage {
    margin-top: 120px;
    padding-bottom: 115px;
    background: url(../images/blogBg.png) center left no-repeat;
    padding-top: 45px;
}
.blogPage::after {
    background: url(../images/blogBg2.png) no-repeat;
    content: "";
    position: absolute;
    top: 0;
    right: -10px;
    width: 445px;
    height: 863px;
    z-index: -1;
}
.blogBox {
    width: 100%;
    float: left;
    box-shadow: 0 7px 18px rgba(4, 5, 5, 0.1);
    margin-bottom: 30px;
    height: 510px;
    background: #fff;
    overflow: hidden;
    transition: all 0.5s ease-in-out;
}
.blogBox .blogBoxImg {
    height: 164px;
    overflow: hidden;
}
.blogBox .blogBoxImg img {
    max-width: 100%;
    height: auto;
    width: auto;
}
.blogBox .blogBoxTxt {
    padding: 20px 25px 23px;
    width: 100%;
    float: left;
    min-height: 325px;
}
.blogBox .blogBoxTxt a {
    color: #25ccfd;
}
.blogBox .blogBoxTxt .logoHldr {
    width: 39px;
    height: 39px;
    line-height: 39px;
    background: #eff2f2;
    border-radius: 100%;
    display: block;
    margin: 0 0 15px 0;
    text-align: center;
}
.blogBox .blogBoxTxt .logoHldr img {
    max-width: 80%;
    height: auto;
    display: inline;
}
.BlogTag {
    margin: 10px 0 2px;
    display: inline-block;
    width: 100%;
}
.BlogTag a {
    margin: 0 5px 5px 0;
    padding: 7px 17px;
    text-align: center;
    font-size: 13px;
    color: #25ccfd;
    background: #dff7ff;
    border-radius: 30px;
    float: left;
    font-family: "Muli", sans-serif;
    font-weight: 700;
}
.blogBox .blogBoxTxt h4 {
    margin: 0;
}
.blogBox .blogBoxTxt h4 a {
    font-size: 13px;
    color: #bfcccf;
    line-height: 24px;
    font-weight: 400;
    background: url(../images/line7.jpg) center right no-repeat;
    padding-right: 8px;
}
.blogBox .blogBoxTxt h4 a:hover {
    color: #25ccfd;
    border-bottom: 1px solid #25ccfd;
    padding-bottom: 2px;
}
.blogBox .blogBoxTxt h4 a:last-child {
    background: 0 0;
}
.blogBox .blogBoxTxt h5 {
    margin: 5px 0 14px;
    font-size: 17px;
    font-weight: 700;
    color: #617073;
    line-height: 26px;
}
.blogBox .blogBoxTxt h5 a {
    color: inherit;
}
.blogBox .blogBoxTxt h5 a:hover {
    color: #25ccfd;
    border-bottom: 1px solid #25ccfd;
    padding-bottom: 2px;
}
.blogBox .blogBoxTxt p {
    color: #858e90;
    margin: 0;
    font-size: 18px;
    line-height: 26px;
    font-family: "Muli", sans-serif;
    font-weight: 300;
}
.blogBox:hover {
    transform: translateY(-5px);
}
.blogDetailsTxt img {
    max-width: 100%!important;
    height: auto!important;
}
.EveryState {
    width: 100%;
    padding: 40px 15px;
    float: left
}

.EveryState h3 {
    font: 400 14px/20px 'Montserrat', sans-serif;
    color: #68667d;
    margin: 0 0 20px 0;
    padding: 0 0 14px 0;
    border-bottom: 1px solid #e9e8ec
}

.EveryState ul {
    width: 100%;
    float: left;
    padding: 0;
    list-style-type: none
}

.EveryState ul li {
    width: 12.5%;
    float: left;
    padding: 0 10px 0 0
}

.EveryState ul li a {
    color: #9b9aab;
    font-size: 13px;
    line-height: 26px;
    font-family: 'Lato', sans-serif;
    font-weight: 400
}



@media (max-width:767px) {
    .EveryState ul li {
        width: 50%
    }
}

@media (max-width:991px) and (min-width:768px) {
    .EveryState ul li {
        width: 33.33%
    }
}
</style>


