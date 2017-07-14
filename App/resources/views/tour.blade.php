@extends('layout')

@section('content')
         <div class="container">
         @foreach ($tours as $tour)

         @if($tour->name === 'USA')

         <h1>{{ $tour->name }}</h1> <br />

         @endif
         @endforeach

           <hr>

         @foreach ($stops as $stop)

         @if($stop->tour_id === 1)

         <table class="table">
            <thead>
              <tr>
                <th>Where</th>
                <th>When</th>
              </tr>
            </thead>
            <tbody>
                <td>{{$stop->where}}</td>
                <td>{{$stop->when}}</td>
            </tbody>
             
         </table>

        

         @endif      

         @endforeach
           
        </div> 
        <br \>
        
          <div class="container">
         @foreach ($tours as $tour)

         @if($tour->name === 'Europe')

         <h1>{{ $tour->name }}</h1> <br />

         @endif

         @endforeach

           <hr>

         @foreach ($stops as $stop)

         @if($stop->tour_id === 2)

         <table class="table">
            <thead>
              <tr>
                <th>Where</th>
                <th>When</th>
              </tr>
            </thead>
            <tbody>
                <td>{{$stop->where}}</td>
                <td>{{$stop->when}}</td>
            </tbody>
             
         </table>

         @endif

         @endforeach
        
        </div> 


@stop