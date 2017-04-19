
<?php
use yii\helpers\Html;
/* @var $this NoticiaController */
/* @var $model Noticia */
?>
<div class="col-md-6 ">
<h3><?php echo Html::encode($model->Titulo); ?></h3>
<p><?php echo Html::encode($model->Copete); ?></p>
<?php echo Html::a(Html::encode('ver mas...'), ['view', 'id'=>$model->id]);
?>
<hr></hr>
</div>
