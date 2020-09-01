@if (Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ Session::get('success') }}</strong>
    </div>
@elseif (Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ Session::get('error') }}</strong>
    </div>
@elseif (Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ Session::get('warning') }}</strong>
    </div>
@elseif (Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ Session::get('info') }}</strong>
    </div>
@endif