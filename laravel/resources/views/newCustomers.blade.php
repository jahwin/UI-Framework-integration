@extends('layouts')

@section('content')
    <h1>This is new customers page</h1>
    <br>
    <section style="width:400px;padding:30px">
        <x-bladewind.input type="text" label="First Name" />
        <x-bladewind.input type="text" label="Last Name" />
        <x-bladewind.input type="email" label="Email" />
        <x-bladewind.button>Submit</x-bladewind.button>
    </section>
@endsection
