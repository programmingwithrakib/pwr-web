<?php

namespace App;

use App\Mail\KitchenMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Container\Container;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;

class Helper
{
    public static function GenerateFileName($name, $extension): string
    {
        return $name."_".Carbon::now()->format('Y_m_d_H_i').".".$extension;
    }

    public static function GetImage($path){
        return env("APP_URL").$path;
    }


    public static function FileUpload($request_key, $path){
        $uploadPath = env("APP_ENV") == "local" ? public_path($path) : base_path($path);
        if ($file = request()->file($request_key)){
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);

            // Save the file path in the database
            $photoPath = request()->root()."/$path/" . $filename;
            return $photoPath;
        }
        else{
            return false;
        }
    }



    public static function RemoveFile($path){
        if($path){
            try{
                $path = explode(request()->root(), $path);
                $path = $path[1];
            }
            catch(\Exception $e){
                $path = null;
            }
        }

        $filePath = env("APP_ENV") == "local" ? public_path($path) : base_path($path);

        // Delete the file from the server
        if ($path && file_exists($filePath)) {
            unlink($filePath);
        }

    }

    static function MakeNameToShort($name) {
        // Split the name into words
        $words = explode(' ', $name);

        // Extract the first letter of the first two words
        $initials = strtoupper(substr($words[0], 0, 1)) . strtoupper(substr($words[1], 0, 1));

        return $initials;
    }



}

