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



                    {{--{{dd($currentUser)}}--}}


                        {!! Form::open(['route' => ['account.update', Auth::id()], 'method'=> 'put']) !!}
                        {{--echo Form::model($user, array('route' => array('user.update', $user->id)))--}}

                        {!! Form::text('name', $currentUser['name']); !!}
                        {!! Form::email('email',$currentUser['email']); !!}

                        {!! Form::submit('Update info',['class' =>'btn btn-primary btn-lg']); !!}

                        {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>




</body>
@include('includes.footer')
