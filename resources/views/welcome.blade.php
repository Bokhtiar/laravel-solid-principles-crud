@extends('app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')



    @php
        $month = Carbon\Carbon::now()->month;
        if ($month > 6) {
            echo 'a';
            $current_year = Carbon\Carbon::now()->year;
            $next_year = Carbon\Carbon::now()->year + 1;
            echo $current_year . ' - ' . $next_year;
        } else {
            echo 'b';
            $current_year = Carbon\Carbon::now()->year - 1;
            $next_year = Carbon\Carbon::now()->year;
            echo $current_year .'-'. $next_year;
        }
    @endphp


    <select class="form-control js-example-tokenizer" multiple="multiple">
        <option>orange</option>
        <option>white</option>
        <option>purple</option>
    </select>


    <br><br><br>

    <h3>Payment information</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order, product & user </th>
      <th scope="col">Name</th>
      <th scope="col">Txid</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($payments as $item)
    <tr>
      <th scope="row">1</th>
      <td>{{ $item->order_id }} {{ $item->name }} {{ $item->email }}</td>
      <td> {{$item->name}} </td>
      <td>{{ $item->txid}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(".js-example-tokenizer").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
    </script>
@endsection
@endsection
