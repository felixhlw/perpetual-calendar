<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>綜合練習-月曆製作</title>
    <style>
    *{
        list-style-type:none;
        font-family: 'Courier New', Courier, monospace, 微軟正黑體;
        font-size: 20px; 
    }
    body{
        background: #55aaff;
    }
    .bg{
        background:#fff000;
        font-weight: bolder;
    }
    .hd{
        background:#ffe5e5;
        font-weight: 600;
    }
    .sd{
        font-size: 14px !important;
        font-weight: bold;
        color:red;
    }
    .asd{
        font-size: 14px !important;
        font-weight: bold;
        color:green;
        z-index: 10;
    }
    #week{
        background-color: #dde8f0;
    }
    hr.new1 {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.55), rgba(0,0,0,0));
    }



    div{
        padding: 0px;
        margin: 0 auto;
        margin-bottom: 4px;
        padding-top: 1px;
        text-align: center;
        box-sizing: border-box;
        border-radius: 0  0px 20px 20px;
    }
    .tshadow{
        padding: 15px;
        border-radius: 20px;
        background: white;
        box-shadow: 2px 6px 16px rgba(0, 0, 0, 0.3);       
    }

    table{
        width: 100%;
        border:2px solid #aaa;
        border-collapse: separate;
        border-spacing: 0px;
        border-radius: 20px;
        text-align: center;
        background: white;
    }    
    tr:first-child {
      font-weight: bolder;                
      color: #999999;
   }
    td{
        width: 14.28%;
        height: 45px;
        padding: 6px;
        border:1px solid #ccc;
    }
    tr:first-child td:first-child{
        border-top-left-radius: 20px;
    }
    tr:last-child td:first-child{
        border-bottom-left-radius: 20px;
    }        
    tr:first-child td:last-child{
    border-top-right-radius: 20px;
    }
    tr:last-child td:last-child{
    border-bottom-right-radius: 20px;
    }
    .title{
        margin-top: -2px;
        font-size: 25px;
        font-weight: bolder;
        color: white;
    }
    body{
        margin-top: 0;
    }

    .center{
        width:500px;
        height:210px; 
        margin: 0 auto;
        padding: 1px 0 0 1px; 
        background-color: whitesmoke;
        box-shadow: 2px 6px 16px rgba(0, 0, 0, 0.3); 
    }
    .num{
        width:30%;
        height: 20px;
        padding: 2px 0 0 0;
        font-size: 15px;
        
    }
    select{
        width: 15%;
        height: 26px;
        padding: 2px 0 0 0;
        margin: 0 0 2px 0;
        font-size: 15px;
    }
    
    .button{
        margin: 0 3px 8px 3px;
        width:27%;
        height: 30px;
        padding: 0 1px 0 1px;
        color: #555;
        font-weight:600;
        border-radius: 5px;
        font-size: 15px;
        text-align: center;
        background-color: #dde8f0;
        filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.3));
    }
    .button:hover{
        color: black;
        font-weight: 700;
        background-color: #eeeeee; 
        border:2px #003C9D solid;
        cursor: pointer;
        transform: scale(1.1);
        transition: all 0.2s ease 0s;
    }
    .button:active{
        border:2px #ffff00 solid ;
        transform: scale(1.15);
        transition: all 0.2s ease 0s;
    }

    .button2{
        margin: 0 3px 8px 3px;
        width:27%;
        height: 30px;
        padding: 0 1px 0 1px;
        color: #555;
        font-weight:600;
        border-radius: 5px;
        font-size: 15px;
        text-align: center;
        background-color: #9af5f5;
        filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.3));
    }
    .button2:hover{
        color: black;
        font-weight: 700;
        background-color: #9efeee; 
        border:2px #003C9D solid;
        cursor: pointer;
        transform: scale(1.1);
        transition: all 0.2s ease 0s;
    }
    .button2:active{
        border:2px #ffff00 solid;
        background-color: #25f0fa;
        transform: scale(1.15);
        transition: all 0.2s ease 0s;
    }
    input[type="submit"]{
        width: 27%;
        height: 35px;
        background-color: orange;
        color: white;
        font-size:15px;
        font-weight:bold;
        text-align: center;
        line-height: 35px;
        border-radius: 5px;
        position: relative;
/*         overflow: hidden; */
        cursor: pointer;
        filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.3));
        transition: all 0.2s ease 0s;
        z-index: 10;
    }
    input[type="submit"]::after{
        content: "";
        position: absolute;
        width: 1500px;
        height:1500px;
        background-color: red;
        filter: blur(2px);
/*         opacity: 0.25; */
        top: 500px;
        left: 300px; 
/*         transition: left 0.5s;
        transform: rotate(15deg); */
        z-index: 11;
        
    }
    input[type="submit"]:hover::after{
    /*     left:150px; */
    

    } 
    input[type="submit"]:hover{
        border:2px #ffffff solid;
        transform: scale(1.1);
        transition: all 0.2s ease 0s;
    }    
    input[type="submit"]:active {
        background: orangered;
        transform: scale(1.15);
        transition: all 0.2s ease 0s;

    }

    .descript{ 
        font-size: 15px;
        font-weight: 600;
    }
    .descript2{
        font-size: 15px;
        font-weight: 600;
        color: white;
    }
    .txt{
        margin-bottom:8px; 
        font-size: 15px;
        font-weight: 400;   
        color: white;             
    }
    .arrow{
        color: gray;
    }
    </style>
    </head>
