<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Показване на изображения в мненията',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Представяне',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Създаване на връзки',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Генериране на списъци',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Други въпроси',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Цитиране и показване на текст с фиксирана дължина',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Форматиране на текст',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Прикачените файлове могат да бъдат поставяни във всяка част на мнението като се използва новият <strong>[attachment=][/attachment]</strong> BBCode, ако фунцкионалността за прикачване е включена от админситратора на форума и ако имате подходящите права да прикачвате файлове. На екрана за публикуване на мнение има бутон "Вмъкни в мнението" до всеки прикачен файл.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Добавяне на прикачен файл в мнение',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode съдържа таг за показване на изображения във Вашите мнения. Трябва да запомните две важни неща при използването на този таг: много потребители не обичат прекалено многото изображения в едно мнение и второ, изображението, което искате да покажете трябва да е качено и достъпно в Интернет (не може да бъде на Вашият компютър, например, освен ако нямете инсталиран уеб сървър на него!). За да покажете изображение трябва да оградите URL адреса му с <strong>[img][/img]</strong> тагове. Например:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Както беше отбелязано в секцията за създаване на връзки по-горе, можете да оградите изображението в <strong>[url][/url]</strong> таг ако желаете, напр.<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />ще генерира:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Добавяне на изображение в мнение',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode е специална имплементация на HTML. Дали можете да използвате BBCode в мненията си се определя от админситратора. В допълнение към това можете да изключвате BBCode във всяко отделно мнение чрез формата за публикуване. BBCode е подобен по стил на HTML, като таговете са затворени в квадратни скоби [ и ] вместо в &lt; и &gt; и позволява по-добър контрол над това какво и как се показва нещо. В зависимост от шаблона, който използвате е възможно добавянето на BBCode към мненията е реализирано по-лесно чрез бутони над полето за писане.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Какво е BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode поддържа няколко начина за създаване на URI (Uniform Resource Indicators), по-известни като URL.<ul><li>Първият от тях използва <strong>[url=][/url]</strong> тага, каквото и да напишете след символа = ще бъде възприето като URL. Например, за да създадете връзка към phpBB.com можете да използвате:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Посетете phpBB!<strong>[/url]</strong><br /><br />Това ще генерира следната връзка, <a href="https://www.phpbb.com/">Посетете phpBB!</a> Обърнете внимание, че връзката се отваря в същия или в нов прозорец, в зависимост от настройките на браузъра на потребителя.</li><li>Ако искате самият URL да се покаже като тесктова връзка, можете да направите това като просто използвате:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Това ще генерира следната връзка, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Допълнително, phpBB има функция наречена <i>Магически връзки</i>, тя ще превърне всеки синтактично правилен URL във връзка без да има нужда да я ограждате в никакви тагове и дори без http:// отпред. Например, ако въведете www.phpbb.com в своето съобщение, това автоматично ще бъде превърнато в <a href="http://www.phpbb.com/">www.phpbb.com</a> при публикуване на съобщението.</li><li>Същото нещо може да се приложи и към емейл адресите, можете да зададете специфичен адрес, например:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />което ще Ви даде <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> или можете просто да напишете no.one@domain.adr в съобщението си и то ще бъде автоматично конвертирано при публикуване.</li></ul>Както всички BBCode тагове, можете да ограждате URL адресите с някои от другите тагове, като например <strong>[img][/img]</strong> (виж следващата точка), <strong>[b][/b]</strong>, и т.н. Както и при таговете за форматиране, трябва да обърнете внимание на това дали отварящите и затварящите тагове са правилно подредени, например:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />не <span style="text-decoration: underline">е</span> правилно, което може да доведе до изтриване на мнението Ви, затова внимавайте.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Създаване на връзки към други сайтове',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Вторият вид списък, номериран списък, Ви дава контрол над това какво се изписва срещу всеки списъчен елемент. За да създадете номериран списък използвайте <strong>[list=1][/list]</strong> или пък <strong>[list=a][/list]</strong> за азбучен списък. Както и при неномерираните списъци, списъчните елементи се изброяват с <strong>[*]</strong>. Например:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Да отида до магазина<br /><strong>[*]</strong>Да купя нов компютър<br /><strong>[*]</strong>Да напсувам компютъра когато забие<br /><strong>[/list]</strong><br /><br />ще генерира следното:<ol style="list-style-type: decimal;"><li>Да отида до магазина</li><li>Да купя нов компютър</li><li>Да напсувам компютъра когато забие</li></ol>За азбучен списък списък пък ще използвате:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Първи възможен отговор<br /><strong>[*]</strong>Втори възможен отговор<br /><strong>[*]</strong>Трети възможен отговор<br /><strong>[/list]</strong><br /><br />което ще Ви даде<ol style="list-style-type: lower-alpha"><li>Първи възможен отговор</li><li>Втори възможен отговор</li><li>Трети възможен отговор</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Първи възможен отговор<br /><strong>[*]</strong>Втори възможен отговор<br /><strong>[*]</strong>Трети възможен отговор<br /><strong>[/list]</strong><br /><br />което ще Ви даде<ol style="list-style-type: upper-alpha"><li>Първи възможен отговор</li><li>Втори възможен отговор</li><li>Трети възможен отговор</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Първи възможен отговор<br /><strong>[*]</strong>Втори възможен отговор<br /><strong>[*]</strong>Трети възможен отговор<br /><strong>[/list]</strong><br /><br />което ще Ви даде<ol style="list-style-type: lower-roman"><li>Първи възможен отговор</li><li>Втори възможен отговор</li><li>Трети възможен отговор</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Първи възможен отговор<br /><strong>[*]</strong>Втори възможен отговор<br /><strong>[*]</strong>Трети възможен отговор<br /><strong>[/list]</strong><br /><br />което ще Ви даде<ol style="list-style-type: upper-roman"><li>Първи възможен отговор</li><li>Втори възможен отговор</li><li>Трети възможен отговор</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Създаване на номериран списък',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode поддържа два вида списъци, неномериран и номериран. На практика това са еквиваленти на HTML списъците. Неномерираният списък изобразява всеки списъчен елемент последователно един след друг с отстъп и символ на точка пред него. За да създадете неномериран списък трябва да използвате <strong>[list][/list]</strong> и да дефинирате всеки елемент от списъка използвайки <strong>[*]</strong>. Например, за да създадете списък с любимите си цветове можете да използвате:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Червен<br /><strong>[*]</strong>Син<br /><strong>[*]</strong>Жълт<br /><strong>[/list]</strong><br /><br />Това ще генерира следният списък:<ul><li>Червен</li><li>Син</li><li>Жълт</li></ul><br />Отделно, можете да промените символа пред всеки елемент като използвате <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, или <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Създаване на неномериран списък',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Ако сте администратор на този форум и имате съответните права, то можете да добавяте свои BBCode-ове чрез BBCodes секцията в раздел Публикуване в Административния Контролен Панел.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Мога ли да добавям собствени тагове?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Ако искате да покажете част от код или тескт с фиксирана дължина, то трябва да оградите текста в <strong>[code][/code]</strong> тагове, например<br /><br /><strong>[code]</strong>echo &quot;This is some code&quot;;<strong>[/code]</strong><br /><br />Форматирането, използвано вътре в <strong>[code][/code]</strong> таговете се запазва, когато по-късно го разглеждате или редактирате. Отбелязването на ключови думи според PHP синтаксиса може да бъде включен, използвайки <strong>[code=php][/code]</strong> и е препоръчително когато се публикуват части от PHP код за да е по-прегледно.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Показване на код или текст с фиксирана дължина',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Има два начина за цитиране на текст - с обръщение или без.<ul><li>Когато ползвате функцията за цитиране за да отговорите на мнение във форума ще забележите, че текстът на цитата се добавя в прозореца за отговор ограден в <strong>[quote=&quot;&quot;][/quote]</strong> блок. Този метод Ви позволява да цитирате с обръщение към потребителя или каквото и друго да изберете да сложите! Например, за да цитирате част от текст, който е написан от Г-н Иванов, трябва да въведете:<br /><br /><strong>[quote=&quot;Г-н Иванов&quot;]</strong>Част от текст, написан от Г-н Иванов<strong>[/quote]</strong><br /><br />Резултатът ще бъде, че &quot;Г-н Иванов написа:&quot; ще бъде добавено преди самия текст. Запомнете, че <strong>трябва</strong> да добавите кавички &quot;&quot; около името на човека, когото цитирате, те са задължителни.</li><li>Вторият начин за цитиране е сляпо цитиране на нещо. За да го използвате просто оградете текста в <strong>[quote][/quote]</strong> тагове. Когато публикувате съобщението си, то просто ще покаже текста в блок за цитат.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Цитиране на текст в отговор',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode включва тагове, които Ви позволяват бързо да смените основния стил на текста Ви. Това се постига по следните начини: <ul><li>За да направите част от текста удебелен го оградете в <strong>[b][/b]</strong>, напр. <br /><br /><strong>[b]</strong>Здравейте<strong>[/b]</strong><br /><br />ще стане <strong>Здравейте</strong></li><li>За подчертаване използвайте <strong>[u][/u]</strong>, например:<br /><br /><strong>[u]</strong>Добро утро<strong>[/u]</strong><br /><br />става <span style="text-decoration: underline">Добро утро</span></li><li>За да наклоните текста използвайте <strong>[i][/i]</strong>, напр.<br /><br />Това е <strong>[i]</strong>страхотно!<strong>[/i]</strong><br /><br />ще покаже Това е <i>страхотно!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Как се създава удебелен, наклонен или подчертан текст?',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'За да промените цвета или размера на текста можете да използвате следните тагове. Обърнете внимание, че това, как изглежда изходният текст зависи от браузъра на разглеждащия го и системата му: <ul><li>Смяната на цвета на текста се постига като оградите в <strong>[color=][/color]</strong>. Можете да зададете разпознаваемо име на цвят (напр. red, blue, yellow, и т.н.) или хексадецималната тройка отговаряща на цвета, напр. #FFFFFF, #000000. Например, за да създадете червен текст можете да използвате:<br /><br /><strong>[color=red]</strong>Здравейте!<strong>[/color]</strong><br /><br />или<br /><br /><strong>[color=#FF0000]</strong>Здравейте!<strong>[/color]</strong><br /><br />И двата варианта ще покажат следното <span style="color:red">Здравейте!</span></li><li>Смяната на размера на текста се постига по сходен начин, чрез използването на <strong>[size=][/size]</strong>. Този таг зависи от шаблона, който използва потребителя, но препоръчаният формат е числова стойност отразяваща размера на текста в проценти, започвайки от 20 (много малък) до 200 (много голям) по подразбиране. Например:<br /><br /><strong>[size=30]</strong>МАЛЪК<strong>[/size]</strong><br /><br />обикновено ще изглежда така <span style="font-size:30%;">МАЛЪК</span><br /><br />обаче:<br /><br /><strong>[size=200]</strong>ОГРОМЕН!<strong>[/size]</strong><br /><br />ще изглежда <span style="font-size:200%;">ОГРОМЕН!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Как да променя цвета или размера на текста?',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Да, разбира се, че можете, например за да привлечете вниманието на някой можете да напишете:<br /><br /><strong>[size=200][color=red][b]</strong>ПОГЛЕДНИ МЕ!<strong>[/b][/color][/size]</strong><br /><br />това ще покаже <span style="color:red;font-size:200%;"><strong>ПОГЛЕДНИ МЕ!</strong></span><br /><br />Не Ви препоръчваме да показвате много текст, който изглежда така! Запомнене, че зависи от Вас таговете да са затворени правилно. Например, следното е неправилно:<br /><br /><strong>[b][u]</strong>Това е грешно<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Мога ли да комбинирам тагове за форматиране?',
));