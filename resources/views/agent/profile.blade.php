@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
   <li class=""><a href="{{ url('/') }}">Home</a></li>
   <li class="active">Agent Evaluation</li>
</ol>
<style>
   .tb-head {
   text-align: center;
   font-size: 15px;
   color: #FFF;
   background: #9FA7B4; 
   text-transform: uppercase;   
   }
</style>
<a href="{{ url('admin/workforce') }}" class="btn" title="Back to List"><i class="icon-arrow-left"></i></a>
<div class="row">
   <div class="span12">
      <table>
         <tbody>
            <tr>
               <td>
                  <div style="text-align: left;">                     
                     @if(! empty($data->photo))
                     <img src="{!! asset('public/profile_picture/'.$data->photo) !!}" class="img-responsive" alt="photo" width="160">
                     @else
                     <img src="{!! asset('public/profile_picture/no-photo.jpg') !!}" class="img-responsive" alt="emaar logo" width="160">
                     @endif
                  </div>
               </td>
               <td style="background: #FFF;">
                  <div style="padding: 0 52px 0 20px;">
                     <span id="name">
                        <h1>{{ $data->first_name.' '.$data->last_name }}</h1>
                     </span>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
<br>
<div class="widget widget-nopad">
   <!-- /widget-header -->
   <div class="widget-content">
      <div class="widget big-stats-container">
         <div class="widget-content">
            <table class="table" border="1" style="border: 1px solid #d1d1d1;">
               <tr class="tb-head">
                  <th>Basic Skills</th>
                  <th>Competency Skills</th>
                  <th>Behavioural Traits</th>
                  <th>Product Related Skills</th>
                  <th>Advanced Skills</th>
               </tr>
               <tr>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/yearly/telephonic/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/telephonic.png') }}" class="img-responsive" width="35"> 
                              Telephonic
                              </a>
                           </td>
                           <td>
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-telephonic">{{ $data->telephonic }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/effective_communication.png') }}" class="img-responsive" width="35"> 
                              Effective Communication
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-effective_communication">{{ $data->effective_communication }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/conflict_resolution.png') }}" class="img-responsive" width="35"> 
                              Conflict Resolution
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-conflict_resolution">{{ $data->conflict_resolution }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/empathy.png') }}" class="img-responsive" width="35"> 
                              Empathy
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-empathy">{{ $data->empathy }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/software_exposure.png') }}" class="img-responsive" width="35"> 
                              Softwares Exposure
                           </td>
                           <td>
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-software_exposure">{{ $data->software_exposure }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <tr>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/yearly/typing/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/typing.png') }}" class="img-responsive" width="35"> 
                              Typing
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-typing">{{ $data->typing }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/attentive_listening.png') }}" class="img-responsive" width="35"> 
                              Attentive Listening
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-attentive_listening">{{ $data->attentive_listening }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/decision_making.png') }}" class="img-responsive" width="35"> 
                              Decision Making
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-decision_making">{{ $data->decision_making }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/quick_learner.png') }}" class="img-responsive" width="35"> 
                              Quick Learner
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-quick_learner">{{ $data->quick_learner }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/knowledge_retention.png') }}" class="img-responsive" width="35"> 
                              Knowledge Retention
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-knowledge_retention">{{ $data->knowledge_retention }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <tr>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/time_management.png') }}" class="img-responsive" width="35"> 
                              Time Management
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-time_management">{{ $data->time_management }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/yearly/handling_irate_customers/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/handling_irate_customers.png') }}" class="img-responsive" width="35"> 
                              Handling Irate Customers
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-handling_irate_customers">{{ $data->handling_irate_customers }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/flexible.png') }}" class="img-responsive" width="35"> 
                              Flexible
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-flexible">{{ $data->flexible }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <tr>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>
                           <td rowspan="6"></td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/multilingual.png') }}" class="img-responsive" width="35"> 
                              Multilingual
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-multilingual">{{ $data->multilingual }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/rapport_building.png') }}" class="img-responsive" width="35"> 
                              Rapport Building
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-rapport_building">{{ $data->rapport_building }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/creativity.png') }}" class="img-responsive" width="35"> 
                              Creativity
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-creativity">{{ $data->creativity }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>
                           <td rowspan="6"></td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <tr>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>                           
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/persuasion.png') }}" class="img-responsive" width="35"> 
                              Persuasion
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-persuasion">{{ $data->persuasion }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>                           
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <tr>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>                           
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/adaptability.png') }}" class="img-responsive" width="35"> 
                              Adaptability
                           </td>
                            <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-adaptability">{{ $data->adaptability }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>                           
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>                           
                        </tr>
                     </table>
                  </td>


            </table>
         <br>
         <hr>
         <div align="right" style="padding-right: 5px;" id="reports">
            <b>View Report</b>             
            <select id="select-report">
               <option value="all" @if(Request::segment(4) == 'all') selected @endif>All</option>
               <option value="weekly" @if(Request::segment(4) == 'weekly') selected @endif>Weekly</option>
               <option value="monthly" @if(Request::segment(4) == 'monthly') selected @endif>Monthly</option>
               <option value="quarterly" @if(Request::segment(4) == 'quarterly') selected @endif>Quarterly</option>
               <option value="yearly" @if(Request::segment(4) == 'yearly') selected @endif>Yearly</option>
            </select>
         </div>     
         <div id="skill-container" style="background: #fff;  min-width: 640px; max-width: 640px; height: 400px; margin: 0 auto"></div>
         </div>
         <!-- /widget-content --> 
      </div>
   </div>
