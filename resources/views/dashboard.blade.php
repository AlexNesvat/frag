@include('includes.header')
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->role === 'administrator')
                            You are logged in as Admin!

                    @else
                            You are logged in as User!

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


</body>
@include('includes.footer')
