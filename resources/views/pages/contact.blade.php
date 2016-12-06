@extends('app')

@section('title', '| Contact')

@section('content')

<!-- Page Heading -->
<div class="row">
    <div class="col-sm-12">
        <h1 class="page-header gallery-header">Contact Me</h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h2>Contact Details</h2>
        <p>Email: gingabish@live.com</p>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h2>Send me a message:</h2>

        <div class="well">
            <form action="">
                <div class="form-group">
                    <label name="name">Name:</label>
                    <input id="name" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject"class="form-control">
                </div>

                <div class="form-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message"class="form-control">Type your message here...</textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@stop

@section('footer')
	

@stop	