<?php
defined('_JEXEC') or die;

$icon = $params->get('icon');
$phone = $params->get('phone');
$desc = $params->get('desc');
$bckg_img = $params->get('bckg_img'); $bckg_img = $bckg_img ? "background-image: url('$bckg_img')" : '';
$bckg_color = $params->get('bckg_color');
$desc_color = $params->get('desc_color');

$html = <<<HTML
<div class="asva_phone $moduleclass_sfx">
    <div class="container" style = "background-color: $bckg_color; $bckg_img">
        <div class="contact-details">
            <div class="phone-icon">
                <img alt="" src="$icon">
            </div>
            <div class="company-phone">
                <a  >$phone</a>
            </div>
            <h3 class="company-address" style = "color: $desc_color">$desc</h3>
        </div>
    </div>
</div>
HTML;
echo $html;

// Get custom.
JHtml::stylesheet(JUri::base() . 'media/mod_asva_phone/css/style.css', array(), true);
JHtml::script(JUri::base() . 'media/mod_asva_phone/js/script.js');
?>