</div>
<div id="skillDataModal" class="modal hide fade in" style="overflow-y: auto; display: ;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">   
   <form action="{{ url('admin/agent/updateData') }}" method="POST">
   <div class="modal-header">
      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
      <span id="myModalLabel"></span>
   </div>
   <div class="modal-body" id="skillDataBody">
      <b>How many evaluator?</b>
      <select id="num_eval" style="width: 50px;">         
         @for($i=1; $i <= 3; ++$i)
            <option value="{{ $i }}">{{ $i }}</option>
         @endfor
      </select>
      <br>
      <span id="scoresheets">
         <b>Evaluator</b> 
         <input type="number" min="0" max="10" name="evaluator[]" value="0" style="width: 40px;">
      </span>
   </div>
   <div class="modal-footer">
    <center>          
      <input type="hidden" id="h-skill-name" name="skill_name" value="">      
      {{ Form::hidden('_token', csrf_token()) }}
      {{ Form::hidden('id', $data->id ) }}
      {{ Form::hidden('uid', $data->uid ) }}
      {{ Form::hidden('date_joined', $data->joining_date ) }}
      <input type="submit" class="btn btn-primary" value="Save">     
      <button data-dismiss="modal" aria-hidden="true" class="btn">Cancel</button>
    </center>
   </div>
</div>
<script type="text/javascript" src="{!! asset('public/js/highcharts/highcharts.js') !!}"></script>  
<script type="text/javascript" src="{!! asset('public/js/highcharts/highcharts-more.js') !!}"></script>  
<script type="text/javascript" src="{!! asset('public/js/highcharts/exporting.js') !!}"></script>  
<script>
   $('#select-report').change(function() {
      var val = $(this).val();
      var url = '{{ url("admin/agent-eval") }}/{{ $data->uid }}/'+val+'/{{ Request::segment(5) }}/{{ $data->joining_date }}#reports';
      
      window.location.href = url;
   });

   $('.a-skill').click(function(e) {
      e.preventDefault();

      var id = $(this).attr('id');
      var sp = id.split('-');
      var src = '{{ asset("public/img/skills") }}/'+sp[1]+'.png';
      var img = '<img src="'+src+'" width="35" class="img-responsive">';

      $('#h-skill-name').val(id.substr(2));
      $('#myModalLabel').html(img+' <b>'+id.replace('_', ' ').substr(2).toUpperCase()+'</b>');
   });

   $('#num_eval').change(function() {
      var v = $(this).val();
      var html = '';
      for(var i = 1; i <= v; i++) {
         html += '<b>Evaluator '+i;
         html += ' </b><input type="number" min="0" max="10" name="evaluator[]" value="0" style="width: 40px;"><br>';
      }

      $('#scoresheets').html(html);
   });

   $(function () {
    $('#skill-container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '{{ ucwords(str_replace('_', ' ', Request::segment(5))) }}'
        },
        subtitle: {
            //text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
        },
        xAxis: {
            <?php
               $date_joined = explode('-', Request::segment(6));
               $min_date = 'Date.UTC('.$date_joined[0].', '.$date_joined[1].', '.$date_joined[2].')';
            ?>
            type: 'datetime',
            min: {{ $min_date }},                   
            dateTimeLabelFormats: {
                day: '%e of %b'
            }                             
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rate 0-10'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: '<b>{point.y:.1f} rate</b>'
        },
        series: [{
            name: 'Population',
            data: [
               @if($skills)
               <?php                  
                  $seriesData = array();
                  $arrDate = array(
                     '01' => 0, '02' => 1, '03' => 2, '04' => 3,
                     '05' => 4, '06' => 5, '07' => 6, '08' => 7,
                     '09' => 8, '10' => 9, '11' => 10, '12' => 11
                  );
                  foreach($skills as $skill) {
                     $date = explode('-', $skill->cat);
                     $newDate = 'Date.UTC('.$date[0].',  '.$arrDate[$date[1]].', '.$date[2].')';                            
                     $seriesData[] = '['.$newDate.', '.$skill->rate.']';
                  }

                  echo implode(', ', $seriesData);
               ?>                     
               @endif            
            ],
            dataLabels: {
                enabled: true,                                
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
</script>
@endsection