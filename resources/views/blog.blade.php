@include('layouts.header')
<!--banner end here-->
<!--blog start here-->
<div class="blog">
    <div class="container">
        <div class="blog-main">
            <div class="blog-top">
                <h3>BLOG</h3>
            </div>
            <div class="blog-bottom">
                <div class="col-md-8 blog-bottom-left">
                    @if($posts)

                        @foreach($posts as $post)

                            <div class="blog-section">
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <a href="{{url('/single')}}"><h3>{{$post->title}}</h3></a>
                                <h4>Posted by <a class="sup" href="#">{{$post->user->name}} </a>{{$post->created_at->diffForHumans()}} </h4>
                                <a href="{{url('/single')}}"><img height="500" src="{{URL::to('/') }}/images/{{$post->photo ? $post->photo->file : '400x400.png' }}"
                                                                  alt=""></a>

                                <p>{{str_limit($post->body,30)}}</p>
                                <div class="blog-bwn">
                                    <a href="{{route('single.posts',$post->slug)}}">Read More</a>
                                </div>
                            </div>

                        @endforeach

                    @endif
                    <div class="pag-nations">
                        <ul class="p_n-list">
                            <li>{{$posts->render()}}</li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 blog-bootom-right">
                    <h3> CATEGORIES</h3>
                    <ul class="blog-rig-list">
                        <li><a href="#">COFFEE</a></li>
                        <li><a href="#">COLD COFFEE</a></li>
                        <li><a href="#">HOT COFFEE</a></li>
                        <li><a href="#">BLACK COFFEE</a></li>
                        <li><a href="#">GREEN TEA</a></li>
                    </ul>
                    <h3>Archives</h3>
                    <ul class="popular-tag">
                        <li><a href="#">June 2014</a></li>
                        <li><a href="#">May 2014</a></li>
                        <li><a href="#">April 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--blog end here-->
<!--footer start here-->
@include('layouts.footer')
<!--footer end  here-->
</body>
</html>