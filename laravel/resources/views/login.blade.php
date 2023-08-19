@extends('layouts')

@section('content')
    <h1>This is login page</h1>
    <br>
    <section style="width:400px;padding:30px">
        <x-bladewind.input type="Email" label="Email" />
        <x-bladewind.input type="password" label="Password" />
        <x-bladewind.button>Submit</x-bladewind.button>
    </section>

    <button class="btn btn-success">Click me</button>
@endsection
