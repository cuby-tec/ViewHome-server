<?php
/* @var $this SlideController */
$jsFile = "js/s.js";
$cssFile = "css/slideshow.css";
$jqueryFile = "js/jquery-1.3.1.min.js";

$cs = Yii::app()->clientScript;

$cs->registerScriptFile($jqueryFile);
$cs->registerScriptFile($jsFile);
$cs->registerCSSFile($cssFile);
//Yii::app()->clientScript->registerScriptFile('js/s.js', CClientScript::POS_HEAD);
//Yii::app()->clientScript->registerCSSFile(Yii::app()->baseUrl .'css/slideshow.css');
//Yii::app()->clientScript->registerCSSFile('css/slideshow.css');





// $assetsDir = dirname(__FILE__).'/assets';

//$cs->registerScriptFile(Yii::app()->assetManager->publish($assetsDir.'/s.js'), CClientScript::POS_HEAD);
//$cs->registerCoreScript("jquery");



//$this->pageTitle=Yii::app()->name;
$this->pageTitle = "Закат в городе";
?>
<h1>ВижуДом / HomeView</h1>

<?php  // echo CHtml::image("images/4photo.jpg","alt",array("rel"=>"20:08"));  ?>

 
<div id="gallery">


	<a href="#" class="show">
		<img src="images/1photo.jpg" alt="20:08" width="580" height="360" rel="20:08 "/>
	</a>
	<a href="#">
		<img src="images/2photo.jpg" alt="20:24" width="580" height="360" rel="20:24"/>
	</a>
	<a href="#">
		<img src="images/3photo.jpg" alt="20:38" width="580" height="360" rel="20:38"/>
	</a>
	<a href="#">
		<img src="images/4photo.jpg" alt="20:53" width="580" height="360"  rel="20:53"/>
	</a>
	<a href="#">
		<img src="images/5photo.jpg" alt="21:10" width="580" height="360"  rel="21:10"/>
	</a>
	<a href="#">
		<img src="images/6photo.jpg" alt="21:23" width="580" height="360" rel="21:23"/>
	</a>
	<a href="#">
		<img src="images/7photo.jpg" alt="21:39"	width="580" height="360" rel="21:39"/>
	</a>
	<a href="#">
		<img src="images/8photo.jpg" alt="21:54 " width="580" height="360" rel="21:54 "/>
	</a>
	<a href="#">
		<img src="images/9photo.jpg" alt="22:08" width="580" height="360" rel="22:08 "/>
	</a>
	<a href="#">
		<img src="images/10photo.jpg" alt="22:23 	" width="580" height="360" rel="22:23 "/>
	</a>
	<a href="#">
		<img src="images/11photo.jpg" alt="22:38 " width="580" height="360" rel="22:38"/>
	</a>
	<a href="#">
		<img src="images/12photo.jpg" alt="22:53" width="580" height="360" rel="22:53"/>
	</a>
	<a href="#">
		<img src="images/13photo.jpg" alt="23:09" width="580" height="360" rel="23:09"/>
	</a>
	<a href="#">
		<img src="images/14photo.jpg" alt="23:25" width="580" height="360" rel="23:25"/>
	</a>
	<a href="#">
		<img src="images/15photo.jpg" alt="23:38" width="580" height="360" rel="23:38 "/>
	</a>
	<a href="#">
		<img src="images/16photo.jpg" alt="23:54" width="580" height="360" rel="23:54"/>
	</a>

	<a href="#">
		<img src="images/17photo.jpg" alt="00:09" width="580" height="360" rel="00:09"/>
	</a>
	<a href="#">
		<img src="images/18photo.jpg" alt="00:24" width="580" height="360" rel="00:24"/>
	</a>
	<a href="#">
		<img src="images/19photo.jpg" alt="00:39" width="580" height="360" rel="00:39"/>
	</a>
	<a href="#">
		<img src="images/20photo.jpg" alt="00:54" width="580" height="360" rel="00:54"/>
	</a>
	<a href="#">
		<img src="images/21photo.jpg" alt="01:09" width="580" height="360" rel="01:09"/>
	</a>
	<a href="#">
		<img src="images/22photo.jpg" alt="01:24" width="580" height="360" rel="01:24"/>
	</a>
	
