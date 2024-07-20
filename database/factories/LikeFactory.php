<?php
namespace Database\Factories;
use App\Enums\EnumVoteType;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::inRandomOrder()->first(),
            'comment_id'=> Comment::inRandomOrder()->first(),
            'like' => collect(EnumVoteType::getValues())->random()
        ];
    }
}