<body>
    <div class="center">
      
<!-- <ol>
計畫:
<li>1.決定表格格式->基本html程式碼</li>
<li>2.是否要有抬頭列->寫死或程式中產生</li>
<li>3.決定月份起始格子位置/月份結束的格子位置</li>
<li>4.決定日期呈現的方式</li>
<li>5.額外資訊->月份日數</li>
</ol>
<ul>
執行步驟:
<li>1.只畫表格出來</li>
<li>2.加上抬頭</li>
<li>3.用迴圈簡化表格的產生</li>
<li>4.嘗試填入內容</li>
<li>5.取得第一周開始的日期/取得月日數/取得結束日的星期</li>
</ul> -->
<?php
$year="";
$month="";
$day="";
if (!empty($_GET['year']) || !empty($_GET['month']) || !empty($_GET['day'])){
    if (!empty($_GET['year']) && !empty($_GET['month']) && !empty($_GET['day'])){
        $year=$_GET['year'];
        $month=$_GET['month'];
        $day=$_GET['day'];
    }elseif(!empty($_GET['year']) && !empty($_GET['month'])){
        $year=$_GET['year'];
        $month=$_GET['month'];
        $day=date('d');   
    }elseif(!empty($_GET['year']) && !empty($_GET['day'])){
        $year=$_GET['year'];
        $month=date('m');
        $day=$_GET['day'];    
    }elseif(!empty($_GET['month']) && !empty($_GET['day'])){
        $year=date('Y');
        $month=$_GET['month'];
        $day=$_GET['day'];                         
    }elseif(!empty($_GET['year'])){
        $year=$_GET['year'];
        $month=date('m');
        $day=date('d');
    }elseif(!empty($_GET['month'])){
        $year=date('Y');
        $month=$_GET['month'];
        $day=date('d');   
    }else{
        $year=date('Y');
        $month=date('m');
        $day=$_GET['datey'];                 

     

    }
}else {
    $year=date('Y');
    $day=date('d');
    if (isset($_GET['month']) && $_GET['month']==0) {
        $month=12;
        
    }else{
        $month=date('m');
    }
}
    $sd=[  //有放假的節日
        [1=>"元旦"],
        [28=>"二二八"],
        [],
        [4=>"婦幼節",5=>"清明節"],
        [1=>"勞動節"],
        [],
        [],
        [],
        [],
        [10=>"國慶日"],
        [],
        []
        
    ];
    $asd=[  //沒放假的紀念日
        [23=>"自由日"],
        [14=>"情人節"],
        [8=>"婦女節",12=>"植樹節",29=>"青年節"],
        [1=>"愚人節"],
        [],
        [],
        [],
        [],
        [3=>"軍人節",28=>"教師節"],
        [25=>"光復節",31=>"萬聖節"],
        [11=>"雙十一購物節"],
        [12=>"雙十二沒啥節",25=>"聖誕節"]
        
    ];
    //$year=date('Y');
    $week=["日","一","二","三","四","五","六"];
    $today=date("Y-m-d");

    echo "<div>";

    echo "<h1>PERPETUAL CALENDAR<hr class='new1'></h1>";
    /* echo "<h1> 今天是".$today."<hr class='new1'></h1>"; */
    //echo "<br>".$day;
    //$todayDays=date("d");
    //echo "<br>";
    //echo $todayDays;
    //echo "<br>";
    $start="$year-$month-01";
    $startDay=date("w",strtotime($start));
    $days=date("t",strtotime($start));
    $endDay=date("w",strtotime("$year-$month-$days"));
    //$tw=date("w",strtotime("$year-$month-$todayDays"));
    $dd=date("w",strtotime("$year-$month-$day"));
