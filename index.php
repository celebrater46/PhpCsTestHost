<?php


include "class.php";
$main = new _main_;
if(isset($_POST['type'])) $Type = $_POST['type'];
if(isset($_POST['data'])) $Data = $_POST['data'];

if(isset($Type))
{
    switch (strip_tags($Type))
    {
        case "t_insert_data": $main->InsertData($Data); break;
        case "t_get_data": $main->GetData(); break;
    }
}
