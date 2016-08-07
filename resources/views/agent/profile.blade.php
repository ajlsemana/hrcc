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
                  <th>Behavioural Skills / 10</th>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
                              <a href="#">0</a>
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
@endsection