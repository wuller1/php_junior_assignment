<?php $user_info = get_user_info(); ?>
<table class="table table-striped">
    <tr>
        <td>Адрес электронной почты</td>
        <td><?php echo($user_info['email']) ?></td>
    </tr>
    <tr>
        <td>Возраст</td>
        <td><?php echo($user_info['age']) ?></td>
    </tr>
    <tr>
        <td>Фамилия</td>
        <td><?php echo($user_info['surname']) ?></td>
    </tr>
    <tr>
        <td>Имя</td>
        <td><?php echo($user_info['name']) ?></td>
    </tr>
    <tr>
        <td>Уровень образования</td>
        <td><?php echo($user_info['education']) ?></td>
    </tr>
</table>
<?php
    if($user_info['age'] >= 18 && $user_info['age'] < 50){
        echo('<h1>Только для пользователей старше 18 лет!!! <span class="badge bg-secondary">Акция</span></h1>');
    } elseif($user_info['age'] > 50){
        echo('<h1>Только для пользователей старше 50 лет!!! <span class="badge bg-secondary">Акция</span></h1>');
    }
?>

