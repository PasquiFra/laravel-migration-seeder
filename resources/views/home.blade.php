<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Migration Seeder</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center">Laravel Trains Seeder</h1>
    <section class="container-fluid p-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Departure Time</th>
                <th scope="col">Departure Station</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Company</th>
                <th scope="col">Train Code</th>
                <th scope="col">Carriage</th>
                <th scope="col">On time</th>
                <th scope="col">Cancelled</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train)
                <tr>
                  <th scope="row">{{$train->dep_time}}</th>
                  <th scope="row">{{$train->dep_station}}</th>
                  <td>{{$train->arr_time}}</td>
                  <td>{{$train->arr_station}}</td>
                  <td>{{$train->company}}</td>
                  <td>{{$train->train_code}}</td>
                  <td>{{$train->n_carriage}}</td>
                  <td>{{$train->on_time === 1 ? 'Yes' : 'Delayed'}}</td>
                  <td class="{{$train->on_time === 1 ? 'text-success' : ($train->cancelled ? 'text-danger' : 'text-success')}}">
                    {{$train->on_time === 0 ? ($train->cancelled === 1 ? 'Cancelled' : 'Confirmed') : 'Confirmed'}}
                    </td>
                </tr>
                @empty
                <tr>
                    <th colspan="9">No trains found</th>
                </tr>
                @endforelse
            </tbody>
        </table>
    </section>
</body>

</html>