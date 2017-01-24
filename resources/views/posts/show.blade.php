@extends('app')

@section('title', '| Blog Post')

@section('content')

@if (Session::has('success'))

    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{ Session::get('success') }}
    </div>

@endif

<!-- Page Heading -->
<div class="row">
    <div class="col-sm-12">
        <h1 class="page-header gallery-header">Good Chat</h1>
    </div>
</div>
<!-- /.row -->

<!-- Blog Post -->

<!-- Post Row 1 -->
<!-- Image for Post -->
<div class="row post-row">
    <div class="col-sm-12 col-md-8 col-md-offset-2">            
<!--          <a href="/galleries">
            <img class="img-responsive img-rounded" src="/img/andyBatsman_Medium.jpg" alt="">
        </a> -->

        @if ($galleries->count() > 0)
            @foreach ($galleries as $gallery)

                @if (count($gallery->images))

                    <a href="/galleries">
                        <img class="img-responsive img-rounded" src="{{ url('/gallery/images/thumbs/' . $gallery->images[0]->file_name) }}" alt="">
                    </a>

                @endif

            @endforeach     

        @endif

        <h2 class="text-center">{{ $post->title }}<a href="{{url('gallery/viewonly/' . $post->gallery_id)}}" class="btn btn-xs btn-info pull-right"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Gallery</a></h2>

         <div class="row">
            <div class="col-sm-2">
        
                <!-- Created mini-form below to do DELETE as otherwise need to use AJAX plus JS which is better but complicated -->
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                {!! Form::close() !!}

            </div>

            <a href="/posts/{{ $post->id }}/edit" class="btn btn-md btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit </a>

            <hr>

        </div>
      
        <p>
            <!-- TAG -->
            <a href="#" class="btn btn-xs btn-primary"> {{$post->post_type}}</a>
            <small> Author: <span>{{$post->user_id}} </span>
        </p>

        <p>Created: <span>16 Nov 2016 </span>Updated: <span>20 Nov 2016 </span></small></p>   
              
        <p class="lead">{{ $post->intro }}</p>

        <p>{{ $post->body }}</p>


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
        s.src = '//shaunbishopphotography.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                     
        <hr>

        <a href="/posts" class="btn btn-info pull-left"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>

    </div>

</div>    

@stop