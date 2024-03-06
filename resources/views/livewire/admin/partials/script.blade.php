<div>
    <!-- Core -->
    <script src="{{asset('admin/vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Vendor JS -->
    <script src="{{asset('admin/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

    <!-- Slider -->
    <script src="{{asset('admin/vendor/nouislider/dist/nouislider.min.js')}}"></script>

    <!-- Smooth scroll -->
    <script src="{{asset('admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

    <!-- Charts -->
    <script src="{{asset('admin/vendor/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('admin/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

    <!-- Datepicker -->
    <script src="{{asset('admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

    <!-- Sweet Alerts 2 -->
    <script src="{{asset('admin/vendor/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="{{asset('admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

    <!-- Notyf -->
    <script src="{{asset('admin/vendor/notyf/notyf.min.js')}}"></script>

    <!-- Simplebar -->
    <script src="{{asset('admin/vendor/simplebar/dist/simplebar.min.js')}}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="{{asset('admin/assets/js/volt.js')}}"></script>
    <!-- Tag JS 
    <script src="{{asset('admin/assets/js/tags.min.js')}}"></script>-->
    <!-- fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module">
        import Tags from "{{asset('admin/assets/js/tags.js')}}";
        var inst = Tags.init("select[multiple]");
        // Reset does not fire a change input
        $(function() {

            var url = window.location.pathname,
                urlRegExp = new RegExp(url.replace(/\/$/, '') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
            // now grab every link from the navigation
            $('.nav a').each(function() {
                // and test its normalized href against the url pathname regexp
                if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                    $(this).parent().addClass('active');
                    $(this).parent().parent().parent().addClass('show');
                    var parent = $(this).parent().parent().parent().parent();
                    var span = parent.find("span");
                    span.attr("aria-expanded", "true");

                }
            });

        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

</div>