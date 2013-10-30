<!--页头公共资源引入-->
<? include("../common/head.php");?>
<style type="text/css">
	.wf-main{
	    position: relative;
	    margin: 0 auto;
	    width: 990px;
	    overflow: hidden;
	}
	.wf-main .wf-cld{
	    position: absolute;
	    margin-bottom: 10px;
	    padding:5px 8px;
	    width: 214px;
	    left: -9999px;
	    top: -9999px;
	    line-height:18px;
	    border: 1px solid #999;
	    border-radius: 4px;
	    background-color: #ccc;
	    overflow: hidden;
	}
	.wf-cld .inner{
	    position: absolute;
	    left: -9999px;
	    top: -9999px;
	    margin-bottom: 5px;
	    width: 73px;
	    overflow: hidden;
	    border: 1px solid #f00;
	    border-radius: 3px;
	}
	.wf-cld .title{
	    margin: 0 0 5px;
	    padding: 5px;
	    width: 63px;
	    color: #f00;
	    font-size: 14px;
	}
	</style>
<!--
    需要测试的dom结构，注意，最外层<div class="J_TScriptedModule" data-componentid="uniqueSign"> 的class和为属性不可修改
    用户的javascript理论上只可以作用到这个dom下面，不可以"越界"
-->
<div class="J_TScriptedModule" data-componentid="uniqueSign">
		<div class="wf-main" id="wf-main">
			<div class="wf-cld"><h2 style="color:#f50">1、瀑布流</h2></div>
			<div class="wf-cld">2<br>2</div>
			<div class="wf-cld">3<br>4<br>4</div>
			<div class="wf-cld">4<br>4<br>4<br>4</div>
			<div class="wf-cld">5<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">6<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">7<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">8<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">9<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">10<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">18<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">19<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">20<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld" id="wf-inner">
				<h2 class="inner title">21、内部瀑布流</h2>
				<div class="inner">21-1<br>1</div>
				<div class="inner">21-2</div>
				<div class="inner">21-3</div>
				<div class="inner">21-4</div>
				<div class="inner">21-5<br></div>
				<div class="inner">21-6</div>
				<div class="inner">21-7</div>
				<div class="inner">21-8</div>
				<div class="inner">21-9</div>
			</div>
			<div class="wf-cld">22<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">23<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">24<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">11<br>2<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">12<br>2<br>2<br>3<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">13<br>4<br>4<br>3<br>3<br>1<br>2<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">14<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">15<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">16<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>
			<div class="wf-cld">17<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4<br>4</div>	
		</div>
</div>

<!--模块初始化的包配置，都很熟悉了-->
<script type="text/javascript">

     cajaConfig={//配置下你需要引入的模块名称，最后会被use到
         modules:"openjs/kissy/1.3.0/core,openjs/kissy/gallery/fluidLayout/1.0/index"
     }

</script>

<!--这里是将自己的js让服务端编译一下，配置下服务端的php路径和自己的js即可，注意路径-->
<?
    $jsurl="testcase/gallery/fluidLayout.js";//注意路径
    $jsservice="../common/cajoled_service.php";//注意路径
    include("../common/foot.php");//引入foot
?>