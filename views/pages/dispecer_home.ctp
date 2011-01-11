<div class="pages admin_index">
	<h2><?php __('Vítejte');?></h2>
        <p id="page-intro"><?php __('Co si přejete dělat?');?></p>

        <div class="clear"></div> <!-- End .clear -->

            <div class="content-box column-left"><!-- Start Content Box -->

                <div class="content-box-header">

                        <h3><?php __('Trasy');?></h3>

                </div> <!-- End .content-box-header -->

                    <div class="content-box-content">
                        <div class="tab-content default-tab">

                            <?php echo $this->element('routes/dispecer_image_menu');?>

                        </div> <!-- End tab-content -->
                    </div> <!-- End .content-box-content -->
            </div> <!-- End .content-box -->
                        <div class="content-box column-right"><!-- Start Content Box -->

                <div class="content-box-header">

                        <h3><?php __('Vlakové soupravy');?></h3>

                </div> <!-- End .content-box-header -->

                    <div class="content-box-content">
                        <div class="tab-content default-tab">

                            <?php echo $this->element('trains/dispecer_image_menu');?>

                        </div> <!-- End tab-content -->
                    </div> <!-- End .content-box-content -->
            </div> <!-- End .content-box -->

            <div class="clear"></div> <!-- End .clear -->
</div>