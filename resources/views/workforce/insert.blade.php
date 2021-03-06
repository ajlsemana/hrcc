@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
   <li class=""><a href="{{ url('/') }}">Home</a></li>
   <li><a href="{{ url('admin/workforce') }}">Workforce</a></li>
   <li class="active">Add</li>
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
      <h3> Add New Workforce</h3>
   </div>
   <div class="widget-content">
      <form method="POST" action="{{ url('admin/workforce/addData') }}" accept-charset="UTF-8" class="form-horizontal" autocomplete="off" id="form-users" role="form">
         {{ csrf_field() }}
         <div class="span3">&nbsp;</div>
         <div class="span7">
            <fieldset>
               <div class="control-group">
                  <label class="control-label" for="">First Name:</label>
                  <div class="controls">
                     <input maxlength="50" name="first_name" type="text" value="{{ old('first_name') }}">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->        
               <div class="control-group">
                  <label class="control-label" for="">Last Name:</label>
                  <div class="controls">
                     <input maxlength="50" name="last_name" type="text" value="{{ old('last_name') }}">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for="">Role:</label>                    
                  <div class="controls">
                      {{ Form::select('role', $role, old('role')) }}
                     
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /form-group -->
               <div class="control-group">
                  <label class="control-label" for="">Gender:</label>                    
                  <div class="controls">
                     <input name="gender" type="radio" value="Male"> Male 
                     <input name="gender" type="radio" value="Female"> Female
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /form-group -->
               <div class="control-group">
                  <label class="control-label" for="">Email Address:</label>
                  <div class="controls">
                     <input name="email" type="text" >
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for="">Mobile No.:</label>
                  <div class="controls">
                     <input maxlength="15" name="contact_no" type="text">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for="">Birthdate:</label>
                  <div class="controls">
                     <input name="birthdate" type="date" value="1950-01-01">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for="">Date of Joining:</label>
                  <div class="controls">
                     <input name="joining_date" type="date" value="{{ date('Y-m-d') }}">
                  </div>
                  <!-- /controls -->       
               </div>
               <!-- /control-group -->
               <div class="control-group">
                  <label class="control-label" for=""></label>
                  <div class="controls">
                     <input name="_token" type="hidden" value="{{ csrf_token() }}">        
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