@extends('layouts.admin')
@section('title', 'プラクティスの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プラクティス新規作成</h2>
                <form action="{{ route('admin.practice.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">練習</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="practice" value="{{ old('practice') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">答え</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="answer" value="{{ old('answer') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">プログラミング</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="programming" value="{{ old('programming') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">内容欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="content" rows="20">{{ old('content') }}</textarea>
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
