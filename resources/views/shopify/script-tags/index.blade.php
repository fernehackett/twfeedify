@if($user->enable)
    let data = JSON.parse(`{!! json_encode($user->data) !!}`)
    let script = document.createElement("SCRIPT")
    script.src = `https://platform.twitter.com/widgets.js`
    script.async = true
    script.charset = `utf-8`
    script.onload = function(){
        document.querySelectorAll(".twfeedify").forEach(function(elm){
            let width = elm.getAttribute("data-width")
            let height = elm.getAttribute("data-height")
            let theme = elm.getAttribute("data-theme")
            let html = `<a class="twitter-timeline" data-width="${width}" data-height="${height}" data-dnt="true" data-theme="${theme}"
                       href="https://twitter.com/${data.tw}?ref_src=twsrc%5Etfw">Tweets by ${data.tw}</a>`
            elm.innerHTML = html
        })
    }
    document.head.appendChild(script)
@endif