<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //ชื่อตารางในฐานข้อมูล
    protected $table = "staffs";
//ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["name","age","salary","phone","action"];    
//Primary Key
 	protected $primaryKey = "id";
}
