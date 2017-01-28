@extends('app')

@section('title', '| Blog Post Index')

@section('content')


<!-- Page heading -->
<div class="row">
    <div class="col-sm-12">
        <h1 class="page-header gallery-header">Good Chat</h1>
    </div>
</div>
<!-- /.row -->

<!-- Top Wells -->
<div class="row">

    <!-- Tags Well -->
    
    <div class="col-sm-7">
        <div class="well search-well">
            <a href="{{url('posts/type/Photography')}}" class="btn btn-md btn-primary"></span> Photography</a>

            <a href="{{url('posts/type/Sport')}}" class="btn btn-md btn-primary"> Sport</a>
     
            <a href="{{url('posts/type/Other')}}" class="btn btn-md btn-primary"> Other</a>

            <a href="/posts" class="btn btn-md btn-primary"> All</a>
        </div>        
    </div>

    <!-- Search Well -->
    <div class="col-sm-5">
        <div class="well">

            <form action="/search" method="post" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="q" 
                        placeholder="Search Blog Posts only." value="{{ $query }}"><span class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-warning">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </form>
                               
        </div>        
    </div>
</div>


<!-- DYNAMIC CONTENT -->

<div class="row">
    <div class="col-md-10">

        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2>Post details</h2>
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Introduction</th>
                    <th>View Post</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->intro}}</td>
                    <td><a href="/posts/{{ $post->id }}" class="btn btn-info">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @elseif(isset($message))
            <p>{{ $message }}</p>
        @endif

    </div>
</div>






@stop  <!-- End of page content -->

