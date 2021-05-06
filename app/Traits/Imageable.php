<?php


namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait Imageable 

{
    public function imageUrl(string $column = 'image'): ?string
    {
        $imageName = $this->{$column};

        return $imageName === null
            ? "https://ui-avatars.com/api/?name={$column}&color=7F9CF5&background=EBF4FF"
            : Storage::url("{$this->uploadFolder()}/{$imageName}"); 
    }

    public function deleteImage(string $column = 'image'): void
    {
        $imageName = $this->{$column};

        if ($imageName !== null) {
            Storage::delete("{$this->uploadFolder()}/{$imageName}");
        }
    }
}