/*     echo "今天是周".$week[$tw]; */
?>  

<form action="?" method="GET">

<?php
if (($month-1)>0) {
?>

    <a href="?day=<?=$day;?>&month=<?=($month-1);?>&year=<?=$year;?>">
<?php
    echo "<input type='button' class='button' name='' value='◀ 上一月 '>";
    echo "</a>"; 
    }else {
?> 
    <a href="?day=<?=$day;?>&month=<?=12;?>&year=<?=($year-1);?>">
<?php
    echo "<input type='button' class='button' name='' value='◀ 上一月 '>";
    echo "</a>";
    }
?>

<a href="?day=<?=date('d');?>&month=<?=date('m');?>&year=<?=date('Y');?>">
<input type="button" class='button2' name='year' value='今天日期'></a>

<?php

    if (($month+1)<=12) {
?>    
     
        <a href="?day=<?=$day;?>&month=<?=($month+1);?>&year=<?=$year;?>">
<?php
    echo "<input type='button' class='button' name='' value=' 下一月 ▶ '>";
    echo "</a></a>";
    }else {
?>
        
        <a href="?day=<?=$day;?>&month=1&year=<?=($year+1);?>">

<?php            
    echo "<input type='button' class='button' name='' value=' 下一月 ▶ '>";
    echo "</a></a>";
}
?>

<div class='descript'>可輸入想查詢的年、月及日期:</div>
 <div><input class='num' type="number" name="year" value="" placeholder=" 西元"><span class='descript'> 年&nbsp;</span>
<!--  <input type="range" name="month" id="monthInputId" value="<?=$month;?>" min="1" max="12" oninput="monthOutputId.value = monthInputId.value">
   <output name="month" id="monthOutputId"><?=$month;?></output> -->
   <select name="month" id="">
            <option value="1"> 1</option>
            <option value="2"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            <option value="5"> 5</option>
            <option value="6"> 6</option>
            <option value="7"> 7</option>
            <option value="8"> 8</option>
            <option value="9"> 9</option>
            <option value="10"> 10</option>
            <option value="11"> 11</option>
            <option value="12"> 12</option> 
</select><span class='descript'> 月</span>
<select name="day" id="" > 
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option> 
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>   
            <option value="25">25</option>   
            <option value="26">26</option>   
            <option value="27">27</option>   
            <option value="28">28</option>   
            <option value="29">29</option>   
            <option value="30">30</option> 
            <option value="31">31</option> 
</select><span class='descript'> 日&nbsp;</span>
<!-- <input class='num' type="number" name="day" value="" placeholder=" 日期"><span class='descript'> 日&nbsp;</span> -->
</div>
<div>
 <input type="submit"  value="查詢">
 </div>
    </form>  
</div> 
<br>
<span class='descript2'>查詢結果:</span>
<?php
    echo "<span class='txt'>".$month."月有".$days."天</span>";
