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
                  <th>Soft Skills</th>
                  <th>Customer Service Skills</th>
                  <th>Behavioral Traits</th>
                  <th>Knowledge Based Skills</th>
               </tr>
               <tr>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/telephonic/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/telephonic.png') }}" class="img-responsive" width="35"> 
                              Telephonic
                              </a>
                           </td>
                           <td>
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-telephonic">{{ round($data->telephonic) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/effective_communication/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/effective_communication.png') }}" class="img-responsive" width="35"> 
                              Effective Communication
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-effective_communication">{{ round($data->effective_communication) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/conflict_resolution/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/conflict_resolution.png') }}" class="img-responsive" width="35"> 
                              Conflict Resolution
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-conflict_resolution">{{ round($data->conflict_resolution) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/empathy/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/empathy.png') }}" class="img-responsive" width="35"> 
                              Empathy
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-empathy">{{ round($data->empathy) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/industry_knowledge/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/industry_knowledge.png') }}" class="img-responsive" width="35"> 
                              Industry Knowledge
                              </a>
                           </td>
                           <td>
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-industry_knowledge">{{ round($data->industry_knowledge) }}</a>
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
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/typing/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/typing.png') }}" class="img-responsive" width="35"> 
                              Typing
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-typing">{{ round($data->typing) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/attentive_listening/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/attentive_listening.png') }}" class="img-responsive" width="35"> 
                              Attentive Listening
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-attentive_listening">{{ round($data->attentive_listening) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/decision_making/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/decision_making.png') }}" class="img-responsive" width="35"> 
                              Decision Making
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-decision_making">{{ round($data->decision_making) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/quick_learner/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/quick_learner.png') }}" class="img-responsive" width="35"> 
                              Quick Learner
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-quick_learner">{{ round($data->quick_learner) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/knowledge_retention/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/knowledge_retention.png') }}" class="img-responsive" width="35"> 
                              Knowledge Retention
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-knowledge_retention">{{ round($data->knowledge_retention) }}</a>
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
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/attentive_listening/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/time_management.png') }}" class="img-responsive" width="35"> 
                              Time Management
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-time_management">{{ round($data->time_management) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/handling_irate_customers/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/handling_irate_customers.png') }}" class="img-responsive" width="35"> 
                              Handling Irate Customers
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-handling_irate_customers">{{ round($data->handling_irate_customers) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/flexible/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/flexible.png') }}" class="img-responsive" width="35"> 
                              Flexible
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-flexible">{{ round($data->flexible) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/product_knowledge/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/product_knowledge.png') }}" class="img-responsive" width="35"> 
                              Product Knowledge
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-product_knowledge">{{ round($data->product_knowledge) }}</a>
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
                           <td rowspan="6"></td>                              
                           <td rowspan="6"></td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/rapport_building/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/rapport_building.png') }}" class="img-responsive" width="35"> 
                              Rapport Building
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-rapport_building">{{ round($data->rapport_building) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/creativity/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/creativity.png') }}" class="img-responsive" width="35"> 
                              Creativity
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-creativity">{{ round($data->creativity) }}</a>
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
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/persuasion/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/persuasion.png') }}" class="img-responsive" width="35"> 
                              Persuasion
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-persuasion">{{ round($data->persuasion) }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/team_player/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/team_player.png') }}" class="img-responsive" width="35"> 
                              Team Player
                              </a>
                           </td>
                           <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-team_player">{{ round($data->team_player) }}</a>
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
                              <a href="{{ url('admin/agent-eval/'.$data->uid) }}/all/adaptability/{{ $data->joining_date }}">
                              <img src="{{ asset('public/img/skills/adaptability.png') }}" class="img-responsive" width="35"> 
                              Adaptability
                              </a>
                           </td>
                            <td align="right">
                              <font size="2">
                              <a href="#skillDataModal" class="a-skill" data-toggle="modal" role="button" id="a-adaptability">{{ round($data->adaptability) }}</a>
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
            <br>
            <?php
               $chart = 'column';
               if(isset($_GET['chart'])) {                                    
                  if($_GET['chart'] == 'line') {
                     $chart = 'line';
                  } elseif($_GET['chart'] == 'area') {
                     $chart = 'area';
                  }
               }
            ?>
            <button class="select-chart btn @if(!isset($_GET['chart']) OR $chart == 'column') btn-primary @else btn-invert @endif" id="column">Column</button>
            <button class="select-chart btn @if($chart == 'line') btn-primary @else btn-invert @endif" id="line">Line</button>
            <button class="select-chart btn @if($chart == 'area') btn-primary @else btn-invert @endif" id="area">Area</button>
         </div>     
         <div id="skill-container" style="background: #fff;  min-width: 99%; max-width: 99%; height: 400px; margin: 0 auto"></div>
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

   $('.select-chart').click(function(e) {
      e.preventDefault();
      var val = $(this).attr('id');
      var url = '{{ url("admin/agent-eval") }}/{{ $data->uid }}/{{ Request::segment(4) }}/{{ Request::segment(5) }}/{{ $data->joining_date }}?chart='+val+'#reports';
      
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
            type: '{{ $chart }}'
        },
        title: {
            text: '{{ ucwords(str_replace('_', ' ', Request::segment(5))) }}'
        },
        subtitle: {
            //text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
        },
        xAxis: {
            type: 'datetime',                           
            dateTimeLabelFormats: {
                day: '%e of %b'
            }                             
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rate 0-10'
            },
            min: 0,
            max: 10,
            categories: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
        },
        legend: {
            enabled: true
        },
        tooltip: {
            //pointFormat: '<b>{point.y:} rate</b>'
        },
        series: [{
            name: 'Scores',
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
                     $seriesData[] = '['.$newDate.', '.round($skill->rate).']';
                  }

                  echo implode(', ', $seriesData);
               ?>                     
               @endif            
            ],
            dataLabels: {
                enabled: true,                                                
                y: 7, // 10 pixels down from the top
                style: {
                    fontSize: '12px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
</script>
@endsection