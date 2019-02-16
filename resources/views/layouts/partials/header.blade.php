<header>
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('images/logo.png')}}" class="logo" />
        </div>
        <div class="col-md-6">
            <div class="stats">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('images/avatar.png')}}" class="avatar" />
                    </div>
                    <div class="col-md-9">
                        Welkom terug, {{Auth::user()->username}}
                        <br/>Cach: {{Auth::user()->cash}}
                        <br/>Bank: {{Auth::user()->bank}}
                    </div>
                </div>
                <div class="row">
                    nog wat
                    <br/>nog wat
                    <br/>nog wat
                </div>
            </div>
        </div>
    </div>
</header>