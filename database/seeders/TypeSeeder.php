<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // cancello tutti i dati della tabella types
        Schema::disableForeignKeyConstraints();

        Type::truncate();
        
        Schema::enableForeignKeyConstraints();

        $types = ['Low_complexity', 'Mid_complexity', 'High_complexity'];

        foreach( $types as $type ) {
            $new_type = new Type();

            $new_type->complexity = $type;
            $new_type->slug = Str::slug($new_type->complexity);

            $new_type->save();
        }
    }
}
