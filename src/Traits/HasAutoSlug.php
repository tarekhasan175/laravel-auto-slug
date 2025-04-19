<?php

namespace Tarekhasan\LaravelAutoSlug\Traits;

use Illuminate\Support\Str;

trait HasAutoSlug
{
          public static function bootHasAutoSlug(): void
          {
                    static::creating(function ($model) {
                              if (empty($model->slug) && isset($model->title)) {
                                        $slug = Str::slug($model->title);
                                        $originalSlug = $slug;
                                        $count = 1;

                                        while ($model::where('slug', $slug)->exists()) {
                                                  $slug = $originalSlug . '-' . $count++;
                                        }

                                        $model->slug = $slug;
                              }
                    });
          }
}
