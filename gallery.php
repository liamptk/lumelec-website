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
					<h3> Examples of thermal imaging carried out on electrical condition reports </h3>
					<a href="images/gallery/thermal.jpg" title="Thermal Imaging Electrical">
						<img src="images/gallery/thermal.jpg" alt="Thermal Imaging Electrical">
					</a>
					<a href="images/gallery/thermal-two.jpg" title="Apple">
						<img src="images/gallery/thermal-two.jpg" alt="Thermal Imaging Electrical">
					</a>
					<a href="images/gallery/thermal-three.jpg" title="Thermal Imaging Electrical">
						<img src="images/gallery/thermal-three.jpg" alt="Thermal Imaging Electrical">
					</a>
					</br> </br>
					<h3> Recent Kitchen Install of down lights &  ceiling bluetooth speaker system </h3>
					<a href="images/gallery/kitchen-installation.jpg" title="Kitchen Installation">
						<img src="images/gallery/kitchen-installation.jpg" alt="Kitchen Installation">
					</a>
					<a href="images/gallery/kitchen-installation-two.jpg" title="Kitchen Installation">
						<img src="images/gallery/kitchen-installation-two.jpg" alt="Kitchen Installation">
					</a>
					<a href="images/gallery/kitchen-installation-four.jpg" title="Kitchen Installation">
						<img src="images/gallery/kitchen-installation-four.jpg" alt="Kitchen Installation">
					</a>
					</br> </br>
					<h3> Recent LED Lighting Installation of Large hall area  </h3>
					<a href="images/gallery/led-installation.jpg" title="LED Installation">
						<img src="images/gallery/led-installation.jpg" alt="LED Installation">
					</a>
					<a href="images/gallery/led-installation-two.jpg" title="LED Installation">
						<img src="images/gallery/led-installation-two.jpg" alt="LED Installation">
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