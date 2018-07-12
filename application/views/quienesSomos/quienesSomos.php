<div class="container" id="contenedor_quienessomos">
    <div class="row">
        <div class="col-md-12">
        <fieldset>
            <legend class="text-center header">¿Quiénes somos?</legend>

             <?php
            if($quienessomos)
            {
                foreach ($quienessomos->result() as $quienes)
                {
                    if($quienes->id == 1)
                    {
                    ?>
                        <div class="col-md-12">
                    <?php
                    }else{
                    ?>
                        <div class="col-md-6">
                    <?php       
                    }
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo $quienes->titulo; ?></div>
                        <div class="panel-body">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum egestas auctor. 
                            Maecenas vitae nisl vitae turpis malesuada sollicitudin non non nibh. Sed sollicitudin 
                            gravida justo, non pellentesque neque mattis sit amet. Maecenas pulvinar vestibulum interdum.
                            Phasellus a efficitur arcu, nec dictum nibh
                            </p>
                        </div>
                    </div>    
                </div>
                <?php
                }
            } ?>
        </fieldset>
        </div>
    </div>
</div>