<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentReadingCount extends Model
{
    //
    protected $guarded = [];



    public static function Read($model_id, $model)
    {
        $find_attribute = [
            'model_id' => $model_id,
            'model' => $model,
            'reading_date' => date('Y-m-d'),
            'ip_address' => request()->ip(),
        ];

        try {
            // Find or create the record
            $contentReadingCount = ContentReadingCount::firstOrCreate($find_attribute);

            // Increment the reading_count
            $contentReadingCount->increment('reading_count');
        }
        catch (\Exception $e) {
//            dd($e->getMessage());
        }
    }
}
