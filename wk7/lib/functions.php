<?php

function get($name,$def=''){
   return $_REQUEST[$name] ?? $def;
}

function get_list(){
    return file(LIST_SRC);
}

function get_list_by_id($id)
{
    $lists = get_list();
    $records = text_to_array($lists);
    if(array_key_exists($id,$records)){
        return ['id' => $id, 'name' => $records[$id]];
    }

}

function text_to_array($text_recs){
    $rec = [];
    foreach ($text_recs as $record) {
        list($key,$value) = explode(',',$record);
        $rec[$key] = $value;
    }
    return $rec;
}

function update_list($id,$name){

    
    $lists = get_list();
    foreach ($lists as $key => $list) {
        list($_id,$_name) = explode(",",$list);
        if($_id == $id)
        {
            
            $lists[$key] = "$id,$name" . PHP_EOL;
        }
    }
    return $lists;
}

function save_data($id,$name)
{
   $list_to_save = update_list($id,$name);
   echo file_put_contents(LIST_SRC,implode("",$list_to_save));
}