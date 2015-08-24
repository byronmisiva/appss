<?php
if ($data['premios'] ){
foreach ($data['premios'] as $premio) {
    ?>
    <div class="colorgris opcion-sel" idelemento="<?php echo $premio->id; ?>">
        <?php echo $premio->dispositivo; ?>
    </div>
<?php
}

}else {
    ?>
    <div class="colorgris opcion-sel" idelemento="">
        Se terminaron los premios
    </div>
<?php

}
?>
