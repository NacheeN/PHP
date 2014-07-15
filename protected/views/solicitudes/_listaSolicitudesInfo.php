<?php if ($data->tipo=='Solicitud Informacion') { ?>

<div class="container">
    <div class="thumbnail" style="height:200px">
                <div class="caption">
                    <table class="table table-striped table-bordered table-hover table-condensed ">
                        <h3></h3>
                        <thead>
                            <tr>
                                <th>Estado</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>EMail</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>    
                        <tbody>
                            <tr>
                                <td><?php echo CHtml::encode($data->estado); ?></td>  
                                <td><?php echo CHtml::encode($data->nombre); ?></td>
                                <td><?php echo CHtml::encode($data->telefono); ?></td>
                                <td><?php echo CHtml::encode($data->email); ?></td>
                                <td><?php echo CHtml::encode($data->tipo); ?></td>
                                <?php echo CHtml::link('Vista', array('solicitudes/view', 'id'=>$data->id), array('class'=>'btn btn-primary')); ?>
                                <?php echo CHtml::link('Leida', array('solicitudes/leida', 'id'=>$data->id), array('class'=>'btn btn-primary')); ?>
                            </tr>
                        </tbody>
                </table>
        </div>
    </div>
</div>

<?php } ?>
