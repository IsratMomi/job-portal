@if ($message = Session::get('success'))
<div class="alert alert-success alert-block" style="top: 70px; z-index: 10000;">
    <button type="button" class="close" onclick="this.parentNode.remove()">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block" style="top: 70px; z-index: 10000;">
    <button type="button" class="close" onclick="this.parentNode.remove()">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block" style="top: 70px; z-index: 10000;">
    <button type="button" class="close" onclick="this.parentNode.remove()">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block" style="top: 70px; z-index: 10000;">
    <button type="button" class="close" onclick="this.parentNode.remove()">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger" style="top: 70px; z-index: 10000;">
    <button type="button" class="close" onclick="this.parentNode.remove()">×</button>
    Please check the form below for errors
</div>
@endif