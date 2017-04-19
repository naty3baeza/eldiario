<?php
use yii\helpers\Html;
use yii\widgets\ListView;
/**
* @var yii\web\View $this
* @var app\models\Noticia $model
*/
$this->title = $model->Titulo;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="noticia-view">


<h1><?= Html::encode($this->title) ?></h1>


<p>
<?php if (!Yii::$app->user->isGuest):?>
<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btnprimary'])
?>
<?= Html::a('Delete', ['delete', 'id' => $model->id], [
'class' => 'btn btn-danger', 'data' => [
'confirm' => 'Are you sure you want to delete this item?',
'method' => 'post',
],
]) ?>
<?php endif;?>
</p>
<h4><?= Html::encode($model->Copete)?></h4>
<p><?= Html::encode($model->Nota)?>
  <br>
  <div class="row">
  <div class="col-md-12">
     <h3>Comentarios</h3>
     </div>
  </div>
  <div class="row">
  <div class="col-md-12">
      <table class="table">
          <tr>
              <th>Fecha</th>
              <th>Comentarios</th>
          <tr>
  <?php
  foreach ($model->comentarios as $com) {
      ?>
              <tr>
                  <td><?php echo date ('d/m/Y', strtotime($com->Fecha)); ?></td>
                  <td><?php echo $com->Comentario; ?></td>

              </tr>

      <?php
  }
  ?></table>
  </div>
  </div>
</div>
