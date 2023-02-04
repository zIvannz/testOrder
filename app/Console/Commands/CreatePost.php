<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;


class CreatePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a post';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        $user_id = $this->ask('User id');
        $title = $this->ask('Title');
        $quote = $this->ask('Qoute');
        $validator = Validator::make([
            'user_id' => $user_id,
            'title' => $title,
            'quote' => $quote,
        ], [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'title' => ['required', 'max:50'],
            'quote' => ['required', 'unique:posts,quote', 'max:500'],
        ]);
        if ($validator->fails()) {
            $this->info('Post not created. See error messages below:');
        
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return 1;
        }
        $post = new Post();
        $post->user_id = $user_id;
        $post->title = $title;
        $post->quote = $quote;
        $post->save();
        $this->info('Post successfully created');
        return "Command::SUCCESS";
    }
}
