@extends('layouts.app')

@section('content')
    <main>
        <p>admin</p>
        <a href="{{ route('logout') }}" class="rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
            Logout
        </a>
    </main>
@endsection
