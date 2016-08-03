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
        1 => 'Agent',
        2 => 'Supervisor',
        3 => 'Manager',
        4 => 'Quality Executive'
      );
  ?>  
  <div class="widget">
      <div class="widget-header"> <i class="icon-group"></i>
      <h3> Update Workforce</h3>      
    </div>       
          <div class="widget-content">
    <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" autocomplete="off" id="form-users" role="form">      
    <div class="span3">&nbsp;</div>
    <div class="span7">
      <fieldset>
        <div class="control-group">                     
          <label class="control-label" for="first_name">First Name:</label>
          <div class="controls">
            <input maxlength="50" name="first_name" type="text" value="">
          </div> <!-- /controls -->       
        </div> <!-- /control-group -->        
        
        <div class="control-group">                     
          <label class="control-label" for="last_name">Last Name:</label>
          <div class="controls">
            <input maxlength="50" name="last_name" type="text" >
          </div> <!-- /controls -->       
        </div> <!-- /control-group -->

        <div class="control-group"> 
          <label class="control-label" for="company">Role:</label>                    
              <div class="controls">              
                <select name="role" >
                  <option value="">- Please Select -</option>
                  @foreach($role as $key => $roles)
                    <option value="{{ $key }}">{{ $roles }}</option>
                  @endforeach
                </select>
              </div> <!-- /controls -->       
            </div> <!-- /form-group -->

            <div class="control-group"> 
          <label class="control-label" for="company">Gender:</label>                    
              <div class="controls">
                <input name="gender" type="radio" value="Male"> Male 
                <input name="gender" type="radio" value="Female"> Female
              </div> <!-- /controls -->       
            </div> <!-- /form-group -->

        <div class="control-group">                     
          <label class="control-label" for="email_address">Email Address:</label>
          <div class="controls">
            <input name="email" type="email" >
          </div> <!-- /controls -->       
        </div> <!-- /control-group -->

        <div class="control-group">                     
          <label class="control-label" for="email_address">Mobile No.:</label>
          <div class="controls">
            <input maxlength="15" name="mobile_no" type="text">
          </div> <!-- /controls -->       
        </div> <!-- /control-group -->

        <div class="control-group">                     
          <label class="control-label" for="email_address">Birthdate:</label>
          <div class="controls">
            <input name="birthdate" type="date">
          </div> <!-- /controls -->       
        </div> <!-- /control-group -->

        <div class="control-group">                     
          <label class="control-label" for="email_address">Date of Joining:</label>
          <div class="controls">
            <input name="mobile_no" type="date">
          </div> <!-- /controls -->       
        </div> <!-- /control-group -->
                
        <div class="control-group">                     
          <label class="control-label" for=""></label>
          <div class="controls">
            <a class="btn btn-primary" id="submitForm">Save</a>
            <a class="btn" href="{{ url('admin/workforce') }}">Cancel</a>
          </div> <!-- /controls -->       
        </div> <!-- /control-group -->
      </fieldset>
        </div>
        <div class="span2">&nbsp;</div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}">        
    </form>  
      </div>
    </div>
  </div>
</div> 
@endsection
