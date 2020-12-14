@extends('admin/partials/adminblock')

@section('content')

<section>
    <div class="admin_wrapper">
        <h1></h1>

        <ul class="list-group" style="padding-bottom: 15px">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Total Number of Users:
            <span class="badge badge-primary badge-pill">{{ $users }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Total Number of Laptops:
            <span class="badge badge-primary badge-pill">{{ $laptops }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Total Number of Orders:
            <span class="badge badge-primary badge-pill">{{ $orders }}</span>
          </li>
        </ul>
        <ul class="list-group" style="padding-bottom: 15px">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Laptop That Received Max Comments:
            <span class="badge badge-primary badge-pill">{{ $max_comments }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            User ID With Maximum Comments:
            <span class="badge badge-primary badge-pill">{{ $user_max_comment }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Best Selling Laptop:
            <span class="badge badge-primary badge-pill">{{ $best_seller }}</span>
          </li>
        </ul>


        <h2 class="recent_logs" style="color: #f4cd66;">Recents Log Enteries</h2>
        <table class="table table-striped" style="background-color: #fff">
          <thead>
            <tr style="color: #f4cd66; background-color: #000">
              <th scope="col">#</th>
              <th scope="col" style="text-align: left;">Page Logs</th>
            </tr>
          </thead>
          <tbody>
            @foreach($logs as $log)
            <tr>
              <th scope="row">{{ $log->id }}</th>
              <td style="text-align: left;">{{ $log->event }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</section>

@stop()