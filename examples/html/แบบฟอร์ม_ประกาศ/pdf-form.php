

<?php 
$data0 = $_POST['name0'];
$data1 = $_POST['name1'];
$data2 = $_POST['name2'];
$data3 = $_POST['name3'];
$data4 = $_POST['name4'];
$data5 = $_POST['name5'];
$data6 = $_POST['name6'];
$data7 = $_POST['name7'] ?? '';
$data8 = isset($_POST['name8']) ? '('.$_POST['name8'].')' : '';
$data9 = isset($_POST['name9']) ? $_POST['name9'] : '';
$data10 = isset($_POST['name10']) ? $_POST['name10'] : '';

$html = <<<EOD


<table  border="0" width="100%">
    <tr>
        <td class="" colspan="1" rowspan="1"></td>
        <td class=""  colspan="1" rowspan="1" style="text-align:center">
            <p class="center">
                <span
                    class="span_image">
                    <img alt="logo"
                        src="../../../images/image1.jpg"
                        class="image_logo" /></span>
            </p>
        </td>
        <td class="" colspan="1" rowspan="1"></td>
    </tr>
</table>
<p style="margin-top:24px" class="setMarginTop1"></p>
<p class="center setMarginTop0 setMarginBottom0">
    <span class="c4"> $data0</span>
</p>
<p class="center setMarginTop0 setMarginBottom0">
    <span class="c4">เรื่อง&nbsp;&nbsp;$data1</span>
</p>
<p class="center setMarginTop0 setMarginBottom0">
    <span class="">---------------------------------------------------------</span>
</p>
<p style="margin-top:16px" class="setMarginTop1"></p>

$data2


<p style="margin-top:6px" class="indent25 setMarginTop1">
    <span class="c8">ทั้งนี้&nbsp;&nbsp;ตั้งแต่&nbsp;$data3</span>
</p>


<p style="margin-top:16px" class="MsoNormal indent5 " >
  <span  class="c16"
    >ประกาศ&nbsp;&nbsp;ณ
    &nbsp;&nbsp;วันที่
    &nbsp;&nbsp;$data4
</span>
</p>

<p style="margin-top:40px" ></p>




<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr >
  <td colspan="1" width="50%"> </td>

  <td valign="top"  align="left"   colspan="2">
    <p ><span class="c16" >$data6</span></p>
  </td>
</tr>

<tr >
  <td colspan="1" width="50%"> </td>

  <td valign="top"  align="center"   colspan="2">
    <p><span class="c16">$data8</span></p>
    <p><span class="c16">$data9</span></p>
    <p><span class="c16">$data10</span></p>
  </td>

</tr>
</table>

<style>


html,body{
  font-size: 16pt;
  font-family: "thsarabun";
  line-height: 1.1;
}

.span_image{
  overflow: hidden;
  display: inline-block;
  margin: 0px 0px;
  border: 0px solid #000000;
  transform: rotate(0rad) translateZ(0px);
  -webkit-transform: rotate(0rad) translateZ(0px);

}
.image_logo{

  height: 113.38586666666666px;
                  margin-left: -0px;
                  margin-top: -0px;
                  transform: rotate(0rad) translateZ(0px);
                  -webkit-transform: rotate(0rad) translateZ(0px);
}


table td,
table th.span {
  padding: 0;
}


br {
  display: block;
  margin-bottom: 0px;
  font-size:16px;
  line-height: 1.1px;
}
br:before {
  display: block;
  margin-top: 0px;
  content: "";
}
br:after {
  content: ".";
  visibility: hidden;
  display: block;
}



.c2 {
  padding-top: 0pt;
  text-indent: 113.4pt;
  padding-bottom: 0pt;
  
  orphans: 2;
  widows: 2;
  text-align: left;
  margin-right: 54.4pt;
  height: 11pt;
}
.c13 {
  padding-top: 0pt;
  text-indent: 226.8pt;
  padding-bottom: 0pt;
  
  orphans: 2;
  widows: 2;
  text-align: left;
  margin-right: 54.4pt;
}
.c8 {
  color: #000000;
  font-weight: 400;
  text-decoration: none;
  vertical-align: baseline;
  font-size: 16pt;
  font-family: "thsarabun";
  font-style: normal;
}

.c4 {
  color: #000000;
  font-weight: 700;
  text-decoration: none;
  vertical-align: baseline;
  font-size: 16pt;
  font-family: "thsarabun";
  font-style: normal;
}
.indent25 {
  text-indent: 2.5cm;
  padding-bottom: 0pt;
  text-align: justify;
  orphans: 2;
  widows: 2;
}
.c14 {
  padding-top: 0pt;
  padding-bottom: 0pt;
  
  orphans: 2;
  widows: 2;
  text-align: left;
  height: 11pt;
}
.center {
  text-align: center;
}

.c5 {
  border-spacing: 0;
  border-collapse: collapse;
  margin-right: auto;
}

.c9 {
  font-size: 16pt;
  font-family: "thsarabun";
  font-weight: 400;
}
.c11 {
  text-indent: 35.5pt;
}



.c17 {
  height: 0pt;
}




.c16 {
  font-size: 16pt;
  font-family: "thsarabun";
  font-weight: 400;
}

p {
  padding: 0pt;
  margin:0;

}


span{
  padding-top: 0pt;
  padding-bottom: 0pt;
  margin-bottom: 0pt;

}
.setMarginTop0{
  margin-top: 0pt;
  padding-bottom: 0pt;
}

.setMarginBottom0{
  margin-bottom: 0pt;
  padding-bottom: 0pt;
  
}

.setMarginTop1{
  line-height: 1.1;
  font-size: 16pt;

}

.setMarginTop16pt{
  margin-top:50pt;
  line-height: 1.7;
  font-size: 16pt;

}



.setMarginTop2{
  line-height: 2.2;
  font-size: 16pt;

}
.setMarginTop26pt{
  line-height: 2.8pt;
  font-size: 16pt;

}



p.MsoNormal{mso-style-unhide:no;
 mso-style-qformat:yes;
 mso-style-parent:"";
 margin-top:0cm;
 margin-right:0cm;
 margin-bottom:10.0pt;
 margin-left:0cm;
 line-height:115%;
 mso-pagination:widow-orphan;
 font-size:16pt;
 mso-bidi-font-size:16.0pt;
 font-family:"thsarabun",sans-serif;
 mso-ascii-font-family:thsarabun;
 mso-ascii-theme-font:minor-latin;
 mso-fareast-font-family:thsarabun;
 mso-fareast-theme-font:minor-latin;
 mso-hansi-font-family:thsarabun;
 mso-hansi-theme-font:minor-latin;
 mso-bidi-font-family:"thsarabun";
 mso-bidi-theme-font:minor-bidi;
 mso-ansi-language:EN-US;}



 .indent8{
  margin-top: 0cm;
  margin-right: 54.4pt;
  margin-bottom: 0cm;
  margin-left: 0cm;
  text-indent: 8cm;
  
 }


 .indent5{
  margin-top: 16pt;
  margin-right: 0cm;
  margin-bottom: 0cm;
  margin-left: 0cm;
  text-indent: 5cm;
  
  tab-stops: center 339.05pt;
 }

</style>
EOD;



?>

