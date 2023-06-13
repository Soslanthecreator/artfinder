<?php
$bd = new PDO("mysql:host=localhost;dbname=b4_34307565_wp357", "b4_34307565", "3O2g5W8l8W");


$info = []; 
if ($query = $db->query(statement: "Select * from ph_base ") ) {
  $info = $query->fetchAll(PDO::FETCH_ASSOC);
} else{
    print_r($db->errorinfo());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artfinder</title>
    <link rel="stylesheet" href="css/page2.css">
</head>
<body>
    <nav class="nav1">
        <div class="container1">
             <div class="nav-row1">
                <a href="./page2.html" class="logo"><strong>Art</strong>finder</a>
                <ul class="nav-list1">
                    <li class="nav-list__item1"> <a href="/page2.html" class="nav-list__link1 ">Авторы</a> </li>
                    <li class="nav-list__item1"> <a href="./case.html" class="nav-list__link1 nav-list__link--active1">Кейсы</a> </li>
                    <li class="nav-list__item1"> <a href="./contacts.html" class="nav-list__link1">О нас</a> </li>
                </ul>
            </div>          
        </div>
    </nav>
    <header class="headerph">
        <h1 class="name__title">ФОТОГРАФЫ</h1>
        <div class="style-menu">
            <ul class="style-menu__filter">
              <li class="style-menu__item dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Стиль ❯</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Пейзажный</a></li>
                  <li><a href="#">Свадебный</a></li>
                  <li><a href="#">Портретный</a></li>
                </ul>
              </li>
              <li class="style-menu__item dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Цена ❯</a>
                <ul class="dropdown-menu">
                  <li><a href="#">От дешевых к дорогим</a></li>
                  <li><a href="#">От дорогих к дешевым</a></li>
                </ul>
              </li>
            </ul>
          </div>

    </header>
    <main class="section">
        <?php foreach($info as $data):  ?>
            <div class="creators">
                <div class="find">
                    <img src="<?= $data['image'];?>" alt="pht" class="find__img">
                </div>
                <h3 class="find__title"><?= $data['name'];?></h3> 
            </div>
        <?php endforeach; ?>
    </main>


    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <ul class="social"> 
                    <li class="social__item"><a href="#!" ><img src="img\icons\vk.svg" alt="link"></a></li>
                    <li class="social__item"><a href="#!" ><img src="img\icons\ig.svg" alt="link"></a></li>
                    <li class="social__item"><a href="#!" ><img src="img\icons\tg.svg" alt="link"></a></li>
                </ul>
                <div class="copyright">
                    <p>© 2023 artfinder Inc.</p>
                </div>
            </div>
            
        </div>
    </footer>
</body>
</html>