<!--	
	<a href="#">
		<img src="images/23photo.jpg" alt="01:40" width="580" height="360" rel="01:40"/>
	</a>
	<a href="#">
		<img src="images/24photo.jpg" alt="01:54" width="580" height="360" rel="01:54"/>
	</a>
	<a href="#">
		<img src="images/25photo.jpg" alt="02:09" width="580" height="360" rel="02:09"/>
	</a>
	<a href="#">
		<img src="images/26photo.jpg" alt="02:25" width="580" height="360" rel="02:25"/>
	</a>
	<a href="#">
		<img src="images/27photo.jpg" alt="02:39" width="580" height="360" rel="02:39"/>
	</a>

	<a href="#">
		<img src="images/28photo28504-53.jpg" alt="02:54" width="580" height="360" rel="02:54"/>
	</a>
	<a href="#">
		<img src="images/29photo29168-08.jpg" alt="03:09" width="580" height="360" rel="03:09"/>
	</a>
	<a href="#">
		<img src="images/30photo28856-23.jpg" alt="03:24" width="580" height="360" rel="03:24"/>
	</a>
	<a href="#">
		<img src="images/31photo29932-38.jpg" alt="03:39" width="580" height="360" rel="03:39"/>
	</a>
	<a href="#">
		<img src="images/32photo30404-53.jpg" alt="03:54" width="580" height="360" rel="03:54"/>
	</a>
	<a href="#">
		<img src="images/33photo27928-08.jpg" alt="04:09" width="580" height="360" rel="04:09"/>
	</a>
	<a href="#">
		<img src="images/34photo16916-38.jpg" alt="04:38 	" width="580" height="360" rel="04:38 "/>
	</a>
	<a href="#">
		<img src="images/35photo22492-23.jpg" alt="04:24" width="580" height="360" rel="04:24"/>
	</a>
	<a href="#">
		<img src="images/36photo17188-53.jpg" alt="04:53" width="580" height="360" rel="04:53"/>
	</a>
	<a href="#">
		<img src="images/37photo16660-08.jpg" alt="05:08" width="580" height="360" rel="05:08 "/>
	</a>
	<a href="#">
		<img src="images/38photo16472-23.jpg" alt="05:23" width="580" height="360" rel="05:23 "/>
	</a>
	<a href="#">
		<img src="images/39photo15876-38.jpg" alt="05:39" width="580" height="360" rel="05:39 "/>
	</a>
	<a href="#">
		<img src="images/40photo15508-53.jpg" alt="05:53" width="580" height="360" rel="05:53"/>
	</a>
	<a href="#">
		<img src="images/41photo17028-08.jpg" alt="06:08 	" width="580" height="360" rel="06:08 "/>
	</a>
	<a href="#">
		<img src="images/42photo17480-23.jpg" alt="06:23" width="580" height="360" rel="06:23"/>
	</a>
	<a href="#">
		<img src="images/43photo17412-38.jpg" alt="06:38" width="580" height="360" rel="06:38"/>
	</a>
	<a href="#">
		<img src="images/44photo19016-54.jpg" alt="06:55" width="580" height="360" rel="06:55"/>
	</a>
	<a href="#">
		<img src="images/45photo18408-08.jpg" alt="07:08" width="580" height="360" rel="07:08"/>
	</a>
	<a href="#">
		<img src="images/46photo18280-23.jpg" alt="07:23" width="580" height="360" rel="07:23"/>
	</a>
	<a href="#">
		<img src="images/47photo19992-40.jpg" alt="07:41" width="580" height="360" rel="07:41"/>
	</a>
	<a href="#">
		<img src="images/48photo19136-54.jpg" alt="07:55" width="580" height="360" rel="07:55"/>
	</a>
	<a href="#">
		<img src="images/49photo18492-08.jpg" alt="08:09" width="580" height="360" rel="08:09"/>
	</a>
	<a href="#">
		<img src="images/50photo18668-24.jpg" alt="08:25 	" width="580" height="360" rel="08:25"/>
	</a>
-->
<!-- Caption -->	

	<div class="caption"><div class="content"></div></div>
</div>



<p>View file: <code><?php echo __FILE__; ?></code> </p>
