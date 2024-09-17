<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="qwe">
        <p>Задание 1</p>
    <?php
        $stud = ['Шамбазов', 'Тазутдинов', 'Иванов', 'Сидоров','Комаров'];
        echo 'Длина массива: ' .count($stud);
        echo '<br>';
        if(in_array('Сидоров', $stud)){
            echo 'Сидоров в списке';
        }
        else{echo'В списке Сидорова нет';}
        $epelled = array_pop($stud);
    ?>
    </div>
    <div class="qwe">
        <p>Задание 2</p>
        
    <?php
        $array = [
            'Спортивный' => 'Сидоров',
            'Художественный' => 'Емелина',
            'Музыкальный' => 'Иванова', 
            'Литературный' => 'Петров', 
            'Биологический' => 'Антонова'
        ];

        asort($array);
        foreach($array as $key => $value){
            echo $key .' - '. $value;
            echo'<br>';
        }
    ?>
    </div>
    <div class="qwe">
        <p>Задание 3</p>
        
    <?php
        $student = [
            'name' => 'Ильяс',
            'surname' => 'Шамбазов',
            'group' => '427',
            'hobby' => 'Жить',
            'social' => [
                'WhatsApp' => '+7(996)952-97-31',
                'Telega' => 't.me/IlyasSam2'
            ]
            ];
            echo 'Имя: ' .$student['name'].'<br>';
            echo 'Фамилия: ' .$student['surname'].'<br>';
            echo 'Группа: ' .$student['group'].'<br>';
            echo 'Хобби: ' .$student['hobby'].'<br>';
            foreach($student['social'] as $social => $value){
                echo $social .': '. $value.'<br>';
            }
    ?>
    </div>
</body>
</html>
