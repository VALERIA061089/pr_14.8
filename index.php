<?php
session_start();
include 'functions.php';
include 'time.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Главная</title>
</head>
<body>
<div class="wrapper">
        <div class="container">
            <header class="header">
            <h1 class="slogan">Подари себе удовольствие!</h1>
            <?php
            if (isset($_SESSION['authorized'])) {
                echo '<div class="login">
                <a class="login_text">Приветствуем Вас:' . ' ' . getCurrentUser() . '</a>
                <a class="log_out" href="logout.php">Выйти из профиля</a>
                </div>';
            } else {
                echo '<div class="login">
                <a class="sign_in" href="login.php">Войти</a>
             </div>';
            }
            ?>
            </header>
            <?php
        if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
            echo '<h2 class = "introduction_user">Здравствуйте,' . ' ' . getCurrentUser() . '!</h2>';
            if ($_SESSION['checkDayBirth'] > 0) {
                echo '
                <div class = "introduction_day_brth">
                <p>До вашего дня рождения осталось:' . ' ' . $_SESSION['checkDayBirth'] . ' ' . 'дней (-ень)</p>
                </div>';
            } else if ($_SESSION['checkDayBirth'] === 0) {
                echo '
                <div class = "introduction_day_brth">
                <p> Поздравляем Вас с Днем Рождения! В честь этого мы подготовили для вас специальную акцию!</p>
                </div>';
            }
        };
        ?>
            <div class="sale">
            <?php if (isset($_SESSION['authorized']) && $_SESSION['checkDayBirth'] === 0) {
                        echo ' 
                        <div class="action_card">
                            <div class="action_card_content">
                                <h2 class="action_card_title">Специальная скидка в честь Вашего Дня Рождения!</h2>
                                    <div class="action_card_text">
                                        <p>Скидка 5% на все услуги нашего спа-салона! </p>
                                        <p>Насладитесь приятными ощущениями и проведите незабываемый отдых в нашем спа-салоне. Будем рады Вас видеть!</p>
                                    </div>
                                </div>
                        </div>';
                    } ?>
                    <?php if($salet) { ?>
                    <div class="sale">
                    <p>Ваша персональная скидка 2% на все закончится через: <?php echo $hours . " часов ". $minutes ." минут ". $seconds ." секунд"; ?></p>
                    </div> 
                    <?php } ?>
        <main class="main">
            <div class="products">
                <div class="products-item">
                    <h2>Массаж лица</h2>
                    <a href="#">Выбрать</a>
                    <p class="desc">Процедура обладает комплексным действием: предотвращает появление морщин, повышает тонус кожи, улучшает кровоснабжение, снимает отеки, улучшает цвет лица, за счет стимуляции кровообращения в процессе массажа кожа насыщается кислородом, усиливаются регенеративные процессы. В результате массажа кожа приобретает здоровый и ухоженный вид, подтягивается овал лица, уменьшаются воспаления.</p>
                    <img src="https://static.insales-cdn.com/files/1/1429/9897365/original/%D0%9C%D0%B0%D1%81%D1%81%D0%B0%D0%B6-%D0%BB%D0%B8%D1%86%D0%B0-%D0%B2%D1%81%D0%B5_-%D1%87%D1%82%D0%BE-%D0%BD%D1%83%D0%B6%D0%BD%D0%BE-%D0%BE-%D0%BD%D0%B5%D0%BC-%D0%B7%D0%BD%D0%B0%D1%82%D1%8C-890.jpg" class="img-card" alt="picture">
                </div>
                <div class="products-item">
                    <h2>Общий массаж</h2>
                    <a href="#">Выбрать</a>
                    <p class="desc">Общий массаж тела обладает огромной пользой – это цикл SPA-процедур, включающий массаж рук, ног и стоп, спины и шеи, лица и головы, а также области груди и спины. Направлен он на весь организм, и эффект от него следует ожидать комплексный. Во время такого массажа полностью снимается напряжение с тела, восстанавливается кровообращение, улучшаются обменные процессы, появляется бодрость и сила.</p>    
                    <img src="https://sunrise-spa.ru/file/2019/10/14/XXL1_copy_1.jpg" class="img-card" alt="picture">
                </div>
                <div class="products-item">
                    <h2>Массаж сухой щеткой</h2>
                    <a href="#">Выбрать</a>
                    <p class="desc">Массаж сухой щеткой является отличным дополнением к детокс плану по выведению токсинов. Рекомендуется использовать в сочетании с процедурами холодного и горячего обертывания. Средство с охлаждающим эффектом помогает бороться с признаками целлюлита, ускоряет метаболизм и корректирует вес. Обертывание с разогревающим эффектом уменьшает объемы, оказывая выраженный лифтинг-эффект.</p>
                    <img src="https://lookbio.ru/wp-content/uploads/2015/07/massage-brush.jpg" class="img-card" alt="picture">
                </div>
                <div class="products-item">
                    <h2>Питательные маски для лица</h2>
                    <a href="#">Выбрать</a>
                    <p class="desc">Также как увлажнять и очищать, нам необходимо регулярно питать кожу. Питательные свойства, содержащиеся в специальных масках, помогают предотвратить преждевременное старение, делают кожу более гладкой и ухоженной, бархатистой и просто сияющей. Для каждого типа кожи нужна своя, особенная питательная маска, и правильно ее подобрать может только профессионал.</p>    
                    <img src="https://www.anna-key.ru/upload/medialibrary/5d0/5d03d23c9dfbcd41501818788ff2c7f3.jpg" class="img-card" alt="picture">
                </div>
                <div class="products-item">
                    <h2>Сауна</h2>
                    <a href="#">Выбрать</a>
                    <p class="desc">Морщины у нас возникают из-за потери кожей упругости, нарушения функционирования сальных желез, которые нужно тренировать. В сауне из-за высокой температуры запускаются механизмы терморегуляции, усиливается кровоток, вследствие чего уходит лишняя молочная кислота, создающая эффект уставшего лица, раскрывает поры, выгоняет шлаки через обильное потоотделение.</p>
                    <img src="https://st.hzcdn.com/simgs/pictures/bathrooms/luxury-spa-sauna-tbs-construction-inc-img~39a1df5e08075e0c_4-6292-1-2cdcc36.jpg" class="img-card" alt="picture">
                </div>
                <div class="products-item">
                    <h2>Басейн</h2>
                    <a href="#">Выбрать</a>
                    <p class="desc">В нашем SPA-салоне представлено несколько направлений по совершенствованию Вашего тела: йога, стретчинг и водные программы, включающие взрослые и детские тренировки, аквааэробику, тренировки для детей от 10 месяцев вместе с мамами. Грамотно выстроенные методики групповых и персональных занятий помогут Вам максимально быстрого достичь желаемых результатов.</p>
                    <img src="http://bezdnaspa.tmweb.ru/wp-content/uploads/2019/12/3-21.jpg" class="img-card" alt="picture">
                </div>
            </div>
            
        </main>
    </div>
    <footer class="footer">
        <ul class="footer-list">
            <li class="footer-list_item">
                <a href="#" class="footer-list_link">Help center</a>
            </li>
            <li class="footer-list_item">
                <a href="#"class="footer-list_link">Политика конфиденциальности</a>
            </li>
            <li class="footer-list_item">
                <a href="#" class="footer-list_link">Пользовательское соглашение</a>
            </li>
        </ul>
        <div class="copyright">Copyright (c) SPA-салон 2023</div>
    </footer>
    </div>
</body>
</html>