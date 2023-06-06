<?php

<?php

namespace Database\Factories;

//use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // if you want to use another model uncomment lines 
        $default = [
            'user_id' => User::all()->random()->id,
            'review' => fake()->paragraphs(1, true),
            'rating' => random_int(1, 5),
            'status' => random_int(1, 5),
        ];

        $models = [
            $user = [
                ...$default,
                'model_type' => User::class,
                'model_id' => User::all()->random()->id,
            ],
//            $order = [
//                ...$default,
//                'model_type' => Order::class,
//                'model_id' => Order::all()->random()->id,
//            ],
        ];

        return $models[0];  // users
        //return $models[array_rand($models)];  // users and orders
    }
}
