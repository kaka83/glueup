<?php namespace Xeor\Duplicate\Classes;

use Cms\Classes\Theme;

class Duplicate
{
    public static function cloneCmsFile($type, $file)
    {
        if (!isset($type) || empty($type) || !isset($file) || empty($file))
            return false;
        $fileName = pathinfo($file, PATHINFO_FILENAME);
        $fileExtension = "." . pathinfo($file, PATHINFO_EXTENSION);
        $originalFileName = $fileName . $fileExtension;
        $newFileName = $fileName . '-' . time() . $fileExtension;
        $activeThemeCode = Theme::getActiveThemeCode();
        $originalFilePath = base_path() . '/themes/' . $activeThemeCode . ($type == 'content' ? '/content/' : '/' . $type . 's/' ) . $file;
        $newFilePath = str_replace($originalFileName, $newFileName, $originalFilePath);
        return copy($originalFilePath, $newFilePath);
    }

    public static function cloneBlogPost($id) {
        if ($post = \RainLab\Blog\Models\Post::find($id)) {
            $clone = $post->replicate();
            $clone->title = 'Clone of ' . $post->title;
            $clone->slug = $post->slug . '-' . time();
            $clone->push();
            $post->load('categories');
            foreach ($post->getRelations() as $relationName => $values) {
                if (count($post->{$relationName})) {
                    $clone->{$relationName}()->sync($values);
                }
            }
            //TODO Clone files
            return true;
        }
        return false;
    }
}