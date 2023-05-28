@extends('admin.layouts.master')
@section('title')
{{   __('why us - Edit') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <hr>
            <h5>why us - {{ $whyChoose->title }}</h5>
            <div class="row">
                <div class="col-md-6">
                    <label name="why_us_icon">why us icon</label>
                    <input type="text" name="why_us_icon" id="why_us_icon" class="form-control" value="{{ $whyChoose->icon }}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label>why us title</label>
                    <input type="text" class="form-control" value="{{ $whyChoose->title}}" disabled>
                </div>

                <div class="form-group col-md-12">
                    <label>Status</label>
                    <select class="form-select form-control" disabled>
                        <option>{{ $whyChoose->is_active }}</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>description</label>
                    <textarea class="form-control" disabled>{{ $whyChoose->description }}</textarea>
                </div>
                <div class="col-md my-2">
                    <a href="{{ route('admin.whyChoose.index') }}" class="btn btn-dark">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection