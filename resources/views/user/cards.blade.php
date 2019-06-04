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

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if($userCards)

                                <table class="table table-striped table-dark">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Exp. month</th>
                                        <th scope="col">Exp. year</th>
                                        <th scope="col">Last4</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php ($i = 1)
                                    @foreach($userCards as $card)
                                        <tr>
                                            <th scope="row">{{$i}}</th>
                                            <td>{{$card->brand}}</td>
                                            <td>{{$card->country}}</td>
                                            <td>{{$card->exp_month}}</td>
                                            <td>{{$card->exp_year}}</td>
                                            <td>{{$card->last4}}</td>
                                        </tr>
                                        @php ($i++)
                                    @endforeach
                                    </tbody>
                                </table>


                        @endif
                    this is your cards!

                </div>
            </div>
        </div>
    </div>
</div>




</body>
@include('includes.footer')
