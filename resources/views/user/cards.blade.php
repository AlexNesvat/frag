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


                    this is your cards!

                </div>
            </div>
        </div>
    </div>
</div>




</body>
@include('includes.footer')
