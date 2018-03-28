<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

class CortexAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('admin')->to('list', config('rinvex.attributes.models.attribute'));
        Bouncer::allow('admin')->to('import', config('rinvex.attributes.models.attribute'));
        Bouncer::allow('admin')->to('create', config('rinvex.attributes.models.attribute'));
        Bouncer::allow('admin')->to('update', config('rinvex.attributes.models.attribute'));
        Bouncer::allow('admin')->to('delete', config('rinvex.attributes.models.attribute'));
        Bouncer::allow('admin')->to('audit', config('rinvex.attributes.models.attribute'));
    }
}
