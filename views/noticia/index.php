<?php
use yii\helpers\Html;
use yii\widgets\ListView;
/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
* @var app\models\NoticiaSearch $searchModel
*/
$this->title = 'Ultimas Noticias ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticia-index">
<p>
<?= !Yii::$app->user->isGuest ? Html::a('Create Noticia', ['create'],
['class' => 'btn btnsuccess']):''
?>
</p>
<?= ListView::widget([
'dataProvider' => $dataProvider,
'itemView'=>'_view',
]); ?>
</div>
