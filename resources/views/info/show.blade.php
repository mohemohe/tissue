@extends('layouts.base')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('info') }}">サイトからのお知らせ</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $info->created_at->format('Y年n月j日') }}</li>
        </ol>
    </nav>
    <h2><span class="badge {{ $category['class'] }}">{{ $category['label'] }}</span> {{ $info->title }}</h2>
    <p class="text-secondary"><span class="oi oi-calendar"></span> {{ $info->created_at->format('Y年n月j日') }}</p>
    {!! $compiledContent !!}
</div>
@endsection