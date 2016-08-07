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
                  <th>Basic Skills / 10</th>
                  <th>Competency Skills / 10</th>
                  <th>Behavioural Traits / 10</th>
                  <th>Product Related Skills / 10</th>
                  <th>Advanced Skills / 10</th>
               </tr>
               <tr>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/telephonic.png') }}" class="img-responsive" width="35"> 
                              Telephonic
                           </td>
                           <td>
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-telephonic">{{ $data->telephonic }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/communication.png') }}" class="img-responsive" width="35"> 
                              Effective Communication
                           </td>
                           <td align="right">
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-communication">{{ $data->communication }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-conflict_resolution">{{ $data->conflict_resolution }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-empathy">{{ $data->empathy }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-software_exposure">{{ $data->software_exposure }}</a>
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
                              <img src="{{ asset('public/img/skills/typing.png') }}" class="img-responsive" width="35"> 
                              Typing
                           </td>
                           <td align="right">
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-typing">{{ $data->typing }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/listening.png') }}" class="img-responsive" width="35"> 
                              Attentive Listening
                           </td>
                           <td align="right">
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-attentive_listening">{{ $data->listening }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-decision_making">{{ $data->decision_making }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-quick_learner">{{ $data->quick_learner }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/knowledge_retention.jpg') }}" class="img-responsive" width="35"> 
                              Knowledge Retention
                           </td>
                           <td align="right">
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-knowledge_retention">{{ $data->knowledge_retention }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-time_management">{{ $data->time_management }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/irate_customers.png') }}" class="img-responsive" width="35"> 
                              Handling Irate Customers
                           </td>
                           <td align="right">
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-handling_irate_customers">{{ $data->irate_customers }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-flexible">{{ $data->flexible }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-multilingual">{{ $data->multilingual }}</a>
                              </font>
                           </td>
                        </tr>
                     </table>
                  </td>
                  <td>
                     <table class="table">
                        <tr>
                           <td>
                              <img src="{{ asset('public/img/skills/rapport.png') }}" class="img-responsive" width="35"> 
                              Rapport Building
                           </td>
                           <td align="right">
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-rapport_building">{{ $data->rapport_building }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-creativity">{{ $data->creativity }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-persuasion">{{ $data->persuasion }}</a>
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
                              <font size="5">
                              <a href="#skillDataModal" data-toggle="modal" role="button" id="a-adaptability">{{ $data->adaptability }}</a>
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
         </div>
         <!-- /widget-content --> 
      </div>
   </div>
</div>
<div id="skillDataModal" class="modal hide fade in" style="left: 30%; overflow-y: auto; width: 80%; display: ;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>      
<div class="modal-body" id="skillDataBody"><span id="span-skill-img"><img src="http://localhost:8080/connect/resources/img/skills-map/connectors/sap.png" width="48" height="24" class="img-responsive" alt="logo"></span><br><div id="container-remarks" data-highcharts-chart="8"><div class="highcharts-container" id="highcharts-28" style="position: relative; overflow: hidden; width: 1017px; height: 200px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="1017" height="200"><desc>Created with Highcharts 4.2.5</desc><defs><clipPath id="highcharts-29"><rect x="0" y="0" width="947" height="107"></rect></clipPath></defs><rect x="0" y="0" width="1017" height="200" fill="#FFFFFF" class=" highcharts-background"></rect><path fill="none" d="M 60 151.5 L 1007 151.5" stroke="#808080" stroke-width="1" visibility="visible"></path><g class="highcharts-grid"></g><g class="highcharts-grid"><path fill="none" d="M 60 142.5 L 1007 142.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 60 124.5 L 1007 124.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 60 107.5 L 1007 107.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 60 89.5 L 1007 89.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 60 71.5 L 1007 71.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 60 52.5 L 1007 52.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 60 160.5 L 1007 160.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path></g><g class="highcharts-axis"><path fill="none" d="M 502.5 160 L 502.5 170" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 60 160.5 L 1007 160.5" stroke="#C0D0E0" stroke-width="1"></path></g><g class="highcharts-axis"><text x="28.046875" text-anchor="middle" transform="translate(0,0) rotate(270 28.046875 106.5)" class=" highcharts-yaxis-title" style="color:#707070;fill:#707070;" y="106.5">Proficiency</text></g><g class="highcharts-series-group"><path fill="#7cb5ec" fill-opacity="0.25" d="M 0 0"></path><g class="highcharts-series highcharts-series-0" transform="translate(60,53) scale(1 1)" clip-path="url(#highcharts-29)"><path fill="none" d="M 473.5 98.08333333333333" stroke="#7cb5ec" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path><path fill="none" d="M 463.5 98.08333333333333 L 473.5 98.08333333333333 L 483.5 98.08333333333333" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class=" highcharts-tracker" style=""></path></g><g class="highcharts-markers highcharts-series-0 highcharts-tracker" transform="translate(60,53) scale(1 1)" clip-path="url(#highcharts-30)" style=""><path fill="#7cb5ec" d="M 473 94.08333333333333 C 478.328 94.08333333333333 478.328 102.08333333333333 473 102.08333333333333 C 467.672 102.08333333333333 467.672 94.08333333333333 473 94.08333333333333 Z" stroke-width="1"></path></g></g><g class="highcharts-button" style="cursor:default;" stroke-linecap="round" transform="translate(983,10)"><title>Chart context menu</title><rect x="0.5" y="0.5" width="24" height="22" fill="white" stroke="none" stroke-width="1" rx="2" ry="2"></rect><path fill="#E0E0E0" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" stroke="#666" stroke-width="3"></path><text x="0" style="color:black;fill:black;" y="12"></text></g><text x="509" text-anchor="middle" class="highcharts-title" style="color:#333333;font-size:18px;fill:#333333;width:953px;" y="24"><tspan>Skill History Updates</tspan></text><g class="highcharts-legend"><g><g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels"><text x="502.5522875816993" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:937px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="179" opacity="1"><tspan>Feb '16</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels"><text x="45" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:326px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0)" y="154" opacity="1"><tspan>0</tspan></text><text x="45" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:326px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0)" y="136" opacity="1"><tspan>1</tspan></text><text x="45" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:326px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0)" y="118" opacity="1"><tspan>2</tspan></text><text x="45" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:326px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0)" y="100" opacity="1"><tspan>3</tspan></text><text x="45" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:326px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0)" y="82" opacity="1"><tspan>4</tspan></text><text x="45" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:326px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0)" y="64" opacity="1"><tspan>5</tspan></text></g><g class="highcharts-tooltip" style="cursor:default;padding:0;pointer-events:none;white-space:nowrap;" transform="translate(474,-9999)" opacity="0" visibility="visible"><path fill="none" d="M 3.5 0.5 L 118.5 0.5 C 121.5 0.5 121.5 0.5 121.5 3.5 L 121.5 44.5 C 121.5 47.5 121.5 47.5 118.5 47.5 L 65.5 47.5 59.5 53.5 53.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" d="M 3.5 0.5 L 118.5 0.5 C 121.5 0.5 121.5 0.5 121.5 3.5 L 121.5 44.5 C 121.5 47.5 121.5 47.5 118.5 47.5 L 65.5 47.5 59.5 53.5 53.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" d="M 3.5 0.5 L 118.5 0.5 C 121.5 0.5 121.5 0.5 121.5 3.5 L 121.5 44.5 C 121.5 47.5 121.5 47.5 118.5 47.5 L 65.5 47.5 59.5 53.5 53.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(249, 249, 249, .85)" d="M 3.5 0.5 L 118.5 0.5 C 121.5 0.5 121.5 0.5 121.5 3.5 L 121.5 44.5 C 121.5 47.5 121.5 47.5 118.5 47.5 L 65.5 47.5 59.5 53.5 53.5 47.5 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#7cb5ec" stroke-width="1"></path><text x="8" style="font-size:12px;color:#333333;fill:#333333;" y="20"><tspan style="font-size: 10px">Tuesday, Feb  2, 2016</tspan><tspan style="fill:#7cb5ec" x="8" dy="15">●</tspan><tspan dx="0"> Proficiency: </tspan><tspan style="font-weight:bold" dx="0">0</tspan></text></g><text x="1007" text-anchor="end" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="195">Highcharts.com</text></svg></div></div>
      
   </div>
<div class="modal-footer">
 <center>               
   <button data-dismiss="modal" aria-hidden="true" class="btn">Cancel</button>
 </center>
</div>
</div>
@endsection