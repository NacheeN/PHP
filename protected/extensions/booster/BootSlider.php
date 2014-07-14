<?php
/**
 * BootWidget class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap.widgets
 */

/**
 * 
Bootstrap Slider widget.
Copyright (c) 2012,Francis J Attokkaran
All rights reserved. 
*/
Yii::import('zii.widgets.CListView');

class BootSlider extends CListView
{

	public $coloumCount;
	public $slide=false;
	public $timewait=6000;
	public function init()
	{	parent::init();

		$bootstrap = Yii::app()->bootstrap;
		$bootstrap->registerCarousel();
//		$bootstrap->enableTransitions(); //enable for older version of bootstrap

//		Yii::app()->bootstrap->registerScriptFile('bootstrap.min.js',CClientScript::POS_END);
//		Yii::app()->bootstrap->registerScrollSpy();		
		
	}	
	public function run()
	{	

		//$ppagination=false;
		$dataArray = $this->dataProvider->getData();
		//print_r($data);
		$owner = $this->getOwner();
		$render = $owner instanceof CController ? 'renderPartial' : 'render';
		if(isset($this->slide[0])&&$this->slide[0]==true)
			$timewait=isset($this->slide[1])? $this->slide[1] :6000;
?>		

<?php 
		echo CHtml::tag("div",array("class"=>"carousel","id"=>$this->id)); 
?>
        	<!-- Carousel items -->
<?php 
		echo CHtml::tag("div",array("class"=>"carousel-inner")); 
?>

<?php 
		$size=count($dataArray);
		$n=0;
		foreach($dataArray as $i=>$data)
		{
			if($i==0){
				echo CHtml::tag("div",array("class"=>"active item"));
			}
			elseif($n==$this->coloumCount)
			{
				echo CHtml::tag("div",array("class"=>"item"));
				$n=0;
			}
			echo $owner->$render($this->itemView,array('data'=>$data));
			$n++;
			if($n==$this->coloumCount||$i==$size-1)
				echo CHtml::closeTag("div");
		}
		echo CHtml::closeTag("div");?>
		<!-- Carousel nav -->
		<?php echo CHtml::link("&lsaquo;",'#'.$this->id,array("class"=>"carousel-control left","data-slide"=>"prev")); ?>
		<!--    <a class="carousel-control left" href="#<?php echo $this->id; ?>" data-slide="prev">&lsaquo;</a>-->
		<?php echo CHtml::link("&rsaquo;",'#'.$this->id,array("class"=>"carousel-control right","data-slide"=>"next")); ?>
		<!--    <a class="carousel-control right" href="#<?php echo $this->id; ?>" data-slide="next">&rsaquo;</a>-->
		
		<?php
		echo CHtml::closeTag("div");
		if(isset($this->slide[0])&&$this->slide[0]==true)
		{
		Yii::app()->clientScript->registerScript($this->id,"$('#".$this->id."').carousel({
    interval: ".$timewait."
    })",CClientScript::POS_END);
    		}
	}
}
