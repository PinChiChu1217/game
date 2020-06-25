<?php

require 'config.php'

 ?>

<html>
<head>
  <title>標準種植流程輸入畫面</title>
  <!-- 這裡是 HTML 語法的 header 頁首引用宣告區 -->
  <!-- 這裡是 HTML 語法的 header 頁首引用宣告區 -->
  <!-- 這裡是 HTML 語法的 header 頁首引用宣告區 -->
</head>
<body><center>
  <BR><B><i><H1>標準種植流程輸入畫面</H1></I></B>

<form action=insert.php method="post">
  <div>

    <label for ="fruitname">選擇果品：<label>
    <select name = "productID">
    <option value="BN03">南蕉</option>
    <option value="BN01">北蕉</option>

  </select>

 </div>

  <div>
    <label for ="Addprocessday">輸入日期：<label>
    <input type="date" name="date">


  <div>
    <label for ="class">選擇農作項目：<label>
      <select name="class">
        <option value="病蟲害防治">病蟲害防治</option>
                  <option value="栽培管理">栽培管理</option>
          　      <option value="肥料施用">肥料施用</option>
          　      <option value="採收與採後處理">採收與採後處理</option>
                 <option value="其他">其他</option>
                 <option value="定植">定植</option>
                 <option value="種苗準備">種苗準備</option>
        </select>
  </div>

  <div>
     <label for ="name">選擇項目內容：<label>
     <select name='name'>
        <option>項目內容</option>
        <option value="Taipei">台北</option>
        <option value="Taoyuan">桃園</option>
　      <option value="Hsinchu">新竹</option>
　      <option value="Miaoli">苗栗</option>
     </select>
  </div>

  <div>
    <label for ="method">選擇施作方式：<label>
     <select name='method'>
        <option>施作方式</option>
        <option value="Taipei">台北</option>
        <option value="Taoyuan">桃園</option>
　      <option value="Hsinchu">新竹</option>
　      <option value="Miaoli">苗栗</option>
     </select>
  </div>


  <div>
   <label for ="detail">輸入份量（以0.5公頃為單位）：<label>
   <input type="text" name='detail'>
   </div>
<input type ="submit" value="送出">

</form>
  <!-- 這裏通常會放 footer 頁尾的資料 -->
  <!-- 這裏通常會放 footer 頁尾的資料 -->  <!-- 這裏通常會放 footer 頁尾的資料 -->
</body>
</html>
