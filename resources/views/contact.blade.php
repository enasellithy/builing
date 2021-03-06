@extends('layouts.app')
@section('content')
<div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header">Contact Us</h1>
    </section>
  </div>
</div>
<div class="contact">
  <div class="container">
    <div class="row contact_top">
      <div class="col-md-4 contact_details">
        <h5>Mailing address:</h5>
        <div class="contact_address">
          {{getSetting('address')}}
        </div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Call us:</h5>
        <div class="contact_address">{{getSetting('mobile')}}<br>
        </div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Email us:</h5>
        <div class="contact_mail">
          {{getSetting('mail')}}
        </div>
      </div>
    </div>
    <!-- Start Message Session-->
<div>
  @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    @if(count($errors) > 0)
     <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
     </div>
  @endif
    </div>
    <!-- End Message Session-->
    <div class="contact_bottom">
      <h3>Contact Form</h3>
      <p>Mauris a vulputate lectus at blandit nisi. Donec eleifend vel felis vitae auctor aenean rhoncus sapien sollicitudin leo interdum.</p>
      {!! Form::open(['url'=>'storeContact','method'=>'post']) !!}
        <div class="contact-to">
          <input type="text" class="text" name="contact_name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
          <input type="text" class="text" name="contact_mail" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left: 10px">
          <input type="text" class="text" name="contact_subject" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left: 10px">
        </div>
        <div class="text2">
          <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" name="contact_message">Message..</textarea>
        </div>
        <div> 
          <input type="submit" value="Send" class="btn btn-info">
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
