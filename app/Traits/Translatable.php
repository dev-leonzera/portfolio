<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait Translatable
{
    /**
     * Get the translated version of an attribute.
     *
     * @param string $attribute
     * @return mixed
     */
    public function t(string $attribute)
    {
        $locale = App::getLocale();
        
        if ($locale !== 'pt') {
            $translatedAttribute = "{$attribute}_{$locale}";
            if (!empty($this->{$translatedAttribute})) {
                return $this->{$translatedAttribute};
            }
        }
        
        return $this->{$attribute};
    }
}
