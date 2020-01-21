@extends('layouts.app')

@section('content')

<div class="container">

<h1>Files Copied to Moved Folder</h1>
<table>
    
    
    @foreach($moveData as $item)
<tr>
    <td>    
        

        {{$item}}
        
    </td>

</tr>
@endforeach

</table>

</div>

@endsection