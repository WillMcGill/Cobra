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
<a href= '/move'><button>Move Files</button></a>
</div>

@endsection