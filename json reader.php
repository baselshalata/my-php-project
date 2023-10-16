<?php
class JsonReader
{
    private $data;
    public function __construct($filename)
    {
        $this->data = json_decode(file_get_contents($filename), true);
    }
    public function search($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        } else {
            return null;
        }
    }
}
$reader = new JsonReader('data.json');
$result = $reader->search('name');
if ($result) {
    echo "The name is $result.";
} else {
    echo "The name was not found.";
}
