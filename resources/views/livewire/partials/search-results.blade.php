<div class="container-fluid py-5 my-5">
    <div class="container py-4">
        <div id='dtc-result'></div>
    </div>
</div>

<script>
    var dtc_result = {
        path: ('https:' == document.location.protocol ? 'https://' :

            'http://') + 'plugin.datacom.vn',
        productKey: '3kosyle6cja50ob',

        languageCode: 'vi',

    };

    (function() {

        var dtc_head = document.getElementsByTagName('head')[0];
        var dtc_script = document.createElement('script');
        dtc_script.async = true;
        dtc_script.src =

            dtc_result.path.concat('/Resources/Static/Js/plugin.js?v=' + (new Date().getTime()));

        dtc_script.charset = 'UTF-8';

        dtc_head.appendChild(dtc_script);
    })();
</script>