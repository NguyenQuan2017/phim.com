@extends('admin/master/master')
@section('content')
<div class="row">
   <div class="col-lg-6 top15">
      <!-- begin col-3 -->
      <div class="col-lg-6">
         <div class="widget aqua-bg box-shadow">
            <div class="row">
               <div class="col-xs-4 text-center">
                  <i class="fa fa-bank fa-5x"></i>
               </div>
               <div class="col-xs-8 text-right">
                  <span>Total Expenses</span>
                  <h2 class="font-bold">$ 9,982</h2>
               </div>
            </div>
         </div>
      </div>
      <!-- begin col-3 -->
      <div class="col-lg-6">
         <div class="widget white-bg box-shadow">
            <div class="row">
               <div class="col-xs-4">
                  <i class="fa fa-cloud fa-5x"></i>
               </div>
               <div class="col-xs-8 text-right">
                  <span> Today degrees </span>
                  <h2 class="font-bold">30'C</h2>
               </div>
            </div>
         </div>
      </div>
      <!-- begin col-3 -->
      <div class="col-lg-6">
         <div class="widget white-bg box-shadow">
            <div class="row">
               <div class="col-xs-4">
                  <i class="fa fa-line-chart fa-5x"></i>
               </div>
               <div class="col-xs-8 text-right">
                  <span> Other Stats</span>
                  <h2 class="font-bold">290</h2>
               </div>
            </div>
         </div>
      </div>
      <!-- begin col-3 -->
      <div class="col-lg-6">
         <div class="widget white-bg box-shadow">
            <div class="row">
               <div class="col-xs-4">
                  <i class="fa fa-shopping-cart fa-5x"></i>
               </div>
               <div class="col-xs-8 text-right">
                  <span>PENDING ORDERS</span>
                  <h2 class="font-bold">40</h2>
               </div>
            </div>
         </div>
      </div>
      <!-- begin col-2 -->
      <div class="col-lg-4">
         <div class="widget box-shadow green-bg">
            <div class="row vertical-align">
               <div class="col-xs-3">
                  <i class="fa fa-bus fa-2x"></i>
               </div>
               <div class="col-xs-9 text-right">
                  <span>Last Booking</span>
                  <h2 class="font-bold">320</h2>
               </div>
            </div>
         </div>
      </div>
      <!-- begin col-2 -->
      <div class="col-lg-4">
         <div class="widget box-shadow aqua-bg">
            <div class="row vertical-align">
               <div class="col-xs-3">
                  <i class="fa fa-ship fa-2x"></i>
               </div>
               <div class="col-xs-9 text-right">
                  <span>Last Booking</span>
                  <h2 class="font-bold">10</h2>
               </div>
            </div>
         </div>
      </div>
      <!-- begin col-2 -->
      <div class="col-lg-4">
         <div class="widget box-shadow red-bg">
            <div class="row vertical-align">
               <div class="col-xs-3">
                  <i class="fa fa-plane fa-2x"></i>
               </div>
               <div class="col-xs-9 text-right">
                  <span>Last Booking</span>
                  <h2 class="font-bold">610</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Column Chart-->
   <div class="col-lg-6 top15">
      <div class="ibox float-e-margins ">
         <div class="ibox-content top10" id="demo2">
            <div class="demo-container">
               <div>
                  <canvas id="barChart"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- tabs -->
