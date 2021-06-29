<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tipocurso = array('presencial', 'virtual');
        $estado = array('V', 'E');
        return [
            'nombre' => $this->faker->title(),
            'duracion' => $this->faker->numberBetween(0,10),
            'tipocurso' => $tipocurso[rand(0,1)],
            'estado' => $estado[rand(0,1)],
        ];
    }
}
