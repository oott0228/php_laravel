<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Person;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    public function testHello()
    {
        // $this->assertTrue(true);

        // $arr = [];
        // $this->assertEmpty($arr);

        // $msg = "Hello";
        // $this->assertEquals('Hello', $msg);

        // $n = random_int(0,100);
        // $this->assertLessThan(100, $n);



        // $this->assertTrue(True);

        // $response = $this->get('/');
        // $response->assertStatus(200);

        // $response = $this->get('/hello');
        // $response->assertStatus(302);

        // /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        // $user = User::factory()->create();
        // $response = $this->actingAs($user)->get('/hello');
        // $response->assertStatus(200);

        // $response = $this->get('/no_route');
        // $response->assertStatus(404);


        User::factory()->create(
        [
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);

        User::factory(10)->create();

        $this->assertDatabaseHas('users',[
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC'
        ]);


        Person::factory()->create(
                [
                    'name' => 'XXX',
                    'mail' => 'YYY@ZZZ.COM',
                    'age' => '123',
                ]
            );

        Person::factory(10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.COM',
            'age' => '123'
        ]);
    }
}
