<?php
session_start ();
if (!isset($_SESSION["theme"])) {
    $_SESSION["theme"] = "main";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link rel="StyleSheet" href="<?php echo $_SESSION["theme"]?>.css" id="theme-link">
</head>
<header>
  <div class="logo">
  <img src="images\logo.png" class="logo-img">
  </div>
  <div class="tel">
  	<ul>
    	<li><a href=""><img src="images\call.jpg" class="call"> +7 351 111 22 33 </a></li>
    </ul>
</div>
</header>   
<body>
<a href="#" title="Вернуться к началу" class="topbutton">↑ Наверх</a>

<div class="carousel-wrapper">
    <span id="item-1"></span>
    <span id="item-2"></span>
    <span id="item-3"></span>
    <span id="item-4"></span>
    <!-- 1й элемент слайдера -->
    
    <div class="carousel-item item-1">
      <p>Мы обслуживаем одинаково качественно как своих гарантийных клиентов, так и сторонние заказы.</p>
      <a class="arrow arrow-prev" href="#item-4"></a>
      <a class="arrow arrow-next" href="#item-2"></a>
    </div>
    <!-- 2й элемент слайдера -->
    <div class="carousel-item item-2">
      <p>Если деталь сломалась — в нашем центре ее не будут ремонтировать, а сразу заменят на новую.</p>
      <a class="arrow arrow-prev" href="#item-1"></a>
      <a class="arrow arrow-next" href="#item-3"></a>
    </div>
    <!-- 3й элемент слайдера -->
    <div class="carousel-item item-3">
      <p>Мы работаем с крупной сетью сервисных центров, ее филиалы находятся в 70 городах России.</p>
      <a class="arrow arrow-prev" href="#item-2"></a>
      <a class="arrow arrow-next" href="#item-4"></a>
    </div>
    <!-- 4й элемент слайдера--> 
    <div class="carousel-item item-4">
      <p>Гарантия действует в течении 3 лет!</p>
      <a class="arrow arrow-prev" href="#item-3"></a>
      <a class="arrow arrow-next" href="#item-1"></a>
    </div>
  </div>
  
  <div class="wrapper"> <!-- блок новостей  -->
        <div class="content">

            <div class="text"> <!-- блок -->
                <img src="images/elsam1.jpg"> <!-- Картинка -->
            
            <h2>Электросамокат</h2>
            <article> <!-- текст новостей  -->
                Электросамокат - современный вариант простого самоката. Для того чтобы на нем кататься, нужно всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение. Дальше устройство будет везти хозяина самостоятельно за счет встроенного электромотора. Если выбирать между моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет наличия 2 колес (т.е. 2 точек опоры) и ручки для опоры руками. 
            </article>
            </div>


            <div class="text">
                <img src="images/tov11.jpg">
            
            <h2>Гироскутер</h2>
            <article>
                Гироскутер представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели, аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку для ног. Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки и рулевого столба называются сигвеями и управляются манипуляциями руками. Особенность управления гироскутером состоит в том, что для движения вперед наезднику необходимо наклониться вперед. Для торможения или движения назад - наклониться назад. Для поворота нужно наклонять корпус в правую или левую сторону.
            </article>
            </div>


            <div class="text">
                <img src="images/segway.jpg">
            
            <h2>Сигвей</h2>
            <article>
                Сигвей - средство передвижения для одного человека, которое держит равновесие с помощью специальной автобалансирующей системы. Это своеобразный электрический скутер, самостоятельно удерживающий равновесие. Сигвеи бесшумны в работе, не загрязняют окружающую среду, работают на электрической энергии, накопленной батареей аккумуляторов. 
            </article>
            </div>


        </div>


    </div>
    <div class="preim">
    <p> Товары </p>
    </div>
    <div class="ssylka-tov">
    <a href="#tov-1" >Гироскутеры</a>
    <a href="#tov-2">Сигвеи</a>
    <a href="#tov-3">Электросамокаты</a>
    </div>
    
    <div id="tov-1">
    <p class="tovars-opis">Гироскутеры</p>
    <div class="tovarses">
  <div class="img-textes">
    <div class="tovar-img">
      <img src="images/tov1.jpg">
    </div>
    <div class="tovars-textes">
      <a href="#"> Smart Balance 6.5" Ver. 1 </a>
      <h2> 8990 ₽ </h2>
        <p>  Гироскутер </p>
    </div>
  </div>
</div>

<div class="tovarses">
  <div class="img-textes">
    <div class="tovar-img">
      <img src="images/tov2.jpg">
    </div>
    <div class="tovars-textes">
      <a href="#"> KIWANO KO-X ES03 </a>
      <h2> 18900 ₽ </h2>
        <p>  Гироскутер </p>
    </div>
  </div>
</div>
  </div>
  <div id="tov-2">
   <p class="tovars-opis">Сигвеи</p>
  <div class="tovarses">
  <div class="img-textes">
    <div class="tovar-img">
      <img src="images/tov3.jpg">
    </div>
    <div class="tovars-textes">
      <a href="#"> Minirobot Mini PRO 36V Белый </a>
      <h2> 15990 ₽ </h2>
        <p>  Сигвей </p>
    </div>
  </div>
</div>

<div class="tovarses">
  <div class="img-textes">
    <div class="tovar-img">
      <img src="images/tov4.jpg">
    </div>
    <div class="tovars-textes">
      <a href="#"> Xiaomi Ninebot Mini </a>
      <h2> 22900 ₽ </h2>
        <p>  Сигвей </p>
    </div>
  </div>
</div>

<div class="tovarses">
  <div class="img-textes">
    <div class="tovar-img">
      <img src="images/tov5.jpg">
    </div>
    <div class="tovars-textes">
      <a href="#"> Hili E+ </a>
      <h2> 39900 ₽ </h2>
        <p> Сигвей </p>
    </div>
  </div>
</div>
    </div>
    <div id="tov-3">
     <p class="tovars-opis">Электросамокаты</p>
    <div class="tovarses">
  <div class="img-textes">
    <div class="tovar-img">
      <img src="images/tov6.jpg">
    </div>
    <div class="tovars-textes">
      <a href="#"> Yamato PES MINI </a>
      <h2> 15900 ₽ </h2>
        <p>  Электросамокат </p>
    </div>
  </div>
</div>

<div class="tovarses">
  <div class="img-textes">
    <div class="tovar-img">
      <img src="images/tov7.jpg">
    </div>
    <div class="tovars-textes">
      <a href="#"> KUGOO S2 (Jilong) </a>
      <h2> 14900 ₽ </h2>
        <p>  Электросамокат </p>
    </div>
  </div>
</div>
    </div>
    <div class="preim">
    <p> Персонал </p>
    </div>
   <div class="personal">
    <div class="lichnost">
    <img src="images/person1.jpg">
    <h1>Иванов Иван Иванович</h1>
    <p>квалифицированный специалист сервисного центра My Gyro</p>
    </div>
    <div class="lichnost">
    <img src="images/person2.jpg">
    <h1>Пупкин Василий Васильевич</h1>
    <p>старший консультант My Gyro</p>
    </div>
    <div class="lichnost">
    <img src="images/person3.jpg">
    <h1>Надежда Игоревна Волкова</h1>
    <p>менеджер-консультант My Gyro</p>
    </div>
   </div>
  <div class="preim">
    <p> Информация для будущих работников: </p>
    </div>
    <div class="works">
    <img src="images/personal.jpg" >
    <p> Чтобы работать в наших магазинах нужно знать каждую модель, её плюсы и минусы и уметь ездить на ней. Да, это долго, и кто-то скажет, что неэффективно. Но так мы гарантированно получаем сотрудника, который разбирается в каждом товаре и сможет по-настоящему помочь покупателю, а не “впихнуть” ему, что-нибудь подороже.
    </p>
    </div>
    <div class="preim">
    <p> Подписаться на email-рассылку: </p>
    </div>
    <div class="rassilka">
      <div class="elmail">
        <input type="email" name="" placeholder="Введите имя">
      </div>
      <div class="elmail">
        <input type="email" name="" placeholder="Введите адрес электронной почты">
      </div>
      <div class="buttone">
      <a href=""><img src="images/subscribe.png" class="subscribe"></a>
      </div>
      </div>

  <footer>
    
    <div class="o-nas">
      <div class="o-nas-txt">
         <p> Наш магазин работает с 2016 года. Мы представлены в таких городах как Екатеринбург, Москва и Челябинск и многие другие. В среднем мы отправляем по 15-20 заказов в день в разные города и регионы по всей России.
         </p>
      </div>
      <div class="o-nas-txt">
         <p>Мы имеем свои сервисные центры и собственных мастеров, благодаря которым, выполняем гарантийные работы качественно и в срок. Так же вы можете обратиться к нам с любой проблемой. Мастера выполнят диагностику и выполнят ремонт.
         </p>
      </div>
    </div>
      <div class="t-button" id="theme-button"> Сменить оформление🌗 </div>
    
    <script src="theme.js"></script>
    <div class="copyright">&copy;2021 - <strong>Mmeetty</strong></div> 
  
  </footer>
</body> 
</html>                                                                               