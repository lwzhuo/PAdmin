<?php

class TableContainer
{
    private $head_array;//标题数组
    private $data_array;//数据数组
    private $html;

    function __construct($head_array,$data_array){
        $this->head_array = $head_array;
        $this->data_array = $data_array;
        $this->html = "";
    }

    function addhead($headrow){
        $tr_start="<tr>";
        $tr_end="</tr>";
        $th_start="<th>";
        $th_end="</th>";

        $this->html.=$tr_start;
        foreach($headrow as $data){
            $this->html.=$th_start;
            $this->html.=$data;
            $this->html.=$th_end;
        }
        $this->html.=$tr_end;
    }

    function addtr($data_array){
        $tr_start="<tr>";
        $tr_end="</tr>";
        $td_start="<td>";
        $td_end="</td>";

        $this->html.=$tr_start;
        foreach($data_array as $data){
            $this->html.=$td_start;
            $this->html.=$data;
            $this->html.=$td_end;
        }
        $this->html.=$tr_end;
    }

    function makeTable(){
        $this->html .= "<table>";
        $this->addhead($this->head_array);
        for($i=0;$i<count($this->data_array);$i++)
            $this->addtr($this->data_array[$i]);
        $this->html .= "</table>";
        return $this->html;
    }
}