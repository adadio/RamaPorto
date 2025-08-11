@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Contact Me</h1>
    <p>Kalau mau bekerja sama atau diskusi project, silakan kirim pesan lewat form di bawah:</p>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
</div>
@endsection
