<!DOCTYPE html>
<html lang="en-US" class="no-js">

<?php include_once 'head.php'; ?>

    <body class="home page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-260 masthead-fixed full-width home_absolute_header grid">
        <!-- page preloader -->
        <div class="preloader">
            <div class="preloader_image to_animate" data-animation="pulse"></div>
        </div>

        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
            </button>
            <div class="widget widget_search">

                <form role="search" method="get" class="search-form form-inline" action="#">
                    <div class="form-group">
                        <label>
                            <input type="search" class="search-field form-control" placeholder="Search" value="" name="s" title="Search for:" />
                        </label>
                    </div>
                    <button type="submit" class="search-submit theme_button">
                        <span class="screen-reader-text">Search</span>
                    </button>
                </form>
            </div>
        </div>
        <!-- Unyson messages modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
            <div class="fw-messages-wrap ls with_padding">
            </div>
        </div>
        <!-- eof .modal -->

        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas" class="wide">
            <div id="box_wrapper">
                <!-- template sections -->
                <?php include_once 'header.php'; ?>
                    <p>&nbsp;</p>
                    <!-- eof .page_header -->
                    <div class="fw-page-builder-content">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <section id="section-d0a72da" class="fw-main-row section  section_padding_top_65 section_padding_bottom_100 columns_padding_0 background_cover mobile-overlay">
                            <h3 class="hidden"> About</h3>
                            <div class="section-overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div id="da4e9aa" class="col-xs-12 col-md-6 to_animate fw-column" data-animation="fadeInUp">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">
                                            <div class="img-wrap with_divider divider_1 "><img src="uploads/number_01.png" alt="uploads/number_01.png" class="with_divider divider_1 " /></div>

                                            <div id="divider-1ad0d4b" class="fw-divider-space "></div>

                                            <div class="special-heading text-left">
                                                <h2 class="section_header margin_0  ">
	<span class="highlight regular text-transform-none ">
		Welcome to Tipatone	</span>
	</h2>
                                            </div>

                                            <div id="divider-0840d59" class="fw-divider-space "></div>

                                            <div class="special-heading text-left">
                                                <p class=" paragraph">
                                                    <span class="darkgrey regular text-transform-none ">
                                            Tipatone Limited is a full-service digital solutions provider providing innovative marketing and advertising solutions to its domestic as well as international clients. 	
                                            </span>
                                                </p>
                                            </div>
                                            <div id="divider-167690d" class="fw-divider-space "></div>
                                            <div class="text-block shortcode ">
                                                <p>
                                                    It was established in 2017 . The firm offers a large portfolio of digital solutions by a strong team of Tech and digital enthusists consists of experienced, dynamic, enterprising and innovative digital experts having outstanding experience and professional records
                                                </p>

                                                <p>We strongly believe that a trusted relationship is built on the foundation of shared values and deep understanding of our clients’ needs. Thus, we blend professional expertise with the business objectives of our clients and develop a strong grasp of their businesses before coming up with tailored solutions suitable for their kind of business.</p>

                                            </div>

                                            <!--                                    <div class="fw-theme-signature">
                                        <div class="text-part">
                                            <h4 class="section_header">Paul Small</h4>
                                            <div class="desc highlight">Founder of the Flavius</div>
                                        </div>
                                        <div class="img-part">
                                            <img src="uploads/signature.png" alt="Paul Small">
                                        </div>
                                    </div>-->

                                            <!--<div id="divider-9df6d89" class="fw-divider-space "></div>-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <?php include_once 'footer.php'; ?>
                        <!-- .page_footer -->
                        <?php include_once 'copyright.php'; ?>
                        <!-- .copyrights -->
            </div>
            <!-- eof #box_wrapper -->
        </div>
        <!-- eof #canvas -->
        <!-- Instagram Feed JS -->
        <?php include_once 'script.php'; ?>
    </body>

</html>