<div class="col-lg-8 top20">
   <div class="tabs-container">
      <ul class="nav nav-tabs">
         <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-money" aria-hidden="true"></i> Transactions Panel  </a></li>
         <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-tasks" aria-hidden="true"></i> Tasks Panel</a></li>
      </ul>
      <div class="tab-content">
         <div class="tab-pane active" id="tab-1">
            <div class="panel-body">
               <div class="table-responsive">
                  <table class="table table-bordered table-hover bottom0 ">
                     <thead>
                        <tr>
                           <th>Order #</th>
                           <th>Order Date</th>
                           <th>Order Time</th>
                           <th>Amount (USD)</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>3128</td>
                           <td>4/10/2017</td>
                           <td>3:29 PM</td>
                           <td>$323.33</td>
                        </tr>
                        <tr>
                           <td>3128</td>
                           <td>4/11/2017</td>
                           <td>3:20 PM</td>
                           <td>$233.34</td>
                        </tr>
                        <tr>
                           <td>3128</td>
                           <td>4/12/2017</td>
                           <td>3:03 PM</td>
                           <td>$723.17</td>
                        </tr>
                        <tr>
                           <td>3128</td>
                           <td>4/13/2017</td>
                           <td>3:00 PM</td>
                           <td>$23.71</td>
                        </tr>
                        <tr>
                           <td>3128</td>
                           <td>4/14/2017</td>
                           <td>2:49 PM</td>
                           <td>$8343.23</td>
                        </tr>
                        <tr>
                           <td>3128</td>
                           <td>4/18/2017</td>
                           <td>2:23 PM</td>
                           <td>$243.12</td>
                        </tr>
                        <tr>
                           <td>3128</td>
                           <td>4/12/2017</td>
                           <td>2:15 PM</td>
                           <td>$5663.54</td>
                        </tr>
                        <tr>
                           <td>3118</td>
                           <td>4/4/2017</td>
                           <td>2:32 PM</td>
                           <td>$943.45</td>
                        </tr>
                        <tr>
                           <td>3158</td>
                           <td>4/8/2017</td>
                           <td>2:32 PM</td>
                           <td>$943.45</td>
                        </tr>
                     </tbody>
                  </table>
                  <div class="panel-footer text-right"><a href="#" class="btn aqua btn-sm">View All Transactions</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane" id="tab-2">
            <div class="panel-body">
               <!-- START list group-->
               <div class="task-list">
                  <a href="#" class="list-group-item bt0">
                  <span class="label label-warning pull-right">just now</span>
                  <em class="fa fa-fw fa-calendar mr"></em>Calendar updated</a>
                  <a href="#" class="list-group-item">
                  <span class="label label-warning pull-right">4 minutes ago</span>
                  <em class="fa fa-fw fa-comment mr"></em>Commented on a post</a>
                  <a href="#" class="list-group-item">
                  <span class="label label-warning pull-right">23 minutes ago</span>
                  <em class="fa fa-fw fa-truck mr"></em>Order 392 shipped</a>
                  <a href="#" class="list-group-item">
                  <span class="label label-warning pull-right">46 minutes ago</span>
                  <em class="fa fa-fw fa-money mr"></em>Invoice 653 has been paid</a>
                  <a href="#" class="list-group-item">
                  <span class="label label-warning pull-right">1 hour ago</span>
                  <em class="fa fa-fw fa-user mr"></em>A new user has been added</a>
                  <a href="#" class="list-group-item">
                  <span class="label label-warning pull-right">2 hours ago</span>
                  <em class="fa fa-fw fa-check mr"></em>Completed task: "pick up dry cleaning"</a>
                  <a href="#" class="list-group-item">
                  <span class="label label-warning pull-right">yesterday</span>
                  <em class="fa fa-fw fa-globe mr"></em>Saved the world</a>
                  <a href="#" class="list-group-item">
                  <span class="label label-warning pull-right">two days ago</span>
                  <em class="fa fa-fw fa-check mr"></em>Completed task: "fix error on sales page"</a>
                  <a href="#" class="list-group-item">
                  <span class="label label-warning pull-right">two days ago</span>
                  <em class="fa fa-fw fa-check mr"></em>Completed task: "fix error on sales page"</a>
               </div>
               <!-- END list group-->
               <div class="panel-footer text-right"><a href="#" class="btn aqua btn-sm">View All Activity</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- tabs -->
<div class="col-lg-4">
   <div class="widget white-bg box-shadow p-xl">
      <h2>
         Susan Wenscombe
      </h2>
      <ul class="list-unstyled m-t-md">
         <li>
            <span class="fa fa-envelope m-r-xs"></span>
            <label>Email:</label> Susan@mail.com
         </li>
         <li>
            <span class="fa fa-home m-r-xs"></span>
            <label>Address:</label> 4030 Prospect Street
         </li>
         <li>
            <span class="fa fa-phone m-r-xs"></span>
            <label>Contact:</label> 856-681-6121
         </li>
      </ul>
   </div>
   <div class="widget aqua-bg box-shadow text-center">
      <div >
         <i class="fa fa-envelope fa-4x"></i>
         <h1>30</h1>
         <h3 class="font-bold no-margins">
            Mail
         </h3>
         <small> Do something</small>
      </div>
   </div>
   <div class="widget white-bg box-shadow">
      <h2>Personal Details </h2>
      <table class="table small m-b-xs top5 bottom0">
         <tbody>
            <tr>
               <td><strong>142</strong> Projects </td>
               <td><strong>22</strong> Followers </td>
            </tr>
            <tr>
               <td><strong>61</strong> Comments </td>
               <td><strong>54</strong> Articles </td>
            </tr>
            <tr>
               <td><strong>154</strong> Tags </td>
               <td><strong>32</strong> Friends </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
