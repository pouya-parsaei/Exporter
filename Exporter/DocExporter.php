<?php
namespace Exporter;

class DocExporter extends Exporter
{
    protected $format = '.doc';
    public  function export()
    {
        $file_name = "doc-file-" . rand(100, 999) . $this->format;
        $file_path = __DIR__ . "/files/{$file_name}";
        file_put_contents($file_path, "{$this->data['title']}\n{$this->data['content']}");
        echo "$file_name successfully created!\n";
    }
}


