@extends('layouts')

@section('content')
    <h1>This is customers page</h1>
    <br>
    <x-bladewind.table>
        <x-slot name="header">
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </x-slot>
        <tr>
            <td>Alfred Rowe</td>
            <td>Outsourcing</td>
            <td>alfred@therowe.com</td>
        </tr>
        <tr>
            <td>Michael K. Ocansey</td>
            <td>Tech</td>
            <td>kabutey@gmail.com</td>
        </tr>
    </x-bladewind.table>
@endsection
