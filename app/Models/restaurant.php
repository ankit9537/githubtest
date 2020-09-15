<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class restaurant extends Model
{
    use HasFactory;
    protected $table='restaurants';
    public $timestamps = false;

    public static function getrestaurant(){
        $records=DB::table('restaurants')->select('id','name','address','foods','type','roomtype','image')->get()->toArray();
        return $records;
    }
}