<div class="row">
   <div class="col-lg-12 bottom35">
      <div class="col-lg-9">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Last Month Salary </h5>
               <div class="ibox-tools"> <a class="btn aqua btn-xs" href="#"> 31-Jan-2017</a> </div>
            </div>
            <div class="ibox-content collapse in">
               <div class="widgets-container">
                  <div class="table table-hover">
                     <table id="SalaryTable" class="display nowrap table  responsive nowrap table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                           </tr>
                        </tfoot>
                        <tbody>
                           <tr>
                              <td>Jordan Belfort</td>
                              <td>System Architect</td>
                              <td>London</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                           </tr>
                           <tr>
                              <td>Naomi Lapaglia</td>
                              <td>Accountant</td>
                              <td>London</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td>$170,750</td>
                           </tr>
                           <tr>
                              <td>Auckland Straight Line Host</td>
                              <td>Junior Technical Author</td>
                              <td>London</td>
                              <td>66</td>
                              <td>2009/01/12</td>
                              <td>$86,000</td>
                           </tr>
                           <tr>
                              <td>Donnie Azoff</td>
                              <td>Senior Javascript Developer</td>
                              <td>London</td>
                              <td>22</td>
                              <td>2012/03/29</td>
                              <td>$433,060</td>
                           </tr>
                           <tr>
                              <td>Mark Hanna</td>
                              <td>Accountant</td>
                              <td>London</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                           </tr>
                           <tr>
                              <td>Jean-Jacques Saurel</td>
                              <td>Integration Specialist</td>
                              <td>London</td>
                              <td>61</td>
                              <td>2012/12/02</td>
                              <td>$372,000</td>
                           </tr>
                           <tr>
                              <td>Patrick Denham</td>
                              <td>Sales Assistant</td>
                              <td>London</td>
                              <td>59</td>
                              <td>2012/08/06</td>
                              <td>$137,500</td>
                           </tr>
                           <tr>
                              <td>Teresa Petrillo</td>
                              <td>Integration Specialist</td>
                              <td>London</td>
                              <td>55</td>
                              <td>2010/10/14</td>
                              <td>$327,900</td>
                           </tr>
                          
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <!-- Start feed -->
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>Your daily feed </h5>
               <div class="ibox-tools">
                  <a class="collapse-link" data-toggle="collapse" data-target="#demo6"> <i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-down"></i> </a>
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                  <i class="fa fa-wrench"></i> </a>
                  <ul class="dropdown-menu dropdown-user">
                     <li><a href="#">Config option 1</a> </li>
                     <li><a href="#">Config option 2</a> </li>
                  </ul>
                  <a class="close-link"> <i class="fa fa-times"></i> </a>
               </div>
            </div>
            <div class="ibox-content collapse in" id="demo6">
               <div class="widgets-container ">
                  <div class="feed-activity-list">
                     <div class="feed-element">
                        <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{url('admin/images/teem/a3.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">5m ago</small> <strong>Olivia Wenscombe</strong> posted a new blog. <br>
                           <small class="text-muted">Today 5:60 pm - 12.06.2014</small> 
                        </div>
                     </div>
                     <div class="feed-element">
                        <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{url('admin/images/teem/a2.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">2h ago</small> <strong>Robert Angier</strong> posted message on <strong>Olivia Wenscombe</strong>                                                       site. <br>
                           <small class="text-muted">Today 2:10 pm - 12.06.2014</small> 
                        </div>
                     </div>
                     <div class="feed-element">
                        <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{url('admin/images/teem/a5.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">2h ago</small> <strong>Ariadne</strong> add 1 photo on <strong>Olivia Wenscombe</strong>.
                           <br>
                           <small class="text-muted">2 days ago at 8:30am</small> 
                        </div>
                     </div>
                     <div class="feed-element">
                        <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{url('admin/images/teem/a4.jpg')}}"> </a>
                        <div class="media-body ">
                           <small class="pull-right text-navy">5h ago</small> <strong>Alex Smith </strong> started following <strong>Olivia Wenscombe</strong>.
                           <br>
                           <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                           <div class="actions"> <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                              <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                           </div>
                        </div>
                     </div>
                     <div class="feed-element">
                        <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{url('admin/images/teem/a3.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">23h ago</small> <strong>Olivia Wenscombe</strong> love <strong>Sophie </strong>. <br>
                           <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small> 
                        </div>
                     </div>
                     <div class="feed-element">
                        <a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="{{url('admin/images/teem/a7.jpg')}}"> </a>
                        <div class="media-body "> <small class="pull-right">46h ago</small> <strong>Mike Loreipsum</strong> started following <strong>Olivia Wenscombe</strong>.
                           <br>
                           <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End feed -->
      </div>
   </div>
</div>
@stop
