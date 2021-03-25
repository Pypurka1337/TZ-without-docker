<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>WORLD BANK Publications</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="ui/jquery-ui.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="ui/jquery-ui.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <header class="header">
        <div class="header-top">
            <ul>
                <li class="logo"><img class="logoimg" src="logo.png" alt="Лого"></li>
                <li class="tel"><a>8-800-100-5005 <br> +7 (3452) 522-000</a></li>
            </ul>
        </div>
        <nav id="menu1" class="navline">
    <ul>
    <li><a href="#">Кредитные карты</a></li>
    <li><a href="#" class="active">Вклады</a>
        <ul>
            <li><a href="#" class="active">Калькулятор</a></li>
        </ul>
    </li>
    <li><a href="#">Дебетовая карта</a></li>
    <li><a href="#">Страхование</a></li>
    <li><a href="#">Друзья</a></li>
    <li><a href="#">Интернет-банк</a></li>
    </ul>
    </nav>  
    </header>
    <main role="main" class="main">
    <div class="bread_crumbs"><a href="#">Главная</a> - <a href="#">Вклады</a> - Калькулятор</div>
    <form id="form" class="kalc">
        <table>
            <tbody>
                <tr class="form_item">
                    <td class="title" colspan="2">Калькулятор</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="form_item">
                    <td class="labels">Дата оформления вклада</td>
                    <td class="inputs"><input readonly type="text" name="date" id="datepicker" value="<?php echo date("d.m.Y");?>"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="form_item">
                    <td class="labels">Сумма вклада</td>
                    <td class="inputs"><input type="number" id="d_amount" name="d_amount" pattern="^[0-9]+$" value="1000" min="1000" max="3000000"></td>
                    <td colspan="2" class="slider"><div id="slider1"></div></td>
                </tr>
                <tr class="form_item">
                    <td class="labels">Срок вклада</td>
                    <td class="inputs">
                        <select class="deadline" name="deadline" id="deadline">
                            <option value="1 year">1 год</option>
                            <option value="2 years">2 года</option>]+$" value="1000" min="1000" max="3000000"><div id="slider1"><div class="slider-scale" style="counter-reset: section -1;"></div>
                            <option value="3 years">3 года</option>
                            <option value="4 years">4 года</option>
                            <option value="5 years">5 лет</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="form_item">
                    <td class="labels">Пополнение вклада</td>
                    <td class="inputs" colspan="3"><input type="radio" class="checkbox" id="checkbox" name="checkbox" value="no" checked><span class="checktext"> Нет </span><input type="radio" class="checkbox" id="checkbox" name="checkbox" value="yes"><span class="checktext"> Да </span></td>
                </tr>
                <tr class="form_item">
                    <td class="labels">Сумма пополнения вклада</td>
                    <td class="inputs"><input type="number" id="d_r_amount" name="d_r_amount" pattern="^[ 0-9]+$" value="1000" min="1000" max="3000000"></td>
                    <td colspan="2" class="slider"><div id="slider2" ></div></td>
                </tr>
            </tbody>
        </table>
        <p class="result"><input id="submit" type="submit" value="Рассчитать" class="submit"><span class="res"> Результат: </span><span class="messega" id="message">0</span> руб</p>
    </form>

    </main>
    <footer class="footer">
      <nav><a href="#">Кредитные карты</a> <a href="#">Вклады</a> <a href="#">Дебетовая карта</a> <a href="#">Страхование</a> <a href="#">Друзья</a> <a href="#">Интернет-банк</a></nav>
    </footer>
</body>
</html>