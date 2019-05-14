@include('includes.header')
<body>

<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            @include('user.sidebar')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>


                    @if($subscriptions)
                        {{--{{dd($subscriptions)}}--}}


                            <table class="table table-striped table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Current period end</th>
                                    <th scope="col">Current period start</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Interval</th>
                                    <th scope="col">Currency</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php ($i = 1)
                                @foreach($subscriptions as $subscription)
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>{{$subscription->status}}</td>
                                    <td>{{\Carbon\Carbon::createFromTimestamp($subscription->created)->format('d/m/Y')}}</td>
                                    <td>{{\Carbon\Carbon::createFromTimestamp($subscription->current_period_end)->format('d/m/Y')}}</td>
                                    <td>{{\Carbon\Carbon::createFromTimestamp($subscription->current_period_start)->format('d/m/Y')}}</td>
                                    <td>{{$subscription->plan->amount / 100}}</td>
                                    <td>{{$subscription->plan->interval}}</td>
                                    <td>{{$subscription->plan->currency}}</td>
                                </tr>
                                @php ($i++)
                                @endforeach
                                </tbody>
                            </table>


                    @endif
                    this is your subscriptions!


            </div>
        </div>
    </div>
</div>




</body>
@include('includes.footer')
