@extends('layouts.app')

@section('content')
        <script>
            $(document).ready(function(){
                $.get('https://api.data.gov.in/resource/04cbe4b1-2f2b-4c39-a1d5-1c2e28bc0e32?api-key=579b464db66ec23bdd000001989e35b0bf294d227974a0dd1ff8df57&format=json', function(data, status){
                    console.log(data);
                })
            })
        </script>

@endsection

