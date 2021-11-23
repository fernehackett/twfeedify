@extends('shopify.default')
@section('content')
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        {{ Form::open([
            "url" => route("shopify.shop.setup"),
            "method" => "POST",
            "id" => "shop-setup"
        ]) }}
        @sessionToken
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="checkbox" name="enable" value="1" id="enable-app"
                           @if(auth()->user()->enable == 1) checked @endif>
                </div>
            </div>
            <label class="form-control" for="enable-app">Enable {{ config("app.name") }}</label>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Tweet username</span>
            </div>
            <input type="text" class="form-control" name="data[tw]" placeholder="Your Tweet username" value="{{ auth()->user()->data["tw"] ?? "" }}">
        </div>

        <div class="form-actions">
            <button class="btn btn-outline-success" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="reset">Reset</button>
        </div>
        {{ Form::close() }}
    </div>
@stop
@section('scripts')
    <script>
        actions.TitleBar.create(app, {title: 'Home'});
        $("#shop-setup").on("submit", function (e) {
            e.preventDefault();
            let data = $(this).serializeArray();
            $.ajax({
                url: $(this).attr("action"),
                data: data,
                method: $(this).attr("method"),
                headers: {
                    Authorization: `Bearer ${window.sessionToken}`
                }
            }).done(function (res) {
                if (res.succeed === true) {
                    var Toast = actions.Toast;
                    var toastNotice = Toast.create(app, {
                        message: res.msg,
                        duration: 3000,
                    });
                    toastNotice.dispatch(Toast.Action.SHOW);
                }
            })
        })
    </script>
@stop
