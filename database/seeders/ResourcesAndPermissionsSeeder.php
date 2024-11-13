<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;

class ResourcesAndPermissionsSeeder extends Seeder
{
    public function run()
    {

        /**Vehicles */
        $resource = Resource::create(['name' => 'Veículos']);

        $resource->permissions()->create([
            'name' => 'Listar',
            'slug' => 'vehicles.index'
        ]);

        $resource->permissions()->create([
            'name' => 'Ver',
            'slug' => 'vehicles.show'
        ]);

        $resource->permissions()->create([
            'name' => 'Criar',
            'slug' => 'vehicles.store'
        ]);

        $resource->permissions()->create([
            'name' => 'Editar',
            'slug' => 'vehicles.update'
        ]);

        $resource->permissions()->create([
            'name' => 'Excluir',
            'slug' => 'vehicles.destroy'
        ]);

        /**Brands */
        $resource = Resource::create(['name' => 'Marcas']);

        $resource->permissions()->create([
            'name' => 'Listar',
            'slug' => 'brands.index'
        ]);

        $resource->permissions()->create([
            'name' => 'Ver',
            'slug' => 'brands.show'
        ]);

        $resource->permissions()->create([
            'name' => 'Criar',
            'slug' => 'brands.store'
        ]);

        $resource->permissions()->create([
            'name' => 'Editar',
            'slug' => 'brands.update'
        ]);

        $resource->permissions()->create([
            'name' => 'Excluir',
            'slug' => 'brands.destroy'
        ]);

        /**Catgories */
        $resource = Resource::create(['name' => 'Categorias']);

        $resource->permissions()->create([
            'name' => 'Listar',
            'slug' => 'categories.index'
        ]);

        $resource->permissions()->create([
            'name' => 'Ver',
            'slug' => 'categories.show'
        ]);

        $resource->permissions()->create([
            'name' => 'Criar',
            'slug' => 'categories.store'
        ]);

        $resource->permissions()->create([
            'name' => 'Editar',
            'slug' => 'categories.update'
        ]);

        $resource->permissions()->create([
            'name' => 'Excluir',
            'slug' => 'categories.destroy'
        ]);

        /**Models */
        $resource = Resource::create(['name' => 'Modelos']);

        $resource->permissions()->create([
            'name' => 'Listar',
            'slug' => 'models.index'
        ]);

        $resource->permissions()->create([
            'name' => 'Ver',
            'slug' => 'models.show'
        ]);

        $resource->permissions()->create([
            'name' => 'Criar',
            'slug' => 'models.store'
        ]);

        $resource->permissions()->create([
            'name' => 'Editar',
            'slug' => 'models.update'
        ]);

        $resource->permissions()->create([
            'name' => 'Excluir',
            'slug' => 'models.destroy'
        ]);

        /**Roles */
        $resource = Resource::create(['name' => 'Papéis']);

        $resource->permissions()->create([
            'name' => 'Listar',
            'slug' => 'roles.index'
        ]);

        $resource->permissions()->create([
            'name' => 'Ver',
            'slug' => 'roles.show'
        ]);

        $resource->permissions()->create([
            'name' => 'Criar',
            'slug' => 'roles.store'
        ]);

        $resource->permissions()->create([
            'name' => 'Editar',
            'slug' => 'roles.update'
        ]);

        $resource->permissions()->create([
            'name' => 'Excluir',
            'slug' => 'roles.destroy'
        ]);

        /**Users */
        $resource = Resource::create(['name' => 'Usuários']);

        $resource->permissions()->create([
            'name' => 'Listar',
            'slug' => 'users.index'
        ]);

        $resource->permissions()->create([
            'name' => 'Ver',
            'slug' => 'users.show'
        ]);

        $resource->permissions()->create([
            'name' => 'Criar',
            'slug' => 'users.store'
        ]);

        $resource->permissions()->create([
            'name' => 'Editar',
            'slug' => 'users.update'
        ]);

        $resource->permissions()->create([
            'name' => 'Excluir',
            'slug' => 'users.destroy'
        ]);

        /**Manager */
        $resource = Resource::create(['name' => 'Gestão']);

        $resource->permissions()->create([
            'name' => 'Relatórios',
            'slug' => 'reports'
        ]);

        $resource->permissions()->create([
            'name' => 'Configurações',
            'slug' => 'settings'
        ]);
    }
}