?>
<div class='title'>
    <?php
            if ($day<=$days) { 
                echo $year."年&nbsp;";
                echo $month."月"; 
                echo $day."日 "; 
                echo "星期".$week[$dd]."<br>";
                //echo $day;
            }else {
                $day=$days;
                echo $year."&nbsp;";
                echo $month."月"; 
                echo $day."日 "; 
                echo "星期".$week[$dd]."<br>";
                //echo $days;
            }

echo"</div>";
echo"<div class='txt'>";
        echo $month."月的第一天是:星期".$week[$startDay];
        echo "&emsp;/ ";
/*         echo $month."月有".$days."天";
        echo "<br>"; */
        echo $month."月".$days."日是周".$week[$endDay];
    ?>
</div>    
<div class="tshadow">
<table>
    <tr id="week">
        <td class='hd'>日</td>
        <td >一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td> 
        <td class='hd'>六</td>
    </tr>
<?php
for($i=0;$i<6;$i++){

    echo "<tr>";

    for($j=0;$j<7;$j++){

        $count=$i*7+$j+1;
         
        if(!empty($sd[$month-1][$count-$startDay])){
            $str=$sd[$month-1][$count-$startDay]; //放假節日的部分
             //$str="";
           /*  echo "<td class='hd'></td>"; */
        }elseif(!empty($asd[$month-1][$count-$startDay])){ 
            $astr=$asd[$month-1][$count-$startDay];   //不放假的紀念日
            
        }else{
            $str="";
            $astr="";
        }
   
        if($i==0){ //處理第一列

            if($j<$startDay){ //開始日之前的空格處理
                 
                if($j == 0 || $j == 6){
                    echo "<td class='hd'></td>"; //週末使用粉色色塊

                }else{
                    echo "<td></td>";
                }                    

            }else{ //開始日之後
                
                if(($count-$startDay)==$day){
                    $astr="";
                     echo "<td class='bg'>".($count-$startDay)."<span class='sd'><br>".$str."</span><span class='asd'>".$astr."</span></td>";   

                    }elseif(($j == 0 && !empty($asd[$month-1][$count-$startDay])) || ($j == 6 && !empty($asd[$month-1][$count-$startDay]))){  
                        echo "<td class='hd'><span class='asd'><br>".$astr."</span></td>";   //不放假的紀念日     

                    }elseif($j == 0 || $j == 6 ||!empty($sd[$month-1][$count-$startDay])){ //放假日的部分
                    echo "<td class='hd'>".($count-$startDay)."<span class='sd'><br>".$str."</span></td>";

              
                }else{
                    echo "<td>".($count-$startDay)."<span class='sd'>".$str."</span><span class='asd'><br>".$astr."</td>";    
                }
            }
        }else{ //處理第二列之後的

            if(($count-$startDay)<=$days){
                if(($count-$startDay)==$day){
                    echo "<td class='bg'>".($count-$startDay)."<span class='sd'><br>".$str."</span><span class='asd'>".$astr."</span></td>";
                
                }elseif(($j == 0 && !empty($asd[$month-1][$count-$startDay])) || ($j == 6 && !empty($asd[$month-1][$count-$startDay]))){  
                    echo "<td class='hd'>".($count-$startDay)."<span class='asd'><br>".$astr."</span></td>";     //不放假的紀念日      

                }elseif($j == 0 || $j == 6 || !empty($sd[$month-1][$count-$startDay])){ //放假日的部分
                    echo "<td class='hd'>".($count-$startDay)."<span class='sd'><br>".$str."</span></td>";
                
           
  
                }else{
                    echo "<td>".($count-$startDay)."<span class='asd'><br>".$astr."</span></td>";    
                }

            }elseif($j == 0 || $j == 6){ //月尾之後的空格處理
                echo "<td class='hd'>&emsp;</td>";  

            }else{
                echo "<td>&emsp;</td>";    
            }
        }
   }
    echo "</tr>";
}

?>
   
</table>
</div>
</div>
</body>
</html>