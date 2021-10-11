function print_o($o,$str,$initial=true) {
    if($initial) {
        $o = (object)array("key"=>gettype($o),"val"=>$o);
    }
    if(gettype($o->val)=="object") {
        $str .= "<div>";
        if(!$initial) $str .= "<strong>{$o->key}</strong>: ";
        $str .= "{<div style='padding-left:1em;'>";
        foreach($o->val as $k=>$v){
            $str = print_o((object)array("key"=>$k,"val"=>$v),$str,false);
        }
        $str .= "</div>";
        $str .= "}</div>";
    }
    elseif(gettype($o->val)=="array") {
        $str .= "<div>";
        if(!$initial) $str .= "<strong>{$o->key}</strong>: ";
        if(count($o->val)) {
            $str .= "[<div style='padding-left:1em;'>";
            foreach($o->val as $k=>$v){
                $str = print_o((object)array("key"=>$k,"val"=>$v),$str,false);
            }
            $str .= "</div>]";
        } else {
            $str .= "[ 0 ]";
        }
        $str .= "</div>";
    }
    elseif(gettype($o->val)=="string") {
        $str .= "<div><strong>{$o->key}</strong>: <em style='color:green;'>\"{$o->val}\"</em></div>\n";
    } elseif(gettype($o->val)=="integer" || gettype($o->val)=="double" || gettype($o->val)=="float") {
        $str .= "<div><strong>{$o->key}</strong>: <span style='color:blue;'>{$o->val}</span></div>\n";
    } else {
        $str .= "<div><strong>{$o->key}</strong>: {$o->val} (".gettype($o->val).")</div>\n";
    }
     return $str;
}
