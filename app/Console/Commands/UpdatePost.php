<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class UpdatePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Post update';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $post_id = $this->ask('Post id');
        $title = $this->ask('Title');
        $quote = $this->ask('Qoute');
        $validator = Validator::make([
            'post_id' => $post_id,
            'title' => $title,
            'quote' => $quote,
        ], [
            'post_id' => ['required', 'numeric', 'exists:posts,id'],
            'title' => ['required', 'max:50'],
            'quote' => ['required', 'unique:posts,quote,' . $post_id, 'max:500'],
        ]);
        if ($validator->fails()) {
            $this->info('Post not created. See error messages below:');
        
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return 1;
        }
        $post = Post::where('id', $post_id)->first();
        if (!empty($post)) {
            $post->title = $title;
            $post->quote = $quote;
            $post->save();
        }
        $this->info('Post successfully updated');
        return Command::SUCCESS;
    }
}
