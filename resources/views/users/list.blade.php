@extends('layouts.app')

@section('content')
<div class="span12">
  <ol class="breadcrumb">
    <li class=""><a href="{{ url('/') }}">Home</a></li>
      <li class="active">Workforce</li>
  </ol>
  <div class="widget">
      <div class="widget-header">
        <div class="widget-content">
          <div class="span3 search-span">
            <div class="search-div">
              <div class="search-label">First Name</div>
              <div class="search-field">
                <input id="filter_first_name" placeholder="" maxlength="100" style="width: 150px;" name="filter_first_name" type="text">
              </div>
            </div>               
          </div>      
          <div class="span3 search-span">
            <div class="search-div">
              <div class="search-label">Last Name</div>
              <div class="search-field">
                <input id="filter_last_name" placeholder="" maxlength="100" style="width: 150px;" name="filter_last_name" type="text">
              </div>
            </div>                    
          </div>
          <div class="span3 search-span">
            <div class="search-div">
              <div class="search-label">Email</div>
              <div class="search-field">
                <input id="filter_email" placeholder="" maxlength="100" style="width: 150px;" name="filter_email" type="text">
              </div>
            </div>
          </div>
        
        <div class="span12">
          <div style="padding-top: 10px; border-bottom: 1px solid #D5D5D5; width: 92%"></div>
          <div align="left" style="padding-top:20px;">
            <a class="btn btn-primary" id="submitForm">Search</a>
            <a class="btn" id="clearForm">Clear</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    $role = array(
        1 => 'Agent',
        2 => 'Supervisor',
        3 => 'Manager',
        4 => 'Quality Executive'
      );
  ?>  
  <div class="widget widget-nopad">
    <div class="widget-header"> <i class="icon-group"></i>
      <h3> Workforce</h3>
    </div>
    <!-- /widget-header -->
    <div class="widget-content">
      <div class="widget big-stats-container">
        <div class="widget-content">
          <table class="table" border="1" style="border: 1px solid #d1d1d1;">
            <tr>
                <th style="width: 20px;"><input type="checkbox" id="main_checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></th>
                <th>&nbsp;</th>
                <th>Full Name</th>                
                <th>Email Address</th>
                <th>Role</th>
                <th>Gender</th>
                <th>Mobile No.</th>
                <th>Birthdate</th>
                <th>Date of Joining</th>
                <th>Action</th>
            </tr>
            @foreach ($workforces as $workforce)
              <tr>
                  <td align="center"><input type="checkbox" class="checkbox" name="selected[]" value="change this to PK ID" data-name="abdullah.saif@esh-me.com"></td>
                  <td align="center">
                    @if(! empty($workforce->photo))
                      <img src="{!! asset('public/profile_picture/'.$workforce->photo) !!}" class="img-responsive" alt="photo" width="40">
                    @else
                      <img src="{!! asset('public/profile_picture/no-photo.jpg') !!}" class="img-responsive" alt="emaar logo" width="40">
                    @endif
                  </td>
                  <td>{{ $workforce->first_name.' '.$workforce->last_name }}</td>
                  <td>{{ $workforce->email }}</td>
                  <td>{{ $role[$workforce->role] }}</td>
                  <td>{{ $workforce->gender }}</td>
                  <td>{{ $workforce->contact_no }}</td>
                  <td>{{ date('d M Y', strtotime($workforce->birthdate)) }}</td>
                  <td>{{ date('d M Y', strtotime($workforce->joining_date)) }}</td>
                  <td align="center"><a href="#" title="Update"><i class="icon-edit"></i></a></td>
              </tr>
            @endforeach
          </table>
        </div>
        <!-- /widget-content --> 
        
      </div>
    </div>
  </div>
</div>
@endsection
