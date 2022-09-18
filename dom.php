<?php
$html='
<html lang="en" class="no-js"><head><style>.panel{}.wd{width:40px;height:40px}.tbl,.tbl tr,.tbl th,.tbl td{border: 0;text-align:left; padding:3px;}.mh td{min-height: 30px;}th, td{padding: 5px; text-align: left;}.td{width:400px;}.recept-head{padding: 5px; margin-bottom: 8px}.recept-head p{font-weight: bold; margin: 0px;}.recept-head h1{text-align: center; padding-top: 8px; width: 100%x; font-size: 30px; margin: 0 auto;}.student_details{padding: 0;}.title1{color: #ffffff; margin: 0px;padding-bottom: 5px;padding-top: 5px;margin-bottom: 10px;font-size: 18px;background-color: #1c326c;padding: 5px 10px;border-top-left-radius: 3px;border-top-right-radius: 3px;}.page_break { page-break-before: always; }.student_details h2{text-decoration: underline; font-size: 22px; margin: 0;}.student_details table{margin: 5px 0 8px 0;}.footer_statement{padding: 15px 0; border-bottom: 1px solid #000;}.footer_statement p{width: 85%; font-style: italic; font-size: 15px; margin: 0 auto;}table, tr, td{border: 1px solid black; border-collapse: collapse;}th, td{padding: 5px; text-align: left;}.tbl1 td{height:20px;}</style></head><body> <div class="container-fluid" style="padding:0;"> <div class="container"> 
           
           <div>
    <table style="width:100%;">
    <tbody>
        <tr>
            <td style="border: 1px solid #fff;height:50px;"><p><img width="250" src="" alt="image"></p></td>
            <td style="border: 1px solid #fff;"><table style="float: right;border-collapse:collapse;border:none;width:100%;">
    <tbody>
        <tr>
            <td>
                Mode of study
            </td>
            <td>
 
            </td>
        </tr>
        <tr>
            <td>
                VTD No.
            </td>
            <td>
 
            </td>
        </tr>
        <tr>
            <td>
                Register No.
            </td>
            <td>
             
            </td>
        </tr>
        <tr>
            <td>
                Date of Provisional Registration
            </td>
            <td>
             
            </td>
        </tr>
    </tbody>
</table></td>
        </tr>
    </tbody>
</table>
</div>
<h3 style="text-align:center;"><u>SEMESTER PROGRESS REPORT</u></h3>
<p style="text-align:center;">For the of Period Jan 2021 to June 2021</p>

<div class="panel"><h4 class="title1">I. Particulars of Research Scholar:</h4><table style="width:100%;" class="mh">
    <tr>
    <td colspan="2">Name of the Research Scholar : <?php  ?></td>
   </tr>
   <tr>
    <td>Department : <?php  ?></td>
    <td>Contact No. : <?php  ?></td>
   </tr>
   <tr>
    <td>School   : <?php echo ?></td>
    <td>Email ID : <?php echo   ?></td>
   </tr>
    <tr>
    <td>Designation <br> (where applicable the research scholar is working)                           : </td>
    <td><?php echo  ?></td>
   </tr>
    <tr>
    <td>Present Address     :<br> <?php echo   ?> </td>
    <td>Permanent  Address :<br> <?php echo   ?></td>
   </tr>
   
    
  
  
    </table><br></div>
    <div class="panel"><h4 class="title1">II. Particulars of Research Supervisor:</h4><table style="width:100%;" class="mh">
    <tr>
    <td colspan="2">Name of the Research Supervisor  : <?php echo   ?></td>
   </tr>
   <tr>
    <td colspan="2">Recognition ID        : <?php echo   ?></td>
   </tr>
   <tr>
    <td>Department : <?php echo   ?></td>
    <td>Contact No. : <?php echo   ?></td>
   </tr>
   <tr>
    <td>School   : <?php echo   ?></td>
    <td>Email ID : <?php echo   ?></td>
   </tr>
    </table><br></div>
    
        <div class="panel"><h4 class="title1">III. Details of Research Progress:</h4><table style="width:100%;" class="mh">
    <tr>
    <td>Area of Research   : <?php echo   ?></td>
   </tr>
   <tr>
    <td>Title of the Research work         : <?php echo   ?></td>
   </tr>
   <tr>
    <td>A typed report on the work carried out during the report period       :<br> <br> <?php echo   ?></td>
   </tr>
   
   
    </table>
    </div>
    <div class="panel">
    <table style="width:100%;" class="mh">
    <tr>
    <td>Course works completed   : </td>
    <td><?php echo   ?></td>
    <td>Number of course works completed</td>
    <td><?php echo   ?></td>
   </tr>
   <tr>
    <td colspan="2">Participated in Seminar /<br> Workshop / Conference         : </td>
    <td colspan="2"><?php echo   ?></td>
   </tr>
   <tr>
    <td>Research articles published        :</td>
    <td> <?php echo   ?></td>
     <td>Number of Research articles published        :</td>
    <td> <?php echo   ?></td>
   </tr>
   
   <tr>
    <td colspan="2">Awards / recognition, if any        :</td>
    <td colspan="2"><?php echo   ?></td>
   </tr>
   
   <tr>
    <td colspan="2">Collaborative Activities with <br>Other Institutions / Research Establishments<br> / Industry, if any        :</td>
    <td colspan="2"><?php echo   ?></td>
   </tr>
   
   
    </table><br>
    </div>
    <div class="panel">
        <p>IV. Date and Online Transaction number of Payment of current semester fees:<br></p> <b><?php echo  ?> & <?php echo   ?></b>
        <p>VI. DECLARATION</p>
        <p style="text-align:justify;"> I <b><?php echo   ?></b> pursuing  Ph.D. Programme in Vel Tech Rangarajan 
Dr. Sagunthala R&D Institute of Science and Technology,

<?php 
$scholarpost;
$scholarinst;
if{
    
    echo "as a Part Time scholar, I am working as  <b>$scholarpost</b> at <b>$scholarinst</b>
and I am still working in the same Institution / Industry as mentioned in my application form.
";
}else {
    echo "as a Full - Time scholar, I state that I am not employed anywhere.";
}
?>
<p><b>Note:</b> The change of working place has to be intimated to the office of the Dean (Research Studies) within a month and submit the NoC from the new employer.</p>
<p>I hereby certify that the information furnished above is true and correct to the best of my knowledge.</p>
<p>Date     : <?php echo  ?>
            
</p>
<p>Place    : Avadi, Chennai </p>


<p style="text-align:right;"><img src="https://apps.veltech.edu.in/sem-reg/uploads/<?php echo ?>" alt="user" class="img-thumbnail img-responsive" width="150" height="80" />  <br>Signature of the Research Scholar </p>
<table style="width:100%;">
    
        <tr>
     <td style="border: 1px solid #fff;height:10px;">
         </td></tr></table>

    <table style="width:100%;" class="mh">
    <tr>
    <td colspan="3">REMARKS OF THE RESEARCH SUPERVISOR</td>
   </tr>
    <tr>
    <td style="width:20px;">i)</td>
    <td>Attendance</td>
    <td><?php echo ?></td>
   </tr>
   <tr>
    <td>ii)</td>
    <td>Work Progress</td>
    <td><?php echo   ?></td>
   </tr>
   <tr>
    <td>iii)</td>
    <td>Expected time of completion</td>
    <td><?php echo   ?></td>
   </tr>
   <tr>
       <td colspan="3">Certify that the research articles published / to be published in journals are the original work of the research scholar. Further, no part of the research work is part of any other thesis or research articles already published by others. I fully aware that the act of plagiarism will lead to cancel of registration and other disciplinary actions as per Rules and Regulations of Institution.<p style="text-align:right;"><img src="<?php echo base_url(); ?>uploads/phdsupervisor_signimage/<?php echo ?>.jpg" alt="user" class="img-thumbnail img-responsive" width="150" height="80" /><br><?php echo ?>  <br>Research Supervisor</p></td>
   </tr>
  
    </table><br>
    </div>
    
 <div class="panel">
  <table style="width:100%;">
    <tbody>
        <tr>
     <td style="border: 1px solid #fff;height:80px;">
         <p style="text-align:center";> <br>Head of the Department</p>
     </td>
      <td style="border: 1px solid #fff;">
         <p style="text-align:center;">
          <br>Dean of the School </p>
     </td>
      <td style="border: 1px solid #fff;">
         <p style="text-align:center;"> <br>Dean (Research Studies)</p>
     </td>
           
        </tr>
    </tbody>
  </table>
    </div>
    </body>
    </html>';


//index.php
//include autoloader

require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$dompdf = new Dompdf();



$dompdf->loadHtml($html);

//set page size and orientation

$dompdf->setPaper('A4', 'landscape');

//Render the HTML as PDF

$dompdf->render();

//Get output of generated pdf in Browser

$dompdf->stream("Webslesson", array("Attachment"=>0));
//1  = Download
//0 = Preview


?>
