<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 24,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Онлайн запись',
    'longtitle' => '',
    'description' => 'Онлайн запись на прием в клинике Беласу.',
    'alias' => 'application',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 11,
    'menuindex' => 7,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1346090750,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1346090750,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'application',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html dir="ltr" lang="ru-RU">
<head>

<meta charset="utf-8">
<title>Онлайн запись</title>
<meta name="keywords" content="казахстан, шымкент, клиника, лечение">
<meta name="description" content="Онлайн запись на прием в клинике Беласу.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<base href="http://belasu.com/"/>

<link rel="stylesheet" media="all" href="http://belasu.com/assets/css/stylesheet.css">
<!--[if IE 6 ]><link rel="stylesheet" media="all" href="http://belasu.com/assets/css/ie6.css"><![endif]-->
<!--[if lt IE 8 ]><link rel="stylesheet" media="all" href="http://belasu.com/assets/css/ie7.css"><![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://belasu.com/assets/js/selectivizr.min.js"></script>
<![endif]-->
<link href="http://belasu.com/assets/css/jquery-ui-1.8.23.custom.css" rel="stylesheet" type="text/css"/>

</head>

<body class="page">

<header>
 <div class="header-container clearfix">
  <div class="column span_3">
   <div id="logo"><a href="/" title=""><img src="assets/img/logo.png" alt="" title=""></a></div>
   <div id="icons">
    <a href="/" class="icon home" title="На главную"></a>
    <a href="http://belasu.com/sitemap" class="icon sitemap" title="Карта сайта"></a>
    <a href="mailto:info@belasu.kz" class="icon mail" title="Написать нам письмо"></a>
   </div>
  </div>
  <div class="column span_6 nav">
   [[!Wayfinder?
  &startId=`0`
  &outerTpl=`menu-outer`
  &rowTpl=`menu-row`
  &innerTpl=`menu-inner`
  &innerRowTpl=`menu-inner-row`
  &hereClass=`active`
  &firstClass=``
  &lastClass =`` ]]
    [[!Wayfinder?
 				 &startId=`0`
  				&outerTpl=`menu-select-outer`
 				 &rowTpl=`menu-select-row`
  				&innerTpl=`menu-select-inner`
  				&innerRowTpl=`menu-select-inner-row`
  				&hereClass=``
 				 &firstClass=``
  				&lastClass =`` ]]
  </div>
  <div class="column span_3 right">
   <div id="contact">
    <sup >+7(7252)</sup>
    <strong>54-08-28</strong>
    <div class="callout reg"></div>
    <br>
    <strong class="second">53-44-13</strong>
    <div class="callout office"></div>
    <em><a href="/contacts" title="Вся контактная информация">Все контакты</a></em>
   </div>
  </div>
 </div>
</header>

<section id="content">
 <div class="clearfix">
  <h1 class="title border"><b>Онлайн запись</b></h1>
  <div class="column span_12">
    [[!FormIt?
&hooks=`spam,email,redirect`
&emailTpl=`sentEmailTpl`
&emailSubject=`Новая заявка`
&emailTo=`ayan.yenb@gmail.com`
&validate=`name:required:minLength=`2`,
	surname:required:minLength=`2`,
	phone:required,
	email:email:required,
	service:required,
	date:required`
&redirectTo=`25`
]]
 [[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]
 <form id="application-form" method="post" action="application">
	<input type="hidden" name="nospam:blank" value="" />
 <div>
  <label for="app-name">Имя[[!+fi.error.name]]</label>
	 <input type="text" id="app-name" name="name" minlength="2" value="[[!+fi.name]]"/>
 </div>
	<div>
  <label for="app-surname">Фамилия[[!+fi.error.surname]]</label>
	 <input type="text" id="app-surname" name="surname" minlength="2" value="[[!+fi.surname]]"/>
 </div>
	<div>
  <label for="app-phone">Контактный телефон[[!+fi.error.phone]]</label>
	 <input type="text" id="app-phone" name="phone" value="[[!+fi.phone]]"/>
 </div>
	<div>
  <label for="app-email">Электронная почта[[!+fi.error.email]]</label>
	 <input type="email" id="app-email" name="email" value="[[!+fi.email]]"/>
 </div>
	<div>
  <label for="service">Услуга[[!+fi.error.service]]</label>
  <select name="service" id="service">
		 <option value="Гастроэнтерология" [[!+fi.service:FormItIsSelected=`Гастроэнтерология`]]>Гастроэнтерология</option>
		 <option value="Гинекология" [[!+fi.service:FormItIsSelected=`Гинекология`]]>Гинекология</option>
		 <option value="Кардиология" [[!+fi.service:FormItIsSelected=`Кардиология`]]>Кардиология</option>
		 <option value="Маммология" [[!+fi.service:FormItIsSelected=`Маммология`]]>Маммология</option>
		 <option value="Неврология" [[!+fi.service:FormItIsSelected=`Неврология`]]>Неврология</option>
		 <option value="Отариноларингология" [[!+fi.service:FormItIsSelected=`Отариноларингология`]]>Отариноларингология</option>
		 <option value="Урология" [[!+fi.service:FormItIsSelected=`Урология`]]>Урология</option>
		 <option value="Эндокринология" [[!+fi.service:FormItIsSelected=`Эндокринология`]]>Эндокринология</option>
		 <option value="Ультразвуковая диагностика" [[!+fi.service:FormItIsSelected=`Ультразвуковая диагностика`]]>Ультразвуковая диагностика</option>
		 <option value="Лабораторная диагностика" [[!+fi.service:FormItIsSelected=`Лабораторная диагностика`]]>Лабораторная диагностика</option>
		</select>
	</div>
	<div>
  <label for="app-date">Дата[[!+fi.error.date]]</label>
	 <input type="text" id="app-date" name="date" minlength="2" value="[[!+fi.date]]"/>
 </div>
	<div>
  <label for="time">Время[[!+fi.error.time]]</label>
  <select name="time" id="time">
		 <option value="8:30" [[!+fi.service:FormItIsSelected=`8:30`]]>8:30</option>
		 <option value="8:45" [[!+fi.service:FormItIsSelected=`8:45`]]>8:45</option>
		 <option value="9:00" [[!+fi.service:FormItIsSelected=`9:00`]]>9:00</option>
		 <option value="9:15" [[!+fi.service:FormItIsSelected=`9:15`]]>9:15</option>
		 <option value="9:30" [[!+fi.service:FormItIsSelected=`9:30`]]>9:30</option>
		 <option value="9:45" [[!+fi.service:FormItIsSelected=`9:45`]]>9:45</option>
		 <option value="10:00" [[!+fi.service:FormItIsSelected=`10:00`]]>10:00</option>
		 <option value="10:15" [[!+fi.service:FormItIsSelected=`10:15`]]>10:15</option>
		 <option value="10:30" [[!+fi.service:FormItIsSelected=`10:30`]]>10:30</option>
		 <option value="10:45" [[!+fi.service:FormItIsSelected=`10:45`]]>10:45</option>
		 <option value="11:00" [[!+fi.service:FormItIsSelected=`11:00`]]>11:00</option>
		 <option value="11:15" [[!+fi.service:FormItIsSelected=`11:15`]]>11:15</option>
		 <option value="11:30" [[!+fi.service:FormItIsSelected=`11:30`]]>11:30</option>
		 <option value="11:45" [[!+fi.service:FormItIsSelected=`11:45`]]>11:45</option>
		 <option value="12:00" [[!+fi.service:FormItIsSelected=`12:00`]]>12:00</option>
		 <option value="12:15" [[!+fi.service:FormItIsSelected=`12:15`]]>12:15</option>
		 <option value="12:30" [[!+fi.service:FormItIsSelected=`12:30`]]>12:30</option>
		 <option value="12:45" [[!+fi.service:FormItIsSelected=`12:45`]]>12:45</option>
		 <option value="13:00" [[!+fi.service:FormItIsSelected=`13:00`]]>13:00</option>
		 <option value="13:15" [[!+fi.service:FormItIsSelected=`13:15`]]>13:15</option>
		 <option value="13:30" [[!+fi.service:FormItIsSelected=`13:30`]]>13:30</option>
		 <option value="13:45" [[!+fi.service:FormItIsSelected=`13:45`]]>13:45</option>
		 <option value="14:00" [[!+fi.service:FormItIsSelected=`14:00`]]>14:00</option>
		 <option value="14:15" [[!+fi.service:FormItIsSelected=`14:15`]]>14:15</option>
		 <option value="14:30" [[!+fi.service:FormItIsSelected=`14:30`]]>14:30</option>
		 <option value="14:45" [[!+fi.service:FormItIsSelected=`14:45`]]>14:45</option>
		 <option value="15:00" [[!+fi.service:FormItIsSelected=`15:00`]]>15:00</option>
		 <option value="15:15" [[!+fi.service:FormItIsSelected=`15:15`]]>15:15</option>
		 <option value="15:30" [[!+fi.service:FormItIsSelected=`15:30`]]>15:30</option>
		 <option value="15:45" [[!+fi.service:FormItIsSelected=`15:45`]]>15:45</option>
		 <option value="16:00" [[!+fi.service:FormItIsSelected=`16:00`]]>16:00</option>
		 <option value="16:15" [[!+fi.service:FormItIsSelected=`16:15`]]>16:15</option>
		 <option value="16:30" [[!+fi.service:FormItIsSelected=`16:30`]]>16:30</option>
		 <option value="16:45" [[!+fi.service:FormItIsSelected=`16:45`]]>16:45</option>
		 <option value="17:00" [[!+fi.service:FormItIsSelected=`17:00`]]>17:00</option>
		 <option value="17:15" [[!+fi.service:FormItIsSelected=`17:15`]]>17:15</option>
		 <option value="17:30" [[!+fi.service:FormItIsSelected=`17:30`]]>17:30</option>
		 <option value="17:45" [[!+fi.service:FormItIsSelected=`17:45`]]>17:45</option>
		</select>
	</div>
 <input name="submit" type="submit" value="Отравить заявку"/>
 </form>
  </div>
 </div>
</section>

<footer>
 <div id="bottom" class="clearfix">
  <div class="column span_12 copyright smaller">
   <div class="column span_5">
    <p>© 2007-[[!time:date=`%Y`]] Клиника "Беласу".</p>
    <ul>
     <li><a href="http://belasu.com/">Главная</a></li>
     <li><a href="mailto:info@belasu.kz">Написать нам письмо</a></li>
     <li><a href="http://belasu.com/sitemap">Карта сайта</a></li>
    </ul>	
   </div>
   <div class="column span_4">
    <p>г. Шымкент, 160011, улица Казыбек-би, дом 37.<br>
    <a href="mailto:info@belasu.kz">info@belasu.kz</a></p>
   </div>
   <div class="column span_3 right">
    <p>Разработка сайта - <a href="mailto:ayan@exultic.com">Аян Енбекбай</a></p>
   </div>
  </div>
 </div>
</footer>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://belasu.com/assets/js/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="http://belasu.com/assets/js/jquery.superfish.js"></script>
<script type="text/javascript" src="http://belasu.com/assets/js/jquery.gradienttext.js"></script>
<script type="text/javascript" src="http://belasu.com/assets/js/jquery.custom.js"></script>
<script>
  $(document).ready(function() {
	$.datepicker.regional[\'ru\'] = { 
	closeText: \'Закрыть\', 
	prevText: \'&#x3c;Пред\', 
	nextText: \'След&#x3e;\', 
	currentText: \'Сегодня\', 
	monthNames: [\'Январь\',\'Февраль\',\'Март\',\'Апрель\',\'Май\',\'Июнь\', 
	\'Июль\',\'Август\',\'Сентябрь\',\'Октябрь\',\'Ноябрь\',\'Декабрь\'], 
	monthNamesShort: [\'Янв\',\'Фев\',\'Мар\',\'Апр\',\'Май\',\'Июн\', 
	\'Июл\',\'Авг\',\'Сен\',\'Окт\',\'Ноя\',\'Дек\'], 
	dayNames: [\'воскресенье\',\'понедельник\',\'вторник\',\'среда\',\'четверг\',\'пятница\',\'суббота\'], 
	dayNamesShort: [\'вск\',\'пнд\',\'втр\',\'срд\',\'чтв\',\'птн\',\'сбт\'], 
	dayNamesMin: [\'Вс\',\'Пн\',\'Вт\',\'Ср\',\'Чт\',\'Пт\',\'Сб\'], 
	dateFormat: \'dd.mm.yy\', 
	firstDay: 1, 
	isRTL: false 
	}; 
	$.datepicker.setDefaults($.datepicker.regional[\'ru\']); 
    $("#app-date").datepicker({
        minDate: "0",
        maxDate: "+1m +1d"
    });
  });
</script>

</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Онлайн запись',
    '[[*description]]' => 'Онлайн запись на прием в клинике Беласу.',
    '[[$belasu-head]]' => '<meta charset="utf-8">
<title>Онлайн запись</title>
<meta name="keywords" content="казахстан, шымкент, клиника, лечение">
<meta name="description" content="Онлайн запись на прием в клинике Беласу.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<base href="http://belasu.com/"/>

<link rel="stylesheet" media="all" href="http://belasu.com/assets/css/stylesheet.css">
<!--[if IE 6 ]><link rel="stylesheet" media="all" href="http://belasu.com/assets/css/ie6.css"><![endif]-->
<!--[if lt IE 8 ]><link rel="stylesheet" media="all" href="http://belasu.com/assets/css/ie7.css"><![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://belasu.com/assets/js/selectivizr.min.js"></script>
<![endif]-->',
    '[[$belasu-nav]]' => '[[!Wayfinder?
  &startId=`0`
  &outerTpl=`menu-outer`
  &rowTpl=`menu-row`
  &innerTpl=`menu-inner`
  &innerRowTpl=`menu-inner-row`
  &hereClass=`active`
  &firstClass=``
  &lastClass =`` ]]
    [[!Wayfinder?
 				 &startId=`0`
  				&outerTpl=`menu-select-outer`
 				 &rowTpl=`menu-select-row`
  				&innerTpl=`menu-select-inner`
  				&innerRowTpl=`menu-select-inner-row`
  				&hereClass=``
 				 &firstClass=``
  				&lastClass =`` ]]',
    '[[$belasu-contact]]' => '<div id="contact">
    <sup >+7(7252)</sup>
    <strong>54-08-28</strong>
    <div class="callout reg"></div>
    <br>
    <strong class="second">53-44-13</strong>
    <div class="callout office"></div>
    <em><a href="/contacts" title="Вся контактная информация">Все контакты</a></em>
   </div>',
    '[[$belasu-header]]' => '<header>
 <div class="header-container clearfix">
  <div class="column span_3">
   <div id="logo"><a href="/" title=""><img src="assets/img/logo.png" alt="" title=""></a></div>
   <div id="icons">
    <a href="/" class="icon home" title="На главную"></a>
    <a href="http://belasu.com/sitemap" class="icon sitemap" title="Карта сайта"></a>
    <a href="mailto:info@belasu.kz" class="icon mail" title="Написать нам письмо"></a>
   </div>
  </div>
  <div class="column span_6 nav">
   [[!Wayfinder?
  &startId=`0`
  &outerTpl=`menu-outer`
  &rowTpl=`menu-row`
  &innerTpl=`menu-inner`
  &innerRowTpl=`menu-inner-row`
  &hereClass=`active`
  &firstClass=``
  &lastClass =`` ]]
    [[!Wayfinder?
 				 &startId=`0`
  				&outerTpl=`menu-select-outer`
 				 &rowTpl=`menu-select-row`
  				&innerTpl=`menu-select-inner`
  				&innerRowTpl=`menu-select-inner-row`
  				&hereClass=``
 				 &firstClass=``
  				&lastClass =`` ]]
  </div>
  <div class="column span_3 right">
   <div id="contact">
    <sup >+7(7252)</sup>
    <strong>54-08-28</strong>
    <div class="callout reg"></div>
    <br>
    <strong class="second">53-44-13</strong>
    <div class="callout office"></div>
    <em><a href="/contacts" title="Вся контактная информация">Все контакты</a></em>
   </div>
  </div>
 </div>
</header>',
    '[[*id]]' => 24,
    '[[~24]]' => 'application',
    '[[$belasu-application]]' => ' [[!FormIt?
&hooks=`spam,email,redirect`
&emailTpl=`sentEmailTpl`
&emailSubject=`Новая заявка`
&emailTo=`ayan.yenb@gmail.com`
&validate=`name:required:minLength=`2`,
	surname:required:minLength=`2`,
	phone:required,
	email:email:required,
	service:required,
	date:required`
&redirectTo=`25`
]]
 [[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]
 <form id="application-form" method="post" action="application">
	<input type="hidden" name="nospam:blank" value="" />
 <div>
  <label for="app-name">Имя[[!+fi.error.name]]</label>
	 <input type="text" id="app-name" name="name" minlength="2" value="[[!+fi.name]]"/>
 </div>
	<div>
  <label for="app-surname">Фамилия[[!+fi.error.surname]]</label>
	 <input type="text" id="app-surname" name="surname" minlength="2" value="[[!+fi.surname]]"/>
 </div>
	<div>
  <label for="app-phone">Контактный телефон[[!+fi.error.phone]]</label>
	 <input type="text" id="app-phone" name="phone" value="[[!+fi.phone]]"/>
 </div>
	<div>
  <label for="app-email">Электронная почта[[!+fi.error.email]]</label>
	 <input type="email" id="app-email" name="email" value="[[!+fi.email]]"/>
 </div>
	<div>
  <label for="service">Услуга[[!+fi.error.service]]</label>
  <select name="service" id="service">
		 <option value="Гастроэнтерология" [[!+fi.service:FormItIsSelected=`Гастроэнтерология`]]>Гастроэнтерология</option>
		 <option value="Гинекология" [[!+fi.service:FormItIsSelected=`Гинекология`]]>Гинекология</option>
		 <option value="Кардиология" [[!+fi.service:FormItIsSelected=`Кардиология`]]>Кардиология</option>
		 <option value="Маммология" [[!+fi.service:FormItIsSelected=`Маммология`]]>Маммология</option>
		 <option value="Неврология" [[!+fi.service:FormItIsSelected=`Неврология`]]>Неврология</option>
		 <option value="Отариноларингология" [[!+fi.service:FormItIsSelected=`Отариноларингология`]]>Отариноларингология</option>
		 <option value="Урология" [[!+fi.service:FormItIsSelected=`Урология`]]>Урология</option>
		 <option value="Эндокринология" [[!+fi.service:FormItIsSelected=`Эндокринология`]]>Эндокринология</option>
		 <option value="Ультразвуковая диагностика" [[!+fi.service:FormItIsSelected=`Ультразвуковая диагностика`]]>Ультразвуковая диагностика</option>
		 <option value="Лабораторная диагностика" [[!+fi.service:FormItIsSelected=`Лабораторная диагностика`]]>Лабораторная диагностика</option>
		</select>
	</div>
	<div>
  <label for="app-date">Дата[[!+fi.error.date]]</label>
	 <input type="text" id="app-date" name="date" minlength="2" value="[[!+fi.date]]"/>
 </div>
	<div>
  <label for="time">Время[[!+fi.error.time]]</label>
  <select name="time" id="time">
		 <option value="8:30" [[!+fi.service:FormItIsSelected=`8:30`]]>8:30</option>
		 <option value="8:45" [[!+fi.service:FormItIsSelected=`8:45`]]>8:45</option>
		 <option value="9:00" [[!+fi.service:FormItIsSelected=`9:00`]]>9:00</option>
		 <option value="9:15" [[!+fi.service:FormItIsSelected=`9:15`]]>9:15</option>
		 <option value="9:30" [[!+fi.service:FormItIsSelected=`9:30`]]>9:30</option>
		 <option value="9:45" [[!+fi.service:FormItIsSelected=`9:45`]]>9:45</option>
		 <option value="10:00" [[!+fi.service:FormItIsSelected=`10:00`]]>10:00</option>
		 <option value="10:15" [[!+fi.service:FormItIsSelected=`10:15`]]>10:15</option>
		 <option value="10:30" [[!+fi.service:FormItIsSelected=`10:30`]]>10:30</option>
		 <option value="10:45" [[!+fi.service:FormItIsSelected=`10:45`]]>10:45</option>
		 <option value="11:00" [[!+fi.service:FormItIsSelected=`11:00`]]>11:00</option>
		 <option value="11:15" [[!+fi.service:FormItIsSelected=`11:15`]]>11:15</option>
		 <option value="11:30" [[!+fi.service:FormItIsSelected=`11:30`]]>11:30</option>
		 <option value="11:45" [[!+fi.service:FormItIsSelected=`11:45`]]>11:45</option>
		 <option value="12:00" [[!+fi.service:FormItIsSelected=`12:00`]]>12:00</option>
		 <option value="12:15" [[!+fi.service:FormItIsSelected=`12:15`]]>12:15</option>
		 <option value="12:30" [[!+fi.service:FormItIsSelected=`12:30`]]>12:30</option>
		 <option value="12:45" [[!+fi.service:FormItIsSelected=`12:45`]]>12:45</option>
		 <option value="13:00" [[!+fi.service:FormItIsSelected=`13:00`]]>13:00</option>
		 <option value="13:15" [[!+fi.service:FormItIsSelected=`13:15`]]>13:15</option>
		 <option value="13:30" [[!+fi.service:FormItIsSelected=`13:30`]]>13:30</option>
		 <option value="13:45" [[!+fi.service:FormItIsSelected=`13:45`]]>13:45</option>
		 <option value="14:00" [[!+fi.service:FormItIsSelected=`14:00`]]>14:00</option>
		 <option value="14:15" [[!+fi.service:FormItIsSelected=`14:15`]]>14:15</option>
		 <option value="14:30" [[!+fi.service:FormItIsSelected=`14:30`]]>14:30</option>
		 <option value="14:45" [[!+fi.service:FormItIsSelected=`14:45`]]>14:45</option>
		 <option value="15:00" [[!+fi.service:FormItIsSelected=`15:00`]]>15:00</option>
		 <option value="15:15" [[!+fi.service:FormItIsSelected=`15:15`]]>15:15</option>
		 <option value="15:30" [[!+fi.service:FormItIsSelected=`15:30`]]>15:30</option>
		 <option value="15:45" [[!+fi.service:FormItIsSelected=`15:45`]]>15:45</option>
		 <option value="16:00" [[!+fi.service:FormItIsSelected=`16:00`]]>16:00</option>
		 <option value="16:15" [[!+fi.service:FormItIsSelected=`16:15`]]>16:15</option>
		 <option value="16:30" [[!+fi.service:FormItIsSelected=`16:30`]]>16:30</option>
		 <option value="16:45" [[!+fi.service:FormItIsSelected=`16:45`]]>16:45</option>
		 <option value="17:00" [[!+fi.service:FormItIsSelected=`17:00`]]>17:00</option>
		 <option value="17:15" [[!+fi.service:FormItIsSelected=`17:15`]]>17:15</option>
		 <option value="17:30" [[!+fi.service:FormItIsSelected=`17:30`]]>17:30</option>
		 <option value="17:45" [[!+fi.service:FormItIsSelected=`17:45`]]>17:45</option>
		</select>
	</div>
 <input name="submit" type="submit" value="Отравить заявку"/>
 </form>',
    '[[$belasu-footer]]' => '<footer>
 <div id="bottom" class="clearfix">
  <div class="column span_12 copyright smaller">
   <div class="column span_5">
    <p>© 2007-[[!time:date=`%Y`]] Клиника "Беласу".</p>
    <ul>
     <li><a href="http://belasu.com/">Главная</a></li>
     <li><a href="mailto:info@belasu.kz">Написать нам письмо</a></li>
     <li><a href="http://belasu.com/sitemap">Карта сайта</a></li>
    </ul>	
   </div>
   <div class="column span_4">
    <p>г. Шымкент, 160011, улица Казыбек-би, дом 37.<br>
    <a href="mailto:info@belasu.kz">info@belasu.kz</a></p>
   </div>
   <div class="column span_3 right">
    <p>Разработка сайта - <a href="mailto:ayan@exultic.com">Аян Енбекбай</a></p>
   </div>
  </div>
 </div>
</footer>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'belasu-head' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'belasu-head',
          'description' => 'Head для шаблона сайта клиники Беласу.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<meta charset="utf-8">
<title>[[*pagetitle]]</title>
<meta name="keywords" content="казахстан, шымкент, клиника, лечение">
<meta name="description" content="[[*description]]">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<base href="[[++site_url]]"/>

<link rel="stylesheet" media="all" href="[[++site_url]]assets/css/stylesheet.css">
<!--[if IE 6 ]><link rel="stylesheet" media="all" href="[[++site_url]]assets/css/ie6.css"><![endif]-->
<!--[if lt IE 8 ]><link rel="stylesheet" media="all" href="[[++site_url]]assets/css/ie7.css"><![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="[[++site_url]]assets/js/selectivizr.min.js"></script>
<![endif]-->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<meta charset="utf-8">
<title>[[*pagetitle]]</title>
<meta name="keywords" content="казахстан, шымкент, клиника, лечение">
<meta name="description" content="[[*description]]">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<base href="[[++site_url]]"/>

<link rel="stylesheet" media="all" href="[[++site_url]]assets/css/stylesheet.css">
<!--[if IE 6 ]><link rel="stylesheet" media="all" href="[[++site_url]]assets/css/ie6.css"><![endif]-->
<!--[if lt IE 8 ]><link rel="stylesheet" media="all" href="[[++site_url]]assets/css/ie7.css"><![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="[[++site_url]]assets/js/selectivizr.min.js"></script>
<![endif]-->',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'belasu-header' => 
      array (
        'fields' => 
        array (
          'id' => 22,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'belasu-header',
          'description' => 'Шапка для шаблона сайта клиники Беласу.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<header>
 <div class="header-container clearfix">
  <div class="column span_3">
   <div id="logo"><a href="/" title=""><img src="assets/img/logo.png" alt="" title=""></a></div>
   <div id="icons">
    <a href="/" class="icon home" title="На главную"></a>
    <a href="[[++site_url]]sitemap" class="icon sitemap" title="Карта сайта"></a>
    <a href="mailto:info@belasu.kz" class="icon mail" title="Написать нам письмо"></a>
   </div>
  </div>
  <div class="column span_6 nav">
   [[$belasu-nav]]
  </div>
  <div class="column span_3 right">
   [[$belasu-contact]]
  </div>
 </div>
</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header>
 <div class="header-container clearfix">
  <div class="column span_3">
   <div id="logo"><a href="/" title=""><img src="assets/img/logo.png" alt="" title=""></a></div>
   <div id="icons">
    <a href="/" class="icon home" title="На главную"></a>
    <a href="[[++site_url]]sitemap" class="icon sitemap" title="Карта сайта"></a>
    <a href="mailto:info@belasu.kz" class="icon mail" title="Написать нам письмо"></a>
   </div>
  </div>
  <div class="column span_6 nav">
   [[$belasu-nav]]
  </div>
  <div class="column span_3 right">
   [[$belasu-contact]]
  </div>
 </div>
</header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'belasu-nav' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'belasu-nav',
          'description' => 'Навигация для шаблона сайта клиники Беласу.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '[[!Wayfinder?
  &startId=`0`
  &outerTpl=`menu-outer`
  &rowTpl=`menu-row`
  &innerTpl=`menu-inner`
  &innerRowTpl=`menu-inner-row`
  &hereClass=`active`
  &firstClass=``
  &lastClass =`` ]]
    [[!Wayfinder?
 				 &startId=`0`
  				&outerTpl=`menu-select-outer`
 				 &rowTpl=`menu-select-row`
  				&innerTpl=`menu-select-inner`
  				&innerRowTpl=`menu-select-inner-row`
  				&hereClass=``
 				 &firstClass=``
  				&lastClass =`` ]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[!Wayfinder?
  &startId=`0`
  &outerTpl=`menu-outer`
  &rowTpl=`menu-row`
  &innerTpl=`menu-inner`
  &innerRowTpl=`menu-inner-row`
  &hereClass=`active`
  &firstClass=``
  &lastClass =`` ]]
    [[!Wayfinder?
 				 &startId=`0`
  				&outerTpl=`menu-select-outer`
 				 &rowTpl=`menu-select-row`
  				&innerTpl=`menu-select-inner`
  				&innerRowTpl=`menu-select-inner-row`
  				&hereClass=``
 				 &firstClass=``
  				&lastClass =`` ]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'belasu-contact' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'belasu-contact',
          'description' => 'Контактная информация для шаблона сайта клиники Беласу.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div id="contact">
    <sup >+7(7252)</sup>
    <strong>54-08-28</strong>
    <div class="callout reg"></div>
    <br>
    <strong class="second">53-44-13</strong>
    <div class="callout office"></div>
    <em><a href="/contacts" title="Вся контактная информация">Все контакты</a></em>
   </div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div id="contact">
    <sup >+7(7252)</sup>
    <strong>54-08-28</strong>
    <div class="callout reg"></div>
    <br>
    <strong class="second">53-44-13</strong>
    <div class="callout office"></div>
    <em><a href="/contacts" title="Вся контактная информация">Все контакты</a></em>
   </div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'belasu-application' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'belasu-application',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => ' [[!FormIt?
&hooks=`spam,email,redirect`
&emailTpl=`sentEmailTpl`
&emailSubject=`Новая заявка`
&emailTo=`ayan.yenb@gmail.com`
&validate=`name:required:minLength=`2`,
	surname:required:minLength=`2`,
	phone:required,
	email:email:required,
	service:required,
	date:required`
&redirectTo=`25`
]]
 [[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]
 <form id="application-form" method="post" action="[[~[[*id]]]]">
	<input type="hidden" name="nospam:blank" value="" />
 <div>
  <label for="app-name">Имя[[!+fi.error.name]]</label>
	 <input type="text" id="app-name" name="name" minlength="2" value="[[!+fi.name]]"/>
 </div>
	<div>
  <label for="app-surname">Фамилия[[!+fi.error.surname]]</label>
	 <input type="text" id="app-surname" name="surname" minlength="2" value="[[!+fi.surname]]"/>
 </div>
	<div>
  <label for="app-phone">Контактный телефон[[!+fi.error.phone]]</label>
	 <input type="text" id="app-phone" name="phone" value="[[!+fi.phone]]"/>
 </div>
	<div>
  <label for="app-email">Электронная почта[[!+fi.error.email]]</label>
	 <input type="email" id="app-email" name="email" value="[[!+fi.email]]"/>
 </div>
	<div>
  <label for="service">Услуга[[!+fi.error.service]]</label>
  <select name="service" id="service">
		 <option value="Гастроэнтерология" [[!+fi.service:FormItIsSelected=`Гастроэнтерология`]]>Гастроэнтерология</option>
		 <option value="Гинекология" [[!+fi.service:FormItIsSelected=`Гинекология`]]>Гинекология</option>
		 <option value="Кардиология" [[!+fi.service:FormItIsSelected=`Кардиология`]]>Кардиология</option>
		 <option value="Маммология" [[!+fi.service:FormItIsSelected=`Маммология`]]>Маммология</option>
		 <option value="Неврология" [[!+fi.service:FormItIsSelected=`Неврология`]]>Неврология</option>
		 <option value="Отариноларингология" [[!+fi.service:FormItIsSelected=`Отариноларингология`]]>Отариноларингология</option>
		 <option value="Урология" [[!+fi.service:FormItIsSelected=`Урология`]]>Урология</option>
		 <option value="Эндокринология" [[!+fi.service:FormItIsSelected=`Эндокринология`]]>Эндокринология</option>
		 <option value="Ультразвуковая диагностика" [[!+fi.service:FormItIsSelected=`Ультразвуковая диагностика`]]>Ультразвуковая диагностика</option>
		 <option value="Лабораторная диагностика" [[!+fi.service:FormItIsSelected=`Лабораторная диагностика`]]>Лабораторная диагностика</option>
		</select>
	</div>
	<div>
  <label for="app-date">Дата[[!+fi.error.date]]</label>
	 <input type="text" id="app-date" name="date" minlength="2" value="[[!+fi.date]]"/>
 </div>
	<div>
  <label for="time">Время[[!+fi.error.time]]</label>
  <select name="time" id="time">
		 <option value="8:30" [[!+fi.service:FormItIsSelected=`8:30`]]>8:30</option>
		 <option value="8:45" [[!+fi.service:FormItIsSelected=`8:45`]]>8:45</option>
		 <option value="9:00" [[!+fi.service:FormItIsSelected=`9:00`]]>9:00</option>
		 <option value="9:15" [[!+fi.service:FormItIsSelected=`9:15`]]>9:15</option>
		 <option value="9:30" [[!+fi.service:FormItIsSelected=`9:30`]]>9:30</option>
		 <option value="9:45" [[!+fi.service:FormItIsSelected=`9:45`]]>9:45</option>
		 <option value="10:00" [[!+fi.service:FormItIsSelected=`10:00`]]>10:00</option>
		 <option value="10:15" [[!+fi.service:FormItIsSelected=`10:15`]]>10:15</option>
		 <option value="10:30" [[!+fi.service:FormItIsSelected=`10:30`]]>10:30</option>
		 <option value="10:45" [[!+fi.service:FormItIsSelected=`10:45`]]>10:45</option>
		 <option value="11:00" [[!+fi.service:FormItIsSelected=`11:00`]]>11:00</option>
		 <option value="11:15" [[!+fi.service:FormItIsSelected=`11:15`]]>11:15</option>
		 <option value="11:30" [[!+fi.service:FormItIsSelected=`11:30`]]>11:30</option>
		 <option value="11:45" [[!+fi.service:FormItIsSelected=`11:45`]]>11:45</option>
		 <option value="12:00" [[!+fi.service:FormItIsSelected=`12:00`]]>12:00</option>
		 <option value="12:15" [[!+fi.service:FormItIsSelected=`12:15`]]>12:15</option>
		 <option value="12:30" [[!+fi.service:FormItIsSelected=`12:30`]]>12:30</option>
		 <option value="12:45" [[!+fi.service:FormItIsSelected=`12:45`]]>12:45</option>
		 <option value="13:00" [[!+fi.service:FormItIsSelected=`13:00`]]>13:00</option>
		 <option value="13:15" [[!+fi.service:FormItIsSelected=`13:15`]]>13:15</option>
		 <option value="13:30" [[!+fi.service:FormItIsSelected=`13:30`]]>13:30</option>
		 <option value="13:45" [[!+fi.service:FormItIsSelected=`13:45`]]>13:45</option>
		 <option value="14:00" [[!+fi.service:FormItIsSelected=`14:00`]]>14:00</option>
		 <option value="14:15" [[!+fi.service:FormItIsSelected=`14:15`]]>14:15</option>
		 <option value="14:30" [[!+fi.service:FormItIsSelected=`14:30`]]>14:30</option>
		 <option value="14:45" [[!+fi.service:FormItIsSelected=`14:45`]]>14:45</option>
		 <option value="15:00" [[!+fi.service:FormItIsSelected=`15:00`]]>15:00</option>
		 <option value="15:15" [[!+fi.service:FormItIsSelected=`15:15`]]>15:15</option>
		 <option value="15:30" [[!+fi.service:FormItIsSelected=`15:30`]]>15:30</option>
		 <option value="15:45" [[!+fi.service:FormItIsSelected=`15:45`]]>15:45</option>
		 <option value="16:00" [[!+fi.service:FormItIsSelected=`16:00`]]>16:00</option>
		 <option value="16:15" [[!+fi.service:FormItIsSelected=`16:15`]]>16:15</option>
		 <option value="16:30" [[!+fi.service:FormItIsSelected=`16:30`]]>16:30</option>
		 <option value="16:45" [[!+fi.service:FormItIsSelected=`16:45`]]>16:45</option>
		 <option value="17:00" [[!+fi.service:FormItIsSelected=`17:00`]]>17:00</option>
		 <option value="17:15" [[!+fi.service:FormItIsSelected=`17:15`]]>17:15</option>
		 <option value="17:30" [[!+fi.service:FormItIsSelected=`17:30`]]>17:30</option>
		 <option value="17:45" [[!+fi.service:FormItIsSelected=`17:45`]]>17:45</option>
		</select>
	</div>
 <input name="submit" type="submit" value="Отравить заявку"/>
 </form>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => ' [[!FormIt?
&hooks=`spam,email,redirect`
&emailTpl=`sentEmailTpl`
&emailSubject=`Новая заявка`
&emailTo=`ayan.yenb@gmail.com`
&validate=`name:required:minLength=`2`,
	surname:required:minLength=`2`,
	phone:required,
	email:email:required,
	service:required,
	date:required`
&redirectTo=`25`
]]
 [[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]
 <form id="application-form" method="post" action="[[~[[*id]]]]">
	<input type="hidden" name="nospam:blank" value="" />
 <div>
  <label for="app-name">Имя[[!+fi.error.name]]</label>
	 <input type="text" id="app-name" name="name" minlength="2" value="[[!+fi.name]]"/>
 </div>
	<div>
  <label for="app-surname">Фамилия[[!+fi.error.surname]]</label>
	 <input type="text" id="app-surname" name="surname" minlength="2" value="[[!+fi.surname]]"/>
 </div>
	<div>
  <label for="app-phone">Контактный телефон[[!+fi.error.phone]]</label>
	 <input type="text" id="app-phone" name="phone" value="[[!+fi.phone]]"/>
 </div>
	<div>
  <label for="app-email">Электронная почта[[!+fi.error.email]]</label>
	 <input type="email" id="app-email" name="email" value="[[!+fi.email]]"/>
 </div>
	<div>
  <label for="service">Услуга[[!+fi.error.service]]</label>
  <select name="service" id="service">
		 <option value="Гастроэнтерология" [[!+fi.service:FormItIsSelected=`Гастроэнтерология`]]>Гастроэнтерология</option>
		 <option value="Гинекология" [[!+fi.service:FormItIsSelected=`Гинекология`]]>Гинекология</option>
		 <option value="Кардиология" [[!+fi.service:FormItIsSelected=`Кардиология`]]>Кардиология</option>
		 <option value="Маммология" [[!+fi.service:FormItIsSelected=`Маммология`]]>Маммология</option>
		 <option value="Неврология" [[!+fi.service:FormItIsSelected=`Неврология`]]>Неврология</option>
		 <option value="Отариноларингология" [[!+fi.service:FormItIsSelected=`Отариноларингология`]]>Отариноларингология</option>
		 <option value="Урология" [[!+fi.service:FormItIsSelected=`Урология`]]>Урология</option>
		 <option value="Эндокринология" [[!+fi.service:FormItIsSelected=`Эндокринология`]]>Эндокринология</option>
		 <option value="Ультразвуковая диагностика" [[!+fi.service:FormItIsSelected=`Ультразвуковая диагностика`]]>Ультразвуковая диагностика</option>
		 <option value="Лабораторная диагностика" [[!+fi.service:FormItIsSelected=`Лабораторная диагностика`]]>Лабораторная диагностика</option>
		</select>
	</div>
	<div>
  <label for="app-date">Дата[[!+fi.error.date]]</label>
	 <input type="text" id="app-date" name="date" minlength="2" value="[[!+fi.date]]"/>
 </div>
	<div>
  <label for="time">Время[[!+fi.error.time]]</label>
  <select name="time" id="time">
		 <option value="8:30" [[!+fi.service:FormItIsSelected=`8:30`]]>8:30</option>
		 <option value="8:45" [[!+fi.service:FormItIsSelected=`8:45`]]>8:45</option>
		 <option value="9:00" [[!+fi.service:FormItIsSelected=`9:00`]]>9:00</option>
		 <option value="9:15" [[!+fi.service:FormItIsSelected=`9:15`]]>9:15</option>
		 <option value="9:30" [[!+fi.service:FormItIsSelected=`9:30`]]>9:30</option>
		 <option value="9:45" [[!+fi.service:FormItIsSelected=`9:45`]]>9:45</option>
		 <option value="10:00" [[!+fi.service:FormItIsSelected=`10:00`]]>10:00</option>
		 <option value="10:15" [[!+fi.service:FormItIsSelected=`10:15`]]>10:15</option>
		 <option value="10:30" [[!+fi.service:FormItIsSelected=`10:30`]]>10:30</option>
		 <option value="10:45" [[!+fi.service:FormItIsSelected=`10:45`]]>10:45</option>
		 <option value="11:00" [[!+fi.service:FormItIsSelected=`11:00`]]>11:00</option>
		 <option value="11:15" [[!+fi.service:FormItIsSelected=`11:15`]]>11:15</option>
		 <option value="11:30" [[!+fi.service:FormItIsSelected=`11:30`]]>11:30</option>
		 <option value="11:45" [[!+fi.service:FormItIsSelected=`11:45`]]>11:45</option>
		 <option value="12:00" [[!+fi.service:FormItIsSelected=`12:00`]]>12:00</option>
		 <option value="12:15" [[!+fi.service:FormItIsSelected=`12:15`]]>12:15</option>
		 <option value="12:30" [[!+fi.service:FormItIsSelected=`12:30`]]>12:30</option>
		 <option value="12:45" [[!+fi.service:FormItIsSelected=`12:45`]]>12:45</option>
		 <option value="13:00" [[!+fi.service:FormItIsSelected=`13:00`]]>13:00</option>
		 <option value="13:15" [[!+fi.service:FormItIsSelected=`13:15`]]>13:15</option>
		 <option value="13:30" [[!+fi.service:FormItIsSelected=`13:30`]]>13:30</option>
		 <option value="13:45" [[!+fi.service:FormItIsSelected=`13:45`]]>13:45</option>
		 <option value="14:00" [[!+fi.service:FormItIsSelected=`14:00`]]>14:00</option>
		 <option value="14:15" [[!+fi.service:FormItIsSelected=`14:15`]]>14:15</option>
		 <option value="14:30" [[!+fi.service:FormItIsSelected=`14:30`]]>14:30</option>
		 <option value="14:45" [[!+fi.service:FormItIsSelected=`14:45`]]>14:45</option>
		 <option value="15:00" [[!+fi.service:FormItIsSelected=`15:00`]]>15:00</option>
		 <option value="15:15" [[!+fi.service:FormItIsSelected=`15:15`]]>15:15</option>
		 <option value="15:30" [[!+fi.service:FormItIsSelected=`15:30`]]>15:30</option>
		 <option value="15:45" [[!+fi.service:FormItIsSelected=`15:45`]]>15:45</option>
		 <option value="16:00" [[!+fi.service:FormItIsSelected=`16:00`]]>16:00</option>
		 <option value="16:15" [[!+fi.service:FormItIsSelected=`16:15`]]>16:15</option>
		 <option value="16:30" [[!+fi.service:FormItIsSelected=`16:30`]]>16:30</option>
		 <option value="16:45" [[!+fi.service:FormItIsSelected=`16:45`]]>16:45</option>
		 <option value="17:00" [[!+fi.service:FormItIsSelected=`17:00`]]>17:00</option>
		 <option value="17:15" [[!+fi.service:FormItIsSelected=`17:15`]]>17:15</option>
		 <option value="17:30" [[!+fi.service:FormItIsSelected=`17:30`]]>17:30</option>
		 <option value="17:45" [[!+fi.service:FormItIsSelected=`17:45`]]>17:45</option>
		</select>
	</div>
 <input name="submit" type="submit" value="Отравить заявку"/>
 </form>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'belasu-footer' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'belasu-footer',
          'description' => 'Подвал для шаблона сайта клиники Беласу.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer>
 <div id="bottom" class="clearfix">
  <div class="column span_12 copyright smaller">
   <div class="column span_5">
    <p>© 2007-[[!time:date=`%Y`]] Клиника "Беласу".</p>
    <ul>
     <li><a href="[[++site_url]]">Главная</a></li>
     <li><a href="mailto:info@belasu.kz">Написать нам письмо</a></li>
     <li><a href="[[++site_url]]sitemap">Карта сайта</a></li>
    </ul>	
   </div>
   <div class="column span_4">
    <p>г. Шымкент, 160011, улица Казыбек-би, дом 37.<br>
    <a href="mailto:info@belasu.kz">info@belasu.kz</a></p>
   </div>
   <div class="column span_3 right">
    <p>Разработка сайта - <a href="mailto:ayan@exultic.com">Аян Енбекбай</a></p>
   </div>
  </div>
 </div>
</footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer>
 <div id="bottom" class="clearfix">
  <div class="column span_12 copyright smaller">
   <div class="column span_5">
    <p>© 2007-[[!time:date=`%Y`]] Клиника "Беласу".</p>
    <ul>
     <li><a href="[[++site_url]]">Главная</a></li>
     <li><a href="mailto:info@belasu.kz">Написать нам письмо</a></li>
     <li><a href="[[++site_url]]sitemap">Карта сайта</a></li>
    </ul>	
   </div>
   <div class="column span_4">
    <p>г. Шымкент, 160011, улица Казыбек-би, дом 37.<br>
    <a href="mailto:info@belasu.kz">info@belasu.kz</a></p>
   </div>
   <div class="column span_3 right">
    <p>Разработка сайта - <a href="mailto:ayan@exultic.com">Аян Енбекбай</a></p>
   </div>
  </div>
 </div>
</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'FormIt' => 
      array (
        'fields' => 
        array (
          'id' => 34,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormIt',
          'description' => 'A dynamic form processing snippet.',
          'editor_type' => 0,
          'category' => 19,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
          'locked' => false,
          'properties' => 
          array (
            'hooks' => 
            array (
              'name' => 'hooks',
              'desc' => 'prop_formit.hooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма пройдёт проверку. Если какой-то из хуков вернёт false, то следующии хуки не будут выполнены. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_formit.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма будет загружена. Если какой-то из хуков вернёт false, то следующие хуки не будут выполнены. Например: можно предварительно устанавливать значения полей формы с помощью $scriptProperties[`hook`]->fields[`fieldname`]. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.',
              'area_trans' => '',
            ),
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_formit.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено значение, то обработка формы не начнётся пока  POST параметр с этим именем не будет передан.',
              'area_trans' => '',
            ),
            'validate' => 
            array (
              'name' => 'validate',
              'desc' => 'prop_formit.validate_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список полей для проверки, для каждого поля пишется имя:валидатор (т.е.: username:required,email:required). Валидаторы могут быть объединены через двоеточие, например email:email:required. Этот параметр может быть задан на нескольких строках.',
              'area_trans' => '',
            ),
            'errTpl' => 
            array (
              'name' => 'errTpl',
              'desc' => 'prop_formit.errtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<span class="error">[[+error]]</span>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Шаблон сообщения об ошибке.',
              'area_trans' => '',
            ),
            'validationErrorMessage' => 
            array (
              'name' => 'validationErrorMessage',
              'desc' => 'prop_formit.validationerrormessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<p class="error">A form validation error occurred. Please check the values you have entered.</p>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A general error message to set to a placeholder if validation fails. Can contain [[+errors]] if you want to display a list of all errors at the top.',
              'area_trans' => '',
            ),
            'validationErrorBulkTpl' => 
            array (
              'name' => 'validationErrorBulkTpl',
              'desc' => 'prop_formit.validationerrorbulktpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li>[[+error]]</li>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'HTML tpl that is used for each individual error in the generic validation error message value.',
              'area_trans' => '',
            ),
            'customValidators' => 
            array (
              'name' => 'customValidators',
              'desc' => 'prop_formit.customvalidators_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список имён пользовательских валидаторов(сниппетов), которые вы планируете использовать в этой форме. Пользовательские валидаторы должны быть обязательно указаны в этом параметре, иначе они не будут работать.',
              'area_trans' => '',
            ),
            'clearFieldsOnSuccess' => 
            array (
              'name' => 'clearFieldsOnSuccess',
              'desc' => 'prop_formit.clearfieldsonsuccess_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено значение true, то поля формы будут очищатся после успешной отправки формы.',
              'area_trans' => '',
            ),
            'successMessage' => 
            array (
              'name' => 'successMessage',
              'desc' => 'prop_formit.successmessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Значение подстановщика для сообщения об успехе. Имя подстановщика устанавливается в параметре &successMessagePlaceholder, по умолчанию «fi.successMessage».',
              'area_trans' => '',
            ),
            'successMessagePlaceholder' => 
            array (
              'name' => 'successMessagePlaceholder',
              'desc' => 'prop_formit.successmessageplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.successMessage',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Подстановщик для сообщения об успехе.',
              'area_trans' => '',
            ),
            'store' => 
            array (
              'name' => 'store',
              'desc' => 'prop_formit.store_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено true,  данные переданные через форму будет сохранятcя в кэше, для дальнейшего их использования с помощью сниппета FormItRetriever.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_formit.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Префикс который используется всеми подстановщиками установлеными FormIt для полей. По умолчанию «fi.»',
              'area_trans' => '',
            ),
            'storeTime' => 
            array (
              'name' => 'storeTime',
              'desc' => 'prop_formit.storetime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 300,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если выбрано `запоминание` данных формы, то этот параметр указывает время(в секундах)  для хранения данных из отправленной формы. По умолчанию пять минут.',
              'area_trans' => '',
            ),
            'allowFiles' => 
            array (
              'name' => 'allowFiles',
              'desc' => 'prop_formit.allowfiles_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set to 0, will prevent files from being submitted on the form.',
              'area_trans' => '',
            ),
            'spamEmailFields' => 
            array (
              'name' => 'spamEmailFields',
              'desc' => 'prop_formit.spamemailfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «spam». Разделённый запятыми список полей содержащих адреса электронной почты для проверки на причастность к спаму.',
              'area_trans' => '',
            ),
            'spamCheckIp' => 
            array (
              'name' => 'spamCheckIp',
              'desc' => 'prop_formit.spamcheckip_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «spam». Если это параметр установлен в true, то будет проверяться ip-адресс отправителя формы на причастность к спаму.',
              'area_trans' => '',
            ),
            'recaptchaJs' => 
            array (
              'name' => 'recaptchaJs',
              'desc' => 'prop_formit.recaptchajs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '{}',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «recaptcha».  JSON объект который содержит в себе  настройки для виджета reCaptcha.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_formit.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'formit.opt_red',
                  'value' => 'red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'text' => 'formit.opt_white',
                  'value' => 'white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'text' => 'formit.opt_clean',
                  'value' => 'clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'text' => 'formit.opt_blackglass',
                  'value' => 'blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «recaptcha». Тема оформления для виджета reCaptcha.',
              'area_trans' => '',
            ),
            'redirectTo' => 
            array (
              'name' => 'redirectTo',
              'desc' => 'prop_formit.redirectto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «redirect». В этом параметре надо указать идентификатор ресурса на который будет происходить редирект после успешной отправки формы.',
              'area_trans' => '',
            ),
            'redirectParams' => 
            array (
              'name' => 'redirectParams',
              'desc' => 'prop_formit.redirectparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => ' JSON array of parameters to pass to the redirect hook that will be passed when redirecting.',
              'area_trans' => '',
            ),
            'emailTo' => 
            array (
              'name' => 'emailTo',
              'desc' => 'prop_formit.emailto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать письмо.',
              'area_trans' => '',
            ),
            'emailToName' => 
            array (
              'name' => 'emailToName',
              'desc' => 'prop_formit.emailtoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailTo».',
              'area_trans' => '',
            ),
            'emailFrom' => 
            array (
              'name' => 'emailFrom',
              'desc' => 'prop_formit.emailfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Если этот параметр установлен, то он будет определять адрес электронной почты отправителя письма. Если не установлен, то сначала адрес электронной почты будет искаться в данных формы  в поле с именем «email», если это поле не будет найдено, то будет использоваться  адрес электронной почты из системной настройки «emailsender».',
              'area_trans' => '',
            ),
            'emailFromName' => 
            array (
              'name' => 'emailFromName',
              'desc' => 'prop_formit.emailfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Имя отправителя письма.',
              'area_trans' => '',
            ),
            'emailReplyTo' => 
            array (
              'name' => 'emailReplyTo',
              'desc' => 'prop_formit.emailreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Адрес электронной почты для ответа на письмо.',
              'area_trans' => '',
            ),
            'emailReplyToName' => 
            array (
              'name' => 'emailReplyToName',
              'desc' => 'prop_formit.emailreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Имя владельца адреса электронной почты который используется для ответа на письмо.',
              'area_trans' => '',
            ),
            'emailCC' => 
            array (
              'name' => 'emailCC',
              'desc' => 'prop_formit.emailcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать копию письма.',
              'area_trans' => '',
            ),
            'emailCCName' => 
            array (
              'name' => 'emailCCName',
              'desc' => 'prop_formit.emailccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».',
              'area_trans' => '',
            ),
            'emailBCC' => 
            array (
              'name' => 'emailBCC',
              'desc' => 'prop_formit.emailbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email».  Разделённый запятыми список адресов  электронной почты на которые надо послать скрытую копию письма.',
              'area_trans' => '',
            ),
            'emailBCCName' => 
            array (
              'name' => 'emailBCCName',
              'desc' => 'prop_formit.emailbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailBCC».',
              'area_trans' => '',
            ),
            'emailSubject' => 
            array (
              'name' => 'emailSubject',
              'desc' => 'prop_formit.emailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». В этом параметре можно указать тему электронного письма.',
              'area_trans' => '',
            ),
            'emailUseFieldForSubject' => 
            array (
              'name' => 'emailUseFieldForSubject',
              'desc' => 'prop_formit.emailusefieldforsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если поле «subject» используется в форме, и это параметр установлен в true,то содержимое этого поля будет использоваться как тема электронного письма.',
              'area_trans' => '',
            ),
            'emailHtml' => 
            array (
              'name' => 'emailHtml',
              'desc' => 'prop_formit.emailhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Этот параметр включает использование html разметки в электронном письме. По умолчанию включено.',
              'area_trans' => '',
            ),
            'emailConvertNewlines' => 
            array (
              'name' => 'emailConvertNewlines',
              'desc' => 'prop_formit.emailconvertnewlines_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true and emailHtml is set to 1, will convert newlines to BR tags in the email.',
              'area_trans' => '',
            ),
            'emailMultiWrapper' => 
            array (
              'name' => 'emailMultiWrapper',
              'desc' => 'prop_formit.emailmultiwrapper_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+value]]',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Will wrap each item in a collection of fields sent via checkboxes/multi-selects. Defaults to just the value.',
              'area_trans' => '',
            ),
            'emailMultiSeparator' => 
            array (
              'name' => 'emailMultiSeparator',
              'desc' => 'prop_formit.emailmultiseparator_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.emailmultiseparator_desc',
              'area_trans' => '',
            ),
            'fiarTpl' => 
            array (
              'name' => 'fiarTpl',
              'desc' => 'prop_fiar.fiartpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Обязательный параметр. Имя чанка который будет использоватся как шаблон письма для автоматического ответа.',
              'area_trans' => '',
            ),
            'fiarToField' => 
            array (
              'name' => 'fiarToField',
              'desc' => 'prop_fiar.fiartofield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => ' Хук «FormItAutoResponder».  Поле формы которое будет использовано как адрес на который надо отправить автоматический ответ.',
              'area_trans' => '',
            ),
            'fiarSubject' => 
            array (
              'name' => 'fiarSubject',
              'desc' => 'prop_fiar.fiarsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[++site_name]] Auto-Responder',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Тема письма.',
              'area_trans' => '',
            ),
            'fiarFrom' => 
            array (
              'name' => 'fiarFrom',
              'desc' => 'prop_fiar.fiarfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.   Если этот параметр установлен, то он будет определять адрес электронной почты отправителя письма. Если не установлен, то сначала адрес электронной почты будет искаться в данных формы  в поле с именем «email», если это поле не будет найдено, то будет использоваться  адрес электронной почты из системной настройки «emailsender».',
              'area_trans' => '',
            ),
            'fiarFromName' => 
            array (
              'name' => 'fiarFromName',
              'desc' => 'prop_fiar.fiarfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Имя отправителя письма.',
              'area_trans' => '',
            ),
            'fiarReplyTo' => 
            array (
              'name' => 'fiarReplyTo',
              'desc' => 'prop_fiar.fiarreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Адрес электронной почты для ответа на письмо.',
              'area_trans' => '',
            ),
            'fiarReplyToName' => 
            array (
              'name' => 'fiarReplyToName',
              'desc' => 'prop_fiar.fiarreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.   Имя владельца адреса электронной почты который используется для ответа на письмо.',
              'area_trans' => '',
            ),
            'fiarCC' => 
            array (
              'name' => 'fiarCC',
              'desc' => 'prop_fiar.fiarcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder».  Разделённый запятыми список адресов электронной почты на которые надо послать копию письма.',
              'area_trans' => '',
            ),
            'fiarCCName' => 
            array (
              'name' => 'fiarCCName',
              'desc' => 'prop_fiar.fiarccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».',
              'area_trans' => '',
            ),
            'fiarBCC' => 
            array (
              'name' => 'fiarBCC',
              'desc' => 'prop_fiar.fiarbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Разделённый запятыми список адресов электронной почты на которые надо послать скрытую копию письма.',
              'area_trans' => '',
            ),
            'fiarBCCName' => 
            array (
              'name' => 'fiarBCCName',
              'desc' => 'prop_fiar.fiarbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder».  Необязательный параметр.  Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailBCC».',
              'area_trans' => '',
            ),
            'fiarHtml' => 
            array (
              'name' => 'fiarHtml',
              'desc' => 'prop_fiar.fiarhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder».  Необязательный параметр. Включает или выключает использование html разметки в электронном письме. По умолчанию включено.',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_math.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Минимальный диапазон для каждого числа в примере.',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_math.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 100,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Максимальный диапазон для каждого числа в примере.',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_math.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля ввода для ответа.',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_math.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля для первого числа в примере.',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_math.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля для второго числа в примере.',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_math.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля для оператора в примере.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'FormItIsSelected' => 
      array (
        'fields' => 
        array (
          'id' => 38,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormItIsSelected',
          'description' => 'A custom output filter used with dropdowns for checking selected status.',
          'editor_type' => 0,
          'category' => 19,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' selected="selected"\';
}
if (strpos($input,\',\') !== false) {
    $input = explode(\',\',$input);
    if (in_array($options,$input)) {
        $output = \' selected="selected"\';
    }
}
return $output;',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' selected="selected"\';
}
if (strpos($input,\',\') !== false) {
    $input = explode(\',\',$input);
    if (in_array($options,$input)) {
        $output = \' selected="selected"\';
    }
}
return $output;',
        ),
        'policies' => 
        array (
        ),
      ),
      'time' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'time',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => 'return time();',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => 'return time();',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);