<?php

namespace App\Listeners;

// use App\Events\article.created;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ArticlesEventListener
{
    public function handle(\App\Events\ArticleCreated $event)
    {
        if($event->action === 'created'){
            \Log::info(sprintf(
                '새로운 포럼 글이 등록되었습니다.: %s',
                $event->article->title
            ));
        }
    }
}
