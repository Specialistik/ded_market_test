<?php
/**
 * @see \app\controllers\ProductController
 */

use yii\grid\GridView;
use yii2tech\admin\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel yii\base\Model */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
$this->params['contextMenuItems'] = [
    ['create']
];
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => \yii\grid\SerialColumn::class],

        'id',
        'name:ntext',
        'category',
        'price:ntext',
        'description:ntext',
        // 'image',

        [
            'class' => ActionColumn::class,
        ],
    ],
]); ?>
