@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <button class="btn btn-success btn-block random-btn"><i class="fas fa-random"></i> สุ่มรางวัล</button>
                    <button class="btn btn-info btn-block reset-btn"><i class="fas fa-undo"></i> รีเซ็ตรางวัล</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
