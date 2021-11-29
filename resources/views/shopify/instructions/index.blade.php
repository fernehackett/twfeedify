@extends('shopify.default')

@section('content')
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <a class="btn btn-primary" href="{{ route("home") }}">Home</a>
        <div class="row mt-1">
            <div class="col-md-12">
                <dl>
                    <dt>Step 1</dt>
                    <dd>
                        After install <b>TWfeedify</b>, you will go to the set up page.
                    </dd>
                    <dt>Step 2</dt>
                    <dd>
                        Click to <i>Enable TWfeedify</i> to turn on the application.<br>
                        Fill your Twitter channel username in the Tweet Username field.<br>
                    </dd>
                    <dt>Step 3</dt>
                    <dd>
                        Click to submit to save your config.
                    </dd>
                    <dt>Step 4</dt>
                    <dd>
                        Go to <b>Theme settings</b> then click to <b>Add section</b>.<br>
                        Click to <b>TWfeedify</b>, you will see some options.<br>
                        1. Width: The width of widget of storefront.<br>
                        2. Height: The height of widget of storefront.<br>
                        3. Theme: The theme is light or dark.<br>
                        4. Customize HTML: Add the customize HTML to the storefront(optional).<br>
                        5. Customize CSS: Add the customize CSS to the storefront(optional).<br>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
@stop
