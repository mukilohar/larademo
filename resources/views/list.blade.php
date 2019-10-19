@extends('layouts.app')

@section('content')

<div class="container">
    <form method="GET" action="">
        <select name="statename">
                <option value="">Select State</option>
            @foreach ($states as $state)
                <option value='{{$state->statename}}' {{Request::get('statename') ==$state->statename? 'selected="selected"' : '' }} > {{$state->statename}}</option>
            @endforeach
        </select>

        <select name="pincode">
                <option value="">Select Pincode</option>
            @foreach ($pincodes as $pincode)
                <option value='{{$pincode->pincode}}' {{Request::get('pincode') ==$pincode->pincode? 'selected="selected"' : '' }} > {{$pincode->pincode}}</option>
            @endforeach
        </select>


        <select name="districtname">
                <option value="">Select District</option>
            @foreach ($districts as $district)
                <option value='{{$district->districtname}}' {{Request::get('districtname') ==$district->districtname? 'selected="selected"' : '' }} > {{$district->districtname}}</option>
            @endforeach
        </select>

        <select name="divisionname">
                <option value="">Select Division</option>
            @foreach ($divisions as $division)
                <option value='{{$division->divisionname}}' {{Request::get('divisionname') ==$division->divisionname? 'selected="selected"' : '' }} > {{$division->divisionname}}</option>
            @endforeach
        </select>

        <input type="submit">
        <a href="{{ url('admin') }}">Clear</a>
    </form>
    <table class="table table-striped">
        <tr>
            <th>State
            <th>Pincode
            <th>District Name
            <th>Division Name
        </tr>
        @foreach ($lists as $list)
            <tr>
                <td>{{ $list->statename }}</td>
                <td>{{ $list->pincode }}</td>
                <td>{{ $list->districtname }}</td>
                <td>{{ $list->divisionname }}</td>
            </tr>
        @endforeach
    </table>
    
</div>

{{ $lists->links() }}
@endsection
