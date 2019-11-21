@extends('selfcare.layouts.authenticated_pages_layout')
@section('main_content')

<div class="container mt-5 main">
  <h3>{{$title}}</h3>
</div>

<div class="container">
<table class="table table-borderless p-4 mt-5  bg-white">
<tbody class="container ml-4 ml-3">
  <tr>
    <td>
      <h3 class="p-3">{{__('plans.cobp')}}</h3>
      <p>{{__('plans.planStatement')}}</p>
    </td>
  </tr>
  <tr class="mt-3">
    <th>{{__('plans.name')}}</th>
    <td>{{$subscriberInfo->name}}</td>
  </tr>
  <tr>
    <th>{{__('plans.mobile')}}</th>
    <td>{{$subscriberInfo->regId}}</td>
  </tr>
  <tr class="mt-3">
    <th>{{__('plans.plan')}}</th>
    <td>{{(isset($subscriberInfo->plan)) ? $subscriberInfo->plan : '--' }}</td>
  </tr>
  <tr class="mt-3">
    <th>{{__('plans.simCard')}}</th>
    <td>{{(isset($subscriberInfo->plan)) ? $subscriberInfo->plan : 'Physical Sim Card' }}</td>
  </tr>
  <tr class="mt-3">
    <th>{{__('plans.choosePlan')}}</th>
    <td>
      <div class="dropdown">
      <select class="form-control" id="planList" name="planList">
        <option value="current">{{__('plans.currentPlan')}}</option>
        @foreach($planeList as $key=>$planName)
        <option value="{{$planName->PlanInfo}}">{!! $planName->PlanInfo.' + '. $planName->Data .' + '. $planName->Voice .' + '. $planName->SMS .' + '. $planName->Price.' RM' !!}</option>
        @endforeach
      </select>
      </div>
    </div>
    </td>
  </tr>
  <tr>
    <td><a href="#" class="btn btn-dark" id="changePlan">{{__('plans.changePlan')}}</a></td>
  </tr>
</tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#changePlan').click(function(e){
        var selectPlan = $("#planList option:selected").val();
        e.preventDefault();

        $.ajax({
               type:'POST',
               url:"{{route('selfcare.plan.changePlan')}}",
               data: {"_token": "{{ csrf_token() }}","plan": selectPlan},
               // success:function(data) {
               //    $("#msg").html(data.msg);
               // }
            });
      });
    });
</script>
@endsection
