


<?php
$data1 = $_POST['name1'];
$data2 = $_POST['name2'];
$data3 = $_POST['name3'];
$data4 = $_POST['name4'];
$data5 = $_POST['name5'];
$data6 = $_POST['name6'];
$data7 = $_POST['name7'];
$data8 = $_POST['name8'];
$data9 = isset($_POST['name9']) ? '('.$_POST['name9'].')' : '';
$data10 = $_POST['name10'];
$data11 = $_POST['name11'];
$data12 = $_POST['name12'];
$data13 = isset($_POST['name13']) ? '('.$_POST['name13'].')' : '';

$namefile = $_POST['namefile'] ?? '../../../images/image31.png';


$html = <<<EOD

 




    <table border="0" width="100%">
        <tr>

            <td  style="text-align:left;padding-top:70px;" width="250px" colspan="1" rowspan="1">
                   
                </td>

                <td valign="top"   colspan="2" rowspan="2" style="text-align:center">
                <p class="c9"><span class="span_image">
                <img alt="logo" src="../../../images/image32.jpg" class="image_logo" > </span></p>
            </td>
            <td valign="bottom"  style="text-align:right;padding-bottom:10px;"  width="125px" colspan="1" rowspan="1"></td>
              <td valign="top"  style="text-align:left;padding-top:80px;"  width="125px" colspan="1" rowspan="1">
             
             </td>
        </tr>
       
        <tr>
        <td  valign="top"   colspan="1" rowspan="1">
                <p ><span >เลขที่ &nbsp;$data1</span></p>
            </td>
        <td valign="top"  style="text-align:right;padding-bottom:10px;"  width="125px" colspan="1" rowspan="1"></td>
          <td valign="top"  style="text-align:left;"  width="125px" colspan="1" rowspan="1">
          <p ><span >$data2</span></p>
         </td>
    </tr>
  
    <tr>
    <td colspan="5" style="text-align:right;padding-top:-11px;"  rowspan="1">
    <span >$data3</span>
    </td>
    </tr>
    </table>
    <p style="margin-top:18px" class="setMarginTop1"></p>
<p class="indent25 setMarginTop0"></p>
$data4


<p  style="margin-top:26px" class="MsoNormal indent5 " >
  <span  class="c16"
    >ให้ไว้&nbsp;&nbsp;ณ
    &nbsp;&nbsp;วันที่
    &nbsp;&nbsp;$data5&nbsp;&nbsp;$data6
</span>
</p>

<p style="margin-top:32px" class="setMarginTop26pt"></p>






<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr >
  <td colspan="1" width="50%"> </td>

  <td valign="top"  align="left"   colspan="2">
    <p ><span class="c16" >$data7</span></p>
  </td>
</tr>

<tr >
  <td colspan="1" width="50%"> </td>

  <td valign="top"  align="center"   colspan="2">
    <p><span class="c16">$data9</span></p>
    <p><span class="c16">$data10</span></p>
    <p><span class="c16">$data11</span></p>
  </td>

</tr>
</table>





<p style="margin-top:32px" class="setMarginTop2"></p>


  





<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr >
  <td align="center"   colspan="1" width="30%">
  <p style="margin-button:24px" class="indent1"><span >
            <img alt="" src="$namefile" style="width: 4cm; height: 6cm; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" >
            </span>
            </p>
  </td>
  

  <td valign="top"  align="left"   colspan="1">
    <p ><span class="c16" ></span></p>
  </td>
</tr>

<tr>
<td align="center" style="padding-top:24px" >
<p class="setMarginTop0"><span class="c6">&nbsp; $data12</span> </p>
<p class="setMarginTop0"><span class="c6">&nbsp; $data13</span></p>
</td>
<td>
</td>
</tr>


</table>




<style type="text/css">
p {
  padding: 0pt;
  margin:0;

}
    table td,
    table th {
        padding: 0
    }

    .c9 {
        margin-left: -154pt;
        padding-top: 0pt;
        padding-bottom: 0pt;
        line-height: 1.0;
        orphans: 2;
        widows: 2;
        text-align: center;
        margin-right: -189.7pt
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




    .c10 {
        color: #000000;
        font-weight: 700;
        text-decoration: none;
        vertical-align: baseline;
        font-size: 16pt;
        font-family: "thsarabun";
        font-style: normal
    }




    .c6 {
        color: #000000;
        font-weight: 400;
        text-decoration: none;
        vertical-align: baseline;
        font-size: 15pt;
        font-family: "thsarabun";
        font-style: normal
    }


    .c24 {
        padding-top: 0pt;
        padding-bottom: 0pt;
        line-height: 1.0;
        orphans: 2;
        widows: 2;
        text-align: right
    }


    .c7_text_left {
        padding-top: 0pt;
        padding-bottom: 100pt;
        line-height: 1.1;
        orphans: 2;
        widows: 2;
        text-align: left
   
    }


    .c1 {
        padding-top: 0pt;
        padding-bottom: 10pt;
        line-height: 1.0;
        orphans: 2;
        widows: 2;
        text-align: left
    }

    .c11 {
        padding-top: 0pt;
        padding-bottom: 0pt;
        line-height: 1.0;
        orphans: 2;
        widows: 2;
        text-align: center
    }



    .c22 {
        font-size: 16pt;
        font-family: "thsarabun";
        font-weight: 400
    }



    .c5 {
        height: 11pt
    }


    html,body{
        font-size: 16pt;
        font-family: "thsarabun";
        line-height: 1.1;
      }

    .center {
        text-align: center;
      }

.c16 {
    font-size: 16pt;
    font-family: "thsarabun";
    font-weight: 400;
  }
  p{
    padding-top: 0pt;
    padding-bottom: 0pt;
    margin-bottom: 0pt;
  }
  span{
    padding-top: 0pt;
    padding-bottom: 0pt;
    margin-bottom: 0pt;
    margin-top: 0pt;

  }
  .setMarginTop0{
    margin-top: 0pt;
  }

  .setMarginBottom0{
    margin-bottom: 0pt;
    padding-bottom: 0pt;

  }

  .setMarginTop1{
    line-height: 1.1;
    font-size: 16pt;

  }


  .setMarginTop2{
    line-height: 2.2;
    font-size: 16pt;
    margin-bottom: 0pt;
  }
  .setMarginTop26pt{
    line-height: 2.8pt;
    font-size: 16pt;
    margin-bottom: 0pt;
  }

  .setMarginTop16pt{
    line-height: 1.8pt;
    font-size: 16pt;
    margin-bottom: 0pt;
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
   font-size:16.0pt;
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


   .indent1{
    margin-top: 0cm;
    margin-right: 0cm;
    margin-bottom: 0cm;
    margin-left: 0cm;
    text-indent: 1cm;
    line-height: 1.1;
   }


   .indent8{
    margin-top: 0cm;
    margin-right: 54.4pt;
    margin-bottom: 0cm;
    margin-left: 0cm;
    text-indent: 8cm;
    line-height: 1.1;
   }


   .indent5{
    margin-top: 16pt;
    margin-right: 0cm;
    margin-bottom: 0cm;
    margin-left: 0cm;
    text-indent: 5cm;
    line-height: 1.1;
    tab-stops: center 339.05pt;
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

  .indent25 {
    text-indent: 2.5cm;
    padding-bottom: 0pt;
    text-align: justify;
    orphans: 2;
    widows: 2;

  }



</style>

EOD;

?>

