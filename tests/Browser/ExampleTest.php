<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('トップページ');
        });
    }

    public function testUserRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('新規登録')
                    ->type('name', 'テスト用DB5')
                    ->type('email', 'testdb5@example.com')
                    ->type('password', 'password')
                    ->click('#register-btn')
                    ->assertSee('テスト用DB5');
        });
    }

    public function testUserLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('ログイン')
                    ->type('email', 'testdb5@example.com')
                    ->type('password', 'password')
                    ->click('#login-btn')
                    ->assertSee('テスト用DB5');
        });
    }
}