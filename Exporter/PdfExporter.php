<?php
namespace Exporter;


use Dompdf\Dompdf;

class PdfExporter extends Exporter{
    protected $format = '.pdf';

    public function export()
    {
        $file_name = "pdf-file-" . rand(100, 999) . $this->format;
        $file_path = __DIR__ . "/files/{$file_name}";
        $dompdf = new Dompdf();
        $dompdf->loadHtml("{$this->data['title']}\n{$this->data['content']}");
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents($file_path, $output);
        echo "{$file_name} successfully created!\n";
    }
}
 




