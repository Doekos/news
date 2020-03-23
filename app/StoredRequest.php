<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class StoredRequest extends Model
{

  protected $table = 'stored_requests';

  protected $fillable = [
      'id', 'user_id', 'country', 'category', 'source', 'keyword', 'results'
  ];

  public function users()
  {
    return belongsToMany(User::class, ['user_id', StoredRequest::class]);
  }
}
