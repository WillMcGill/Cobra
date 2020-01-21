@extends('layouts.app')

@section('content')

<div class="container">
<table>
@foreach ($data as $file)
<tr>
    <td>{{$file}}</td>

</tr>


@endforeach
</table>
</div>

@endsection