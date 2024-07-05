<?php
$file = 'path/to/your/file.pdf'; // حدد مسار الملف هنا
$filename = 'file.pdf'; // اسم الملف الذي سيتم تنزيله
<a class="downloadBtn" href="download.php" download>Download PDF</a>

header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
readfile($file);
?>
