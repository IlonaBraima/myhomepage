<!DOCTYPE html>
</html>

    <?php
    include('../db.php');
    $iconSelect = "SELECT * FROM head_right";
    $iconResult = $connMyhomepage->query($iconSelect);
    ?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no, viewport-fit=cover" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto@1&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css" type="text/css">

<title>Mychildren</title>

</head>

<body>

<div>
	<div class="header">
		<div class="logo">
					<h1>Ilona Braima</h1>
		</div>
		<div class="menu">
				<div class="menu-item">
					<a class="menu-link" href="firstpage.php">На главную</a>
				</div>
				<div class="menu-item">
					<a class="menu-link" href="mybodylove.php">Проект: МОЁ ТЕЛО</a>
				</div>
				<div class="menu-item">
					<a class="menu-link" href="date.php">Проект: Мои 100 свиданий</a>
				</div>
		</div>
	</div>

    <div class=head-r>
        <div class="flex just-center">
            <?php
            while ($icon = $iconResult->fetch_assoc()) {
            echo  '<a class="icon" title="' . $icon['title'] . '"href="' . $icon['adres'] . '">
            <img src="../images/' . $icon['icon'] . '"></a>';
            }
            ?>
        </div>
    </div>

		<div class=head-l>
				<div>
					<a class="linker" href="firstpage.php">HOME</a>
				</div>
		</div>

	<div class="boxpage">
			<div class="boxpagechildren">
				<h1>Один из главных проектов в моей жизни - ДЕТИ</h1>
				<h3>Знакомьтесь: СЕ И СЁ</h3>
				<p>
					Насколько бы хорошо я не разбиралась в материнстве, насколько хорошо не понимала бы своих
					детей, всегда найдутся грани и стороны, где я теряюсь, поэтому никогда не может быть
					много информации о том, как понимать ребенка и себя, как мамы.
				</p>
				<p>
					Бывает нахлынут на тебя грустные мысли, сидишь погружённый в себя и вдруг слышишь
					смех детей в соседней комнате и бах... всё опять хорошо!
				</p>
				<p>
					<img src="../images/deti1.jpg" alt="Фото1" title="Berni" width="30%">
					<img src="../images/happy.jpg" alt="Фото2" title="Berni2" width="30%">
					<img src="../images/deti2.jpg" alt="Фото3" title="Berni3" width="30%">
				</p>
			<div class="blockquotechildren">
				<blockquote>
				<p>Сема стоит и кричит с лоджии:</p>
				<p>- Ееесть тууут ктооо ниибуудь?!!!</p>
				<p>Я ему говорю, не кричи, люди подумают, что ты один дома и вызовут полицию.</p>
				<p>- Я туууут не одииин - крикнул он с лоджии. Повернулся и сказал - Ну, вот, теперь они знают, что я не один.</p>
				<p>Это всё, что нужно знать о детях.</p>
				<footer>— <cite>Семён, 5 лет</cite></footer>
				</blockquote>
			</div>
				<p>
					Очень хочется радовать детей праздниками, подарками и сюрпризами.
					Очень хочется, оставить у детей в памяти много приятных, весёлых моментов,
					построить на этой базе отношение их к жизни.
				</p>
				<h3>Немного (много) о здоровье</h3>
				<p>
					Этим летом Сеня сломал мизинчик на ноге. Вот так бежал босиком, хрясь о пенёк ногой и перелом!
					Сразу начал жаловаться на боли в пальцах, я предложила держать ногу в прохладной воде,
					мало ли что.
					Лично я никогда не сталкивалась с переломами костей, поэтому опыта ровно null.
					Но мне очень не понравилось, что нога опухла и стала синеть.
				</p>
				<p>
					<img src="../images/rentgen.jpg" width="200" height="auto"
					alt="Иллюстрация" align="right"></p>
				<p>
					Мы поехали в детскую больницу. Провели там около пяти часов и третьими по очереди в
					час ночи попали к врачу и на рентген.
				</p>
				<p>
					Сын каждый час уговаривал уехать, что мол, ну а вдруг всё нормально и просто ушиб,
					ну а я мимолётом поглядывая на опухшую, всё ещё синеющую ногу понимала, что без вариантов,
					дождёмся.
				</p>
				<p>
					Дождались. Рентген показал трещину, которая задела два раздела одной косточки. Гипс
					на такое не ставят, просто фиксируют с помощью соседнего пальца, ну и, конечно, режим покоя.
				</p>
				<p>
					Ну какой покой летом? Когда в лагерь нужно ехать? Обзвоны врачей, руководства лагеря и
					всё-таки отдых в режиме light всё равно состоялся!
				</p>
				<p>
					Уже прошли повторный рентген, всё хорошо, сыну ничего уже не болит. Да даже в острые моменты
					сын ни разу не попросил таблетку - мой герой!
				</p>
				<p>
					Ни в какой ситуации не отчаиваемся!
				</p>

			<div class="blockquotechildren">
				<blockquote>
					<p>
						Дети ~ это, конечно, <mark>чудо</mark>!
					</p>
					<p>
						Пока один в середине ноября со школы возвращается в сандалях, забыв сапоги,
						второй подтягивает горшок вплотную к кровати, чтобы можно было не отходя о телевизора,
						писать, смотреть мультики и всё это в сухости и комфорте.
					</p>
					<p>
						Ну как их не любить!
					</p>
					<footer>— <cite>Мама, 2019 год</cite></footer>
				</blockquote>
			</div>
				<p>
					Хочется верить, что из детства дети во взрослую жизнь возьмут только всё самое светлое и
					нужное. Поэтому мы, взрослые, стараемся.
				</p>
				<p>
					Стараемся выстроить отношения, границы и рамки, следуя которым можно получать целый
					спектр удовольствия.
				</p>
				<h3>Режим дня Се и Сё: ЛЕТО</h3>
			<table class="table">
				<tr>
					<th>Nr.</th>
					<th>Действие</th>
					<th>Время</th>
					<th>Примечания</th>
				</tr>
				<tr>
					<td>1.</td>
					<td>Подъём</td>
					<td>8:00-9:00</td>
					<td></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Зарядка</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Чистка зубов</td>
					<td>до 10:00</td>
					<td></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Завтрак</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Тихий час</td>
					<td>14:00-15:00</td>
					<td></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Сделать обязательное дело по дому</td>
					<td>до 16:00</td>
					<td></td>
				</tr>
				<tr>
					<td>7.</td>
					<td>Ужин</td>
					<td>18:00-19:00</td>
					<td></td>
				</tr>
				<tr>
					<td>8.</td>
					<td>Спокойные игры, тихие занятия</td>
					<td>с 20:00</td>
					<td></td>
				</tr>
				<tr>
					<td>9.</td>
					<td>Гуляние без родителей</td>
					<td>до 20:00</td>
					<td>Сеня</td>
				</tr>
				<tr>
					<td>9.</td>
					<td>Вечерние процедуры</td>
					<td>с 20:30 до 20:59</td>
					<td></td>
				</tr>
				<tr>
					<td>10.</td>
					<td>Сон</td>
					<td>с 21:00-22:00</td>
					<td></td>
				</tr>
			</table>

							<br/>
            				<h3>Режим дня Се и Сё: ОСЕНЬ</h3>
            				<table class="table">
            					<tr>
            						<th>Nr.</th>
            						<th>Действие</th>
            						<th>Время</th>
            						<th>Примечания</th>
            					</tr>
            					<tr>
            						<td>1.</td>
            						<td>Подъём</td>
            						<td>7:30-8:00</td>
            						<td></td>
            					</tr>
            					<tr>
            						<td>2.</td>
            						<td>Зарядка</td>
            						<td></td>
            						<td></td>
            					</tr>
            					<tr>
            						<td>3.</td>
            						<td>Чистка зубов</td>
            						<td>до 10:00</td>
            						<td></td>
            					</tr>
            					<tr>
            						<td>4.</td>
            						<td>Завтрак</td>
            						<td></td>
            						<td></td>
            					</tr>
            					<tr>
            						<td>5.</td>
            						<td>Сделать обязательное дело по дому</td>
            						<td>до 16:00</td>
            						<td>Во время учебы до 20.00</td>
            					</tr>
            					<tr>
            						<td>6.</td>
            						<td>Ужин</td>
            						<td>18:00-19:00</td>
            						<td>Едим мах. до 20.00</td>
            					</tr>
            					<tr>
            						<td>7.</td>
            						<td>Спокойные игры, тихие занятия</td>
            						<td>с 20:00</td>
            						<td></td>
            					</tr>
            					<tr>
            						<td>8.</td>
            						<td>Гуляние без родителей</td>
            						<td>до 19:00</td>
            						<td>Сеня</td>
            					</tr>
            					<tr>
            						<td>9.</td>
            						<td>Вечерние процедуры</td>
            						<td>с 20:30 до 20:59</td>
            						<td>Чистят зубы, подмываются</td>
            					</tr>
            					<tr>
            						<td>10.</td>
            						<td>Сон</td>
            						<td>с 21:00-22:00</td>
            						<td>Сеня: аудиосказка; Сёма: читает сам, читают ему</td>
            					</tr>
            				</table>

			<div class="blockquotechildren">
				<blockquote>
				<p>Считает (выучил название десятков):</p>
				<p>- Сорок девять, пять-десят... пятьдесят девять, шесть-десят...</p>
				<p>- Восемьдесят девять, пауза..., </p>
				<p>- Девять...носто</p>
				<footer>— <cite>Семён, 6 лет</cite></footer>
				</blockquote>
			</div>

				<h3>Воспоминания мамы</h3>
				<mark>2019год</mark>
				<p>
					Я очень мало пишу о своем младшем сыне. Можно сказать "придерживаю для себя".
					Растет он в совсем других условиях, чем старший сын - с ним я не бегаю как угорелая
					по развивашкам, занятиям, лекциям, не делаю по пять поделок в день и пальчиковый по
					десять. Я не залечиваю его от каждого прыщичка и не гонюсь за успехами в развитии.
				</p>

				<p>
					<img src="../images/deti3.jpg" width="300" height="auto"
					alt="Иллюстрация" align="right">
				</p>
				<p>
					А он развивается в силу возраста и своих умений, наблюдений.
				</p>
				<p>
					Повторяет за старшим и взрослыми, тянется за тем, что у других и имеет исключительно
					свои интересы. Не говоря полными словами четко изьясняется предложениями и телодвижениями.
				</p>
				<p>
					Кусаю его нежно за ножку, он мне - мама, неа нам. Или станет за угол и начнет
					демонстративно трястись от страха, значит нужно включить свет в комнате, на которую
					показывается.
				</p>
				<p>
					А эти жалостные поглаживанты по животику - мама, ням-ням.
				</p>
				<p>
					Обожаю за ним наблюдать, неимоверное удовольствие!
				</p>
				<h3>Школа</h3>

				<p>
					<img src="../images/deti5.jpg" width="300" height="auto"
					alt="Иллюстрация" align="left">
				</p>
				<p>
					<img src="../images/deti6.jpg" width="200" height="auto"
					alt="Иллюстрация" align="right">
				</p>
				<p>
				<mark>2019/2020 уч.год</mark>
				</p>
				<p>
					Как ваши дети отреагировали, что скорее всего в этом году не попадут в школу?
				</p>
				<p>
					Вроде начали втягиваться и пошли проверочные работы...
				</p>
				<p>
					В ход идёт принтер, в расход мамины нервы...
				</p>
				<p>
					Главное, чтобы учебный год закрыли... И перевели в следующий класс.
				</p>
				<p>
					<mark>2020/2021 уч.год</mark>
				</p>
				<p>
					Думаю, родителей никогда себя не чувствовали настолько причастными к учебе детей,
					как во время Covid-19.
				</p>
				<p>
					Отвечая за себя: я никогда не углубилась бы настолько, если бы не пандемия.
				</p>
				<p>
					Я горжусь сыном (и собой немножко), благодаря учителям, мы закончили 2020/2021 уч.год
					отличниками!
				</p>
				<p>
					Да здравствует 5 класс!
				</p>

			<div class="blockquotechildren">
				<blockquote>
				<p>
					Даторика - учитель в панике, что на уроке по изучению компьютерных наук, дети сидят
					с телефонов.
				</p>
				<p>
					Спорт - утренняя зарядка с присланного видео - дергание весёлых человечков.
				</p>
				<p>
					Домашняя работа: слепить снеговика,  который занимается спортом.
				</p>
				</blockquote>
			</div>
				<div class="blockquotechildren">
					<blockquote>
						<p>Семён в недоумении, как может такое быть, что у взрослых нет детей.
							Всё началось с маленьких автомобилей...</p>
						<p>- Мам, а есть машины, где два места для людей?</p>
						<p>- Есть</p>
						<p>- А как же дети?</p>
						<p>- Ну, не у всех есть дети...</p>
						<p>- Они умерли?</p>
						<p>- Нет, они не рождались</p>
						<p>- Они уехали?</p>
						<p>- Вот, такое бывает, что нет детей</p>
						<p>Ребенок не поверил.</p>
						<footer>— <cite>Семён, 4,10г</cite></footer>
					</blockquote>
				</div>
								<div class="blockquotechildren">
                				<blockquote>
                					<p>- Мам, вот была бы таблетка, которую дал тебе и ты оп и забыла, что
                					 мне нужно зубы чистить и мыться.
                					 </p>
                					 <p>
                						А то каждый день одно и то же - чисти зубы, мойся...</p>
                					<footer>— <cite>Сеня, 7 лет</cite></footer>
                				</blockquote>
                			</div>
	</div>
</div>

</body>
</html>