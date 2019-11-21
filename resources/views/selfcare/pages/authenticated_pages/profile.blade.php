@extends('selfcare.layouts.authenticated_pages_layout')
@section('main_content')
  <div class="container mt-5 main">
    <h3>{{$title}}</h3>
  </div>
  <div class="row container ml-2">
    <div class="col-md-7">
      <table class="table table-borderless p-4 mt-5  bg-white">
      <tbody class="container ml-4">
        <tr>
          <td>
            <h3 class="p-3">{{__('subscriberProfile.pernsonalDetail')}}</h3>
          </td>
        </tr>
        <tr class="mt-3">
          <th>{{__('subscriberProfile.name')}}</th>
          <td>{{$subscriberInfo->name}}</td>
        </tr>
        <tr>
          <th>{{__('subscriberProfile.mobile')}}</th>
          <td>{{$subscriberInfo->regId}}</td>
        </tr>
        <tr>
          <th>{{__('subscriberProfile.email')}}</th>
          <td>{{$subscriberInfo->emailAddress}}</td>
        </tr>
        <tr>
          <th>{{__('subscriberProfile.address')}}</th>
          <td>{{$subscriberInfo->address}}</td>
        </tr>
        <tr>
          <td><h3 class="p-3">{{__('subscriberProfile.accountDetails')}}</h3></td>
        </tr>
        <tr class="mt-3">
          <th>{{__('subscriberProfile.plan')}}</th>
          <td>{{(isset($subscriberInfo->plan)) ? $subscriberInfo->plan : '--' }}</td>
        </tr>
        <tr>
          <th>{{__('subscriberProfile.monthlyCharge')}}</th>
          <td>--</td>
        </tr>
        <tr>
          <th>{{__('subscriberProfile.additional')}}</th>
          <td>{{isset($subscriberInfo->unbilledAmount) ? $subscriberInfo->unbilledAmount : '--'}}</td>
        </tr>
        <tr>
          <th>{{__('subscriberProfile.due')}}</th>
          <td>{{$subscriberInfo->amountDue}}</td>
        </tr>
        <tr>
          <th>{{__('subscriberProfile.cycle')}}</th>
          <td>{{$subscriberInfo->billCycleDay}}</td>
        </tr>
        <tr>
          <td>
            <div class="btn-group mt-2">
            <button type="button" class="btn btn-secondary">{{__('subscriberProfile.payBill')}}</button>
            <button type="button" class="btn btn-secondary ml-2">{{__('subscriberProfile.debit')}}</button>
          </div>
        </td>
        </tr>
      <tr>
        <td>  <h3 class="p-3">{{__('subscriberProfile.blackCounter')}}</h3> </td>
      </tr>
        <tr class="mt-3">
          <th>{{__('subscriberProfile.minutes')}}</th>
          <td>{{$seasonPass->minutes}}</td>
        </tr>
        <tr>
          <th>{{__('subscriberProfile.sms')}}</th>selfcare.plane.index
          <td>{{$seasonPass->SMS}}</td>
        </tr>
        <tr>
          <th>{{__('subscriberProfile.data')}}</th>
          <td>{{$seasonPass->data}}</td>
        </tr>
        <tr>
          <td>
            <div class="btn-group mt-2">
            <button type="button" class="btn btn-secondary">{{__('subscriberProfile.purchase')}}</button>
            <button type="button" class="btn btn-secondary ml-2">{{__('subscriberProfile.share')}}</button>
          </div>
        </td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="col-md-5 p-3 bg-info mt-5 h-25">
      <div class="box box-solid box-primary">
        <h4>Not Enjoying current plan?</h4>
        <p>You can always change to the other plans to match your interest</p>
        <a href="{{route('selfcare.plan.index')}}" class="btn btn-dark">{{__('subscriberProfile.changePlan')}}</a>
      </div>
    </div>
  </div>
@endsection
