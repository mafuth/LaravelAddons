<?php

namespace Mafuth\LaravelAddons;

class html{
    
    public function minify($data){
        $search = array(
            '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
            '/[^\S ]+\</s',     // strip whitespaces before tags, except space
            '/(\s)+/s',         // shorten multiple whitespace sequences
            '/<!--(.|\s)*?-->/' // Remove HTML comments
        );
        
        $replace = array(
            '>',
            '<',
            '\\1',
            ''
        );
        
        $buffer = preg_replace($search, $replace, $data);
        $buffer = str_replace(array("\r\n", "\r", "\n"), "", $buffer);
        $buffer = str_replace('<img', '<img loading="lazy"', $buffer);
        
        return $buffer;
    }

    public function randomString($length = 3) {
        $randomString = '';
        $characters = implode("", array_merge(range('a', 'z'), range('A', 'Z')));
        for ($i = 0; $i < $length; $i++) $randomString .= $characters[mt_rand(0, strlen($characters) - 1)];
        return $randomString;
    }

    public function encode($output) { 
        $randomFunc = $this->randomString();
        $randomOut = $this->randomString();
        $randomNum = $this->randomString();
        $randomVal = mt_rand(999999, 99999999);
        $return = '
        <!-- HTML Source Code Protection by Mafuth -->
        <script>
        var ' . $randomOut . ' = ""; var ' . $randomNum . ' = [';
        foreach(str_split($output) as $x){ $return .= '"'.base64_encode($this->randomString().(ord($x) + $randomVal).$this->randomString()) . '", '; if (mt_rand(0, 1)){ $return .= "\n"; } }
        $return = rtrim($return, ', ');
        $return .= ']; ' . $randomNum . '.forEach(function ' . $randomFunc . '(value) { ' . $randomOut . ' += String.fromCharCode(parseInt(atob(value).replace(/\D/g,\'\')) - ' . $randomVal . '); } ); document.write(decodeURIComponent(escape(' . $randomOut . '))); </script>'  ;;
        
        return $this->minify($return);
    }
}