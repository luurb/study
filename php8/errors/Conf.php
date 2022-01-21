<?php

include_once ('ConfException.php');
include_once ('FileException.php');
include_once ('XmlException.php');

class Conf 
{
    private \SimpleXMLElement $xml;
    private \SimpleXMLElement $lastMatch;

    public function __construct(private string $file)
    {
        if (! file_exists($file)) {
            throw new FileException("file '{$file}' does not exist");
        }
        if (! is_object(simplexml_load_file($file, null, LIBXML_NOERROR))) {
            throw new XmlException(libxml_get_last_error());
        }
        $this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);
        $matches = $this->xml->xpath("/conf");
        if (! count($matches)) {
            throw new ConfException("could not find root element: conf");
        }
    }

    public function write(): void 
    {
        if (! file_exists($this->file)) {
            throw new FileException("file '{$this->file}' is not writeable");
        }
        print "{$this->file} is apparenty writeable\n";
        file_put_contents($this->file, $this->xml->asXML());
    }

    public function get(string $str): ?string 
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if (count($matches)) {
            $this->lastMatch = $matches[0];
            return (string) $matches[0];
        }
        return null;
    }

    public function set(string $key, string $value): void 
    {
        if (! is_null($this->get($key))) {
            $this->lastMatch[0] = $value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}