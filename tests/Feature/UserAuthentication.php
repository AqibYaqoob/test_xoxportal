<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserAuthentication extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function getVoyagerLoginPage(){
        $res= $this->get('/admin/login');
        $res->assertStatus(200);
    }

    /** @test */

    public  function onlyLoggedInUserCanSeeDashboardPage(){
        $res= $this->get('/admin')
            ->assertRedirect('/admin/login');
    }

    /** @test */

    public  function onlyAuthenticateUserCanSeeUsersPage(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/users')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUserCanSeeRolesPage(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/roles')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUserCanSeeMediaPage(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/media')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUserCanSeeBlogPostpage(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/blog_posts')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUserCanSeeBlogCategorypage(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('admin/categories')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeePosts(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/posts')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeePages(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/pages')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeBoards(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/bods')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeTermsAndConditions(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/terms-condition-categories')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeFaqCategories(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/faq-categories')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeFaqDetails(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/faq-details')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeCategories(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/categories')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeToolsMenuBuilder(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/menus')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeToolsDatabase(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/database')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeToolsBread(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/bread')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeToolsHooks(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/hooks')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeSettings(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/settings')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeePlans(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/plans')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeContactTypes(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/contact-types')
            ->assertOk();
    }

    /** @test */

    public  function onlyAuthenticateUsersCanSeeContactDetails(){
        $this->actingAs(factory(User::class)->create());
        $res=$this->get('/admin/contact-details')
            ->assertOk();
    }
}
