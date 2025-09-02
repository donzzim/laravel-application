<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listing';

    // Lista de campos que NÃO podem ser preenchidos em massa (o que esta dentro do array).
    protected $guarded = [];

    // protected $fillable = [
    //     'employer_id',
    //     'title',
    //     'salary'
    // ];

    // Lista de campos que podem ser preenchidos em massa (mass assignment).
    // Só os campos listados aqui podem ser atribuídos via métodos como create() ou update().

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}
