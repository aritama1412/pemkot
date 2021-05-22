<?php

/* @var $this yii\web\View */
use common\models\User;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">Welcome</p>
        <?php $user = User::find()->count(); 
        echo $user;
        ?>

    </div>


</div>
