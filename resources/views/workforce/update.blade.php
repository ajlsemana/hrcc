@extends('layouts.app')

@section('content')
<div class="span12">
  <ol class="breadcrumb">
    <li class=""><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('admin/workforce') }}">Workforce</a></li>
      <li class="active">Update</li>
  </ol>
  <?php
    $role = array(
       '' => '- Please Select -',
       2 => 'Supervisor',
       3 => 'Manager',
       4 => 'Quality Executive',
       5 => 'Agent'
    );
  ?>  
<div class="widget">
   <div class="widget-header">
      <i class="icon-group"></i>
      <h3> Update Workforce</h3>
   </div>
   <div class="widget-content">
      <form method="POST" action="{{ url('admin/workforce/updateData') }}" accept-charset="UTF-8" class="form-horizontal" autocomplete="off" id="form-users" role="form">
         {{ csrf_field() }}
         <div class="span3">&nbsp;</div>
         <div class="span7">
            <fieldset>              
              <div class="control-group">
                  <label class="control-label" for=""></label>
                  <div class="controls">
                     @if(! empty($data->photo))
                      <img src="{!! asset('public/profile_picture/'.$data->photo) !!}" class="img-responsive" alt="photo" width="100">
                    @else
                      <img src="{!! asset('public/profile_picture/no-photo.jpg') !!}" class="img-responsive" alt="emaar logo" width="100">
                    @endif
                  </div>
                  <!-- /controls -->       
               </div>
               <div class="control-group">
                  <label class="control-label" for="">First Name:</label>
                  <div class="controls">
                     <input maxlength="50" name="first_name" type="text" value="{{ $data->first_name }}">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->        
               <div class="control-group">
                  <label class="control-label" for="">Last Name:</label>
                  <div class="controls">
                     <input maxlength="50" name="last_name" type="text" value="{{ $data->last_name }}">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for="">Role:</label>                    
                  <div class="controls">
                      {{ Form::select('role', $role, $data->role) }}                     
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /form-group -->
               <div class="control-group">
                  <label class="control-label" for="">Gender:</label>                    
                  <div class="controls">
                     <input name="gender" @if($data->gender == 'Male') checked @endif type="radio" value="Male"> Male 
                     <input name="gender" @if($data->gender == 'Female') checked @endif type="radio" value="Female"> Female
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /form-group -->
               <div class="control-group">
                  <label class="control-label" for="">Email Address:</label>
                  <div class="controls">
                     <input name="email" type="text" readonly value="{{ $data->email }}">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for="">Mobile No.:</label>
                  <div class="controls">
                     <input maxlength="15" name="contact_no" type="text" value="{{ $data->contact_no }}">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for="">Birthdate:</label>
                  <div class="controls">
                     <input name="birthdate" type="date" value="{{ $data->birthdate }}">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for="">Date of Joining:</label>
                  <div class="controls">
                     <input name="joining_date" type="date" value="{{ $data->joining_date }}">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for=""></label>
                  <div class="controls">
                     <input name="_token" type="hidden" value="{{ csrf_token() }}">                      
                     {{ Form::hidden('id',  $data->id) }}      
                     <input type="submit" class="btn btn-primary" value="Save" name="submit">
                     <a class="btn" href="{{ url('admin/workforce') }}">Cancel</a>
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
            </fieldset>
         </div>
         <div class="span2">&nbsp;</div>
      </form>
   </div>
</div>
</div>
@endsection