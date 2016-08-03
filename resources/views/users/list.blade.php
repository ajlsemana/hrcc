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
  <div align="left" style="padding-bottom: 15px;">
    <a href="#" class="btn btn-primary">Add Workforce</a>
    <a href="#deleteModal" data-toggle="modal" class="btn btn-primary" id="confirmDelete">Delete Workforce</a>
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
      <span class="pagination-totalItems">Total: {{ $total_workforce }}</span>
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
                  <td align="center"><input type="checkbox" class="checkbox" name="selected[]" value="{{ $workforce->id }}" data-name="{{ $workforce->first_name.' '.$workforce->last_name }}"></td>
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
<!--modal for delete -->
<div id="deleteModal" style="overflow-y: hidden;"  class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">  
  <form>
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="myModalLabel">Are you sure you want to delete?</h3>
  </div>
  <div class="modal-body">
    <fieldset>
      <div class="control-group">                             
        <div class="controls">
          <div id="delete_list" style="margin-top: 3px;"></div>
        </div> <!-- /controls -->       
      </div> <!-- /control-group -->
    </fieldset>
  </div>
  <div class="modal-footer" style="margin-bottom: -16px; ">
    <button class="btn btn-primary" id="btn-delete" type="submit">OK</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </div>  
  </form>
</div>
<script>
  // Delete
    $('#confirmDelete').click(function() {
      var count = $("[name='selected[]']:checked").length;
    
    if (count>0) {
      var items = new Array();
      var del_items = '';
      
      $("[name='selected[]']:checked").each(function() {
        items.push('- '+$(this).data('name'));
        del_items += '<input type="hidden" name="selected[]" value="'+ $(this).val() +'" />';
      });
      
      $('#delete_list').html(items.join('<br />') + del_items);
    } else {
      alert('Please select rows.');
      return false;
    }
    });
</script>
@endsection
