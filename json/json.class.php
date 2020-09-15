<?php

/*
class Jason{

    private static $workingFile, $path, $file;

    // Method for setting other JASON file which we are going to use

    public static function f(string $workingFile="", string $path=""){
        // Checking what JASON file we will use
        if($workingFile != ""){

            self::$workingFile = $workingFile;
        }else{

            self::$workingFile = "settings.jason";
        }

        // Checking wath path to the JASON file we will use
        if($path != ""){

            self::$path = $path;
        }else{

            self::$path = "/halidhajdarevic/jason/";
        }

    }

    // Mathod for combining path with file
    public static function c(){

        self::$file = $path . $workingFile;
    }
}
*/

class Json{

    private static $workingFile = "settings.json";
    private static $path = "";
    private static $file;
    private static $fileArray;
    private static $pathArray;

    public static function get(string $option = "all", string $file = ""){
        if($file != ""){

            self::$file = $file;
        }else{

            self::$file = self::$path . self::$workingFile;
        }

        $data = json_decode(file_get_contents(self::$file), true);
        if($option === "all"){

            if(isset($data['data']) && !empty($data['data'])){

                return $data['data'];

            }else{

                return false;
            }

        }else{

            if(isset($data['data'][$option]) && !empty($data['data'][$option])){

                return $data['data'][$option];

            }else{

                return false;
            }

        }
    }


    public static function set(string $option, string $value, string $file = ""){

        if($file != ""){

            self::$file = $file;
        }else{

            self::$file = self::$path . self::$workingFile;
        }

        if(file_exists(self::$file)){

            $data = json_decode(file_get_contents(self::$file), true);

        }else{

            file_put_contents(self::$file, '{"data":{}}');
        }

        $data['data'][(string)$option] = (string)$value;
        if(file_put_contents(self::$file, json_encode($data))){

            return true;
        }

        return false;
    }

    public static function delete(string $option, string $file = ""){

        if($file != ""){

            self::$file = $file;
            self::$fileArray = explode('.', $file);
            self::$pathArray = explode('/', self::$fileArray[0]);

            self::$workingFile = array_pop(self::$pathArray) . "." . self::$fileArray[1];
            self::$path = implode('/', self::$pathArray) . "/";


        }else{

            self::$file = self::$path . self::$workingFile;
        }

        $data = json_decode(file_get_contents(self::$file), true);

        $datetime = date("h-i-s-d-m-Y");

        if(file_put_contents(self::$path . "_backups/" . $datetime . "." . self::$workingFile, json_encode($data))){

            if($option == "all"){

                unset($data['data']);

            }else{

                unset($data['data'][(string)$option]);
            }

            file_put_contents(self::$file, json_encode($data));
            return $data;
        }

        return self::$path;

    }

}

print(Json::delete("username", "/putanja/bla/bla/nesto.jason"));

?>