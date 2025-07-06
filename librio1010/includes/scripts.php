    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
    <?php if (isset($include_modal) && $include_modal): ?>
    <script src="assets/js/modal.js"></script>
    <?php endif; ?>
    <?php if (isset($include_gallery) && $include_gallery): ?>
    <script src="assets/js/gallery.js"></script>
    <?php endif; ?>
    
    <?php if (isset($custom_scripts) && !empty($custom_scripts)): ?>
    <?php echo $custom_scripts; ?>
    <?php endif; ?> 