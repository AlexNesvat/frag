<div class="profile-sidebar">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">
        <img src="{{ asset('images/newuser/cat.jpg') }}" class="img-responsive" alt="">
    </div>
    <!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->
    <div class="profile-usertitle">
        <div class="profile-usertitle-name">
            @if(isset($currentUser))
            {{$currentUser['name']}}
            @endif
        </div>
        <div class="profile-usertitle-job">
            @if(isset($currentUser))
            {{$currentUser['email']}}
            @endif
        </div>
        <div class="profile-usertitle-job">
            @if(isset($currentUser))
               Registered {{ \Carbon\Carbon::parse($currentUser['created_at'])->format('d/m/Y')}}
            @endif
        </div>
        <div class="profile-usertitle-job">
            @if(isset($currentUser))
                {{$currentUser['role']}}
            @endif
        </div>
    </div>
    <!-- END SIDEBAR USER TITLE -->
    <!-- SIDEBAR BUTTONS -->
    <div class="profile-userbuttons">
        <button type="button" class="btn btn-success btn-sm">Follow</button>
        <button type="button" class="btn btn-danger btn-sm">Message</button>
    </div>
    <!-- END SIDEBAR BUTTONS -->
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu">
        <ul class="nav">
            <li class={{(request()->route()->getName() == 'account') ? "active" : ''}}>
                <a href="{{route('account')}}">
                    <i class="glyphicon glyphicon-user"></i>
                    Account </a>
            </li>
            <li class={{(request()->route()->getName() == 'orders') ? "active" : ''}}>
                <a href="{{route('orders')}}">
                    <i class="glyphicon glyphicon-gift"></i>
                    Orders</a>
            </li>
            <li class={{(request()->route()->getName() == 'subscriptions') ? "active" : ''}}>
                <a href="{{route('subscriptions')}}">
                    <i class="glyphicon glyphicon-calendar"></i>
                    Subscriptions </a>
            </li>
            <li class={{(request()->route()->getName() == 'cards') ? "active" : ''}}>
                <a href="{{route('cards')}}">
                    <i class="glyphicon glyphicon-credit-card"></i>
                    Cards </a>
            </li>
        </ul>
    </div>
    <!-- END MENU -->
</div>
