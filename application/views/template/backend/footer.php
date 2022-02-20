</div><!-- #wrapper end -->

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<script src="<?= base_url(); ?>assets/js/plugins.min.js"></script>

<!-- Bootstrap File Upload Plugin -->
<script src="<?= base_url(); ?>assets/js/components/bs-filestyle.js"></script>

<!-- Footer Scripts
	============================================= -->
<script src="<?= base_url(); ?>assets/js/functions.js"></script>

<script>
	$(document).ready(function() {
		$("#input-icon,#input-logo,#input-hero").fileinput({
			maxFileCount: 1,
			allowedFileTypes: ["image"]
		});
	});
</script>

</body>

</html>