<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'form';
    protected $fillable = ['nama', 'npm', 'nilai'];

    public static function add($data)
    {
        $id = Form::create([
            'nama' => $data['nama'],
            'npm' => $data['npm'],
            'nilai' => $data['nilai']
        ])?->id;
        return $id;
    }
}
