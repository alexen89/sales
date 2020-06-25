<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\UnitsController
 */
class UnitsControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $units = factory(Units::class, 3)->create();

        $response = $this->get(route('unit.index'));

        $response->assertOk();
        $response->assertViewIs('units.index');
        $response->assertViewHas('units');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\UnitsController::class,
            'store',
            \App\Http\Requests\UnitsStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('unit.store'), [
            'name' => $name,
        ]);

        $units = Unit::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $units);
        $unit = $units->first();

        $response->assertRedirect(route('unit.index'));
        $response->assertSessionHas('unit.name', $unit->name);
    }
}
