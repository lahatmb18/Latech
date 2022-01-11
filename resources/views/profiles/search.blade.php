@extends('layouts.app')

@section('content')
    <div class="container">

        @if(isset($details))
            <h3>Résultats de recherche pour : <b>{{ $query }} </b></h3>
            <!-- User Component -->
            <div class="px-3 border bg-light">
                @foreach($details as $user)
                    <!-- User Info -->
                    <div class="d-flex align-items-center my-3 ">
                        <a href="/profile/{{$user->username}}" style="width: 56px; height: 56px;">
                            <img src="{{ asset($user->profile->getProfileImage()) }}" class="rounded-circle w-100">
                        </a>
                        <div class='d-flex flex-column pl-3'>
                            <a href="/profile/{{$user->username}}" class='h5 m-0 text-dark text-decoration-none' >
                                <strong>{{ $user->username }}</strong>
                            </a>
                            <span class="text-muted">{{ $user->name }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        @else
            <div class="d-flex justify-content-center p-3 py-5 border bg-white">
                <div class="card border-0 text-center" >
                    <img src="{{asset('img/noresult.png')}}" class="card-img-top" alt="..." style="max-width: 330px">
                    <div class="card-body ">
                        <h3>{{ $message }}</h3>
                        <p class="card-text text-muted">Nous n'avons pas pu trouver ce que vous cherchez</p>
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection
