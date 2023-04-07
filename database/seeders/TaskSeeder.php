<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oTasks= new Task();
        $oTasks->title = 'Ver videos del curso';
        $oTasks->descripcion = 'ver todos los videos de php intermedio';
        $oTasks->due_date = '2023-04-06';
        $oTasks->status = 'Completada';
        $oTasks->save();

        $oTasks2= new Task();
        $oTasks2->title = 'revisar practicas del curso';
        $oTasks2->descripcion = 'realizar las practicas del curso php intermedio';
        $oTasks2->due_date = '2023-04-06';
        $oTasks2->status = 'Completada';
        $oTasks2->save();

        $oTasks3= new Task();
        $oTasks3->title = 'Asignacion del curso';
        $oTasks3->descripcion = 'realizar la asignacion del curso php intermedio';
        $oTasks3->due_date = '2023-04-06';
        $oTasks3->status = 'Pendiente';
        $oTasks3->save();

        $oTasks4= new Task();
        $oTasks4->title = 'Secion sincronica curso';
        $oTasks4->descripcion = 'conectarce a la seccion y depejar dudas del curso php intermedio';
        $oTasks4->due_date = '2023-04-06';
        $oTasks4->status = 'Pendiente';
        $oTasks4->save();

        $oTasks5= new Task();
        $oTasks5->title = 'entregas del curso';
        $oTasks5->descripcion = 'realisar la subida de la asignacion y ejercicios php intermedio';
        $oTasks5->due_date = '2023-04-06';
        $oTasks5->status = 'Pendiente';
        $oTasks5->save();

        Task::factory(50)->create();
    }
}
