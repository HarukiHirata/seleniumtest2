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
            $now = date('Y-m-d-H:i:s');
            $browser->visit('/')
                    ->clickLink('新規登録')
                    ->type('name', 'スクショテスト3')
                    ->type('email', 'screenshottest3@example.com')
                    ->type('password', 'password')
                    ->click('#register-btn')
                    ->screenshot($now . '_register');
        });
    }

    public function testUserLogin()
    {
        $this->browse(function (Browser $browser) {
            $now = date('Y-m-d-H:i:s');
            $browser->visit('/')
                    ->clickLink('ログイン')
                    ->type('email', 'screenshottest2@example.com')
                    ->type('password', 'password')
                    ->click('#login-btn')
                    ->screenshot($now . '_login')
                    ->clickLink('ログアウト')
                    ->screenshot($now . '_logout');
        });
    }
}