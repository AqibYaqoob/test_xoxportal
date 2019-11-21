<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

//        public function testAvatarUpload()
//    {
//        Storage::fake('testimage');
//
//        $file = UploadedFile::fake()->image('testimage.jpg');
//
//        $response = $this->json('POST', '/testimage', [
//            'testimage' => $file,
//        ]);
//
//        // Assert the file was stored...
//        Storage::disk('testimage')->assertExists($file->hashName());
//
//        // Assert a file does not exist...
//        Storage::disk('testimage')->assertMissing('missing.jpg');
//    }


}
