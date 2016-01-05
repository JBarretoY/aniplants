<?php namespace App\Http\ViewComposers;
 
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Modules\Media\Repositories\FileRepository;

 
class ThumbnailComposer 
{
    
    protected $file;

    public function __construct(FileRepository $file)
    {
        $this->file = $file;
    }

    public function compose(View $view)
    {
        
        $viewdata= $view->getData();
        
        $thumbnail = $this->file->findFileByZoneForEntity('thumbnail', $viewdata['post']);

        $view->with('thumbnail', $thumbnail);
    }
 
}