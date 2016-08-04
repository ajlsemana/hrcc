@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class=""><a href="{{ url('/') }}">Home</a></li>
      <li class="active">Agent Evaluation</li>
  </ol>

<div class="widget widget-nopad">
    <div class="widget-header"> <i class="icon-bar-chart"></i>
      <h3> {{ $data->first_name.' '.$data->last_name }}</h3>      
    </div>
    <!-- /widget-header -->
    <div class="widget-content">
      <div class="widget big-stats-container">
        <div class="widget-content">
          <table class="table" border="1" style="border: 1px solid #d1d1d1;">
            <tr>                
                <th>Basic Skills</th>
                <th>Competency Skills</th>                
                <th>Behavioural Skills</th>                
                <th>Product Related Skills</th>                
                <th>Advanced Skills</th>                
            </tr>
            <tr>                
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>             
            </tr>
            <tr>                
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>             
            </tr>
            <tr>                
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>             
            </tr>
            <tr>                
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>             
            </tr>
            <tr>                
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>
                <td>insert here</td>             
            </tr>
            </table>
        </div>
        <!-- /widget-content --> 
        
      </div>
    </div>
  </div>
@endsection
