@extends('layouts.app')

@section('content')
    
<div class="container">
   <div class="row">
    <div class="col-8">
        <img  src="/storage/product/{{ $post->image }}" class="w-100" style="max-height: 600px">
    </div>
    <div class="col-4">
        <div>
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                </div>
                <div>
                    <div class="fw-bold">
                        <a style="text-decoration: none;" href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                        <a style="text-decoration: none;" href="#" class="ps-3">Follow</a>
                    </div>
                </div>
            </div>

            <hr>

            <p>
                <span class="fw-bold">
                    <a style="text-decoration: none;" href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span> {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
</div>
@endsection