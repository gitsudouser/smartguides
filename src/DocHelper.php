<?php
class DocHelper
{
    private $documents_count = 0;
    public function AddDocument()
    {
        $this->documents_count++;
    }
    public function Count()
    {
        return $this->documents_count;
    }
    public function RemoveDocument()
    {
        if($this->documents_count==0) {
            throw new Exception("Documents count couldnot be less then zero");
        }

        $this->documents_count--;
    }
}