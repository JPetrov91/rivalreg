<?php

include_once('connection.php');

//$Connect = mysqli_connect(HOST, USER, PASSWORD, DB);
//
//mysqli_query($Connect,"SET NAMES utf8");
//if(!$Connect) exit('Ошибка подключения');

$userId = $_SESSION['id'];

$Row = mysqli_fetch_assoc( mysqli_query($connection, "SELECT * FROM `users` WHERE `id` = '$userId' "));



?>


<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide();
		
		
		
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#popup1").hide();
    }
	
	
</script>


<script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHideState();
    });
    //Функция отображения PopUp
    function PopUpShowState(){
        $("#popup2").show();
    }
    //Функция скрытия PopUp
    function PopUpHideState(){
        $("#popup2").hide();
    }
</script>


  

<script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHideStrong();

//Функция отображения PopUp

$('#strong').click(function PopUpShowState(){
   $("#popup3").show();
});  
    
    //Функция скрытия PopUp
    function PopUpHideState(){
        $("#popup3").hide();
    }
</script>


<!DOCTYPE html>
<html>
<head>
	<title>Rival</title>
	<link href="style.css" rel="stylesheet">
        <meta charset="utf-8">
 <link rel="shortcut icon" href="/img/favicons.png" type="image/png">

</head>
<body>


        
<?php include("menu.php"); ?>

<div class="b-popup" id="popup2">
       
<div class="margin_popup_state"> <div class="white_slide_title_state">Агарти</div></div>


    <div class="b-popup-content">

   <div class="slide_profile_photo">
         <div class="slide_profile_photo_img_state"> </div> 

    <div class="button_blue">Пожертвовать</div>
    <div class="button_blue">Разрешение на работу</div>

    <div class="slide_left_info">
     <span>2.161.630.123.521 R</span><br>
     <span>6.711.576.790.832 G</span><br> 
     <span>81.252.217 барр.</span><br> 
     <span>989.149.093 кг</span><br> 
       <a href="javascript:PopUpHideState()">Hide popup</a>
 
    </div>


   </div> 
    <div class="region_scroll"> 
       
       <div class="slide_profile_data_left"><span class="slide_text">Всего жителей:</span></div>   <div class="slide_profile_data"><span class="slide_text ">898</span></div> 

       <div class="slide_profile_data_left"><span class="slide_text">Прописано:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Число партий:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Прописано:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Число фабрик:</span></div>   <div class="slide_profile_data"><span class="slide_text ">8</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Число регионов:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Границы:</span></div>   <div class="slide_profile_data"><span class="slide_text ">открыты</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Прописка для работы:</span></div>   <div class="slide_profile_data"><span class="slide_text ">не требуется</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Прописка:</span></div>   <div class="slide_profile_data"><span class="slide_text ">выдается лидером</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Дата основания:</span></div>   <div class="slide_profile_data"><span class="slide_text ">28 Ноября 2016 23:02</span></div> 








    </div>

</div>

</div>




<div class="b-popup" id="popup1">

<div class="margin_popup"> <div class="white_slide_title">Государство Агарти: регион Арканзас и еще 0</div></div>


    <div class="b-popup-content">

   <div class="slide_profile_photo">
         <div class="slide_profile_photo_img"> </div> 
    <div class="button_blue">Запросить прописку</div>
    <div class="slide_left_info">
     <span>Военная академия: 229</span><br>
     <span>Госпиталь: 640</span><br> 
     <span>Военная база: 400</span><br> 
     <span>Школа: 310</span><br> 
     <span>Электростанция: 640</span><br> 
       <a href="javascript:PopUpHide()">Hide popup</a>
 
    </div>


   </div> 
    <div class="region_scroll"> 
       
       <div class="slide_profile_data_left"><span class="slide_text">Место в рейтинге:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68/898</span></div> 

       <div class="slide_profile_data_left"><span class="slide_text">Всего жителей:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Уровень:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Прописано:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Запасы золота:</span></div>   <div class="slide_profile_data"><span class="slide_text ">898</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Запасы нефти:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68/898</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Запасы руды:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68/898</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Запасы нефти:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68/898</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Индекс медицины:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68/898</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Военный индекс:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68/898</span></div> 
       <div class="slide_profile_data_left"><span class="slide_text">Индекс образования:</span></div>   <div class="slide_profile_data"><span class="slide_text ">68/898</span></div> 








    </div>

</div>
</div>



<div class="main">

	<div class="left_main">
	
	<div class="index_region">
		<div class="region_info">
			<div class="region_block reg1">
				<div class="Earth_list">Мир</div>
			</div>
			<div class="region_block reg2">
				<div class="Earth_list"><a href="javascript:PopUpShowState()">Государство</a></div>
			</div>
   			<div class="region_block reg3">
   				<div class="Earth_list">    
<a href="javascript:PopUpShow()"><? echo $Row[currentRegionID]?></a></div>
                        </div>
   	

		      

	</div>
		<div class="region_img">
			<div></div>
		</div>
	</div>
	<div class="war_index">
		<div class="war_index_list1">
			<div class="list1">
</div>
		</div>
		<div class="war_index_list2"></div>
	</div>



	
	<div class="index_perks">
		<div class="index_perks_list">
			<div class="skill_bar perk_energy perk_icon">Энергия    
			<span class="perk_right "><? 
echo $Row[current_energy];?> </span>

</div>
 			<div class="skill_bar  perk_stairs perk_icon">Уровень
<span class="perk_right "><? 
echo $Row[level];


			?></span>
</div>
			<div class="skill_bar  perk_exp perk_icon">Опыт
<span class="perk_right "><? 
echo $Row[experience];		?>
</div>
			<div class="skill_bar  perk_perks_1 perk_icon" id="strong">Сила
<span class="perk_right "><? 
echo $Row[strength];		?></span>



</div>
			<div class="skill_bar  perk_perks_2 perk_icon">Знания
<span class="perk_right "><? 
echo $Row[knowledge];		?></span>

</div>
			<div class="skill_bar  perk_perks_3 perk_icon">Выносливость
<span class="perk_right "><? 
echo $Row[endurance];


			?></span>

</div>

		</div>
		<div class="index_chat"></div>
	</div>
    
    </div>

     <div class="sidebar">
     	<div class="index_ads"></div>
     	<div class="index_soldier"></div>
     	<div class="index_parliament"></div>

     </div>
</div>
</body>
</html>