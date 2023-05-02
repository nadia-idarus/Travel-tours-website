<?php
   if(isset($_POST['submit'])){
      require_once 'Classes/PHPExcel.php';
      $objPHPExcel = new PHPExcel();
      $objPHPExcel->getProperties()->setCreator("Your Name")
                 ->setLastModifiedBy("Your Name")
                 ->setTitle("Form Data")
                 ->setSubject("Form Data")
                 ->setDescription("Data from form")
                 ->setKeywords("form data");
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'Name');
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'Email');
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'Phone');

      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];

      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', $name);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B2', $email);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C2', $phone);

      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('form_data.xlsx');
   }
?>