<?php

namespace Section;

use App\Models\User;
use Tests\TestCase;

class SectionTest extends TestCase
{
    public function test_section_no_visitors_allowed()
    {
        $this->assertFalse(auth()->check());

        $this->get(route('section.index'))->assertRedirect(route('login'));
    }

    public function test_section_screen_can_be_rendered()
    {
        $this->assertFalse(auth()->check());

        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get(route('section.index'));

        $this->assertTrue(auth()->check());

        $response->assertStatus(200);
    }

    public function test_section_update_position_validation()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->patch(route('section.update.position'))->assertStatus(302);

        $this->actingAs($user)
            ->patch(route('section.update.position'), [0 => [
                'id' => 1,
                'position' => null
            ]])->assertSessionHasErrors(['0.position']);

        $this->actingAs($user)
            ->patch(route('section.update.position'), [0 => [
                'id' => 0,
                'position' => 1
            ]])->assertSessionHasErrors(['0.id']);

        $this->actingAs($user)
            ->patch(route('section.update.position'), [0 => [
                'id' => 1,
                'position' => 1
            ]])->assertSessionHasNoErrors();

    }
}
