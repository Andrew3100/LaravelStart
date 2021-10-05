@extends('layouts.app')


@section('content')
<div class="container-fluid" style="margin-top: -24px;">
    <div class="row">
        <div class="col text-right">
            <div class="card">
                <div class="card-header" style="text-align: right">{{ __('Вы зашли под именем ')}}{{Auth::user()->lastname}} <a href="{{url('/logout')}}">{{'[Выход из системы]'}}</a></div>
            </div>
        </div>
    </div>
</div>
@endsection





