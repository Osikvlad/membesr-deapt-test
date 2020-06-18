@if ($message = Session::get('success'))
    <div class="container">
        <div class="flash-message">
            <div id="alert-landing" class="alert message-success alert-dismissible fade show mt-4" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        </div>
    </div>

@endif

@if ($message = Session::get('error'))
    <div class="container">
        <div class="flash-message">
            <div id="alert-landing" class="alert message-danger alert-dismissible fade show mt-4" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="container">
        <div class="flash-message">
            <div id="alert-landing" class="alert alert-warning alert-block fade show mt-4" id="alert-landing">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="container">
        <div class="flash-message">
            <div id="alert-landing" class="alert alert-info alert-block fade show mt-4" id="alert-landing">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="container">
        <div class="flash-message">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-block mt-4">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $error }}</strong>
                </div>
            @endforeach
        </div>
    </div>
@endif
