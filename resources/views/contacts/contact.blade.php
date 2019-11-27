@extends('layouts.default' ,['title' => 'Contact'])


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h1>Get In Touch</h1>
                <p class="text-muted">If you having trouble with this seervice, please <a href="mailto:kutat2000@gmail.com">ask for help</a></p>


            <form action="" method="POST" role="form">
            	<div class="form-group">
            		<label for="name" class="col-form-label">Name</label>
            		<input type="text" class="form-control" name="name" id="name" required="required" placeholder="Input...">
            	</div>
                <div class="form-group">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="text" class="form-control" email="email" id="email" required="required" placeholder="Input...">
                </div>
                <div class="form-group">
                    <label for="message" class="col-form-label sr-only">Message</label>
                    <textarea type="text" class="form-control" email="message" id="message" required="required" rows="10" with="10" = placeholder="Vore message"></textarea>
                </div>

                <button type="submit" class="btn btn-block btn-info" >Submit Enquiry &raquo;</button>
            </form>
            </div>
        </div>
    </div>
@stop
