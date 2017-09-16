<?php 
$pageTitle = 'Lumelec Services';
$pageDescription = 'Maintenance';
include_once('header.php');
?>
<!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header" style="color:#009ce6;">Gallery...</h1>
				<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
				<div id="blueimp-gallery" class="blueimp-gallery">
					<div class="slides"></div>
					<h3 class="title"></h3>
					<a class="prev">‹</a>
					<a class="next">›</a>
					<a class="close">×</a>
					<a class="play-pause"></a>
					<ol class="indicator"></ol>
				</div>
				<div id="links">
					<a href="images/banana.jpg" title="Banana">
						<img src="images/thumbnails/banana.jpg" alt="Banana">
					</a>
					<a href="images/apple.jpg" title="Apple">
						<img src="images/thumbnails/apple.jpg" alt="Apple">
					</a>
					<a href="images/orange.jpg" title="Orange">
						<img src="images/thumbnails/orange.jpg" alt="Orange">
					</a>
				</div>
            </div>
			<script>
			document.getElementById('links').onclick = function (event) {
				event = event || window.event;
				var target = event.target || event.srcElement,
					link = target.src ? target.parentNode : target,
					options = {index: link, event: event},
					links = this.getElementsByTagName('a');
				blueimp.Gallery(links, options);
			};
			</script>
        </div>
        <!-- /.row -->

        <hr>
<?php include_once('footer.php') ?>