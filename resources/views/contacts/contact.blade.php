@extends('layouts.default' ,['title' => 'Contact'])


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h1>Get In Touch</h1>
                <p class="text-muted">If you having trouble with this seervice, please <a href="mailto:{{ env('ADMIN_SUPPORT_EMAIL') }}">ask for help</a></p>


            <form action="" method="POST" role="form">
                {{csrf_field()}}
            	<div class="form-group  {{$errors->has('name') ? 'was-validated' : ''}}">
            		<label for="name" class="col-form-label">Name</label>
            		<input type="text" value="{{old('name')}}" class="form-control" name="name" id="name" required="required" placeholder="Input...">
                    {!! $errors->first('name', '<div class="alert alert-danger">:message</div>')!!}
            	</div>
                <div class="form-group {{$errors->has('email') ? 'was-validated' : ''}}">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="text" value="{{old('email')}}"class="form-control" name="email" id="email" required="required" placeholder="Input...">
                    {!! $errors->first('email', '<div class="alert alert-danger">:message</div>')!!}
                </div>
                <div class="form-group {{$errors->has('message') ? 'was-validated' : ''}}">
                    <label for="message" class="col-form-label sr-only">Message</label>
                    <textarea type="text" class="form-control" name="message" id="message" required="required" rows="10" with="10" = placeholder="Vore message">{{old('message')}}</textarea>
                    {!! $errors->first('message', '<div class="alert alert-danger">:message</div>')!!}
                </div>

                <button type="submit" class="btn btn-block btn-info" >Submit Enquiry &raquo;</button>
            </form>
            </div>
        </div>
    </div>
@stop
