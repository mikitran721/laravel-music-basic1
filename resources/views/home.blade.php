{{-- su dung layout `base` --}}
@extends('layouts.base')

{{-- Trien khai title --}}
@section('title', 'Home page')

@section('main')
    <div class="row my-2">
        @foreach($articles as $article)
        <div class="col-md-3 pt-2">
            <div class="card" style="width: 18rem;">
                <img src="{{ $article->hinhanh }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{route('articles.show',$article->ma_bviet)}}" class="text-decoration-none">{{ $article->tieude }}</a>
                        </h5>
                    <p class="card-text">{{ $article->tomtat }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
