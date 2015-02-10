<?php
defined('_JEXEC') or die;

$icon = $params->get('icon');
$phone = $params->get('phone');
$desc = $params->get('desc');
 ?>

<div class="asva_phone <?php echo $moduleclass_sfx; ?>">
    <div class = "row"><?php echo $icon; ?></div>
    <div class = "row"><?php echo $phone; ?></div>
    <div class="desc row"><?php echo $desc; ?></div>
</div>


<?php
// Get custom script. Editable.
JHtml::script(JUri::base() . 'media/mod_asva_phone/js/script.js');
?>
