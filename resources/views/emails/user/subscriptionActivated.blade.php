@extends('emails.user.layout')@section('content'){!! trans('email.user.subscription_activated.content', ['subscription' => $subscription->title]) !!}@endsection