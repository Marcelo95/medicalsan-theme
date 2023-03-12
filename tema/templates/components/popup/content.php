
<?php if( $args["first_run"] ): ?>
    <link rel="stylesheet" href="<?php _e(asset(sprintf("../templates/components/%s/style.css?v1", basename(__DIR__)))); ?>">

<?php endif; ?>

<!-- Modal -->
<div class="modal fade myPopup" id="<?php _e($args["id"]  ?? 'teste'); ?>" tabindex="-1" role="dialog" aria-labelledby="<?php _e($args["id"]  ?? 'teste'); ?>Label" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered  <?php _e($args["css_modal"]  ?? 'modal-xl'); ?>" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="<?php _e($args["id"]  ?? 'teste'); ?>Label"><?php _e($args["title"]  ?? ''); ?></h5>
                <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close" onClick="jQuery('#<?php _e($args["id"]  ?? 'teste'); ?>').modal('hide')">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalBody" class="modal-body">
                <?php _e($args["body"]  ?? ''); ?> 
            </div>
        </div>
    </div>
</div>