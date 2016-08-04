@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class=""><a href="{{ url('/') }}">Home</a></li>
      <li class="active">Agent Profile</li>
  </ol>

<div class="widget widget-nopad">
    <div class="widget-header"> <i class="icon-group"></i>
      <h3> Workforce</h3>
      <span class="pagination-totalItems">Total: 5</span>
    </div>
    <!-- /widget-header -->
    <div class="widget-content">
      <div class="widget big-stats-container">
        <div class="widget-content">
          <table class="table" border="1" style="border: 1px solid #d1d1d1;">
            <tbody><tr>
                <th style="width: 20px;"><input type="checkbox" id="main_checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></th>
                <th>&nbsp;</th>
                <th><a href="#" class="asc">Full Name</a></th>                
                <th><a href="#">Email Address</a></th>
                <th><a href="#">Role</a></th>
                <th><a href="#">Gender</a></th>
                <th>Mobile No.</th>
                <th><a href="#">Birthdate</a></th>
                <th><a href="#">Date Joined</a></th>
                <th>Action</th>
            </tr>
                          <tr>
                  <td align="center"><input type="checkbox" class="checkbox" name="selected[]" value="4" data-name="Abegail Perez"></td>
                  <td align="center">
                                          <img src="http://localhost:8080/hrcc/public/profile_picture/no-photo.jpg" class="img-responsive" alt="emaar logo" width="40">
                                      </td>
                  <td><a href="http://localhost:8080/hrcc/admin/agent-profile/4">Abegail Perez</a></td>
                  <td>abp@altitude.com</td>
                  <td>Supervisor</td>
                  <td>Female</td>
                  <td>0507790623</td>
                  <td>01 Jan 1970</td>
                  <td>16 Oct 2013</td>
                  <td align="center"><a href="http://localhost:8080/hrcc/admin/workforce/update/4" title="Update"><i class="icon-edit"></i></a></td>
              </tr>
                          <tr>
                  <td align="center"><input type="checkbox" class="checkbox" name="selected[]" value="2" data-name="Aiman Joseph Semana"></td>
                  <td align="center">
                                          <img src="http://localhost:8080/hrcc/public/profile_picture/3.png" class="img-responsive" alt="photo" width="40">
                                      </td>
                  <td><a href="http://localhost:8080/hrcc/admin/agent-profile/2">Aiman Joseph Semana</a></td>
                  <td>ajlsemana@gmail.com</td>
                  <td>Agent</td>
                  <td>Male</td>
                  <td>0565492779</td>
                  <td>01 Jan 1970</td>
                  <td>28 Jul 2016</td>
                  <td align="center"><a href="http://localhost:8080/hrcc/admin/workforce/update/2" title="Update"><i class="icon-edit"></i></a></td>
              </tr>
                          <tr>
                  <td align="center"><input type="checkbox" class="checkbox" name="selected[]" value="11" data-name="Ayman Soliman"></td>
                  <td align="center">
                                          <img src="http://localhost:8080/hrcc/public/profile_picture/no-photo.jpg" class="img-responsive" alt="emaar logo" width="40">
                                      </td>
                  <td><a href="http://localhost:8080/hrcc/admin/agent-profile/11">Ayman Soliman</a></td>
                  <td>ayman.soliman@bluemena.com</td>
                  <td>Quality Executive</td>
                  <td>Male</td>
                  <td>0557412856</td>
                  <td>13 Feb 1986</td>
                  <td>10 Jul 2013</td>
                  <td align="center"><a href="http://localhost:8080/hrcc/admin/workforce/update/11" title="Update"><i class="icon-edit"></i></a></td>
              </tr>
                          <tr>
                  <td align="center"><input type="checkbox" class="checkbox" name="selected[]" value="3" data-name="John Jacobs"></td>
                  <td align="center">
                                          <img src="http://localhost:8080/hrcc/public/profile_picture/2.png" class="img-responsive" alt="photo" width="40">
                                      </td>
                  <td><a href="http://localhost:8080/hrcc/admin/agent-profile/3">John Jacobs</a></td>
                  <td>aiman_semana@yahoo.com</td>
                  <td>Agent</td>
                  <td>Male</td>
                  <td>0551234566</td>
                  <td>01 Jan 1970</td>
                  <td>05 Mar 2010</td>
                  <td align="center"><a href="http://localhost:8080/hrcc/admin/workforce/update/3" title="Update"><i class="icon-edit"></i></a></td>
              </tr>
                          <tr>
                  <td align="center"><input type="checkbox" class="checkbox" name="selected[]" value="12" data-name="Riadh Boukhris"></td>
                  <td align="center">
                                          <img src="http://localhost:8080/hrcc/public/profile_picture/no-photo.jpg" class="img-responsive" alt="emaar logo" width="40">
                                      </td>
                  <td><a href="http://localhost:8080/hrcc/admin/agent-profile/12">Riadh Boukhris</a></td>
                  <td>rbk@altitude.com</td>
                  <td>Supervisor</td>
                  <td>Male</td>
                  <td>0561234958</td>
                  <td>01 Jan 1985</td>
                  <td>06 Aug 2000</td>
                  <td align="center"><a href="http://localhost:8080/hrcc/admin/workforce/update/12" title="Update"><i class="icon-edit"></i></a></td>
              </tr>
                      </tbody></table>
        </div>
        <!-- /widget-content --> 
        
      </div>
    </div>
  </div>
@endsection
