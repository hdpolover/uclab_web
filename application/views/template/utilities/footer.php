    </div><!-- #wrapper end -->

    <!-- Go To Top
        ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <script type="text/javascript">
        $('form').submit(function(event) {
            $('#submit-button').prop("disabled", true);
            // add spinner to button
            $('#submit-button').html(
                `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> loading...`
            );
            return;
        });
    </script>

    </body>

    </html>